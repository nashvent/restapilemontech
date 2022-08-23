<?php
use Leaf\Router;
require_once dirname(__DIR__) . '/vendor/autoload.php';

Router::get("/", "Controllers\BasicController@home");

// MATCH example
Router::get("/test", function () {
  header('Content-Type: application/json');
  echo json_encode([
    "message" => "Test!"
  ]);
});

Router::run();