<?php namespace Amatemalas\MultiBlocks\Models;

use Cms\Classes\Theme;
use Illuminate\Support\Facades\Schema;
use Model;
use October\Rain\Database\Traits\Validation;
use October\Rain\Exception\ValidationException;
use System\Models\File;

/**
 * Model
 */
class Type extends Model
{
    use Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'amatemalas_multiblocks_types';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required|unique:amatemalas_multiblocks_types',
        'file_name' => 'required|unique:amatemalas_multiblocks_types'
    ];

    protected $jsonable = ['visible_fields'];

    public $attachOne = [
        'preview' => File::class,
    ];

    /**
     * Relation between Type - Blocks 1:N
     */
    public $hasMany = [
        'blocks' => Block::class
    ];

    /**
     * Checks if there is not a partial with the same filename
     * as the inserted and creates one before the model creation
     *
     * @throws ValidationException
     * @throws Exception
     */
    public function beforeCreate()
    {
        $filename = $this->file_name;
        $activeTheme = Theme::getActiveThemeCode();

        if (!file_exists("themes/$activeTheme/partials/blocks")) {
            mkdir("themes/$activeTheme/partials/blocks");
        }

        if (file_exists("themes/$activeTheme/partials/blocks/$filename.htm")) {
            throw new ValidationException(['file_name' => 'Error creating the file. This filename is already on use.']);
        }

        try {
            $handle = fopen("themes/$activeTheme/partials/blocks/$filename.htm",'w+');
            fwrite($handle, "<p>{{ block.title }}</p>\n<p>{{ block.subtitle|raw }}</p>\n<p>{{ block.description|raw }}</p>");
            fclose($handle);
        } catch (\Exception $e) {
            throw new \Exception($e);
        }
    }

    /**
     * Checks if there is a matching partial with the
     * model filename and then deletes that partial just
     * before the model deletion
     *
     * @throws Exception
     */
    public function beforeDelete()
    {
        $filename = $this->file_name;
        $activeTheme = Theme::getActiveThemeCode();

        try {
            if (file_exists("themes/$activeTheme/partials/blocks/$filename.htm")) {
                unlink("themes/$activeTheme/partials/blocks/$filename.htm");
            }
        } catch (\Exception $e) {
            throw new \Exception($e);
        }
    }

    /**
     * Listens for the code editor field and then updates the content
     * of the corresponding partial created on the create method
     *
     * @throws Exception
     */
//    public function beforeUpdate()
//    {
//        $filename = $this->file_name;
//        $activeTheme = Theme::getActiveThemeCode();
//
//        if (file_exists("themes/$activeTheme/partials/blocks/$filename.htm")) {
//            try {
//                $handle = fopen("themes/$activeTheme/partials/blocks/$filename.htm",'w+');
//                fwrite($handle, $this->template);
//                fclose($handle);
//            } catch (\Exception $e) {
//                throw new \Exception($e);
//            }
//        }
//    }

    /**
     * Method that gets a list of block fields that can be
     * shown in the backend block form that depends of the
     * block type
     *
     * @return Array
     */
    public function getVisibleFieldsOptions()
    {
        $result = [];
        $attributes = [];
        $blockInstance = new Block;
        $fields = Schema::getColumnListing($blockInstance->getTable());
        $singleAttachments = array_keys($blockInstance->attachOne);
        $multipleAttachments = array_keys($blockInstance->attachMany);

        foreach ($fields as $field) {
            if ($field != 'id' && $field != 'name'
            && $field != 'pages' && $field != 'type_id'
            && $field != 'created_at' && $field != 'updated_at'
            && $field != 'sort_order') {
                $attributes[] = $field;
            }
        }

        $attributes = array_merge($attributes, $singleAttachments, $multipleAttachments);

        foreach($attributes as $attribute) {
            $result[$attribute] = $attribute;
        }

        return $result;
    }
}
