<?php

return [
    ['title'] => '插件市场设置',
    ['options'] => [
        ['title'] => '选项',
        ['source-text'] => '插件市场源',
        ['source-hint'] => '可以写相对于首页的路径或完整的URL，但必须是一个可访问的json文件',
        ['auto-enable-text'] => '自动启用',
        ['auto-enable-label'] => '插件安装成功后自动启用',
        ['replace-default-market-text'] => '替换默认',
        ['replace-default-market-label'] => '接管系统默认的插件市场',
        ['update-notif-text'] => '插件更新提醒',
        ['update-none'] => '不提醒',
        ['update-release-only'] => '仅正式版',
        ['update-both'] => '全部提醒',
    ],

    ['readme'] => [

        ['title'] => '插件简介',
        ['text'] => '这个插件它仅仅是用于从预先设置的插件源读取所有可用的插件，并提供下载功能。',

    ],

    ['list'] =>
        [
            ['title'] => '常用插件源',
            ['text'] => '如果您想在这里显示您的插件源',

            ['source1'] => '此插件作者维护的源',
        ]
];
