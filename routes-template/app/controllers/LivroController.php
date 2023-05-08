<?php

namespace app\controllers;
class LivroController
{

  public function index()
  {
    return Controller::view('livros');
  }
}
