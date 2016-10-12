<?php namespace Bitsoflove\ProfileModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

class ProfileModuleServiceProvider extends AddonServiceProvider
{

    protected $routes = [
        'admin/profile' => 'Bitsoflove\ProfileModule\Http\Controller\Admin\ProfileController@edit'
    ];



}
