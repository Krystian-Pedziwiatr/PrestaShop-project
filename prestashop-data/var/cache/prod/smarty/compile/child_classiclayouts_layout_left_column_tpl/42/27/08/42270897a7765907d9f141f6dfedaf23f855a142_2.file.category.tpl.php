<?php
/* Smarty version 4.3.4, created on 2025-06-23 21:31:16
  from '/var/www/html/themes/classic/templates/catalog/listing/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6859ab8411e7b0_12648789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42270897a7765907d9f141f6dfedaf23f855a142' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/listing/category.tpl',
      1 => 1749150666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/category-header.tpl' => 1,
    'file:catalog/_partials/category-footer.tpl' => 1,
  ),
),false)) {
function content_6859ab8411e7b0_12648789 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11921006696859ab8411bd65_01503999', 'product_list_header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17572979026859ab8411e046_18713656', 'product_list_footer');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
class Block_11921006696859ab8411bd65_01503999 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_11921006696859ab8411bd65_01503999',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/category-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value), 0, false);
}
}
/* {/block 'product_list_header'} */
/* {block 'product_list_footer'} */
class Block_17572979026859ab8411e046_18713656 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_footer' => 
  array (
    0 => 'Block_17572979026859ab8411e046_18713656',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/category-footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value), 0, false);
}
}
/* {/block 'product_list_footer'} */
}
