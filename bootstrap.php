<?php


use app\common\services\Hook;
use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events) {

//    \Event::listen('cron.collectJobs', function () {
//        \Cron::add('Commission', '*/10 * * * * *', function () {
//            (new \Yunshop\Commission\services\TimedTaskService)->handle();
//            return;
//        });

//    });



    /**
     * 创建订单
     * OrderCreatedListener
     */
    $events->subscribe(\Plugins\PluginsDemo\Listener\DemoListener::class);




};
