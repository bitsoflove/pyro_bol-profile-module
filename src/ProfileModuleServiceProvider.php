<?php namespace Bitsoflove\ProfileModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

class ProfileModuleServiceProvider extends AddonServiceProvider
{

    protected $plugins = [];

    protected $routes = [
        'admin/profile' => 'Bitsoflove\ProfileModule\Http\Controller\Admin\ProfileController@edit'
    ];

    protected $middleware = [];

    protected $listeners = [];

    protected $aliases = [];

    protected $bindings = [];

    protected $providers = [];

    protected $singletons = [];

    protected $overrides = [];

    protected $mobile = [];

    public function register()
    {
    }

    public function map()
    {
    }

}
