<?php

use \Illuminate\Support\Facades\Artisan;

return [
    App\Common\Events\PluginWasInstall::class => function (App\Common\Services\Plugin $plugin) {
        //$manager->uninstall('plugins-market');
        Artisan::call('migrate',['--path'=>'plugins/demo/migrations','--force'=>true]);

    },App\Common\Events\PluginWasDeleted::class => function (App\Common\Services\Plugin $plugin) {
        //$manager->uninstall('plugins-market');
        Artisan::call('migrate:rollback',[ '--path'=>'plugins/demo/migrations']);

    },App\Common\Events\PluginWasDisabled::class => function (App\Common\Services\Plugin $plugin) {
        //$manager->uninstall('plugins-market');

    },App\Common\Events\PluginWasEnabled::class => function (App\Common\Services\Plugin $plugin) {
        //$manager->uninstall('plugins-market');

    },
];
