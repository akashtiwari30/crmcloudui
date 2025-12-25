<?php
/* Smarty version 4.5.4, created on 2025-07-15 06:51:17
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Settings\CustomerPortal\CustomerPortalDashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_6875fa65918156_09389374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f241aaed408348bf1db02a39b0285e1921b1873e' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Settings\\CustomerPortal\\CustomerPortalDashboard.tpl',
      1 => 1752215006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6875fa65918156_09389374 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-lg-6 col-md-6 col-sm-6"><div class="portal-annoucement-widget-container"><div class="portal-annoucement-widget" ><h6><?php echo vtranslate('LBL_ANNOUNCEMENT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h6></div><div class="portal" ><textarea class="inputElement portal" name="announcement" id="portalAnnouncement" style="resize:vertical;"><?php echo $_smarty_tpl->tpl_vars['ANNOUNCEMENT']->value;?>
</textarea></div></div><br><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS']->value['widgets'], 'status', false, 'module');
$_smarty_tpl->tpl_vars['status']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value => $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->do_else = false;
if ($_smarty_tpl->tpl_vars['module']->value == 'HelpDesk' && (isset($_smarty_tpl->tpl_vars['WIDGETS_MODULE_LIST']->value['HelpDesk']))) {?><div class="portal-record-widget-container" ><div class="portal-record-widget-content" ><h6><?php echo vtranslate('LBL_RECENT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['module']->value;
$_prefixVariable1 = ob_get_clean();
echo vtranslate($_prefixVariable1,'Vtiger');?>
 <?php echo vtranslate('LBL_REC_WIDGET',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h6></div><div class="portal-record-control-container"><div class="checkbox label-checkbox" style="padding: 10px 5px;"><label><input id="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
" type="checkbox" class="widgetsInfo" value="<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
" name="widgets[]" <?php if ($_smarty_tpl->tpl_vars['status']->value) {?>checked<?php }?>/>&nbsp;&nbsp;Enable</label></div></div></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class="col-sm-6"><?php if ($_smarty_tpl->tpl_vars['WIDGETS_MODULE_LIST']->value['HelpDesk'] == 1 || $_smarty_tpl->tpl_vars['WIDGETS_MODULE_LIST']->value['Documents'] == 1) {?><div class="portal-shortcuts-container" ><div class="portal-shortcuts-header" ><h6><?php echo vtranslate('LBL_SHORTCUTS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h6></div><div class="portal-shortcuts-content" ><input type="hidden" name="defaultShortcuts" value='<?php echo $_smarty_tpl->tpl_vars['DEFAULT_SHORTCUTS']->value;?>
' /><div id="portal-shortcutsContainer"><ul class="nav nav-tabs nav-stacked" id="shortcutItems"><?php $_smarty_tpl->_assignInScope('SHORT', json_decode($_smarty_tpl->tpl_vars['DEFAULT_SHORTCUTS']->value,true));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SHORT']->value, 'value', false, 'key');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
if ((isset($_smarty_tpl->tpl_vars['WIDGETS_MODULE_LIST']->value[$_smarty_tpl->tpl_vars['key']->value]))) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['value']->value, 'value1', false, 'key1');
$_smarty_tpl->tpl_vars['value1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key1']->value => $_smarty_tpl->tpl_vars['value1']->value) {
$_smarty_tpl->tpl_vars['value1']->do_else = false;
if ($_smarty_tpl->tpl_vars['value1']->value == 1) {?><li class="portal-shortcut-list" data-field="<?php echo $_smarty_tpl->tpl_vars['key1']->value;?>
">&nbsp;<button class="btn btn-large"><?php ob_start();
echo $_smarty_tpl->tpl_vars['key1']->value;
$_prefixVariable2 = ob_get_clean();
echo vtranslate($_prefixVariable2,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;&nbsp; </button></li><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div></div></div><?php }?><br><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS']->value['widgets'], 'status', false, 'module');
$_smarty_tpl->tpl_vars['status']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value => $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->do_else = false;
if ($_smarty_tpl->tpl_vars['module']->value != 'HelpDesk' && (isset($_smarty_tpl->tpl_vars['WIDGETS_MODULE_LIST']->value[$_smarty_tpl->tpl_vars['module']->value]))) {?><div class="portal-helpdesk-widget-container" ><div class="portal-helpdesk-widget-header" ><h6><?php echo vtranslate('LBL_RECENT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['module']->value;
$_prefixVariable3 = ob_get_clean();
echo vtranslate($_prefixVariable3,'Vtiger');?>
 <?php echo vtranslate('LBL_REC_WIDGET',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h6></div><div class="portal-helpdesk-widget-controls"><div class="checkbox label-checkbox" style="padding: 10px 5px;"><label><input class="widgetsInfo" id="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['status']->value;?>
" name="widgets[]" <?php if ($_smarty_tpl->tpl_vars['status']->value) {?>checked<?php }?>/>&nbsp;&nbsp;Enable</label></div></div></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><br>
<?php }
}
