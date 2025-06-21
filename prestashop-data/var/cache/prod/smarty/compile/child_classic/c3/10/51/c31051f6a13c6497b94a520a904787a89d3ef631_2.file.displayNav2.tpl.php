<?php
/* Smarty version 4.3.4, created on 2025-06-21 18:02:40
  from '/var/www/html/modules/pscustomstyle/views/templates/hook/displayNav2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6856d7a0e82655_22402810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c31051f6a13c6497b94a520a904787a89d3ef631' => 
    array (
      0 => '/var/www/html/modules/pscustomstyle/views/templates/hook/displayNav2.tpl',
      1 => 1750528626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6856d7a0e82655_22402810 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="custom-style-menu" class="custom-style-container">
  <button class="btn-style-toggle" onclick="toggleStyleMenu()" aria-label="Ustawienia wyglądu">
    <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['module_dir']->value, ENT_QUOTES, 'UTF-8');?>
views/img/style.svg" alt="Style" width="24" height="24">
  </button>
  <div id="style-dropdown" class="style-dropdown hidden">
    <p><strong>Styl tekstu:</strong></p>
    <button onclick="document.body.classList.toggle('large-text')">Większy tekst</button>
    <button onclick="document.body.classList.toggle('bold-text')">Pogrubienie</button>
    <hr>
    <p><strong>Motyw kolorystyczny:</strong></p>
    <button onclick="setColorTheme('blue')">Niebieski</button>
    <button onclick="setColorTheme('green')">Zielony</button>
  </div>
</div>
<?php }
}
