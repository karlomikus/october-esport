<?php namespace Kami\Esport;

use Backend;
use System\Classes\PluginBase;

/**
 * Esport Plugin Information File
 */
class Plugin extends PluginBase
{
    public $require = ['RainLab.User'];

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'eSport',
            'description' => 'Plugin for e-Sport team management',
            'author'      => 'Karlo Mikuš',
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
        return []; // Remove this line to activate

        return [
            'Kami\Esport\Components\MyComponent' => 'myComponent',
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
            'kami.esport.some_permission' => [
                'tab' => 'Esport',
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
        return [
            'esport' => [
                'label'       => 'eSport',
                'url'         => Backend::url('kami/esport/games'),
                'icon'        => 'icon-trophy',
                'iconSvg'     => 'plugins/kami/esport/assets/images/plugin-icon.svg',
                'permissions' => ['kami.esport.*'],
                'order'       => 500,
                'sideMenu' => [
                    'games' => [
                        'label'       => 'Games',
                        'icon'        => 'icon-gamepad',
                        'url'         => Backend::url('kami/esport/games'),
                        'permissions' => ['kami.esport.*'],
                    ],
                    'opponents' => [
                        'label'       => 'Opponents',
                        'icon'        => 'icon-hand-rock-o',
                        'url'         => Backend::url('kami/esport/opponents'),
                        'permissions' => ['kami.esport.*'],
                    ],
                    'squads' => [
                        'label'       => 'Squads',
                        'icon'        => 'icon-users',
                        'url'         => Backend::url('kami/esport/squads'),
                        'permissions' => ['kami.esport.*'],
                    ]
                ]
            ],
        ];
    }

}
