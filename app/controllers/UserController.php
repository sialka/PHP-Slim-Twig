<?php

namespace app\controllers;

use Slim\Http\Request;
use Slim\Http\Response;

class UserController
{
  public function update(Request $request, Response $response, array $args)
  {
    echo "update";
    echo "<br>";
    dd($args);
  }
}
