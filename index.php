<?php

require('setup.php');

$smarty = new Smarty_GuestBook;

$smarty->assign('name','Tiago Rodrigues');

$smarty->display('index.tpl');
?>