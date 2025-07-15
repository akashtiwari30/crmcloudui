<?php
/* Smarty version 4.5.4, created on 2025-05-12 09:46:40
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Documents\partials\SidebarHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_6821c38012c445_61025317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f905f83419a4d302dd4c1d1fbf5029cbd592359' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Documents\\partials\\SidebarHeader.tpl',
      1 => 1747043195,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/Vtiger/partials/SidebarAppMenu.tpl' => 1,
  ),
),false)) {
function content_6821c38012c445_61025317 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('APP_IMAGE_MAP', Vtiger_MenuStructure_Model::getAppIcons());?>
    
<?php $_smarty_tpl->_subTemplateRender("file:modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
