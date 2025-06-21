<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class Pscustomstyle extends Module
{
    public function __construct()
    {
        $this->name = 'pscustomstyle';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Krystian Pędziwiatr';
        $this->need_instance = 0;
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Custom Style Menu');
        $this->description = $this->l('Dodaje ikonę z menu ustawień wyglądu (styl tekstu, kolory).');
    }

    public function install()
    {
        return parent::install()
            && $this->registerHook('displayNav2')
            && $this->registerHook('displayHeader');
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    public function hookDisplayNav2($params)
    {
        return $this->display(__FILE__, 'views/templates/hook/displayNav2.tpl');
    }

    public function hookDisplayHeader()
    {
        $this->context->controller->registerJavascript(
            'module-pscustomstyle-js',
            'modules/'.$this->name.'/views/js/stylemenu.js',
            ['position' => 'bottom', 'priority' => 150]
        );

        $this->context->controller->registerStylesheet(
            'module-pscustomstyle-css',
            'modules/'.$this->name.'/views/css/style.css',
            ['media' => 'all', 'priority' => 150]
        );
    }
}
