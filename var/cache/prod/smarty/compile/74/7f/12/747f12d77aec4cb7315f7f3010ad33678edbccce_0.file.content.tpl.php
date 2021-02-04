<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-04 14:00:59
  from '/var/www/html/admin-daniel/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_601bf00bb22393_44879839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '747f12d77aec4cb7315f7f3010ad33678edbccce' => 
    array (
      0 => '/var/www/html/admin-daniel/themes/new-theme/template/content.tpl',
      1 => 1611237233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_601bf00bb22393_44879839 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
