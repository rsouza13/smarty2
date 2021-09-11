<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Variáveis</title>
</head>
    <body>
{* mostra o valor de page da URL (GET) http://www.domain.com/index.php?page=foo *}
{$smarty.get.page}
<br /> 
{* mostra a variável "page" de um formulário (POST) *}
{$smarty.post.page}
<br /> 
{* mostra o valor do cookie "username" *}
{$smarty.cookies.username}
<br /> 
{* mostra a variável do servidor "SERVER_NAME" *}
{$smarty.server.SERVER_NAME}
<br /> 
{* mostra a variável de ambiente do sistema "PATH" *}
{$smarty.env.PATH}
<br /> 
{* mostra a variável de session do php "id" *}
{$smarty.session.id}
<br /> 
{* mostra a variável "username" da união de get/post/cookies/server/env *}
{$smarty.request.username}
<br /> 
{* usa o modificador date_format para mostrar a data e hora atuais *}
{$smarty.now|date_format:"%Y-%m-%d %H:%M:%S"}
<br /> 
{* A variável {$smarty} pode ser usada para referir variáveis de configuração carregadas. *}
{$smarty.config}
<br /> 
{* Esta variável contém o nome do template atual que esta sendo processado. *}
{$smarty.template}
<br /> 
{* This variable is used for printing the left-delimiter value literally. See also {ldelim},{rdelim}. *}
{$smarty.ldelim}    {$smarty.rdelim}