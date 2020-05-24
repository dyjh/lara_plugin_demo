<?php
/**
 * Created by PhpStorm.
 * User: shenyang
 * Date: 2018/12/24
 * Time: 3:38 PM
 */

namespace Plugins\PluginsDemo;

use App\Common\Services\Hook;
use Encore\Admin\Facades\Admin;
use Illuminate\Routing\Router;

class PluginApplication extends \App\Common\Services\PluginApplication
{
    protected function setConfig()
    {

    }

    protected function setMenuConfig()
    {

    }

    public function boot()
    {
        Hook::registerPluginTransScripts('plugins-market');
        //Determine to if replace default market of Blessing Skin Server

        \Illuminate\Support\Facades\Route::group([
            'middleware'    => config('admin.route.middleware'),
            'namespace' => 'Plugins\PluginsMarket\Controllers\Admin',
            'prefix' => 'admin/plugin/plugins-demo'
        ], function (Router $router) {
            $router->get('/', 'DemoController@index');

        });
    }

    public function register()
    {
    }
}
