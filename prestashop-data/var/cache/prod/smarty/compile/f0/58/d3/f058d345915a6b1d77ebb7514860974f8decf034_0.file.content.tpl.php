<?php
/* Smarty version 4.3.4, created on 2025-06-05 21:33:27
  from '/var/www/html/admin516f36phnm6lye0xir7/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6841f107f01612_14860744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f058d345915a6b1d77ebb7514860974f8decf034' => 
    array (
      0 => '/var/www/html/admin516f36phnm6lye0xir7/themes/default/template/content.tpl',
      1 => 1749150662,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6841f107f01612_14860744 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
