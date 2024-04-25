<?php namespace Mikus\Movies\Components;

use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use ValidationException;
use Mikus\Movies\Models\Actor;
use Flash;

class ActorForm extends ComponentBase
{

    public function componentDetails(){
        return [
            'name' => 'Actor Form',
            'description' => 'Enter actors'
        ];
    }


    public function onSave(){
        $actor = new Actor();
        $actor->name = Input::get('name');
        $actor->lastname = Input::get('lastname');
        $actor->save();
        Flash::success('Actor added!');
        return Redirect::back();

    }

}