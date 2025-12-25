<?php
/* Smarty version 4.5.4, created on 2025-05-09 09:36:58
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Calendar\partials\SidebarHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_681dccba36d699_91173581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbc77ec4ece542cfccc043f97149fe8ab0606f6f' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Calendar\\partials\\SidebarHeader.tpl',
      1 => 1746783413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/Vtiger/partials/SidebarAppMenu.tpl' => 1,
  ),
),false)) {
function content_681dccba36d699_91173581 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('APP_IMAGE_MAP', Vtiger_MenuStructure_Model::getAppIcons());?>

<?php $_smarty_tpl->_subTemplateRender("file:modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
