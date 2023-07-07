<?php namespace Amatemalas\MultiBlocks\Models;

use Model;
use Cms\Classes\Page;
use October\Rain\Database\Traits\Validation;
use System\Models\File;
use Amatemalas\MultiBlocks\Models\Page as PageExtension;

/**
 * Model
 */
class Block extends Model
{
    use Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'amatemalas_multiblocks_blocks';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required|unique:amatemalas_multiblocks_blocks',
        'type_id' => 'required',
        // 'sort_order' => 'required',
    ];

    protected $casts = [
        'pages' => 'array'
    ];

    public $jsonable = [
        'features'
    ];

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = [
        'name',
        'title',
        'subtitle',
        'description',
        'reference_link',
        'features'
    ];

    public $attachOne = [
        'image' => File::class,
        'icon' => File::class,
    ];

    public $attachMany = [
        'images' => File::class,
    ];

    /**
     * Relation between Blocks - Type N:1
     */
    public $belongsTo = [
        'type' => Type::class,
    ];

    public $belongsToMany = [
        'pages' => [
            PageExtension::class,
            'key' => 'block_id',
            'otherKey' => 'page_id',
            'table' => 'amatemalas_multiblocks_blocks_pages',
            'pivot' => ['sort_order'],
            'order' => 'sort_order asc'
        ],
    ];

    /**
     * Charges into an array a list of pages
     * where you could add a block
     *
     * @return Array
     */
    public function getPagesOptions()
    {
        $result = [];
        $pages = Page::sortBy('baseFileName')->all();

        foreach ($pages as $fileName => $page) {
            $result[$page->baseFileName] = $page->title . ' (' . $page->baseFileName . ')';
        }

        return $result;
    }

    /**
     * Query for filtering multiple pages values
     *
     * @var $query
     * @var $filtered
     */
    public function scopeFilterPages($query, $filtered)
    {
        foreach($filtered as $filter) {
            $query = $query->whereHas('pages', function ($q) use($filter) {
                $q->where('filename', $filter);
            });
        }
    }

    /**
     * Method to control the visible fields for the backend model form
     *
     * @var $fields
     * @var $context
     * @return void
     */
    public function filterFields($fields, $context = null)
    {
        if (Type::first()) {
            foreach ($fields as $field) {
                if ($field->fieldName != 'name' && $field->fieldName != 'type'
                && $field->fieldName != 'pages' && $field->fieldName != 'sort_order') {
                    $field->dependsOn = 'type';

                    $visibleFields = Type::find($fields->type->value)->visible_fields ??
                        array_merge(Type::first()->visible_fields, ['feature_title', 'feature_subtitle', 'feature_icon']);

                    if(in_array($field->fieldName, $visibleFields) && is_array($field->value)) {
                        foreach($field->value as $value) {
                            $visibleFields[] = $value;
                        }
                    }

                    $field->hidden = 1;

                    if (in_array($field->fieldName, $visibleFields)) {
                        $field->hidden = 0;
                    }
                }
            }
        }
    }
}
