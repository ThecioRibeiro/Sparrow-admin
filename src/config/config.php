<?php

//configurações de data e hora do sistema
date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME,'pt_BR','pt_BR.utf-8','portuguese');
//configurações de pastas
require_once realpath(dirname(__FILE__).'/database.php');

define('MODEL_PATH',realpath(dirname(__FILE__,2).'/models'));

