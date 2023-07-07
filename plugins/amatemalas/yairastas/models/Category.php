<?php namespace Amatemalas\Yairastas\Models;

use Model;
use System\Models\File;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string table in the database used by the model.
     */
    public $table = 'amatemalas_yairastas_categories';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    /**
     * Relations & Attachments
     */
    public $belongsToMany = [
        'products' => [
            Product::class,
                'table' => 'amatemalas_yairastas_products_categories',
        ],
    ];

    public $attachOne = [
        'image' => File::class,
    ];

    public $attachMany = [
        'images' => File::class,
    ];
}
