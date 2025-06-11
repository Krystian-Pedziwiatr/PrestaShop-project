<?php
/**
 * 2007-2022 ETS-Soft
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
 *  @author ETS-Soft <etssoft.jsc@gmail.com>
 *  @copyright  2007-2022 ETS-Soft
 *  @license    Valid for 1 website (or project) for each purchase of license
 *  International Registered Trademark & Property of ETS-Soft
 */

if (!defined('_PS_VERSION_'))
	exit;
Class Ybc_megamenu_class extends ObjectModel
{
    public $id_menu;
    public $title;
	public $enabled;
	public $show_icon;
	public $link;
    public $width;
	public $custom_class;
	public $icon;
    public $id_cms;
    public $id_category;
    public $id_manufacturer;
    public $menu_type;
    public $sort_order;
    public $column_type;
    public $sub_menu_max_width;
    public $color1;
    public $color2;
    public $color3;
    public $color4;
    public $color5;
    public $color6;
    public $sub_type;
    public $wrapper_border;
    public $banner_position;
    public $banner_link;
    public $image;
    public static $definition = array(
		'table' => 'ybc_mm_menu',
		'primary' => 'id_menu',
		'multilang' => true,
		'fields' => array(
			'enabled' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
            'show_icon' =>array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
			'link' =>	array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 500,'required' => false),
            'id_category' => array('type' => self::TYPE_INT, 'validate' => 'isunsignedInt'),
            'id_manufacturer' => array('type' => self::TYPE_INT, 'validate' => 'isunsignedInt'),
            'id_cms' => array('type' => self::TYPE_INT, 'validate' => 'isunsignedInt'),            
            'menu_type' =>	array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 500, 'required' => true),            
            'sub_menu_max_width' =>	array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 500),
            'custom_class' =>	array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 50),
            'column_type' =>	array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 50),
            'icon' =>	array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 500),            
			'sort_order' => array('type' => self::TYPE_INT, 'validate' => 'isunsignedInt', 'required' => false),
            'color1' =>	array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 50,'required' => false),
            'color2' =>	array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 50,'required' => false),
            'color3' =>	array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 50,'required' => false),
            'color4' =>	array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 50,'required' => false),
            'color5' =>	array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 50,'required' => false),
            'color6' =>	array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 50,'required' => false),
            'sub_type' =>	array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 50,'required' => false),
            'wrapper_border' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
            'image' =>	array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 500, 'required' => false),
            'banner_position' =>	array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 50,'required' => false),
            'banner_link' =>	array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 500),
            // Lang fields
			'title' => array('type' => self::TYPE_STRING, 'lang' => true, 'validate' => 'isCleanHtml', 'required' => false, 'size' => 500)			
        )
	);
    
    public	function __construct($id_slide = null, $id_lang = null, $id_shop = null)
	{
		parent::__construct($id_slide, $id_lang, $id_shop);
        $languages = Language::getLanguages(false);
        foreach($languages as $lang)
        {
            foreach(self::$definition['fields'] as $field => $params)
            {   
                $temp = $this->$field; 
                if(isset($params['lang']) && $params['lang'] && !isset($temp[$lang['id_lang']]))
                {                      
                    $temp[$lang['id_lang']] = '';                        
                }
                $this->$field = $temp;
            }
        }
	}
}