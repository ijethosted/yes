<?php /* Smarty version Smarty-3.1.7, created on 2020-08-22 22:22:17
         compiled from "/var/www/html/holdingerp/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12636597535f419a99367e19-02509630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c98fea9fe1d031a1e132615cb9790ab5a651eebd' => 
    array (
      0 => '/var/www/html/holdingerp/includes/runtime/../../layouts/vlayout/modules/MailManager/Mainui.tpl',
      1 => 1597779348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12636597535f419a99367e19-02509630',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MAILBOX' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5f419a9936a97',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f419a9936a97')) {function content_5f419a9936a97($_smarty_tpl) {?>

<input type="hidden" name="refresh_timeout" id="refresh_timeout" value="<?php echo $_smarty_tpl->tpl_vars['MAILBOX']->value->refreshTimeOut();?>
"/><?php }} ?>