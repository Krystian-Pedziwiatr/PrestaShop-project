<?php
/* Smarty version 4.3.4, created on 2025-06-23 21:23:41
  from '/var/www/html/modules/psdarkmode/views/templates/hook/displayNav2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6859a9bdeb3de7_04050989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a5ca88c5bc017e38063289b51d655121fe74bf8' => 
    array (
      0 => '/var/www/html/modules/psdarkmode/views/templates/hook/displayNav2.tpl',
      1 => 1750516344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6859a9bdeb3de7_04050989 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="dark-mode-toggle" class="dark-mode-switch">
  <button aria-label="Zmień motyw" class="btn btn-darkmode" onclick="toggleDarkMode()">
    <img src="modules/psdarkmode/views/img/moon.svg" id="darkmode-icon" alt="Tryb ciemny" width="24" height="24"/>
  </button>
</div>

<?php }
}
