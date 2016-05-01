<?php
/**
 * Created by PhpStorm.
 * User: janhuang
 * Date: 15/7/17
 * Time: 下午1:35
 * Github: https://www.github.com/janhuang
 * Coding: https://www.coding.net/janhuang
 * SegmentFault: http://segmentfault.com/u/janhuang
 * Blog: http://segmentfault.com/blog/janhuang
 * Gmail: bboyjanhuang@gmail.com
 * WebSite: http://www.janhuang.me
 */

include __DIR__ . '/../vendor/autoload.php';
include __DIR__ . '/../app/Application.php';

$loader = include __DIR__ . '/../autoload.php';
include __DIR__ . '/../app/Application.php';

$app = new Application(Application::ENV_PROD);
$app->boot();
$response = $app->createHttpRequestHandler();
$response->send();
$app->shutdown($app);