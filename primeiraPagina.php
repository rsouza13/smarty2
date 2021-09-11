<?php


// hack version example that works on both *nix and windows
// Smarty is assumend to be in 'includes/' dir under current script
define('SMARTY_DIR',str_replace("\\","/",getcwd()).'/smarty-2.6.31/libs/');


// NOTE: Smarty has a capital 'S'
require_once(SMARTY_DIR . 'Smarty.class.php');
//Cria uma instância do Smarty
$smarty = new Smarty();