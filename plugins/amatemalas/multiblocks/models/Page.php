<?php namespace Amatemalas\MultiBlocks\Models;

use Model;

/**
 * Model
 */
class Page extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    public $exists = true;

    protected $guarded = [];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'amatemalas_multiblocks_pages';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        "blocks" => [
            Block::class,
            'key' => 'page_id',
            'otherKey' => 'block_id',
            'table' => 'amatemalas_multiblocks_blocks_pages',
            'pivot' => ['sort_order'],
            'order' => 'sort_order'
        ]
    ];
}
