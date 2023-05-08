<?php

namespace app\controllers;

use Exception;
use League\Plates\Engine;

class Controller
{
  public static function View(string $view, array $data = [])
  {
    $viewsPath = dirname(__FILE__, 2) . '/views';

    if (!file_exists($viewsPath . DIRECTORY_SEPARATOR . $view . '.php')) {
      throw new Exception("a view: '{$view}' não existe.");
    }

    $templates = new Engine($viewsPath);
    echo $templates->render($view, $data);
  }
}
