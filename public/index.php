<?php
require_once dirname(__DIR__) . '/vendor/autoload.php';

Config\Router::load(APPROOT . '/src/app/routes.php')->redirect();