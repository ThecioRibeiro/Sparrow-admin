<?php
class Database
{
  public function _construct(){
    getConection();
  }
  public static function getConection()
  {
    $pathEnv = realpath(dirname(__FILE__, 2) . '/env_dev.ini');
    $env = parse_ini_file($pathEnv);
    $conn = new mysqli($env['host'], $env['username'], $env['password'], $env['database']);
    $conn->set_charset("utf8");
    if ($conn->connect_error) {
      die('ERRO:' . $conn->connect_error);
    }
    return $conn;
  }
}