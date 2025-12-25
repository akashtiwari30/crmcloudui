<?php
/* Smarty version 4.5.4, created on 2025-06-27 11:03:29
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Settings\Vtiger\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_685e7a817f8a65_51836970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cda4ba5922ee3cff6e6657da1eaba6aea81cf94c' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Settings\\Vtiger\\Index.tpl',
      1 => 1751022163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_685e7a817f8a65_51836970 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="settingsIndexPage col-lg-12 col-md-12 col-sm-12 padding-right-zero"><div><h4 class="setting-summary"><?php echo vtranslate('LBL_SUMMARY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4></div><div class="row"><div class="col-lg-4 col-md-4 col-sm-4"><div class="settingsSummary"><a href="index.php?module=Users&parent=Settings&view=List"><h2 class="summaryCount"><?php echo $_smarty_tpl->tpl_vars['USERS_COUNT']->value;?>
</h2><p class="summaryText"><?php echo vtranslate('LBL_ACTIVE_USERS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</p></a></div></div><div class="col-lg-4 col-md-4 col-sm-4"><div class="settingsSummary"><a href="index.php?module=Workflows&parent=Settings&view=List&parentblock=LBL_AUTOMATION"><h2 class="summaryCount"><?php echo $_smarty_tpl->tpl_vars['ACTIVE_WORKFLOWS']->value;?>
</h2><p class="summaryText"><?php echo vtranslate('LBL_WORKFLOWS_ACTIVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</p></a></div></div><div class="col-lg-4 col-md-4 col-sm-4"><div class="settingsSummary"><a href="index.php?module=ModuleManager&parent=Settings&view=List"><h2 class="summaryCount"><?php echo $_smarty_tpl->tpl_vars['ACTIVE_MODULES']->value;?>
</h2><p class="summaryText"><?php echo vtranslate('LBL_MODULES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</p></a></div></div></div><div><h4 class="setting-shortcut"><?php echo vtranslate('LBL_SETTINGS_SHORTCUTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4></div><div id="settingsShortCutsContainer"><div class="row"><div class="setting-shortcut-container"><?php $_smarty_tpl->_assignInScope('COUNTER', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUTS']->value, 'SETTINGS_SHORTCUT', false, NULL, 'shortcuts', array (
));
$_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value) {
$_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->do_else = false;
if ($_smarty_tpl->tpl_vars['COUNTER']->value == 4) {?></div><div class="setting-shortcut-container"><?php $_smarty_tpl->_assignInScope('COUNTER', 1);
} else {
$_smarty_tpl->_assignInScope('COUNTER', $_smarty_tpl->tpl_vars['COUNTER']->value+1);
}
$_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( 'SettingsShortCut.tpl',$_smarty_tpl->tpl_vars['MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div></div><?php }
}
