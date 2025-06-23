<?php
/* Smarty version 4.3.4, created on 2025-06-23 21:23:41
  from '/var/www/html/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6859a9bdc2e801_92521843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '877471f7ffff460284505e4a5618af310ea74e19' => 
    array (
      0 => '/var/www/html/themes/classic/templates/page.tpl',
      1 => 1749150666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6859a9bdc2e801_92521843 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10019148526859a9bdc22a78_87754551', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_15460279736859a9bdc23041_31528809 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_14277020066859a9bdc22d29_30838990 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15460279736859a9bdc23041_31528809', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_11596879336859a9bdc28ed7_00816201 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_7390386186859a9bdc292b1_26228243 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_12552078026859a9bdc28b75_13945776 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11596879336859a9bdc28ed7_00816201', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7390386186859a9bdc292b1_26228243', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_6753530026859a9bdc299d3_42834557 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_2079239746859a9bdc29761_84798715 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6753530026859a9bdc299d3_42834557', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_10019148526859a9bdc22a78_87754551 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10019148526859a9bdc22a78_87754551',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_14277020066859a9bdc22d29_30838990',
  ),
  'page_title' => 
  array (
    0 => 'Block_15460279736859a9bdc23041_31528809',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_12552078026859a9bdc28b75_13945776',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_11596879336859a9bdc28ed7_00816201',
  ),
  'page_content' => 
  array (
    0 => 'Block_7390386186859a9bdc292b1_26228243',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_2079239746859a9bdc29761_84798715',
  ),
  'page_footer' => 
  array (
    0 => 'Block_6753530026859a9bdc299d3_42834557',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14277020066859a9bdc22d29_30838990', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12552078026859a9bdc28b75_13945776', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2079239746859a9bdc29761_84798715', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
