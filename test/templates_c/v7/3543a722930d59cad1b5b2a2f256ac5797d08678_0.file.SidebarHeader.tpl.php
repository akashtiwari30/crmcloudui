<?php
/* Smarty version 4.5.4, created on 2025-05-12 09:49:23
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Portal\SidebarHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_6821c423ced097_76104778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3543a722930d59cad1b5b2a2f256ac5797d08678' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Portal\\SidebarHeader.tpl',
      1 => 1747043360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/Vtiger/partials/SidebarAppMenu.tpl' => 1,
  ),
),false)) {
function content_6821c423ced097_76104778 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('APP_IMAGE_MAP', Vtiger_MenuStructure_Model::getAppIcons());?>
    
<?php $_smarty_tpl->_subTemplateRender("file:modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
