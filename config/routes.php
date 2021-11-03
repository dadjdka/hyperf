<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
use Hyperf\HttpServer\Router\Router;

Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'App\Controller\IndexController@index');

Router::get('/favicon.ico', function () {
    return glob(__DIR__.'/api/*.php');;
});

# 所有api路由
Router::addGroup('/api',function (){
    $files = glob(__DIR__.'/api/*.php');
    foreach($files as $file){
        require  $file;
    }
});
