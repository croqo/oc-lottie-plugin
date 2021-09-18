<?php namespace Croqo\Lottie;

use Backend;
use System\Classes\PluginBase;

/**
 * Lottie Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Lottie player',
            'description' => 'October CMS plugin to use lottie animations on your website',
            'author'      => 'Croqo',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        // return []; // Remove this line to activate

        return [
            'Croqo\Lottie\Components\Player' => 'Player',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'croqo.Lottie.some_permission' => [
                'tab' => 'Lottie',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'Lottie' => [
                'label'       => 'Lottie',
                'url'         => Backend::url('croqo/Lottie/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['croqo.Lottie.*'],
                'order'       => 500,
            ],
        ];
    }
}
