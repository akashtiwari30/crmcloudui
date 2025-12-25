<?php
/* Smarty version 4.5.4, created on 2025-05-12 09:49:48
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\RecycleBin\partials\SidebarHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_6821c43ccbe223_14204980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71ad21562d5fcfcedb64b4a9911f0bf7286e1280' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\RecycleBin\\partials\\SidebarHeader.tpl',
      1 => 1747043385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/Vtiger/partials/SidebarAppMenu.tpl' => 1,
  ),
),false)) {
function content_6821c43ccbe223_14204980 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('APP_IMAGE_MAP', Vtiger_MenuStructure_Model::getAppIcons());?>
    
<?php $_smarty_tpl->_subTemplateRender("file:modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
