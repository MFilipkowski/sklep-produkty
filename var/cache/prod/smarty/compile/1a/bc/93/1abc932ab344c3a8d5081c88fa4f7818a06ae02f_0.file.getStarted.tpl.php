<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-20 15:25:07
  from '/var/www/html/modules/psgdpr/views/templates/admin/tabs/getStarted.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fdf5ec3cefce6_81066381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1abc932ab344c3a8d5081c88fa4f7818a06ae02f' => 
    array (
      0 => '/var/www/html/modules/psgdpr/views/templates/admin/tabs/getStarted.tpl',
      1 => 1608326821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fdf5ec3cefce6_81066381 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel col-lg-10 right-panel">
    <h3>
        <i class="fa fa-info-circle"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Get started','mod'=>'psgdpr'),$_smarty_tpl ) );?>
 <small><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_display']->value,'htmlall','UTF-8' ));?>
</small>
    </h3>
    <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Welcome to your GDPR module','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</h2>
    <br>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This interface will help you to become familiar with the GDPR and give you some guidance to help you become compliant with this regulation.','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</p>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This module meets the main regulation\'s requirements concerning personal data of your customers including :','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</p>
    <ol type="1">
        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The right to access their personal data and data portability','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</li>
        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The right to obtain rectification and/or erasure of their personal data','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</li>
        <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The right to give and withdraw consent','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</li>
    </ol>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'It also allows you to keep a record of processing activities (especially for access, consent and erasure).','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</p>
    <p><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Follow our 3 steps to configure your module and help you to become GDPR compliant !','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</b></p>

    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-3">
            <div class="psgdpr-card" data-target="dataConfig">
                <div class="card-header">
                    <h4 class="card-title-size"><i class="fa fa-eye"></i> <span class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manage','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</span></h4>
                </div>
                <div class="card-body">
                    <p class="card-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'See our Personal data management tab to visualize the data collected by PrestaShop and community modules and manage your customers’ personal data.','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="psgdpr-card" data-target="dataConsent">
                <div class="card-header">
                    <h4 class="card-title-size"><i class="fa fa-pencil-alt"></i> <span class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customize','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</span></h4>
                </div>
                <div class="card-body">
                    <p class="card-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customize the consent confirmation checkboxes and consent request message on the different forms of your store, especially for account creation and newsletter subscription.','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="psgdpr-card" data-target="customerActivity">
                <div class="card-header">
                    <h4 class="card-title-size"><i class="fa fa-search"></i> <span class="card-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Keep track','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</span></h4>
                </div>
                <div class="card-body">
                    <p class="card-text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Visualize all of your customers’ actions related to their data and manage the erasure requests.','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</p>
                </div>
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>
    <br>

    <div role="alert" data-alert="info" class="alert alert-info">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Note : Please make sure that you have access to the latest version of your installed module(s) to fully benefit the features of our GDPR module. If one or several of your modules do not provide their data list, we invite you to contact directly the developers of these modules.','mod'=>'psgdpr'),$_smarty_tpl ) );?>

    </div>

    <br>

    <h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'More information about GDPR','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</h3>

    <div class="row">
        <div class="col-lg-1"></div>
        <a href="http://ec.europa.eu/justice/article-29/structure/data-protection-authorities/" target="_blank">
            <div class="col-lg-2">
                <div class="psgdpr-card-useful-link">
                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['img_path']->value,'htmlall','UTF-8' ));?>
souris.png">
                    <h4 class="card-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Data protection authorities websites','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</h4>
                </div>
            </div>
        </a>
        <a href="https://addons.prestashop.com/en/free-prestashop-modules/31944-gdpr-whitepaper-.html" target="_blank">
            <div class="col-lg-2">
                <div class="psgdpr-card-useful-link">
                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['img_path']->value,'htmlall','UTF-8' ));?>
carnet.png">
                    <h4 class="card-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PrestaShop GDPR whitepaper','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</h4>
                </div>
            </div>
        </a>
        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['doc']->value,'htmlall','UTF-8' ));?>
" target="_blank">
            <div class="col-lg-2">
                <div class="psgdpr-card-useful-link">
                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['img_path']->value,'htmlall','UTF-8' ));?>
pdf.png">
                    <h4 class="card-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Module\'s documentation','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</h4>
                </div>
            </div>
        </a>
        <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['youtubeLink']->value,'htmlall','UTF-8' ));?>
" target="_blank">
            <div class="col-lg-2">
                <div class="psgdpr-card-useful-link">
                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['img_path']->value,'htmlall','UTF-8' ));?>
youtube.png">
                    <h4 class="card-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Video','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</h4>
                </div>
            </div>
        </a>
        <a href="http://build.prestashop.com/news/prestashop-and-gdpr/" target="_blank">
            <div class="col-lg-2">
                <div class="psgdpr-card-useful-link">
                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['img_path']->value,'htmlall','UTF-8' ));?>
journal.png">
                    <h4 class="card-link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Build article','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</h4>
                </div>
            </div>
        </a>
        <div class="col-lg-1"></div>
    </div>

    <div role="alert" data-alert="info" class="alert alert-info">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Note : These features are intended to help you to become GDPR compliant. However using them does not guarantee that your site is fully compliant with GDPR requirements. It is ','mod'=>'psgdpr'),$_smarty_tpl ) );?>
 <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'It is your own responsibility','mod'=>'psgdpr'),$_smarty_tpl ) );?>
</b> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'to configure the modules and take all necessary actions to ensure compliance. For any questions, we recommend you to contact a lawyer specializing in personal data legislation questions.','mod'=>'psgdpr'),$_smarty_tpl ) );?>

    </div>
</div>
<?php }
}
