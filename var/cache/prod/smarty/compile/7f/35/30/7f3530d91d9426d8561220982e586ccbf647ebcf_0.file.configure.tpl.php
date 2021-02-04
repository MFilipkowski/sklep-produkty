<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-04 16:05:00
  from '/var/www/html/modules/emarketing/views/templates/admin/configure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_601c0d1c289a52_13690314',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f3530d91d9426d8561220982e586ccbf647ebcf' => 
    array (
      0 => '/var/www/html/modules/emarketing/views/templates/admin/configure.tpl',
      1 => 1611237233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_601c0d1c289a52_13690314 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
    <div class="panel emarketing informations col-lg-10 col-lg-offset-1">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="row emarketing_header">
                <div class="presentation col-lg-6">
                    <div class="col-lg-12">
                        <div class="row">
                            <p style="font-size: 40px; font-weight: bold; margin-top: 55px; margin-bottom: 20px; margin-left: -10px;"><img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/ps-logo.png" alt="Prestashop Ads" style="width: 440px; height: 110px;" /></p>
                            <p style="margin-bottom: 20px;">
                                <b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Welcome to PrestaShop Ads.','mod'=>'emarketing'),$_smarty_tpl ) );?>
</b> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This plugin generates a product data feed for Google Shopping and Facebook / Instagram. Furthermore it generates Conversion Tracking and installs it to your Webshop.','mod'=>'emarketing'),$_smarty_tpl ) );?>

                            </p>
                            <?php if ($_smarty_tpl->tpl_vars['emptyShopToken']->value) {?>
                                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click [1]Sign up[/1] to create your PrestaShop Ads account.','tags'=>array('<b>'),'mod'=>'emarketing'),$_smarty_tpl ) );?>
<br>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To connect your existing PrestaShop Ads account, click [1]Merge account[/1].','tags'=>array('<b>'),'mod'=>'emarketing'),$_smarty_tpl ) );?>
</p>
                                <p>
                                    <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['signupUrl']->value,'html','UTF-8' ));?>
" target="_blank" rel="noopener noreferrer" onclick="setTimeout(refresh, 5000);"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign up','mod'=>'emarketing'),$_smarty_tpl ) );?>
</a>
                                    <a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['linkUrl']->value,'html','UTF-8' ));?>
" target="_blank" rel="noopener noreferrer" onclick="setTimeout(refresh, 5000);"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Merge account','mod'=>'emarketing'),$_smarty_tpl ) );?>
</a>
                                </p>
                            <?php } else { ?>
                                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click [1]Login[/1] to log in to your PrestaShop Ads account.','tags'=>array('<b>'),'mod'=>'emarketing'),$_smarty_tpl ) );?>
</p>
                                <p><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['loginUrl']->value,'html','UTF-8' ));?>
" target="_blank" rel="noopener noreferrer"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Login','mod'=>'emarketing'),$_smarty_tpl ) );?>
</a></p>
                            <?php }?>
                            <p>
                                <a href="https://intercom.help/prestashop-ads/" target="_blank" class="faqbutton" rel="noopener noreferrer">FAQ</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="bgimage col-lg-6 text-center">
                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/shape_bg_img.png" style="width: 434px; height: 255px; position: absolute;" />
                    <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/PS_ads_img.png" style="width: 296px; height: 224px; position: relative; left: 75px; top: 35px;" />
                </div>
            </div>
            <div class="row emarketing-content">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="row">
                        <div class="col-lg-2">
                            <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/catalog_upload_img.png"/>
                        </div>
                        <div class="col-lg-10">
                            <p class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Simplified catalog upload','mod'=>'emarketing'),$_smarty_tpl ) );?>
</p>
                            <p class="content"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'We help you create an account, generate your product feed and upload it to Google Merchant Center. With a new account, Google will credit back what you spend in the first 30 days, up to 120€.','mod'=>'emarketing'),$_smarty_tpl ) );?>
</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/google_smart_shopping_campaign_img.png"/>
                        </div>
                        <div class="col-lg-10">
                            <p class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Smart Shopping campaigns on Google','mod'=>'emarketing'),$_smarty_tpl ) );?>
</p>
                            <p class="content"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'On PrestaShop Ads, you only need to set your budget to launch a Smart Shopping campaign on Google. Your products will appear on Google Search, Display, Gmail and YouTube, on mobile and desktop.','mod'=>'emarketing'),$_smarty_tpl ) );?>
</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'html','UTF-8' ));?>
views/img/competitors_analysis_img.png"/>
                        </div>
                        <div class="col-lg-10">
                            <p class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Competitors Analysis','mod'=>'emarketing'),$_smarty_tpl ) );?>
</p>
                            <p class="content"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'If you sell products that others are selling, you can monitor competitors\' prices on Amazon, eBay and Shopping ads. Create alerts to reprice your articles and focus your ads on your most promising products.','mod'=>'emarketing'),$_smarty_tpl ) );?>
</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="clear: both;">&nbsp;</div>
</div>

<style type="text/css">
    .informations {
        font-family: OpenSans-Regular, sans-serif;
        font-size: 16px;
        color: #363A41;
        letter-spacing: 0;
        line-height: 24px;
    }
    .emarketing {
        padding: 0 16px 20px !important;
    }
    .emarketing img {
        display: block;
        height: 257px;
        margin: 0;
    }
    .emarketing a, .emarketing a:hover, .emarketing a:active, .emarketing a:focus {
        display: inline-block;
        background-color: #24B9D7;
        border: 1px solid #24B9D7;
        border-radius: 1px;
        padding: 5px 12px;
        margin-right: 20px;
        text-decoration: none;
        color: #fff;
        font-size: 14px;
        font-weight: bold;
    }
    a.faqbutton {
        color: #24B9D7 !important;
        background-color: #fff !important;
    }
    .emarketing_header {
        border-bottom: 1px solid #ccc;
        height: 435px;
    }
    .emarketing-content {
        margin: 20px 0;
    }
    .emarketing-content img {
        width: 90px;
        height: 90px;
        margin-bottom: 15px;
    }
    .emarketing-content .row {
        margin: 15px 0 35px 0;
    }
    .emarketing-content .row:last-child{
        margin-bottom: 0;
    }
    .emarketing-content .row i{
        font-size: 34px;
    }
    .emarketing-content .row .title{
        color: #363A41;
        font-family: "Open Sans";
        font-size: 28px;
        line-height: 19px;
        font-weight: normal;
        margin-top: 6px;
        margin-bottom: 20px;
    }
    .emarketing-content .row .content{
        color: #6C868E;
        font-family: "Open Sans";
        font-size: 14px;
        line-height: 19px;
    }
    .emarketing-content .material-icons.green {
        color: #00b555;
    }
    .emarketing-content .material-icons.red {
        color: #f9001a;
    }
    .emarketing-content .material-icons.yellow {
        color: #ffc100;
    }

    @media only screen and (max-width: 1240px) {
        .bgimage {
            display: none;
        }
    }
</style>
<?php echo '<script'; ?>
 type="application/javascript">
    function refresh()
    {
        location.reload();
        return false;
    }
<?php echo '</script'; ?>
>
<?php }
}
