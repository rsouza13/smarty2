<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Modificadores</title>
</head>
    <body>
    <!-- Conteúdo -->
    {* Faz o título ficar com letras maiúsculas *}
    <h2>{$titulo|upper}</h2>
    <br />
    {* Faz com que $topico use somente 40 caracteres, e coloca ... no fim da frase *}
    T&oacute;pico: {$topico|truncate:40:"..."}
    <br />
    {* transforma a data em um formato legível *}
    Data Atual: {"agora"|date_format:"%d/%m/%Y"}
    <br />
    {* aplica um modificador à uma função personalizada *}
    {mailto|upper address="tiagorsouza13@gmail.com"}
    <br />
    {* isto irá mostrar o número de elementos na matriz *}
    {$titulo|@count} 
    
    {* Isto é usado para converter para maiúsculas a primeira letra de todas as palavras em uma variável.  *}
    <p>Tópico:{$topico|capitalize}</p>
    
    {* Isto é usado para contar o número de caracteres em uma variável. *}
    Quantidade de caracteres: {$topico|count_characters} | Contando com os espaços: {$topico|count_characters:true}
    <br />
    {* cat - o valor é concatenado com a variável dada.  *}
    {$titulo|cat:" - Complemento do título."}
    <br />
    {* count_paragraphs - usado para contar o número de paragrafos em uma variável.  *}
    Quantidade de parágrafos do tópico: {$topico|count_paragraphs}.
    <br />
    {* count_sentences - usado para contar o número de sentenças em uma variável. *}
    Quantidade de sentenças do tópico: {$topico|count_sentences}.
    <br />
    {* count_words - usado para contar o número de palavras em uma variável. *}
    Quantidade de palavras do tópico: {$topico|count_words}.
    <br />
    {* formata a data e hora no formato strftime() indicado. *}
    Formatar a data atual: {$smarty.now|date_format:"%d/%m/%Y %H:%M:%S"}.
    <br />
    {* Isto é usado para definir um valor padrão para uma variável. *}
    Valor padrão: {$variavelNaoDefinida|default:"sem valor"}.
    <br />
    {* Isto endenta uma string em cada linha, o padrão é 4. *}
    Tópico Identado: {$topico|indent:10:"\t"}.
    <br />
    {* lower - usado para converter para minúsculas uma variável. *}
    Título minúsculo:{$titulo|lower}.
    <br />
    {* upper - usado para converter para minúsculas uma variável. *}
    Título maiusculo:{$titulo|upper}.
    <br />
    {* nl2br - Todas as quebras de linha serão convertidas para <br />. *}
    Tópico com quebras: {$topico|nl2br}.
    <br />
    {* replace - Um simples localizar e substituir. *}
    Tópico: {$topico|replace:" ":"  "}.
    <br />
    {* Insere um espaço entre cada caractere de uma variável. Você pode opcionalmente passar um caractere (ou uma string) diferente para inserir. *}
    Título com Spacify: {$titulo|spacify:"^"}.
    <br />
    {* *}
    Tópico wordwrap: {$topico|wordwrap:50:"<br />"}.

    </body>
</html>