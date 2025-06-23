<?php
/* Smarty version 4.3.4, created on 2025-06-23 21:31:16
  from '/var/www/html/themes/classic/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6859ab84412544_75232463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3baf8de772c76a1a3e22a9e92a921fab392d279' => 
    array (
      0 => '/var/www/html/themes/classic/templates/_partials/footer.tpl',
      1 => 1750105227,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6859ab84412544_75232463 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="container">
  <div class="row">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20576692726859ab844104b1_17685467', 'hook_footer_before');
?>

  </div>
</div>
<div class="footer-container">
  <div class="container">
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10699432986859ab84410c19_73148341', 'hook_footer');
?>

    </div>
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16757466616859ab84411178_07877213', 'hook_footer_after');
?>

    </div>
    <div class="row">
      <div class="col-md-12">
        <p class="text-sm-center">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3500428076859ab84411675_57523656', 'copyright_link');
?>

        </p>
      </div>
    </div>
  </div>
</div>
<?php }
/* {block 'hook_footer_before'} */
class Block_20576692726859ab844104b1_17685467 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_20576692726859ab844104b1_17685467',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_10699432986859ab84410c19_73148341 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_10699432986859ab84410c19_73148341',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_16757466616859ab84411178_07877213 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_16757466616859ab84411178_07877213',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_3500428076859ab84411675_57523656 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_3500428076859ab84411675_57523656',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <a href="https://github.com/Krystian-Pedziwiatr" target="_blank" rel="noopener noreferrer nofollow">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Projekt i realizacja Krystian Pędziwiatr','sprintf'=>array('%year%'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( 'Y' )),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

          </a>          
          <?php
}
}
/* {/block 'copyright_link'} */
}
