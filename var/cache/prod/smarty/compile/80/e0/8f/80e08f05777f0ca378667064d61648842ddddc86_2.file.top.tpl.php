<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-04 14:05:07
  from '/var/www/html/modules/uecookie/top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_601bf103a0c061_67598774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80e08f05777f0ca378667064d61648842ddddc86' => 
    array (
      0 => '/var/www/html/modules/uecookie/top.tpl',
      1 => 1611237233,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_601bf103a0c061_67598774 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    
    function setcook() {
        var nazwa = 'cookie_ue';
        var wartosc = '1';
        var expire = new Date();
        expire.setMonth(expire.getMonth() + 12);
        document.cookie = nazwa + "=" + escape(wartosc) + ";path=/;" + ((expire == null) ? "" : ("; expires=" + expire.toGMTString()))
    }

    
    <?php if (Configuration::get('uecookie_close_anim') == 1) {?>
    
        function closeUeNotify() {
            $('#cookieNotice').fadeOut(1500);
            setcook();
        }
    
    <?php }?>
    

    
    <?php if (Configuration::get('uecookie_close_anim') == 0) {?>
    
        function closeUeNotify() {
            <?php if ($_smarty_tpl->tpl_vars['vareu']->value->uecookie_position == 2) {?>
            $('#cookieNotice').animate(
                    {bottom: '-200px'},
                    2500, function () {
                        $('#cookieNotice').hide();
                    });
            setcook();
            <?php } else { ?>
            $('#cookieNotice').animate(
                    {top: '-200px'},
                    2500, function () {
                        $('#cookieNotice').hide();
                    });
            setcook();
            <?php }?>
        }
    
    <?php }?>
    
    
<?php echo '</script'; ?>
>
<style>
    
    .closeFontAwesome:before {
        content: "\f00d";
        font-family: "FontAwesome";
        display: inline-block;
        font-size: 23px;
        line-height: 23px;
        color: #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vareu']->value->uecookie_closex, ENT_QUOTES, 'UTF-8');?>
;
        padding-right: 15px;
        cursor: pointer;
    }

    .closeButtonNormal {
         <?php if (Configuration::get('uecookie_x_where') != 3) {?>display: block;<?php } else { ?>display: inline-block; margin:5px;<?php }?> 
        text-align: center;
        padding: 2px 5px;
        border-radius: 2px;
        color: #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vareu']->value->uecookie_close_txt, ENT_QUOTES, 'UTF-8');?>
;
        background: #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vareu']->value->uecookie_close_bg, ENT_QUOTES, 'UTF-8');?>
;
        cursor: pointer;
    }

    #cookieNotice p {
        margin: 0px;
        padding: 0px;
    }


    #cookieNoticeContent {
        
        <?php if (Configuration::get('uecookie_padding') != '') {?>
            padding:<?php echo htmlspecialchars(Configuration::get('uecookie_padding'), ENT_QUOTES, 'UTF-8');?>
px;
        <?php }?>
        
    }

    
</style>
<?php if (Configuration::get('uecookie_x_fa') == 1) {?>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<?php }?>
<div id="cookieNotice" style=" width: 100%; position: fixed; <?php if ($_smarty_tpl->tpl_vars['vareu']->value->uecookie_position == 2) {?>bottom:0px; box-shadow: 0px 0 10px 0 #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vareu']->value->uecookie_shadow, ENT_QUOTES, 'UTF-8');?>
;<?php } else { ?> top:0px; box-shadow: 0 0 10px 0 #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vareu']->value->uecookie_shadow, ENT_QUOTES, 'UTF-8');?>
;<?php }?> background: #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vareu']->value->uecookie_bg, ENT_QUOTES, 'UTF-8');?>
; z-index: 9999; font-size: 14px; line-height: 1.3em; font-family: arial; left: 0px; text-align:center; color:#FFF; opacity: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vareu']->value->uecookie_opacity, ENT_QUOTES, 'UTF-8');?>
 ">
    <div id="cookieNoticeContent" style="position:relative; margin:auto; width:100%; display:block;">
        <table style="width:100%;">
            <tr>
            <?php if (Configuration::get('uecookie_x_where') == 1) {?>
                <td style="width:80px; vertical-align:middle; padding-right:20px; text-align:left;">
                    <?php if (Configuration::get('uecookie_usex') == 1) {?>
                        <span class="closeFontAwesome" onclick="closeUeNotify()"></span>
                    <?php } else { ?>
                        <span class="closeButtonNormal" onclick="closeUeNotify()"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'close','mod'=>'uecookie'),$_smarty_tpl ) );?>
</span>
                    <?php }?>
                </td>
            <?php }?>
            <td style="text-align:center;">
                <?php echo $_smarty_tpl->tpl_vars['uecookie']->value;?>

            </td>
            <?php if (Configuration::get('uecookie_x_where') == 2) {?>
                <td style="width:80px; vertical-align:middle; padding-right:20px; text-align:right;">
                    <?php if (Configuration::get('uecookie_usex') == 1) {?>
                        <span class="closeFontAwesome" onclick="closeUeNotify()"></span>
                    <?php } else { ?>
                        <span class="closeButtonNormal" onclick="closeUeNotify()"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'close','mod'=>'uecookie'),$_smarty_tpl ) );?>
</span>
                    <?php }?>
                </td>
            <?php }?>
            </tr>
            <tr>
                <?php if (Configuration::get('uecookie_x_where') == 3) {?>
                    <td style="width:80px; vertical-align:middle; padding-right:20px; text-align:center;">
                        <?php if (Configuration::get('uecookie_usex') == 1) {?>
                            <span class="closeFontAwesome" onclick="closeUeNotify()"></span>
                        <?php } else { ?>
                            <span class="closeButtonNormal" onclick="closeUeNotify()"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'close','mod'=>'uecookie'),$_smarty_tpl ) );?>
</span>
                        <?php }?>
                    </td>
                <?php }?>
            </tr>
        </table>
    </div>
</div><?php }
}
