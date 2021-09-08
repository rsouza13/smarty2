<?php

define('SMARTY_DIR',str_replace("\\","/",getcwd()).'/smarty-2.6.31/libs/');

// Carrega a biblioteca Smarty
require_once(SMARTY_DIR . 'Smarty.class.php');


// O arquivo setup.php é um bom lugar para carregar
// arquivos necessarios para a aplicação e você
// pode faze-lo aqui mesmo. Um exemplo:
// require('guestbook/guestbook.lib.php');

class Smarty_GuestBook extends Smarty {

    function Smarty_GuestBook()
    {

        // Construtor da classe.
        // Este é chamado a cada nova instância.

        //$this->Smarty();
        parent::__construct();

        $this->template_dir = 'templates/';
        $this->compile_dir  = 'templates_c/';
        $this->config_dir   = 'configs/';
        $this->cache_dir    = 'cache/';

        $this->caching = true;
        $this->assign('app_name', 'My First Project Smarty');
    }

}
?>