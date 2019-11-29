<?php


require_once realpath(dirname(__FILE__).'/config/config.php');
$conexao = new Database();
var_dump($conexao->getconection());
