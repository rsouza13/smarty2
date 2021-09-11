<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Fuções Internas</title>
</head>
    <body>
        <h3>Chapter 7. Funções internas</h3>
        {* capture - é usado para coletar toda a saída do template em uma variável ao invés de mostra-lo. Qualquer conteúdo entre {capture name="foo"} e {/capture} coletado na variável especificada no atributo name. *}
        {capture name=banner}
        {include file="pegar_banner.tpl"}
        {/capture}
        {if $smarty.capture.banner ne ""}
            <tr>
                <td>
                    {$smarty.capture.banner}
                </td>
            </tr>
        {/if}
        {* config_load - Esta função é usada para carregar as variáveis de um arquivo de configuração dentro de um template. *}
        {config_load file="configuracoes.conf" section="coresTabela" } 
        <table border="{#tamanhoBordaTabela#}" bgcolor="{#cordeFundotabela#}">
            <tr bgcolor="{#cordeFundoLinha#}">
                <td>First</td>
                <td>Last</td>
                <td>Address</td>
            </tr> 
        </table>
        {* foreach é usado para pegar cada elemento de uma matriz associativa simples. *}
        {foreach name=outer item=contact from=$contacts}
            {foreach key=key item=item from=$contact}
            {$key}: {$item}<br>
            {/foreach}<br />
        {/foreach}
        Total de contatos: {$smarty.foreach.outer.total}.
        {* foreachelse é executado quando não houverem mais valores na variável from. *}
    </body>
</html>