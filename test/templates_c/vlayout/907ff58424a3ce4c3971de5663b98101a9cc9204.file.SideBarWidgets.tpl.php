<?php /* Smarty version Smarty-3.1.7, created on 2020-08-25 02:05:30
         compiled from "/var/www/html/holdingerpdev/includes/runtime/../../layouts/vlayout/modules/Vtiger/SideBarWidgets.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7448204515f4471ea2bd3c7-66368864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '907ff58424a3ce4c3971de5663b98101a9cc9204' => 
    array (
      0 => '/var/www/html/holdingerpdev/includes/runtime/../../layouts/vlayout/modules/Vtiger/SideBarWidgets.tpl',
      1 => 1598320584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7448204515f4471ea2bd3c7-66368864',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUICK_LINKS' => 0,
    'MODULE' => 0,
    'SIDEBARWIDGET' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5f4471ea2c818',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f4471ea2c818')) {function content_5f4471ea2c818($_smarty_tpl) {?>
<div class="quickWidgetContainer accordion"><?php $_smarty_tpl->tpl_vars['val'] = new Smarty_variable(1, null, 0);?><?php  $_smarty_tpl->tpl_vars['SIDEBARWIDGET'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['SIDEBARWIDGET']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['QUICK_LINKS']->value['SIDEBARWIDGET']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['SIDEBARWIDGET']->key => $_smarty_tpl->tpl_vars['SIDEBARWIDGET']->value){
$_smarty_tpl->tpl_vars['SIDEBARWIDGET']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['SIDEBARWIDGET']->key;
?><div class="quickWidget"><div class="accordion-heading accordion-toggle quickWidgetHeader" data-target="#<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_sideBar_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['SIDEBARWIDGET']->value->getLabel());?>
"data-toggle="collapse" data-parent="#quickWidgets" data-label="<?php echo $_smarty_tpl->tpl_vars['SIDEBARWIDGET']->value->getLabel();?>
"data-widget-url="<?php echo $_smarty_tpl->tpl_vars['SIDEBARWIDGET']->value->getUrl();?>
" ><span class="pull-left"><img class="imageElement" data-rightimage="<?php echo vimage_path('rightArrowWhite.png');?>
" data-downimage="<?php echo vimage_path('downArrowWhite.png');?>
" src="<?php echo vimage_path('rightArrowWhite.png');?>
" /></span><h5 class="title widgetTextOverflowEllipsis pull-right" title="<?php echo vtranslate($_smarty_tpl->tpl_vars['SIDEBARWIDGET']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['SIDEBARWIDGET']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h5><div class="loadingImg hide pull-right"><div class="loadingWidgetMsg"><strong><?php echo vtranslate('LBL_LOADING_WIDGET',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></div></div><div class="clearfix"></div></div><div class="widgetContainer accordion-body collapse" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_sideBar_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['SIDEBARWIDGET']->value->getLabel());?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['SIDEBARWIDGET']->value->getUrl();?>
"></div></div><?php } ?></div><?php }} ?>