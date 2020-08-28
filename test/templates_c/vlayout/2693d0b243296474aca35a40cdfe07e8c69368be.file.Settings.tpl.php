<?php /* Smarty version Smarty-3.1.7, created on 2020-08-25 04:22:12
         compiled from "/var/www/html/holdingerpdev/includes/runtime/../../layouts/vlayout/modules/VTECorrensaFree/Settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11642468645f4491f4f22120-88293897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2693d0b243296474aca35a40cdfe07e8c69368be' => 
    array (
      0 => '/var/www/html/holdingerpdev/includes/runtime/../../layouts/vlayout/modules/VTECorrensaFree/Settings.tpl',
      1 => 1598329311,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11642468645f4491f4f22120-88293897',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ENABLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5f4491f4f2a3e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f4491f4f2a3e')) {function content_5f4491f4f2a3e($_smarty_tpl) {?>
<style>
    .corrensa-settingpage{
        margin-top: 50px;
    }

    .corrensa-settingpage .module-title,
    .corrensa-settingpage .shortdesc{
        text-align: center;
    }

    .corrensa-settingpage .integrate{
        text-align: center;
        border: #ccc solid 1px;
        padding: 20px 0;
    }

    .corrensa-settingpage .integrate p span.integration-status{
        font-size: 18px;
        font-weight: 600;
    }

    .corrensa-settingpage .tgl {
        position: relative;
        outline: 0;
        display: inline-block;
        cursor: pointer;
        user-select: none;
        margin: 0 0 5px 0;
        margin-left: 30px;
        top:5px;
    }
    .corrensa-settingpage .tgl,
    .corrensa-settingpage .tgl:after,
    .corrensa-settingpage .tgl:before,
    .corrensa-settingpage .tgl *,
    .corrensa-settingpage .tgl *:after,
    .corrensa-settingpage .tgl *:before,
    .corrensa-settingpage .tgl + .corrensa-settingpage .tgl-btn {
        box-sizing: border-box;
    }
    .corrensa-settingpage .tgl::selection,
    .corrensa-settingpage .tgl:after::selection,
    .corrensa-settingpage .tgl:before::selection,
    .corrensa-settingpage .tgl *::selection,
    .corrensa-settingpage .tgl *:after::selection,
    .corrensa-settingpage .tgl *:before::selection,
    .corrensa-settingpage .tgl + .tgl-btn::selection {
        background: none;
    }
    .corrensa-settingpage .tgl span {
        position: relative;
        display: block;
        height: 1.8em;
        line-height: 1.2em;
        overflow: hidden;
        font-weight: normal;
        text-align: center;
        border-radius: 2em;
        padding: 0.2em 1em;
        border: 1px solid #fafafa;
        box-shadow: inset 0 2px 0 rgba(0, 0, 0, 0.2), 0 2px 0 rgba(255, 255, 255, 0.7);
        transition: color 0.3s ease, padding 0.3s ease-in-out, background 0.3s ease-in-out;
    }
    .corrensa-settingpage .tgl span:before {
        position: relative;
        display: block;
        line-height: 1.3em;
        padding: 0 0.2em;
        font-size: 1em;
    }
    .corrensa-settingpage .tgl span:after {
        position: absolute;
        display: block;
        content: '';
        border-radius: 2em;
        width: 1.3em;
        height: 1.3em;
        margin-left: -1.45em;
        top: 0.2em;
        background: #FFFFFF;
        transition: left 0.3s cubic-bezier(0.175, 0.885, 0.32, 0.97), background 0.3s ease-in-out;
    }
    .corrensa-settingpage .tgl input[type="checkbox"] {
        display: none !important;
    }
    .corrensa-settingpage .tgl input[type="checkbox"]:not(:checked) + span {
        background: #de474e;
        color: #FFFFFF;
        padding-left: 1.6em;
        padding-right: 0.4em;
    }
    .corrensa-settingpage .tgl input[type="checkbox"]:not(:checked) + span:before {
        content: attr(data-off);
        color: #FFFFFF;
    }
    .corrensa-settingpage .tgl input[type="checkbox"]:not(:checked) + span:after {
        background: #FFFFFF;
        left: 1.6em;
    }
    .corrensa-settingpage .tgl input[type="checkbox"]:checked + span {
        background: #86d993;
        color: #FFFFFF;
        padding-left: 0.4em;
        padding-right: 1.6em;
    }
    .corrensa-settingpage .tgl input[type="checkbox"]:checked + span:before {
        content: attr(data-on);
    }
    .corrensa-settingpage .tgl input[type="checkbox"]:checked + span:after {
        background: #FFFFFF;
        left: 100%;
    }
    .corrensa-settingpage .tgl input[type="checkbox"]:disabled,
    .corrensa-settingpage .tgl input[type="checkbox"]:disabled + span,
    .corrensa-settingpage .tgl input[type="checkbox"]:read-only,
    .corrensa-settingpage .tgl input[type="checkbox"]:read-only + span {
        cursor: not-allowed;
    }
    .corrensa-settingpage .tgl-gray input[type="checkbox"]:not(:checked) + span {
        background: #e3e3e3;
        color: #999999;
    }
    .corrensa-settingpage .tgl-gray input[type="checkbox"]:not(:checked) + span:before {
        color: #999999;
    }
    .tgl-gray input[type="checkbox"]:not(:checked) + span:after {
        background: #ffffff;
    }

    .fulldescription p{
        text-align: justify;
        margin-top: 10px;
    }
    .fulldescription p a{
        color: rgba(41,128,185,1);
    }
    .fulldescription p a:hover{
        text-decoration: underline;
        color: olivedrab;
    }
</style>
<div class="container-fluid">
    <div class="corrensa-settingpage">
        <div class="module-title">
            <h3>Corrensa Lite (Free)</h3>
        </div>
        <div class="shortdesc">
            <p><i>Email plugin for Outlook/Gmail/Office 365</i></p>
        </div>
        <div class="integrate">
            <p><span class="integration-status">Integration Status</span> <label class="tgl"> <input type="checkbox" name="enable_module" id="enable_module" <?php if ($_smarty_tpl->tpl_vars['ENABLE']->value=='1'){?>checked="" <?php }?>/> <span data-on="On" data-off="Off" id="enable_module"></span> </label></p>
        </div>
        <div class="fulldescription">
            <p>Corrensa is a plugin connecting VTiger CRM (Open Source) to your Outlook(Desktop), Gmail & Office 365. The extension comes in the from of a toolbar/widget on email interface and displays the information from VTiger with ability to view, edit & create records.</p>
            <br>
            <p><b>To learn more about this amazing plugin please visit our website <a href="https://www.vtexperts.com/" target="_blank">https://www.vtexperts.com/</a></b></p>
            <br>
            <p><b>Important</b>: You will need to use user "access key" to login to the plugin. Please click the link below for more details. (You can not login with password).</p>
            <p><a href="https://www.corrensa.com/how-to-obtain-vtiger-access-key/" target="_blank">https://www.corrensa.com/how-to-obtain-vtiger-access-key/</a></p>
            <br>
            <p><b>How to install Email Plugin for Outlook?</b></p>
            <p>You will need to download Outlook plugin and install it on your local computer. Please follow the link below.</p>
            <p><a href="https://www.corrensa.com/how-to-install-free-outlook-plugin-for-vtiger/" target="_blank">https://www.corrensa.com/how-to-install-free-outlook-plugin-for-vtiger/</a></p>
            <br>
            <p><b>How to install Email Plugin for Gmail/Office 365?</b></p>
            <p>Plugin is only compatible with Google Chrome browser. You will need to install Google Chrome browser extension. Please follow the link below.</p>
            <br>
            <p><a href="https://www.corrensa.com/how-to-install-free-gmail-extension-for-vtiger/" target="_blank">Gmail: https://www.corrensa.com/how-to-install-free-gmail-extension-for-vtiger/</a></p>
            <p><a href="https://www.corrensa.com/how-to-install-free-office-365-plugin-for-vtiger/" target="_blank">Office 365: https://www.corrensa.com/how-to-install-free-office-365-plugin-for-vtiger/</a></p>
        </div>
    </div>
</div><?php }} ?>