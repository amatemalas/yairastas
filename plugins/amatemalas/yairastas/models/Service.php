<?php namespace Amatemalas\Yairastas\Models;

use Model;

/**
 * Model
 */
class Service extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string table in the database used by the model.
     */
    public $table = 'amatemalas_yairastas_services';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    /**
     * Relations & Attachments
     */
    public $attachOne = [
        'image' => File::class,
    ];

}
