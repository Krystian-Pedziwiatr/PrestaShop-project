<?php
/* Smarty version 4.3.4, created on 2025-06-05 21:29:31
  from 'module:ps_brandlistviewstemplateshookps_brandlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6841f01b59f9a0_12161697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad7605d3e1afaa968ac113b0444601df2cff1153' => 
    array (
      0 => 'module:ps_brandlistviewstemplateshookps_brandlist.tpl',
      1 => 1749150666,
      2 => 'module',
    ),
    '55b14f14c5e6f59d5eb0a3fcbba18cb875222387' => 
    array (
      0 => 'module:ps_brandlistviewstemplates_partialsbrand_text.tpl',
      1 => 1749150666,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_6841f01b59f9a0_12161697 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/prod/smarty/compile/classiclayouts_layout_left_column_tpl/d2/2d/85/d22d851f6d7c12eb35c1c34c8e84baa801a8cea2_2.file.helpers.tpl.php',
    'uid' => 'd22d851f6d7c12eb35c1c34c8e84baa801a8cea2',
    'call_name' => 'smarty_template_function_renderLogo_14573278286841f01b436840_00512647',
  ),
));
?>
<div id="search_filters_brands">
  <section class="facet">
          <a href="http://localhost:8080/index.php?controller=manufacturer" class="h6 text-uppercase facet-label" title="producenci">
        Marki
      </a>
    
    <div>
              
<ul>
            <li class="facet-label">
        <a href="http://localhost:8080/index.php?id_manufacturer=2&amp;controller=manufacturer" title="Graphic Corner">
          Graphic Corner
        </a>
      </li>
                <li class="facet-label">
        <a href="http://localhost:8080/index.php?id_manufacturer=1&amp;controller=manufacturer" title="Studio Design">
          Studio Design
        </a>
      </li>
      </ul>
          </div>
  </section>
</div>
<?php }
}
