<?php /* Smarty version 2.6.31, created on 2021-09-09 20:35:10
         compiled from funcoesInternas.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'funcoesInternas.tpl', 21, false),)), $this); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Fuções Internas</title>
</head>
    <body>
        <h3>Chapter 7. Funções internas</h3>
                <?php ob_start(); ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "pegar_banner.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php $this->_smarty_vars['capture']['banner'] = ob_get_contents(); ob_end_clean(); ?>
        <?php if ($this->_smarty_vars['capture']['banner'] != ""): ?>
            <tr>
                <td>
                    <?php echo $this->_smarty_vars['capture']['banner']; ?>

                </td>
            </tr>
        <?php endif; ?>
                <?php echo smarty_function_config_load(array('file' => "configuracoes.conf",'section' => 'coresTabela'), $this);?>
 
        <table border="<?php echo $this->_config[0]['vars']['tamanhoBordaTabela']; ?>
" bgcolor="<?php echo $this->_config[0]['vars']['cordeFundotabela']; ?>
">
            <tr bgcolor="<?php echo $this->_config[0]['vars']['cordeFundoLinha']; ?>
">
                <td>First</td>
                <td>Last</td>
                <td>Address</td>
            </tr> 
        </table>
                <?php $_from = $this->_tpl_vars['contacts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['outer'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['outer']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['contact']):
        $this->_foreach['outer']['iteration']++;
?>
            <?php $_from = $this->_tpl_vars['contact']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
            <?php echo $this->_tpl_vars['key']; ?>
: <?php echo $this->_tpl_vars['item']; ?>
<br>
            <?php endforeach; endif; unset($_from); ?><br />
        <?php endforeach; endif; unset($_from); ?>
        Total de contatos: <?php echo $this->_foreach['outer']['total']; ?>
.
            </body>
</html>