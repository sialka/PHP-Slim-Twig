<?php

require "../bootstrap.php";

use Slim\Http\Request;
use Slim\Http\Response;

// $app->group("/admin", function () use ($app) {
//   $app->get("/", function () {
//     echo "login";
//   });
// });

// $app->get("/", function (Request $request, Response $response, array $args) {
//   echo "login";
//   dd($request);    
// });

$app->get("/", "app\controllers\HomeController:index");
$app->get("/user/update/{id}", "app\controllers\UserController:update");

$app->run();
