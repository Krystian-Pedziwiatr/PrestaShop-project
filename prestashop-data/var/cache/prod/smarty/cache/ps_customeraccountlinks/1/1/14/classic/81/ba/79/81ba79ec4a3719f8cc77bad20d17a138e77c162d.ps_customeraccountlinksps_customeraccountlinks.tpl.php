<?php
/* Smarty version 4.3.4, created on 2025-06-05 21:29:29
  from 'module:ps_customeraccountlinksps_customeraccountlinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6841f019c10417_60717848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinksps_customeraccountlinks.tpl',
      1 => 1749150666,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_6841f019c10417_60717848 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/prod/smarty/compile/classiclayouts_layout_full_width_tpl/d2/2d/85/d22d851f6d7c12eb35c1c34c8e84baa801a8cea2_2.file.helpers.tpl.php',
    'uid' => 'd22d851f6d7c12eb35c1c34c8e84baa801a8cea2',
    'call_name' => 'smarty_template_function_renderLogo_6812758476841f019907514_48641052',
  ),
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="http://localhost:8080/index.php?controller=my-account" rel="nofollow">
      Twoje konto
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Twoje konto</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li><a href="http://localhost:8080/index.php?controller=guest-tracking" title="Śledzenie zamówienia" rel="nofollow">Śledzenie zamówienia</a></li>
        <li><a href="http://localhost:8080/index.php?controller=my-account" title="Zaloguj się do swojego konta klienta" rel="nofollow">Zaloguj się</a></li>
        <li><a href="http://localhost:8080/index.php?controller=registration" title="Utwórz konto" rel="nofollow">Utwórz konto</a></li>
        <li>
  <a href="//localhost:8080/index.php?fc=module&module=ps_emailalerts&controller=account" title="Moje powiadomienia">
    Moje powiadomienia
  </a>
</li>

       
	</ul>
</div>
<?php }
}
