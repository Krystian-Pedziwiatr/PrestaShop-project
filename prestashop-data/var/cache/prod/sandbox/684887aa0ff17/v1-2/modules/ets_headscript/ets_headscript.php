<?php
/**
 * 2007-2020 ETS-Soft
 *
 * NOTICE OF LICENSE
 *
 * This file is not open source! Each license that you purchased is only available for 1 wesite only.
 * If you want to use this file on more websites (or projects), you need to purchase additional licenses.
 * You are not allowed to redistribute, resell, lease, license, sub-license or offer our resources to any third party.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please contact us for extra customization service at an affordable price
 *
 * @author ETS-Soft <etssoft.jsc@gmail.com>
 * @copyright  2007-2020 ETS-Soft
 * @license    Valid for 1 website (or project) for each purchase of license
 *  International Registered Trademark & Property of ETS-Soft
 */

class Ets_headscript extends Module
{
    public $dirConfig = null;
    public function __construct()
    {
        $this->name = 'ets_headscript';
        $this->tab = 'front_office_features';
        $this->version = '1.0.1';
        $this->author = 'ETS-Soft';
        $this->need_instance = 0;
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Head script');
        $this->description = $this->l('Add script into <head> </head> code of the website');
        $this->dirConfig = _PS_ROOT_DIR_.'/cache/'.$this->name;
    }

    public function getContent()
    {
        $errors = $this->saveFormConfig();
        $output = '';
        if($errors){
            $output = $this->displayError($errors);
        }
        elseif($errors !== false){
            $output = $this->displayConfirmation($this->l('Configuration saved successfully'));
        }
        return $output.$this->renderForm().$this->displayIframe();
    }

    public function install()
    {
        return parent::install()
            && $this->registerHook('displayBackOfficeHeader')
            && $this->registerHook('displayHeader');
    }

    public function uninstall()
    {
        return parent::uninstall()
            && $this->removeDirConfig();
    }

    public function removeDirConfig()
    {
        if (is_dir($this->dirConfig)) {
            $files = glob(ltrim($this->dirConfig, '/ ').'/*'); // get all file names
            foreach($files as $file){
                if(is_file($file))
                    @unlink($file);
            }
            @rmdir($this->dirConfig);
            return true;
        }
        return true;
    }

    public function hookDisplayBackOfficeHeader()
    {
        $this->smarty->assign(array(
            'etsHsContent' => $this->getConfig('ETS_HS_BO_SCRIPT')
        ));
        return $this->display(__FILE__, 'admin_head.tpl');
    }

    public function hookDisplayHeader()
    {
        $this->smarty->assign(array(
            'etsHsContent' => $this->getConfig('ETS_HS_FO_SCRIPT')
        ));
        return $this->display(__FILE__, 'head.tpl');
    }

    public function getFormFields()
    {
        return array(
            'ETS_HS_FO_SCRIPT' => array(
                'type' => 'textarea',
                'label' => $this->l('Add custom script into <head> of front office'),
                'name' => 'ETS_HS_FO_SCRIPT',
                'col'=>8,
                'rows' => 10,
                'placeholder' => $this->l('Enter your script here'),
            ),
            'ETS_HS_BO_SCRIPT' => array(
                'type' => 'textarea',
                'label' => $this->l('Add custom script into <head> of back office'),
                'name' => 'ETS_HS_BO_SCRIPT',
                'col'=>8,
                'rows' => 10,
                'placeholder' => $this->l('Enter your script here'),
            ),
        );
    }

    public function renderForm()
    {
        $list_fields = $this->getFormFields();
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Configs'),
                ),
                'input' => $list_fields,
                'submit' => array(
                    'title' => $this->l('Save'),
                    'name' => 'submitFormets_headscript',
                    'class' => 'btn btn-default pull-right'
                )
            )
        );
        $fields_value = array();
        foreach ($list_fields as $field)
        {
            $fields_value[$field['name']] = Tools::getIsset($field['name']) ? Tools::getValue($field['name']) : $this->getConfig($field['name']);
        }

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitFormets_headscript';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            .'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => $fields_value,
        );

        return $helper->generateForm(array($fields_form));
    }

    public function saveFormConfig()
    {
        $errors = array();
        if(Tools::isSubmit('submitFormets_headscript'))
        {
            foreach ($this->getFormFields() as $field)
            {
                $this->updateConfig($field['name'], Tools::getValue($field['name']));
            }
            return $errors;
        }
        return false;
    }

    public function updateConfig($key, $value)
    {

        if (!is_dir($this->dirConfig) && @mkdir($this->dirConfig, 0755,true)) {
            if ( @file_exists(dirname(__file__).'/index.php')){
                @copy(dirname(__file__).'/index.php', $this->dirConfig.'/index.php');
            }
        }
        if(Configuration::get('PS_MULTISHOP_FEATURE_ACTIVE') && Shop::getContext() == Shop::CONTEXT_ALL)
        {
            foreach (Shop::getShops(true) as $shop)
            {
                $idShop = (int)$shop['id_shop'];
                $dirFile = rtrim($this->dirConfig, '/ '). '/'.$key.'_'.(int)$idShop.'.cache';
                if(!file_exists($dirFile)){
                    file_put_contents($dirFile, $value);
                }
                else{
                    $idShop = $this->context->shop->id;
                    $dirFile = rtrim($this->dirConfig, '/ '). '/'.$key.'_'.(int)$idShop.'.cache';
                    file_put_contents($dirFile, $value);
                }
            }
        }
        else{
            $idShop = $this->context->shop->id;
            $dirFile = rtrim($this->dirConfig, '/ '). '/'.$key.'_'.(int)$idShop.'.cache';
            file_put_contents($dirFile, $value);
        }
    }

    public function getConfig($key)
    {
        $idShop = $this->context->shop->id;
        $dirFile = rtrim($this->dirConfig, '/ '). '/'.$key.'_'.(int)$idShop.'.cache';
        if(file_exists($dirFile))
        {
            return Tools::file_get_contents($dirFile);
        }
        return null;
    }

    public function displayIframe()
    {
        switch($this->context->language->iso_code) {
            case 'en':
                $url = 'https://cdn.prestahero.com/prestahero-product-feed?utm_source=feed_'.$this->name.'&utm_medium=iframe';
                break;
            case 'it':
                $url = 'https://cdn.prestahero.com/it/prestahero-product-feed?utm_source=feed_'.$this->name.'&utm_medium=iframe';
                break;
            case 'fr':
                $url = 'https://cdn.prestahero.com/fr/prestahero-product-feed?utm_source=feed_'.$this->name.'&utm_medium=iframe';
                break;
            case 'es':
                $url = 'https://cdn.prestahero.com/es/prestahero-product-feed?utm_source=feed_'.$this->name.'&utm_medium=iframe';
                break;
            default:
                $url = 'https://cdn.prestahero.com/prestahero-product-feed?utm_source=feed_'.$this->name.'&utm_medium=iframe';
        }
        $this->smarty->assign(
            array(
                'url_iframe' => $url
            )
        );
        return $this->display(__FILE__,'iframe.tpl');
    }
}