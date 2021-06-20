<?php namespace Croqo\Motion;

use Backend;
use System\Classes\PluginBase;

/**
 * Motion Plugin Information File
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
            'name'        => 'Motion',
            'description' => 'No description provided yet...',
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
            'Croqo\Motion\Components\Player' => 'Player',
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
            'croqo.motion.some_permission' => [
                'tab' => 'Motion',
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
            'motion' => [
                'label'       => 'Motion',
                'url'         => Backend::url('croqo/motion/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['croqo.motion.*'],
                'order'       => 500,
            ],
        ];
    }
}
