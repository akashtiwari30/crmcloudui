<?php
/* Smarty version 4.5.4, created on 2025-05-09 11:06:46
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Settings\Vtiger\SidebarHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_681de1c6207b02_97637633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca4f74365555427e12d102e3bb7c3eec5390419f' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Settings\\Vtiger\\SidebarHeader.tpl',
      1 => 1746788799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/Vtiger/partials/SidebarAppMenu.tpl' => 1,
  ),
),false)) {
function content_681de1c6207b02_97637633 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('APP_IMAGE_MAP', Vtiger_MenuStructure_Model::getAppIcons());?>
    
<?php $_smarty_tpl->_subTemplateRender("file:modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
