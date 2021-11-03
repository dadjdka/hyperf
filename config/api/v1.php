<?php
/**
 * ${PARAM_DOC}
 * @return ${TYPE_HINT}
 * ${THROWS_DOC}
 */
use Hyperf\HttpServer\Router\Router;

Router::get('/v1','App\Controller\Api\PingController@ping');
