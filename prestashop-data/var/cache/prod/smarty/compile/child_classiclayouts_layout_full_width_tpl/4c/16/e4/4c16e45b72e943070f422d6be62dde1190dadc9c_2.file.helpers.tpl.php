<?php
/* Smarty version 4.3.4, created on 2025-06-23 22:10:04
  from '/var/www/html/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6859b49c2dcdf7_52246142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c16e45b72e943070f422d6be62dde1190dadc9c' => 
    array (
      0 => '/var/www/html/themes/classic/templates/_partials/helpers.tpl',
      1 => 1749150666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6859b49c2dcdf7_52246142 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/html/var/cache/prod/smarty/compile/child_classiclayouts_layout_full_width_tpl/4c/16/e4/4c16e45b72e943070f422d6be62dde1190dadc9c_2.file.helpers.tpl.php',
    'uid' => '4c16e45b72e943070f422d6be62dde1190dadc9c',
    'call_name' => 'smarty_template_function_renderLogo_2240965616859b49c2cf410_82300966',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_2240965616859b49c2cf410_82300966 */
if (!function_exists('smarty_template_function_renderLogo_2240965616859b49c2cf410_82300966')) {
function smarty_template_function_renderLogo_2240965616859b49c2cf410_82300966(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_2240965616859b49c2cf410_82300966 */
}
