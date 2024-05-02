<?php namespace Mikus\Movies\Models;

use Model;

/**
 * Model
 */
class Actor extends Model
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
    public $table = 'mikus_movies_actors';

    public $belongsToMany =[
        'movies' =>[
            'Mikus\Movies\Models\Movie',
            'table' => 'mikus_movies_actors_movies',
            'order' => 'name'
        ]
    ];

    public $attachOne = [
        'actorimage' => 'System\Models\File'
    ];

    public function getFullNameAttribute(){
        return $this->name . " " . $this->lastname;
    }

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

    protected $fillable = array('name', 'lastname');
}
