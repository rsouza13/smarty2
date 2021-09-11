<?php
require('setup.php');

$smarty = new Smarty_GuestBook;

$smarty->assign("contacts", array(array("nome"=>"José","phone" => "1", "fax" => "2", "cell" => "3"),
      array("nome"=>"Maria","phone" => "555-4444", "fax" => "555-3333", "cell" => "760-1234")));

$smarty->display('funcoesInternas.tpl');
?>