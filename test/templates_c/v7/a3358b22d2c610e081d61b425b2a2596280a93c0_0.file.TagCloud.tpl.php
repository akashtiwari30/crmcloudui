<?php
/* Smarty version 4.5.4, created on 2025-05-02 09:52:09
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Vtiger\dashboards\TagCloud.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_681495c9c05ff0_89340548',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3358b22d2c610e081d61b425b2a2596280a93c0' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Vtiger\\dashboards\\TagCloud.tpl',
      1 => 1744783666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_681495c9c05ff0_89340548 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="dashboardWidgetHeader"><?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "dashboards/WidgetHeader.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><div class="dashboardWidgetContent" style='padding:5px'><?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "dashboards/TagCloudContents.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><div class="widgeticons dashBoardWidgetFooter"><div class="footerIcons pull-right"><?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "dashboards/DashboardFooterIcons.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div>	 <?php }
}
