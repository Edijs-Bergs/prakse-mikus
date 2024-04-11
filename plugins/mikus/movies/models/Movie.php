<?php namespace Mikus\Movies\Models;

use Model;

/**
 * Model
 */
class Movie extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var bool timestamps are disabled.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'mikus_movies_';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    protected $jsonable = ['actors'];

    /* Relations */

    public $belongsToMany =[
        'genres' =>[
            'Mikus\Movies\Models\Genre',
            'table' => 'mikus_movies_movies_genres',
            'order' => 'genre_title'
        ]
    ];

    public $attachOne = [

        'poster' => 'System\Models\File'
    ];

    public $attachMany = [

        'movie_gallery' => 'System\Models\File'
    ];
}
