<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-04 14:01:01
  from '/var/www/html/modules/payu/views/templates/admin/header16.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_601bf00d5ce176_09747183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33563a512fac6228baba3032f884e06ae2de10c2' => 
    array (
      0 => '/var/www/html/modules/payu/views/templates/admin/header16.tpl',
      1 => 1611237233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_601bf00d5ce176_09747183 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['show_refund']->value) {?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'refund_fieldset', null);?>
		<div class="well">
			<h3><img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' ));?>
/logo.gif" alt="" /> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Make a full or partial refund','mod'=>'payu'),$_smarty_tpl ) );?>
</h3>
			<div class="row">
			<form action="" method="post" onsubmit="return confirm('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you really want to submit the refund request?','mod'=>'payu'),$_smarty_tpl ) );?>
');">
				<div class="col-lg-4">
				<select name="payu_refund_type" id="payu_refund_type">
					<option value="full"<?php if ($_smarty_tpl->tpl_vars['payu_refund_type']->value == "full") {?> selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Full refund','mod'=>'payu'),$_smarty_tpl ) );?>
</option>
					<option value="partial"<?php if ($_smarty_tpl->tpl_vars['payu_refund_type']->value == "partial") {?> selected="selected"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Partial refund','mod'=>'payu'),$_smarty_tpl ) );?>
</option>
				</select>
				</div>
				<div class="col-lg-1" style="text-align: right">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'amount','mod'=>'payu'),$_smarty_tpl ) );?>

				</div>
				<div class="col-lg-4">
					<input type="text" id="payu_refund_amount" name="payu_refund_amount" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payu_refund_amount']->value,'htmlall','UTF-8' ));?>
"/>
				</div>
				<div class="col-lg-2">
				<input type="submit" name="submitPayuRefund" class="btn btn-primary" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Perform refund','mod'=>'payu'),$_smarty_tpl ) );?>
"/>
				</div>
			</form>
			</div>
			<?php if (count($_smarty_tpl->tpl_vars['payu_refund_errors']->value)) {?>
				<br/>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payu_refund_errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
					<p class="error"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['error']->value,'htmlall','UTF-8' ));?>
</p>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php }?>
		</div>
		<?php echo '<script'; ?>
>
			
			$(document).ready(function() {
				var refund_type_select = $('#payu_refund_type');
				var set_type = function(type) {
					if ('full' == type) {
						$('#payu_refund_amount').attr('readonly', true).val('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['payu_refund_full_amount']->value,'htmlall','UTF-8' ));?>
');
					} else {
						$('#payu_refund_amount').attr('readonly', false);
					}
				};
				set_type(refund_type_select.val());
				refund_type_select.on('change', function(){
					set_type(refund_type_select.val());
				});
			});
			
		<?php echo '</script'; ?>
>
	<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo '<script'; ?>
>
		$(document).ready(function() {
			$("<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['refund_fieldset']->value,'javascript','UTF-8' ));?>
").insertAfter($('.panel-heading').first());
		});
	<?php echo '</script'; ?>
>
<?php }
}
}
