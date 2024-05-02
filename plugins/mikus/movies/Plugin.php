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
        \Event::listen('offline.sitesearch.query', function ($query) {

            // Search your plugin's contents
            $items = Models\Movie::where('name', 'like', "%${query}%")
                                            ->orWhere('description', 'like', "%${query}%")
                                            ->get();

            // Now build a results array
            $results = $items->map(function ($item) use ($query) {

                // If the query is found in the title, set a relevance of 2
                $relevance = mb_stripos($item->title, $query) !== false ? 2 : 1;

                if($item->poster){
                    return [
                        'title'     => $item->name,
                        'text'      => $item->description,
                        'url'       => '/movies/movie/' . $item->slug,
                        'thumb'     => $item->poster->first(), // Instance of System\Models\File
                        'relevance' => $relevance
                    ];
                } else {
                    return [
                        'title'     => $item->name,
                        'text'      => $item->description,
                        'url'       => '/movies/movie/' . $item->slug,
                        'relevance' => $relevance
                    ];
                }
            });

            return [
                'provider' => 'Movie', // The badge to display for this result
                'results'  => $results,
            ];
        });
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return [
            'Mikus\Movies\components\actors' => 'actors',
            'Mikus\Movies\components\ActorForm' => 'actorform'
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
