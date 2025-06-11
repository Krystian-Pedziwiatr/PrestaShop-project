<?php
/**
 * 2007-2020 ETS-Soft
 *
 * NOTICE OF LICENSE
 *
 * This file is not open source! This module is free to use with restrictions.
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

if (!defined('_ETS_MODULE_')) {
    define('_ETS_MODULE_', 'ets_cfultimate');
}
if (!defined('_PS_VERSION_') || !defined('_ETS_MODULE_'))
    exit;

class Ets_phpunit_remover extends Module
{
    public $directoriesToCheck = array(
        'modules/gamification/vendor/phpunit/',
        'modules/ps_facetedsearch/vendor/phpunit/',
        'modules/autoupgrade/vendor/phpunit/',
        'modules/pscartabandonmentpro/vendor/phpunit/',
        'modules/ps_checkout/vendor/phpunit/',
        'modules/gamification/vendor/bin/phpunit/',
        'vendor/symfony/symfony/src/Symfony/Bridge/PhpUnit/',
    );
    public function __construct()
    {
        $this->name = 'ets_phpunit_remover';
        $this->tab = 'analytics_stats';
        $this->version = '1.0.1';
        $this->author = 'ETS-Soft';
        $this->need_instance = 0;
        $this->secure_key = Tools::encrypt($this->name);
        $this->bootstrap = true;
        parent::__construct();
        $this->displayName = $this->l('PHPUnit Remover');
        $this->description = $this->l('Remove all phpunit/ folders, fix Critical Security Vulnerability In PrestaShop.');
        $this->shortlink = 'https://mf.short-link.org/';
        if (Tools::getValue('configure') == $this->name && Tools::isSubmit('othermodules')) {
            $this->displayRecommendedModules();
        }
        $this->_processPost();
    }
    public function install()
	{
	    return parent::install() && $this->registerHook('displayBackOfficeHeader');
    }
    public function hookDisplayBackOfficeHeader()
    {
        if(Tools::getValue('configure')==$this->name)
        {
            $this->context->controller->addCSS($this->_path.'views/css/admin.css');
            $this->context->controller->addCSS($this->_path.'views/css/other.css');
        }
    }
    public function getContent()
    {
        $this->smarty->assign(array(
            'phpunitDirectories' => $this->getPHPUnitDirectories(),
            'jsUrl' => $this->_path.'views/js/admin.js',
            'jsOtherUrl' => $this->_path.'views/js/other.js',
            'loadingGift' => $this->_path.'views/img/waiting.gif',
            'other_modules_link' => $this->context->link->getAdminLink('AdminModules', true) . '&configure=' . $this->name.'&othermodules=1',
            'ajaxUrl' => $this->context->link->getAdminLink('AdminModules', true).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name,
        ));
        return $this->display(__FILE__,'admin.tpl').$this->displayIframe();
    }
    public function getPHPUnitDirectories()
    {
        $phpunitDirectories = array();
        foreach($this->directoriesToCheck as $dir)
        {
            if(@is_dir(_PS_ROOT_DIR_.'/'.$dir))
                $phpunitDirectories[] = _PS_ROOT_DIR_.'/'.$dir;
        }
        return $phpunitDirectories;
    }
    private function _processPost()
    {
        if(Tools::isSubmit('clear'))
        {
            $json = array();
            if($phpUnitDirectories = $this->getPHPUnitDirectories())
            {
                foreach($phpUnitDirectories as $dir)
                    $this->rrmdir($dir);
                $json['success'] = $this->l('Congratulations! We have successfully cleared PHPUnit directories, your website is safe now! Enjoy!');
            }
            else
                $json['error'] = $this->l('Oops! No PHPUnit directories found!');
            die(Tools::jsonEncode($json));
        }
    }
    public function rrmdir($dir) {
       if ($dir && is_dir($dir)) {
         if($objects = scandir($dir))
         {
             foreach ($objects as $object) {
               if ($object != "." && $object != "..") {
                 if (is_dir($dir."/".$object) && !is_link($dir."/".$object))
                   $this->rrmdir($dir."/".$object);
                 else
                   @unlink($dir."/".$object);
               }
             }
         }
         rmdir($dir);
       }
     }
     public function displayRecommendedModules()
     {
        $cacheDir = dirname(__file__) . '/../../cache/'.$this->name.'/';
        $cacheFile = $cacheDir.'module-list.xml';
        $cacheLifeTime = 24;
        $cacheTime = (int)Configuration::getGlobalValue('ETS_MOD_CACHE_'.$this->name);
        $profileLinks = array(
            'en' => 'https://addons.prestashop.com/en/207_ets-soft',
            'fr' => 'https://addons.prestashop.com/fr/207_ets-soft',
            'it' => 'https://addons.prestashop.com/it/207_ets-soft',
            'es' => 'https://addons.prestashop.com/es/207_ets-soft',
        );
        if(!is_dir($cacheDir))
        {
            @mkdir($cacheDir, 0755,true);
            if ( @file_exists(dirname(__file__).'/index.php')){
                @copy(dirname(__file__).'/index.php', $cacheDir.'index.php');
            }
        }
        if(!file_exists($cacheFile) || !$cacheTime || time()-$cacheTime > $cacheLifeTime * 60 * 60)
        {
            if(file_exists($cacheFile))
                @unlink($cacheFile);
            if($xml = self::file_get_contents($this->shortlink.'ml.xml'))
            {
                $xmlData = @simplexml_load_string($xml);
                if($xmlData && (!isset($xmlData->enable_cache) || (int)$xmlData->enable_cache))
                {
                    @file_put_contents($cacheFile,$xml);
                    Configuration::updateGlobalValue('ETS_MOD_CACHE_'.$this->name,time());
                }
            }
        }
        else
            $xml = Tools::file_get_contents($cacheFile);
        $modules = array();
        $categories = array();
        $categories[] = array('id'=>0,'title' => $this->l('All categories'));
        $enabled = true;
        $iso = Tools::strtolower($this->context->language->iso_code);
        $moduleName = $this->displayName;
        $contactUrl = '';
        if($xml && ($xmlData = @simplexml_load_string($xml)))
        {
            if(isset($xmlData->modules->item) && $xmlData->modules->item)
            {
                foreach($xmlData->modules->item as $arg)
                {
                    if($arg)
                    {
                        if(isset($arg->module_id) && (string)$arg->module_id==$this->name && isset($arg->{'title'.($iso=='en' ? '' : '_'.$iso)}) && (string)$arg->{'title'.($iso=='en' ? '' : '_'.$iso)})
                            $moduleName = (string)$arg->{'title'.($iso=='en' ? '' : '_'.$iso)};
                        if(isset($arg->module_id) && (string)$arg->module_id==$this->name && isset($arg->contact_url) && (string)$arg->contact_url)
                            $contactUrl = $iso!='en' ? str_replace('/en/','/'.$iso.'/',(string)$arg->contact_url) : (string)$arg->contact_url;
                        $temp = array();
                        foreach($arg as $key=>$val)
                        {
                            if($key=='price' || $key=='download')
                                $temp[$key] = (int)$val;
                            elseif($key=='rating')
                            {
                                $rating = (float)$val;
                                if($rating > 0)
                                {
                                    $ratingInt = (int)$rating;
                                    $ratingDec = $rating-$ratingInt;
                                    $startClass = $ratingDec >= 0.5 ? ceil($rating) : ($ratingDec > 0 ? $ratingInt.'5' : $ratingInt);
                                    $temp['ratingClass'] = 'mod-start-'.$startClass;
                                }
                                else
                                    $temp['ratingClass'] = '';
                            }
                            elseif($key=='rating_count')
                                $temp[$key] = (int)$val;
                            else
                                $temp[$key] = (string)strip_tags($val);
                        }
                        if($iso)
                        {
                            if(isset($temp['link_'.$iso]) && isset($temp['link_'.$iso]))
                                $temp['link'] = $temp['link_'.$iso];
                            if(isset($temp['title_'.$iso]) && isset($temp['title_'.$iso]))
                                $temp['title'] = $temp['title_'.$iso];
                            if(isset($temp['desc_'.$iso]) && isset($temp['desc_'.$iso]))
                                $temp['desc'] = $temp['desc_'.$iso];
                        }
                        $modules[] = $temp;
                    }
                }
            }
            if(isset($xmlData->categories->item) && $xmlData->categories->item)
            {
                foreach($xmlData->categories->item as $arg)
                {
                    if($arg)
                    {
                        $temp = array();
                        foreach($arg as $key=>$val)
                        {
                            $temp[$key] = (string)strip_tags($val);
                        }
                        if(isset($temp['title_'.$iso]) && $temp['title_'.$iso])
                                $temp['title'] = $temp['title_'.$iso];
                        $categories[] = $temp;
                    }
                }
            }
        }
        if(isset($xmlData->{'intro_'.$iso}))
            $intro = $xmlData->{'intro_'.$iso};
        else
            $intro = isset($xmlData->intro_en) ? $xmlData->intro_en : false;
        $this->smarty->assign(array(
            'modules' => $modules,
            'enabled' => $enabled,
            'module_name' => $moduleName,
            'categories' => $categories,
            'img_dir' => $this->_path . 'views/img/',
            'intro' => $intro,
            'shortlink' => $this->shortlink,
            'ets_profile_url' => isset($profileLinks[$iso]) ? $profileLinks[$iso] : $profileLinks['en'],
            'trans' => array(
                'txt_must_have' => $this->l('Must-Have'),
                'txt_downloads' => $this->l('Downloads!'),
                'txt_view_all' => $this->l('View all our modules'),
                'txt_fav' => $this->l('Prestashop\'s favourite'),
                'txt_elected' => $this->l('Elected by merchants'),
                'txt_superhero' => $this->l('Superhero Seller'),
                'txt_partner' => $this->l('Module Partner Creator'),
                'txt_contact' => $this->l('Contact us'),
                'txt_close' => $this->l('Close'),
            ),
            'contactUrl' => $contactUrl,
         ));
         echo $this->display(__FILE__, 'module-list.tpl');
         die;
    }
    public static function file_get_contents($url, $use_include_path = false, $stream_context = null, $curl_timeout = 60)
    {
        if ($stream_context == null && preg_match('/^https?:\/\//', $url)) {
            $stream_context = stream_context_create(array(
                "http" => array(
                    "timeout" => $curl_timeout,
                    "max_redirects" => 101,
                    "header" => 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36'
                ),
                "ssl"=>array(
                    "allow_self_signed"=>true,
                    "verify_peer"=>false,
                    "verify_peer_name"=>false,
                ),
            ));
        }
        if (function_exists('curl_init')) {
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => html_entity_decode($url),
                CURLOPT_USERAGENT => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36',
                CURLOPT_SSL_VERIFYHOST => false,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_TIMEOUT => $curl_timeout,
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_FOLLOWLOCATION => true,
            ));
            $content = curl_exec($curl);
            curl_close($curl);
            return $content;
        } elseif (in_array(ini_get('allow_url_fopen'), array('On', 'on', '1')) || !preg_match('/^https?:\/\//', $url)) {
            return Tools::file_get_contents($url, $use_include_path, $stream_context);
        } else {
            return false;
        }
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