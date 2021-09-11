<?php
require('setup.php');

date_default_timezone_set('America/Sao_Paulo');

$smarty = new Smarty_GuestBook;

$smarty->assign('titulo','Modificadores');

$smarty->assign('topico',"Modificadores de variáveis podem ser aplicados a variáveis, funções personalizadas ou strings. Para aplicar um modificador, especifique o valor seguido por |(pipe) e o nome do modificador. Um modificador aceita parâmetros adicionais que afetam o seu comportamento. Estes parâmetros vem após o nome do modificador e são separados por : (dois pontos).");

$smarty->display('modificadores.tpl');
?>