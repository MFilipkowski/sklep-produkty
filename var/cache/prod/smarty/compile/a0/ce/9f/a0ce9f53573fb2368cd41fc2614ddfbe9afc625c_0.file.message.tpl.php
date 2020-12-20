<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-20 14:19:14
  from '/var/www/html/admin-daniel/themes/default/template/controllers/customer_threads/helpers/view/message.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fdf4f52a7a232_25155647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0ce9f53573fb2368cd41fc2614ddfbe9afc625c' => 
    array (
      0 => '/var/www/html/admin-daniel/themes/default/template/controllers/customer_threads/helpers/view/message.tpl',
      1 => 1606918382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdf4f52a7a232_25155647 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['message']->value['id_employee']) {?>
	<?php $_smarty_tpl->_assignInScope('type', "customer");
} else { ?>
	<?php $_smarty_tpl->_assignInScope('type', "employee");
}?>

<div class="message-item<?php if ($_smarty_tpl->tpl_vars['initial']->value) {?>-initial-body<?php }?>">
<?php if (!$_smarty_tpl->tpl_vars['initial']->value) {?>
	<div class="message-avatar">
		<div class="avatar-md">
			<?php if ($_smarty_tpl->tpl_vars['type']->value == 'customer') {?>
				<i class="icon-user icon-3x"></i>
			<?php } else { ?>
				<?php if (isset($_smarty_tpl->tpl_vars['current_employee']->value->firstname)) {?><img src="<?php echo $_smarty_tpl->tpl_vars['message']->value['employee_image'];?>
" alt="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current_employee']->value->firstname,'html','UTF-8' ));?>
" /><?php }?>
			<?php }?>
		</div>
	</div>
<?php }?>
	<div class="message-body">
		<?php if (!$_smarty_tpl->tpl_vars['initial']->value) {?>
			<h4 class="message-item-heading">
				<i class="icon-mail-reply text-muted"></i>
					<?php if ($_smarty_tpl->tpl_vars['type']->value == 'customer') {?>
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['message']->value['customer_name'],'html','UTF-8' ));?>

					<?php } else { ?>
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['message']->value['employee_name'],'html','UTF-8' ));?>

					<?php }?>
			</h4>
		<?php }?>
		<span class="message-date">&nbsp;<i class="icon-calendar"></i> - <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['message']->value['date_add'],'full'=>0),$_smarty_tpl ) );?>
 - <i class="icon-time"></i> <?php echo substr($_smarty_tpl->tpl_vars['message']->value['date_add'],11,5);?>
</span>
		<?php if (isset($_smarty_tpl->tpl_vars['message']->value['file_name'])) {?> <span class="message-product">&nbsp;<i class="icon-link"></i> <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['message']->value['file_name'],'html','UTF-8' ));?>
" class="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Attachment",'d'=>'Admin.Catalog.Feature'),$_smarty_tpl ) );?>
</a></span><?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['message']->value['product_name'])) {?> <span class="message-attachment">&nbsp;<i class="icon-book"></i> <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['message']->value['product_link'],'html','UTF-8' ));?>
" class="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Product",'d'=>'Admin.Global'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['message']->value['product_name'],'html','UTF-8' ));?>
 </a></span><?php }?>
		<p class="message-item-text"><?php echo nl2br(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['message']->value['message'],'html','UTF-8' )));?>
</p>
	</div>
</div>
<?php }
}
