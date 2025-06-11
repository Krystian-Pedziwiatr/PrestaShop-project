<?php
/* Smarty version 4.3.4, created on 2025-06-11 22:54:19
  from '/var/www/html/admin516f36phnm6lye0xir7/themes/default/template/controllers/images/helpers/list/list_action_delete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6849ecfb22a257_20914019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8f8ba39a15434102d7125e65a222952ac06a1ab' => 
    array (
      0 => '/var/www/html/admin516f36phnm6lye0xir7/themes/default/template/controllers/images/helpers/list/list_action_delete.tpl',
      1 => 1749150662,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6849ecfb22a257_20914019 (Smarty_Internal_Template $_smarty_tpl) {
?> <a href="#"
 title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
"
 class="delete"
 onclick="
  <?php if ($_smarty_tpl->tpl_vars['confirm']->value) {?>
    var modalConfirmDeleteType = $('#modalConfirmDeleteType');
    $('.btn-confirm-delete-images-type', modalConfirmDeleteType).attr('data-confirm-url', '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
');
    modalConfirmDeleteType.modal('show');
  <?php } else { ?>
    event.stopPropagation();event.preventDefault()
  <?php }?>
">
<i class="icon-trash"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
