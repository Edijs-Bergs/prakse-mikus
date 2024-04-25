<?php namespace Mikus\Profile;

use System\Classes\PluginBase;
use Rainlab\User\Controllers\Users as UsersController;
use Rainlab\User\Models\User as UserModel;

/**
 * Plugin class
 */
class Plugin extends PluginBase
{
    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
    }

    /**
     * registerSettings used by the backend.
     */
    public function registerSettings()
    {
    }

    public function boot(){

        UserModel::extend(function ($model){
            $model->addFillable([
                'facebook',
                'bio'
            ]);
        });

        UsersController::extendFormFields(function($form, $model, $context){
            $form->addTabFields([
                'facebook' => [
                    'label' => 'Facebook',
                    'type' => 'text',
                    'tab' => 'Profile'
                ],
                'bio' => [
                    'label' => 'Biography',
                    'type' => 'textarea',
                    'tab' => 'Profile'
                ]
            ]);
        });
    }
}
