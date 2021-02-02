<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-20 15:25:07
  from '/var/www/html/modules/psgdpr/views/templates/admin/tabs/dataConfig.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fdf5ec3d1bd89_27808962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '645ad514c543db14cb7c28feec7f49194e17f832' => 
    array (
      0 => '/var/www/html/modules/psgdpr/views/templates/admin/tabs/dataConfig.tpl',
      1 => 1608326821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdf5ec3d1bd89_27808962 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel col-lg-10 right-panel">
    <h3>
        <i class="fa fa-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Data visualization and automatic actions','mod'=>'psgdpr'),$_smarty_tpl ) );?>
 <small><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_display']->value,'htmlall','UTF-8' ));?>
</small>
    </h3>
    <form method="post" action="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['moduleAdminLink']->value,'htmlall','UTF-8' ));?>
&page=account" class="form-horizontal">
        <div>
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Find here listed all personal data collected by PrestaShop and your installed modules.','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</p>
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'These data will be used at 2 different levels :','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</p>
            <ul>
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'When a customer requests access to his data: he gets a copy of his personal data collected on your store.','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</li>
                <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'When a customer requests data erasure: if you accept his request, his data will be removed permanently.','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</li>
            </ul>
            <br>

            <div class="panel panel-box col-lg-12">
                <h3>
                    <i class="fa fa-list"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compliant module list','mod'=>'psgdpr'),$_smarty_tpl ) );?>
 <small><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_display']->value,'htmlall','UTF-8' ));?>
</small>
                </h3>
                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Find here listed all the elements that are GDPR compliant.','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</p>

                <div class="registered-modules">
                    <div class="module-card">
                        <div class="module-card-content">
                            <div class="module-card-img">
                                <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['img_path']->value,'htmlall','UTF-8' ));?>
PrestaShop_logo_puffin.png" width="45" heigh="45">
                            </div>
                            <div class="module-card-title">
                                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PrestaShop data','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</span>
                            </div>
                        </div>
                    </div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules']->value, 'module');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
?>
                    <div class="module-card">
                        <div class="module-card-content">
                            <div class="module-card-img">
                                <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['logoPath'],'htmlall','UTF-8' ));?>
" width="45" heigh="45">
                            </div>
                            <div class="module-card-title">
                                <span><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module']->value['displayName'],'htmlall','UTF-8' ));?>
</span>
                            </div>
                        </div>
                    </div>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>

                <article class="alert alert-info" role="alert" data-alert="warning">
                    <ul>
                        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please make sure that you have access to the latest version of these modules to fully benefit the GDPR update.','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</li>
                        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If they are still not displayed in the block above, we invite you to contact their respective developers to have more information about these modules. ','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</li>
                    </ul>
                </article>
            </div>

        </div>
    </form>
</div>

<div class="panel col-lg-10 right-panel">
    <h3>
        <i class="fa fa-database"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manage customer\'s personal data','mod'=>'psgdpr'),$_smarty_tpl ) );?>
 <small><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_display']->value,'htmlall','UTF-8' ));?>
</small>
    </h3>

    <div id="customerSearchBlock">
                <form id="search" class="form-horizontal" action="" v-on:submit.prevent="onSubmit">
                        <div class="form-group" style="margin-bottom: 0px !important">
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                    <div class="text-right">
                        <label class="control-label">
                            <span class="label-tooltip" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search for an existing customer by typing the first letters of his/her name or email.','mod'=>'psgdpr'),$_smarty_tpl ) );?>
">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search for a customer name OR email','mod'=>'psgdpr'),$_smarty_tpl ) );?>

                            </span>
                        </label>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-3">
                    <div class="input-group"> <span class="input-group-addon"><i class="fa fa-search"></i></span> <input v-on:keyup="searchCustomers()" v-model="customer_search" class="form-control"> </div>
                    <div class="help-block">
                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Eg: john doe ...','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</p>
                    </div>
                </div>
                                                                </div>
                    </form>


        <article v-if="typeof customers != 'undefined' && customers.length >= 1" class="alert alert-info" role="alert" data-alert="info" style="margin-bottom: 0px !important">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To visualize all the data that your store has collected from a specific customer, please click on the corresponding customer block','mod'=>'psgdpr'),$_smarty_tpl ) );?>

        </article>
        <div class="customerCards">
            <div v-for="(customer, index) in customers" :id="'customer_'+customer.id_customer" class="customerCard is-collapsed">
                <div class="panel card-inner" v-on:click="toggleMore('customer', customer.id_customer, 'customer_'+customer.id_customer, index)">
                    <div class="panel-heading">
                        <span>(( customer.firstname ))</span> (( customer.lastname ))<span class="pull-right">#(( customer.id_customer ))</span>
                    </div>
                    <div class="panel-body">
                        <span>(( customer.email ))</span>
                        <br>
                        <span class="text-muted"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Orders number','mod'=>'psgdpr'),$_smarty_tpl ) );?>
: (( customer.nb_orders ))</span>
                    </div>
                    <div class="panel-footer">
                        <a v-on:click.stop :href="customer_link+customer.id_customer" target="_blank" class="btn btn-default fancybox"><i class="icon-search"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Details','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</a>
                        <button type="button" v-on:click.stop="deleteCustomer('customer', customer.id_customer, index)" class="btn btn-danger pull-right"><i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove data','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</button>
                        <a v-on:click.stop="downloadInvoices(customer.id_customer, index)" class="btn btn-primary pull-right"><i class="icon-download"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Download invoices','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</a>
                    </div>
                </div>
                <div class="panel card-expander">
                                        <div class="panel-body">

                        <div v-if="customer.customerData.prestashopData" class="panel panel-box col-lg-12">
                            <h3>
                                <i class="fa fa-account"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'General information','mod'=>'psgdpr'),$_smarty_tpl ) );?>
 <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Personal data','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</small>
                            </h3>
                            <div class="col-lg-12">
                                <div class="col-lg-6">
                                    <div class="form-horizontal">
                                        <div class="row">
                                            <label class="control-label col-lg-3"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Gender','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</b></label>
                                            <div class="col-lg-9">
                                                <p class="form-control-static">(( customer.customerData.prestashopData.customerInfo.gender ))</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="control-label col-lg-3"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</b></label>
                                            <div class="col-lg-9">
                                                <p class="form-control-static">(( customer.customerData.prestashopData.customerInfo.firstname )) (( customer.customerData.prestashopData.customerInfo.lastname ))</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="control-label col-lg-3"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Birth date','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</b></label>
                                            <div class="col-lg-9">
                                                <p class="form-control-static">(( customer.customerData.prestashopData.customerInfo.birthday ))</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="control-label col-lg-3"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Age','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</b></label>
                                            <div class="col-lg-9">
                                                <p class="form-control-static">(( customer.customerData.prestashopData.customerInfo.age ))</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="control-label col-lg-3"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</b></label>
                                            <div class="col-lg-9">
                                                <p class="form-control-static">(( customer.customerData.prestashopData.customerInfo.email ))</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="control-label col-lg-3"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Language','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</b></label>
                                            <div class="col-lg-9">
                                                <p class="form-control-static">(( customer.customerData.prestashopData.customerInfo.language ))</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-horizontal">
                                        <div class="row">
                                            <label class="control-label col-lg-3"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Creation date','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</b></label>
                                            <div class="col-lg-9">
                                                <p class="form-control-static">(( customer.customerData.prestashopData.customerInfo.date_add ))</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="control-label col-lg-3"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last visit','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</b></label>
                                            <div class="col-lg-9">
                                                <p class="form-control-static">(( customer.customerData.prestashopData.customerInfo.last_visit ))</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="control-label col-lg-3"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Siret','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</b></label>
                                            <div class="col-lg-9">
                                                <p class="form-control-static">(( customer.customerData.prestashopData.customerInfo.siret ))</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="control-label col-lg-3"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ape','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</b></label>
                                            <div class="col-lg-9">
                                                <p class="form-control-static">(( customer.customerData.prestashopData.customerInfo.ape ))</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="control-label col-lg-3"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Company','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</b></label>
                                            <div class="col-lg-9">
                                                <p class="form-control-static">(( customer.customerData.prestashopData.customerInfo.company ))</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="control-label col-lg-3"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Website','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</b></label>
                                            <div class="col-lg-9">
                                                <p class="form-control-static">(( customer.customerData.prestashopData.customerInfo.website ))</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div v-if="customer.customerData.prestashopData" class="panel panel-box col-lg-12">
                            <h3>
                                <i class="fa fa-account"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addresses','mod'=>'psgdpr'),$_smarty_tpl ) );?>
 <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Personal data','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</small>
                            </h3>
                            <table v-if="customer.customerData.prestashopData.addresses.length >= 1" class="table table-bordered table-hover addresses-table">
                                <thead>
                                    <tr>
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Alias','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Company','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone(s)','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Country','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(address, index) in customer.customerData.prestashopData.addresses">
                                        <td>(( address.alias ))</td>
                                        <td>(( address.company ))</td>
                                        <td>(( address.firstname )) (( address.lastname ))</td>
                                        <td>(( address.address1 )), (( address.address2)), (( address.postcode )) (( address.city ))</td>
                                        <td>(( address.phone )) (( address.phone_mobile ))</td>
                                        <td>(( address.country ))</td>
                                        <td>(( address.date_add ))</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div v-else>
                                <article class="alert alert-warning" role="alert" data-alert="warning">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No addresses','mod'=>'psgdpr'),$_smarty_tpl ) );?>

                                </article>
                            </div>
                        </div>
                        <div v-if="customer.customerData.prestashopData" class="panel panel-box col-lg-12">
                            <h3>
                                <i class="fa fa-account"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Orders','mod'=>'psgdpr'),$_smarty_tpl ) );?>
 <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Personal data','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</small>
                            </h3>
                            <table v-if="customer.customerData.prestashopData.orders.length >= 1" class="table table-bordered table-hover addresses-table">
                                <thead>
                                    <tr>
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order state','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total paid','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(order, index) in customer.customerData.prestashopData.orders">
                                        <td><a :href="'<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['orderLink']->value,'htmlall','UTF-8' ));?>
'+'&id_order='+order.id_order+'&vieworder'" target="_blank"><b>(( order.reference ))</b></a></td>
                                        <td>(( order.payment ))</td>
                                        <td>(( order.order_state ))</td>
                                        <td>(( order.total_paid_tax_incl ))</td>
                                        <td>(( order.date_add ))</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div v-else>
                                <article class="alert alert-warning" role="alert" data-alert="warning">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No orders','mod'=>'psgdpr'),$_smarty_tpl ) );?>

                                </article>
                            </div>
                        </div>
                        <div v-if="customer.customerData.prestashopData" class="panel panel-box col-lg-12">
                            <h3>
                                <i class="fa fa-account"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carts','mod'=>'psgdpr'),$_smarty_tpl ) );?>
 <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Personal data','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</small>
                            </h3>
                            <table v-if="customer.customerData.prestashopData.carts.length >= 1" class="table table-bordered table-hover addresses-table">
                                <thead>
                                    <tr>
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Id','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total product(s)','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(cart, index) in customer.customerData.prestashopData.carts">
                                        <td><a :href="'<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cartLink']->value,'htmlall','UTF-8' ));?>
'+'&id_cart='+cart.id_cart+'&viewcart'" target="_blank"><b>#(( cart.id_cart ))</b></a></td>
                                        <td>(( cart.nb_products ))</td>
                                        <td>(( cart.date_add ))</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div v-else>
                                <article class="alert alert-warning" role="alert" data-alert="warning">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No carts','mod'=>'psgdpr'),$_smarty_tpl ) );?>

                                </article>
                            </div>
                        </div>
                        <div v-if="customer.customerData.prestashopData" class="panel panel-box col-lg-12">
                            <h3>
                                <i class="fa fa-account"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Messages','mod'=>'psgdpr'),$_smarty_tpl ) );?>
 <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Personal data','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</small>
                            </h3>
                            <table v-if="customer.customerData.prestashopData.messages.length >= 1" class="table table-bordered table-hover addresses-table">
                                <thead>
                                    <tr>
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'IP','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Message','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(message, index) in customer.customerData.prestashopData.messages">
                                        <td>(( message.ip ))</td>
                                        <td>(( message.message ))</td>
                                        <td>(( message.date_add ))</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div v-else>
                                <article class="alert alert-warning" role="alert" data-alert="warning">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No messages','mod'=>'psgdpr'),$_smarty_tpl ) );?>

                                </article>
                            </div>
                        </div>
                        <div v-if="customer.customerData.prestashopData" class="panel panel-box col-lg-12">
                            <h3>
                                <i class="fa fa-account"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Last connections','mod'=>'psgdpr'),$_smarty_tpl ) );?>
 <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Personal data','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</small>
                            </h3>
                            <table v-if="customer.customerData.prestashopData.connections.length >= 1" class="table table-bordered table-hover addresses-table">
                                <thead>
                                    <tr>
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Origin request','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Page viewed','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Time on the page','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'IP address','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
                                        <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(connection, index) in customer.customerData.prestashopData.connections">
                                        <td>(( connection.http_referer ))</td>
                                        <td>(( connection.pages ))</td>
                                        <td>(( connection.time ))</td>
                                        <td>(( connection.ipaddress ))</td>
                                        <td>(( connection.date_add ))</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div v-else>
                                <article class="alert alert-warning" role="alert" data-alert="warning">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No connections','mod'=>'psgdpr'),$_smarty_tpl ) );?>

                                </article>
                            </div>
                        </div>
                        <div v-if="customer.customerData.modulesData" v-for="(module, index) in customer.customerData.modulesData" class="panel panel-box col-lg-12">
                            <h3>
                                <i class="fa fa-account"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Module','mod'=>'psgdpr'),$_smarty_tpl ) );?>
: (( index )) <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Personal data','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</small>
                            </h3>
                            <div v-if="module instanceof Array">
                                <table v-if="module.length >= 1" v-for="table in module" class="table table-bordered table-hover addresses-table">
                                    <thead>
                                        <tr>
                                            <th v-for="(val, key, i) in table">(( key ))</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td v-for="(val, key, i) in table">(( val ))</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div v-else>
                                    <article class="alert alert-warning" role="alert" data-alert="warning">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No data','mod'=>'psgdpr'),$_smarty_tpl ) );?>

                                    </article>
                                </div>
                            </div>
                            <div v-else>
                                <article class="alert alert-warning" role="alert" data-alert="warning">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No data','mod'=>'psgdpr'),$_smarty_tpl ) );?>

                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div v-if="isEmail() && found == false" id="email" class="customerCard is-collapsed">
                <div class="panel card-inner" v-on:click="toggleMore('email', customer_search, 'email')">
                    <div class="panel-heading">
                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'EMAIL','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</span>
                        <br>
                    </div>
                    <div class="panel-body" style="padding:23px;">
                        <span>(( customer_search ))</span>
                    </div>
                    <div class="panel-footer">
                        <button type="button" v-on:click.stop="deleteCustomer('email', customer_search)" class="btn btn-danger pull-right"><i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove data','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</button>
                    </div>
                </div>
                <div class="panel card-expander">
                    <div class="panel-body">
                        <div v-if="dataMail" v-for="(module, index) in dataMail.modulesData" class="panel panel-box col-lg-12">
                            <h3>
                                <i class="fa fa-account"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Module','mod'=>'psgdpr'),$_smarty_tpl ) );?>
: (( index )) <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Personal data','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</small>
                            </h3>
                            <div v-if="module instanceof Array">
                                <table v-if="module.length >= 1" v-for="table in module" class="table table-bordered table-hover addresses-table">
                                    <thead>
                                        <tr>
                                            <th v-for="(val, key, i) in table">(( key ))</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td v-for="(val, key, i) in table">(( val ))</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div v-else>
                                    <article class="alert alert-warning" role="alert" data-alert="warning">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No data','mod'=>'psgdpr'),$_smarty_tpl ) );?>

                                    </article>
                                </div>
                            </div>
                            <div v-else>
                                <article class="alert alert-warning" role="alert" data-alert="warning">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No data','mod'=>'psgdpr'),$_smarty_tpl ) );?>

                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div v-if="isPhoneNumber() && found == false" id="phone" class="customerCard is-collapsed">
                <div class="panel card-inner" v-on:click="toggleMore('phone', customer_search, 'phone')">
                    <div class="panel-heading">
                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PHONE','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</span>
                        <br>
                    </div>
                    <div class="panel-body" style="padding:23px;">
                        <span>(( customer_search ))</span>
                    </div>
                    <div class="panel-footer">
                        <button type="button" v-on:click.stop="deleteCustomer('phone', customer_search)" class="btn btn-danger pull-right"><i class="icon-trash"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove data','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</button>
                    </div>
                </div>
                <div class="panel card-expander">
                    <div class="panel-body">
                        <div v-if="dataPhone" v-for="(module, index) in dataPhone.modulesData" class="panel panel-box col-lg-12">
                            <h3>
                                <i class="fa fa-account"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Module','mod'=>'psgdpr'),$_smarty_tpl ) );?>
: (( index )) <small><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Personal data','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</small>
                            </h3>
                            <div v-if="module instanceof Array">
                                <table v-if="module.length >= 1" v-for="table in module" class="table table-bordered table-hover addresses-table">
                                    <thead>
                                        <tr>
                                            <th v-for="(val, key, i) in table">(( key ))</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td v-for="(val, key, i) in table">(( val ))</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div v-else>
                                    <article class="alert alert-warning" role="alert" data-alert="warning">
                                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No data','mod'=>'psgdpr'),$_smarty_tpl ) );?>

                                    </article>
                                </div>
                            </div>
                            <div v-else>
                                <article class="alert alert-warning" role="alert" data-alert="warning">
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No data','mod'=>'psgdpr'),$_smarty_tpl ) );?>

                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <article v-if="found == false && customer_search.length > 0" class="alert alert-warning" role="alert" data-alert="warning">
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is no result in the customer data base for','mod'=>'psgdpr'),$_smarty_tpl ) );?>
 : (( customer_search ))</p>
            <p v-if="!isEmail() && !isPhoneNumber()"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you are looking for someone without a customer account, please search for the complete email address or phone number he left.','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</p>
            <p v-if="isEmail() || isPhoneNumber()"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'However you can continue the erasure process for this address (only for modules that have done the GDPR update).','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</p>
        </article>
    </div>
</div>
<?php }
}
