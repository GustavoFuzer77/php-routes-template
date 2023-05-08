<?php

function load(string $controller, string $action)
{
  try {
    $controllerNamespace = "app\\controllers\\{$controller}";

    if (!class_exists($controllerNamespace)) {
      throw new Exception('controller não existe');
    }

    $controllerInstance = new $controllerNamespace();

    if (!method_exists($controllerInstance, $action)) {
      throw new Exception('método não existe');

    }

    $controllerInstance->$action();
  } catch (Exception $e) {
    echo $e->getMessage();
  }
}

$routes = [
  'GET' => [
    '/' =>  load("HomeController", "index"),
    '/livros' =>  load("LivroController", "index")
  ],
  "POST" => [
    '/login' =>  load('UserController', "store")
  ]
];
