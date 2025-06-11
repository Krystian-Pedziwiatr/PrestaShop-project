<?php
/* Smarty version 4.3.4, created on 2025-06-11 22:20:12
  from '/var/www/html/admin516f36phnm6lye0xir7/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6849e4fc5360a6_28539216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07fb1894c050884d3018c899ca57d6872802b0e9' => 
    array (
      0 => '/var/www/html/admin516f36phnm6lye0xir7/themes/new-theme/template/content.tpl',
      1 => 1749150661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6849e4fc5360a6_28539216 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
