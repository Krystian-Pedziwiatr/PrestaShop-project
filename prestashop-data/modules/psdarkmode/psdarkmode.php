<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class Psdarkmode extends Module
{
    public function __construct()
    {
        $this->name = 'psdarkmode';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Krystian Pędziwiatr';
        $this->need_instance = 0;
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Dark Mode Toggle');
        $this->description = $this->l('Dodaje przełącznik trybu ciemnego do nagłówka.');
        $this->ps_versions_compliancy = ['min' => '1.7.0.0', 'max' => _PS_VERSION_];
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

    /**
     * Hook wyświetlający przycisk w desktopowym headerze (np. w displayNav2)
     */
    public function hookDisplayNav2($params)
    {
        return $this->display(__FILE__, 'views/templates/hook/displayNav2.tpl');
    }

    /**
     * Hook do ładowania JS i CSS
     */
    public function hookDisplayHeader()
    {
        $this->context->controller->registerJavascript(
            'module-psdarkmode-js',
            'modules/'.$this->name.'/views/js/darkmode.js',
            ['position' => 'bottom', 'priority' => 150]
        );

        $this->context->controller->registerStylesheet(
            'module-psdarkmode-css',
            'modules/'.$this->name.'/views/css/darkmode.css',
            ['media' => 'all', 'priority' => 150]
        );

        return null;
    }
}
