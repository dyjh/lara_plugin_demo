<?php


namespace Plugins\PluginsDemo\Controllers\Admin;


//use Encore\Admin\Controllers\AdminController;

use App\Http\Controllers\Controller;

class DemoController extends Controller
{
    public function index()
    {
        return view('Plugins\PluginsDemo::demo',[

        ])->render();
    }
}
