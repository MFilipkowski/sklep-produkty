<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-20 15:25:07
  from '/var/www/html/modules/psgdpr/views/templates/admin/tabs/dataConsent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fdf5ec3d57383_32567274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5bb68cdd675f801916a409b403048f60eaae4e4' => 
    array (
      0 => '/var/www/html/modules/psgdpr/views/templates/admin/tabs/dataConsent.tpl',
      1 => 1608326821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdf5ec3d57383_32567274 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel col-lg-10 right-panel">
    <h3>
        <i class="fa fa-wrench"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configure your checkboxes','mod'=>'psgdpr'),$_smarty_tpl ) );?>
 <small><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_display']->value,'htmlall','UTF-8' ));?>
</small>
    </h3>
    <form method="post" action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['moduleAdminLink']->value,'htmlall','UTF-8' ));?>
&page=dataConsent" class="form-horizontal">
        <div>
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please customize your consent request messages in the dedicated fields below :','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</p>
            <article class="alert alert-info" role="alert" data-alert="info">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We recommend you to put a link to your confidentiality policy page in each of your custom messages. Be aware that a dedicated confidentiality policy page is required on your website; if you do not have one yet, please click','mod'=>'psgdpr'),$_smarty_tpl ) );?>
 <a target="_blank" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cmsConfPage']->value,'htmlall','UTF-8' ));?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'here','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</a>.
            </article>
            <br><br>
                        <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-3">
                    <div class="text-right">
                        <label class="boldtext control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Account creation form','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</label>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                    <span class="switch prestashop-switch fixed-width-lg">
                        <input class="yes" type="radio" name="psgdpr_creation_form_switch" id="switch_account_creation_on" data-toggle="collapse" data-target="#account_creation_message:not(.in)" value="1" <?php if ($_smarty_tpl->tpl_vars['switchCreationForm']->value == 1) {?>checked="checked"<?php }?>>
                        <label for="switch_account_creation_on" class="radioCheck"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'YES','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</label>

                        <input class="no" type="radio" name="psgdpr_creation_form_switch" id="switch_account_creation_off" data-toggle="collapse" data-target="#account_creation_message.in" value="0" <?php if ($_smarty_tpl->tpl_vars['switchCreationForm']->value == 0) {?>checked="checked"<?php }?>>
                        <label for="switch_account_creation_off" class="radioCheck"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'NO','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</label>
                        <a class="slide-button btn"></a>
                    </span>
                </div>
            </div>
                        <?php if ($_smarty_tpl->tpl_vars['switchCreationForm']->value == 1) {?>
            <div id="account_creation_message" class="collapse in">
            <?php } else { ?>
            <div id="account_creation_message" class="collapse">
            <?php }?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
                <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                    <div class="translatable-field lang-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
                <?php }?>
                <div class="form-group">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-3">
                        <div class="text-right">
                            <label class="control-label">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Consent request message','mod'=>'psgdpr'),$_smarty_tpl ) );?>

                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-6">
                        <textarea class="autoload_rte" name="psgdpr_creation_form_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
" text="" rows="4" cols="80"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['accountCreationForm']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']],'htmlall','UTF-8' ));?>
</textarea>
                        <div class="help-block">
                            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This message will be displayed on the customer creation form','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</p>
                        </div>
                    </div>
                    <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-3">
                            <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['iso_code'],'htmlall','UTF-8' ));?>

                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?>
                                <li><a class="currentLang" data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['id_lang'],'htmlall','UTF-8' ));?>
" href="javascript:hideOtherLanguage(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['id_lang'],'javascript' ));?>
);" tabindex="-1"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['name'],'htmlall','UTF-8' ));?>
</a></li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        </div>
                    <?php }?>
                </div>
                <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                    </div>
                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>

                        <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-3">
                    <div class="text-right">
                        <label class="boldtext control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customer account area','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</label>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                    <span class="switch prestashop-switch fixed-width-lg">
                        <input class="yes" type="radio" name="psgdpr_customer_form_switch" id="switch_account_customer_on" data-toggle="collapse" data-target="#account_customer_message:not(.in)" value="1" <?php if ($_smarty_tpl->tpl_vars['switchCustomerForm']->value == 1) {?>checked="checked"<?php }?>>
                        <label for="switch_account_customer_on" class="radioCheck"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'YES','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</label>

                        <input class="no" type="radio" name="psgdpr_customer_form_switch" id="switch_account_customer_off" data-toggle="collapse" data-target="#account_customer_message.in" value="0" <?php if ($_smarty_tpl->tpl_vars['switchCustomerForm']->value == 0) {?>checked="checked"<?php }?>>
                        <label for="switch_account_customer_off" class="radioCheck"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'NO','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</label>
                        <a class="slide-button btn"></a>
                    </span>
                </div>
            </div>
                        <?php if ($_smarty_tpl->tpl_vars['switchCustomerForm']->value == 1) {?>
            <div id="account_customer_message" class="collapse in">
            <?php } else { ?>
            <div id="account_customer_message" class="collapse">
            <?php }?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
                <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                    <div class="translatable-field lang-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
                <?php }?>
                <div class="form-group">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-3">
                        <div class="text-right">
                            <label class="control-label">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Consent request message','mod'=>'psgdpr'),$_smarty_tpl ) );?>

                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-6">
                        <textarea class="autoload_rte" name="psgdpr_customer_form_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
" text="" rows="4" cols="80"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['accountCustomerForm']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']],'htmlall','UTF-8' ));?>
</textarea>
                        <div class="help-block">
                            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This message will be displayed in the My personal information tab in the customer account','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</p>
                        </div>
                    </div>
                    <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-3">
                            <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['iso_code'],'htmlall','UTF-8' ));?>

                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?>
                                <li><a class="currentLang" data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['id_lang'],'htmlall','UTF-8' ));?>
" href="javascript:hideOtherLanguage(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['id_lang'],'javascript' ));?>
);" tabindex="-1"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['name'],'htmlall','UTF-8' ));?>
</a></li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        </div>
                    <?php }?>
                </div>
                <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                    </div>
                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>

            <?php if (count($_smarty_tpl->tpl_vars['modules']->value) >= 1) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules']->value, 'module');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
?>
                        <div class="form-group">
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-3">
                    <div class="text-right">
                        <label class="control-label"><b><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['displayName'],'htmlall','UTF-8' ));?>
</b></label>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                    <span class="switch prestashop-switch fixed-width-lg">
                        <input class="yes" type="radio" name="psgdpr_switch_registered_module_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['id_module'],'htmlall','UTF-8' ));?>
" id="switch_registered_module_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['id_module'],'htmlall','UTF-8' ));?>
_on" data-toggle="collapse" data-target="#registered_module_message_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['id_module'],'htmlall','UTF-8' ));?>
:not(.in)" value="1" <?php if ($_smarty_tpl->tpl_vars['module']->value['active'] == 1) {?>checked="checked"<?php }?>>
                        <label for="switch_registered_module_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['id_module'],'htmlall','UTF-8' ));?>
_on" class="radioCheck"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'YES','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</label>

                        <input class="no" type="radio" name="psgdpr_switch_registered_module_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['id_module'],'htmlall','UTF-8' ));?>
" id="switch_registered_module_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['id_module'],'htmlall','UTF-8' ));?>
_off" data-toggle="collapse" data-target="#registered_module_message_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['id_module'],'htmlall','UTF-8' ));?>
.in" value="0" <?php if ($_smarty_tpl->tpl_vars['module']->value['active'] == 0) {?>checked="checked"<?php }?>>
                        <label for="switch_registered_module_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['id_module'],'htmlall','UTF-8' ));?>
_off" class="radioCheck"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'NO','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</label>
                        <a class="slide-button btn"></a>
                    </span>
                </div>
            </div>
                        <?php if ($_smarty_tpl->tpl_vars['module']->value['active'] == 1) {?>
            <div id="registered_module_message_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['id_module'],'htmlall','UTF-8' ));?>
" class="collapse in">
            <?php } else { ?>
            <div id="registered_module_message_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['id_module'],'htmlall','UTF-8' ));?>
" class="collapse">
            <?php }?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
                <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                    <div class="translatable-field lang-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>style="display:none"<?php }?>>
                <?php }?>
                <div class="form-group">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-3">
                        <div class="text-right">
                            <label class="control-label">
                                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Consent request message','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</p>
                                <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['logoPath'],'htmlall','UTF-8' ));?>
" width="50" heigh="50">
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-6">
                        <textarea class="autoload_rte" name="psgdpr_registered_module_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['id_module'],'htmlall','UTF-8' ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
" text="" rows="4" cols="80"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['message'][$_smarty_tpl->tpl_vars['language']->value['id_lang']],'htmlall','UTF-8' ));?>
</textarea>
                        <div class="help-block">
                            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This message will be accomplanied by a checkbox','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</p>
                        </div>
                    </div>
                    <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-3">
                            <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
                                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['iso_code'],'htmlall','UTF-8' ));?>

                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?>
                                <li><a class="currentLang" data-id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['id_lang'],'htmlall','UTF-8' ));?>
" href="javascript:hideOtherLanguage(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['id_lang'],'javascript' ));?>
);" tabindex="-1"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['name'],'htmlall','UTF-8' ));?>
</a></li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul>
                        </div>
                    <?php }?>
                </div>
                <?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                    </div>
                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>

        </div>
        <article class="alert alert-info" role="alert" data-alert="info">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For other installed modules requiring consent confirmation, they will be displayed in this tab only if they have done the GDPR update. The corresponding fields will automatically appear in order for you to customize the consent confirmation checkboxes.','mod'=>'psgdpr'),$_smarty_tpl ) );?>

        </article>
        <div class="panel-footer">
            <button type="submit" value="1" id="submitDataConsent" name="submitDataConsent" class="btn btn-default pull-right">
                <i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'psgdpr'),$_smarty_tpl ) );?>

            </button>
        </div>
    </form>
</div><?php }
}
