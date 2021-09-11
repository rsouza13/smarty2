<?php /* Smarty version 2.6.31, created on 2021-09-09 13:38:37
         compiled from modificadores.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'upper', 'modificadores.tpl', 10, false),array('modifier', 'truncate', 'modificadores.tpl', 13, false),array('modifier', 'date_format', 'modificadores.tpl', 16, false),array('modifier', 'count', 'modificadores.tpl', 22, false),array('modifier', 'capitalize', 'modificadores.tpl', 25, false),array('modifier', 'count_characters', 'modificadores.tpl', 28, false),array('modifier', 'cat', 'modificadores.tpl', 31, false),array('modifier', 'count_paragraphs', 'modificadores.tpl', 34, false),array('modifier', 'count_sentences', 'modificadores.tpl', 37, false),array('modifier', 'count_words', 'modificadores.tpl', 40, false),array('modifier', 'default', 'modificadores.tpl', 46, false),array('modifier', 'indent', 'modificadores.tpl', 49, false),array('modifier', 'lower', 'modificadores.tpl', 52, false),array('modifier', 'nl2br', 'modificadores.tpl', 58, false),array('modifier', 'replace', 'modificadores.tpl', 61, false),array('modifier', 'spacify', 'modificadores.tpl', 64, false),array('modifier', 'wordwrap', 'modificadores.tpl', 67, false),array('function', 'mailto', 'modificadores.tpl', 19, false),)), $this); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Modificadores</title>
</head>
    <body>
    <!-- Conteúdo -->
        <h2><?php echo ((is_array($_tmp=$this->_tpl_vars['titulo'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
</h2>
    <br />
        T&oacute;pico: <?php echo ((is_array($_tmp=$this->_tpl_vars['topico'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 40, "...") : smarty_modifier_truncate($_tmp, 40, "...")); ?>

    <br />
        Data Atual: <?php echo ((is_array($_tmp='agora')) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%Y") : smarty_modifier_date_format($_tmp, "%d/%m/%Y")); ?>

    <br />
        <?php echo ((is_array($_tmp=smarty_function_mailto(array('address' => "tiagorsouza13@gmail.com"), $this))) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp));?>

    <br />
        <?php echo count($this->_tpl_vars['titulo']); ?>
 
    
        <p>Tópico:<?php echo ((is_array($_tmp=$this->_tpl_vars['topico'])) ? $this->_run_mod_handler('capitalize', true, $_tmp) : smarty_modifier_capitalize($_tmp)); ?>
</p>
    
        Quantidade de caracteres: <?php echo ((is_array($_tmp=$this->_tpl_vars['topico'])) ? $this->_run_mod_handler('count_characters', true, $_tmp) : smarty_modifier_count_characters($_tmp)); ?>
 | Contando com os espaços: <?php echo ((is_array($_tmp=$this->_tpl_vars['topico'])) ? $this->_run_mod_handler('count_characters', true, $_tmp, true) : smarty_modifier_count_characters($_tmp, true)); ?>

    <br />
        <?php echo ((is_array($_tmp=$this->_tpl_vars['titulo'])) ? $this->_run_mod_handler('cat', true, $_tmp, " - Complemento do título.") : smarty_modifier_cat($_tmp, " - Complemento do título.")); ?>

    <br />
        Quantidade de parágrafos do tópico: <?php echo ((is_array($_tmp=$this->_tpl_vars['topico'])) ? $this->_run_mod_handler('count_paragraphs', true, $_tmp) : smarty_modifier_count_paragraphs($_tmp)); ?>
.
    <br />
        Quantidade de sentenças do tópico: <?php echo ((is_array($_tmp=$this->_tpl_vars['topico'])) ? $this->_run_mod_handler('count_sentences', true, $_tmp) : smarty_modifier_count_sentences($_tmp)); ?>
.
    <br />
        Quantidade de palavras do tópico: <?php echo ((is_array($_tmp=$this->_tpl_vars['topico'])) ? $this->_run_mod_handler('count_words', true, $_tmp) : smarty_modifier_count_words($_tmp)); ?>
.
    <br />
        Formatar a data atual: <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d/%m/%Y %H:%M:%S") : smarty_modifier_date_format($_tmp, "%d/%m/%Y %H:%M:%S")); ?>
.
    <br />
        Valor padrão: <?php echo ((is_array($_tmp=@$this->_tpl_vars['variavelNaoDefinida'])) ? $this->_run_mod_handler('default', true, $_tmp, 'sem valor') : smarty_modifier_default($_tmp, 'sem valor')); ?>
.
    <br />
        Tópico Identado: <?php echo ((is_array($_tmp=$this->_tpl_vars['topico'])) ? $this->_run_mod_handler('indent', true, $_tmp, 10, "\t") : smarty_modifier_indent($_tmp, 10, "\t")); ?>
.
    <br />
        Título minúsculo:<?php echo ((is_array($_tmp=$this->_tpl_vars['titulo'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
.
    <br />
        Título maiusculo:<?php echo ((is_array($_tmp=$this->_tpl_vars['titulo'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
.
    <br />
        Tópico com quebras: <?php echo ((is_array($_tmp=$this->_tpl_vars['topico'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
.
    <br />
        Tópico: <?php echo ((is_array($_tmp=$this->_tpl_vars['topico'])) ? $this->_run_mod_handler('replace', true, $_tmp, ' ', '  ') : smarty_modifier_replace($_tmp, ' ', '  ')); ?>
.
    <br />
        Título com Spacify: <?php echo ((is_array($_tmp=$this->_tpl_vars['titulo'])) ? $this->_run_mod_handler('spacify', true, $_tmp, "^") : smarty_modifier_spacify($_tmp, "^")); ?>
.
    <br />
        Tópico wordwrap: <?php echo ((is_array($_tmp=$this->_tpl_vars['topico'])) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 50, "<br />") : smarty_modifier_wordwrap($_tmp, 50, "<br />")); ?>
.
    <br />
        Combinando modificadores: <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['titulo'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)))) ? $this->_run_mod_handler('spacify', true, $_tmp, '^') : smarty_modifier_spacify($_tmp, '^')))) ? $this->_run_mod_handler('truncate', true, $_tmp, 15, '...') : smarty_modifier_truncate($_tmp, 15, '...')); ?>
.
    </body>
</html>