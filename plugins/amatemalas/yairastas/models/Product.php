<?php namespace Amatemalas\Yairastas\Models;

use Model;

/**
 * Model
 */
class Product extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string table in the database used by the model.
     */
    public $table = 'amatemalas_yairastas_products';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}
