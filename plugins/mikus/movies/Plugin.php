<?php namespace Mikus\Movies;

use System\Classes\PluginBase;

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
     * boot method, called right before the request route.
     */
    public function boot()
    {
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return [
            'Mikus\Movies\components\actors' => 'actors'
        ];
    }

    public function registerFormWidgets()
    {
        return [
            'Mikus\Movies\formwidgets\actorbox' => [
                'label' => 'Actorbox field',
                'code' => 'actorbox'
            ]
        ];
    }

    /**
     * registerSettings used by the backend.
     */
    public function registerSettings()
    {
    }
}
