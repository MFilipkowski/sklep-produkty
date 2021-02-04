<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-04 14:01:02
  from '/var/www/html/admin-daniel/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_601bf00e14e406_39601454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6ac27315c3f3b09be5ee7a21875e62f1d802733' => 
    array (
      0 => '/var/www/html/admin-daniel/themes/default/template/content.tpl',
      1 => 1611237233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_601bf00e14e406_39601454 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
