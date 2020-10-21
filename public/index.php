<?php

use \Laminas\Diactoros\Response;
use Laminas\Diactoros\ResponseFactory;
use Laminas\Diactoros\ServerRequestFactory;
use Laminas\HttpHandlerRunner\Emitter\SapiEmitter;
use Psr\Http\Message\ServerRequestFactoryInterface;
use App\Framework\Kernel\Application;

require_once __DIR__ . "/../vendor/autoload.php";
//echo $_SERVER['REQUEST_URI'];


$request = ServerRequestFactory::fromGlobals();


//$response = new Response();
//
//
//$response
//    ->getBody()
//    ->write('Hello world');
//
//
//(new SapiEmitter)->emit($response);

Application::app($request)->start();