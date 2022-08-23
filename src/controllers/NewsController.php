<?php
namespace Controllers;

class NewsController
{
  public function home()
  {
    return json_encode([
      "hola"=>"asd",
    ]);
  }

  public function about()
  {
    echo "about";
  }
}