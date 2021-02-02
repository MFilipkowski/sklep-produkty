<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-20 15:25:07
  from '/var/www/html/modules/psgdpr/views/templates/admin/menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fdf5ec3cd7203_94580349',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88eb9602a7ac382f44e61418313ba2afb144d20d' => 
    array (
      0 => '/var/www/html/modules/psgdpr/views/templates/admin/menu.tpl',
      1 => 1608326821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./tabs/getStarted.tpl' => 1,
    'file:./tabs/dataConfig.tpl' => 1,
    'file:./tabs/dataConsent.tpl' => 1,
    'file:./tabs/customerActivity.tpl' => 1,
    'file:./tabs/help.tpl' => 1,
  ),
),false)) {
function content_5fdf5ec3cd7203_94580349 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="modulecontent" class="clearfix">
    <div id="psgdpr-menu">
        <div class="col-lg-2">
            <div class="list-group" v-on:click.prevent>
                <a href="#" class="list-group-item" v-bind:class="{ 'active': isActive('getStarted') }" v-on:click="makeActive('getStarted')"><i class="fa fa-gavel"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Get started','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</a>
                <a href="#" class="list-group-item" v-bind:class="{ 'active': isActive('dataConfig') }" v-on:click="makeActive('dataConfig')"><i class="fa fa-user-secret"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Personal data management','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</a>
                <a href="#" class="list-group-item" v-bind:class="{ 'active': isActive('dataConsent') }" v-on:click="makeActive('dataConsent')"><i class="fa fa-check-square"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Consent checkbox customization','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</a>
                <a href="#" class="list-group-item" v-bind:class="{ 'active': isActive('customerActivity') }" v-on:click="makeActive('customerActivity')"><i class="fa fa-user-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customer activity tracking','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</a>
                <?php if (($_smarty_tpl->tpl_vars['apifaq']->value != '')) {?>
                    <a href="#" class="list-group-item" v-bind:class="{ 'active': isActive('faq') }" v-on:click="makeActive('faq')"><i class="fa fa-question-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Help','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</a>
                <?php }?>
            </div>
            <div class="list-group" v-on:click.prevent>
                <a class="list-group-item" style="text-align:center"><i class="icon-info"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Version','mod'=>'psgdpr'),$_smarty_tpl ) );?>
 <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_version']->value,'htmlall','UTF-8' ));?>
 | <i class="icon-info"></i> PrestaShop <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ps_version']->value,'htmlall','UTF-8' ));?>
</a>
            </div>
        </div>
    </div>

        <div id="getStarted" class="psgdpr_menu addons-hide">
        <?php $_smarty_tpl->_subTemplateRender("file:./tabs/getStarted.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    <div id="dataConfig" class="psgdpr_menu addons-hide">
        <?php $_smarty_tpl->_subTemplateRender("file:./tabs/dataConfig.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    <div id="dataConsent" class="psgdpr_menu addons-hide">
        <?php $_smarty_tpl->_subTemplateRender("file:./tabs/dataConsent.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    <div id="customerActivity" class="psgdpr_menu addons-hide">
        <?php $_smarty_tpl->_subTemplateRender("file:./tabs/customerActivity.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

    <div id="faq" class="psgdpr_menu addons-hide">
        <?php if (($_smarty_tpl->tpl_vars['apifaq']->value != '')) {?>
            <?php $_smarty_tpl->_subTemplateRender("file:./tabs/help.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
    </div>

</div>

<?php echo '<script'; ?>
 type="text/javascript">
    var base_url = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ps_base_dir']->value,'htmlall','UTF-8' ));?>
";
    var isPs17 = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['isPs17']->value,'htmlall','UTF-8' ));?>
";
    var moduleName = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_name']->value,'htmlall','UTF-8' ));?>
";
    var currentPage = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentPage']->value,'htmlall','UTF-8' ));?>
";
    var moduleAdminLink = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['moduleAdminLink']->value,'htmlall','UTF-8' ));?>
";
    var psgdpr_adminController = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['psgdpr_adminController']->value,'htmlall','UTF-8' ));?>
";
    var adminControllerInvoices = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['adminControllerInvoices']->value,'htmlall','UTF-8' ));?>
";
    var ps_version = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['isPs17']->value,'htmlall','UTF-8' ));?>
";
    var customer_link = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['customer_link']->value,'htmlall','UTF-8' ));?>
";

    var messageSuccessCopy = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Url has been copied to the clipboard!','mod'=>'psgdpr','js'=>1),$_smarty_tpl ) );?>
";
    var messageSuccessInvoices = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoices have been successfully downloaded.','mod'=>'psgdpr','js'=>1),$_smarty_tpl ) );?>
";
    var messageErrorInvoices = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No invoices available for this customer.','mod'=>'psgdpr','js'=>1),$_smarty_tpl ) );?>
";
    var messageDeleteTitle = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Are you sure?','mod'=>'psgdpr','js'=>1),$_smarty_tpl ) );?>
";
    var messageDeleteText = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attention! This action is irreversible. Please make sure you have downloaded all of the customer’s invoices (if he has any) before clicking on Confirm erasure.','mod'=>'psgdpr','js'=>1),$_smarty_tpl ) );?>
";
    var messageDeleteCancelText = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel action','mod'=>'psgdpr','js'=>1),$_smarty_tpl ) );?>
";
    var messageDeleteConfirmText = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Confirm Erasure','mod'=>'psgdpr','js'=>1),$_smarty_tpl ) );?>
";
    var messageDeleteSuccess = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The customer\'s data has been successfully deleted!','mod'=>'psgdpr','js'=>1),$_smarty_tpl ) );?>
";
    var datatableExport = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Export','mod'=>'psgdpr','js'=>1),$_smarty_tpl ) );?>
";
<?php echo '</script'; ?>
>
<?php }
}
