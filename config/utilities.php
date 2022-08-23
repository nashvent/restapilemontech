<?php 
/**
 * Get URI path.
 * @return string $uri  Sanitized URI
 */
function getUri() : string
{
  $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
  $uri = explode('/', $uri);
  array_shift($uri);
  $uri = implode('/', $uri); 
  return $uri;
}

/**
 * Generate Pseudo Unique Token
 * @return string $token
 */
function generateToken() : string
{
  $bytes = random_bytes(50);
  return bin2hex($bytes);
}