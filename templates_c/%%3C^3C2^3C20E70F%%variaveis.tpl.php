<?php /* Smarty version 2.6.31, created on 2021-09-08 21:38:16
         compiled from variaveis.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'variaveis.tpl', 24, false),)), $this); ?>
mostra o valor de page da URL (GET) http://www.domain.com/index.php?page=foo
<?php echo $_GET['page']; ?>

<br /> 
<?php echo $_POST['page']; ?>

<br /> 
<?php echo $_COOKIE['username']; ?>

<br /> 
<?php echo $_SERVER['SERVER_NAME']; ?>

<br /> 
<?php echo $_ENV['PATH']; ?>

<br /> 
<?php echo $_SESSION['id']; ?>

<br /> 
<?php echo $_REQUEST['username']; ?>

<br /> 
<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>

<br /> 
<?php echo $this->_config[0]['vars']; ?>

<br /> 
<?php echo 'variaveis.tpl'; ?>

<br /> 
<?php echo '{'; ?>
    <?php echo '}'; ?>