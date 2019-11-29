<?php


require_once realpath(dirname(__FILE__,2).'/src/config/database.php');

Database::getConection();
$data = new Database;
var_dump($data->getConection());