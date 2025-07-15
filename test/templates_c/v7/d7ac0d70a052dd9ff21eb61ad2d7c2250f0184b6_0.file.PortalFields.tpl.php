<?php
/* Smarty version 4.5.4, created on 2025-07-01 13:06:07
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Settings\CustomerPortal\PortalFields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_6863dd3fb81db5_33439774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7ac0d70a052dd9ff21eb61ad2d7c2250f0184b6' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Settings\\CustomerPortal\\PortalFields.tpl',
      1 => 1751375160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6863dd3fb81db5_33439774 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input type="hidden" name="availableFields_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" value='<?php echo Vtiger_Functions::jsonEncode($_smarty_tpl->tpl_vars['ALLFIELDS']->value);?>
' /><input type="hidden" name="selectedFields_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" value='<?php echo Vtiger_Functions::jsonEncode($_smarty_tpl->tpl_vars['SELECTED_FIELDS']->value);?>
' /><input type="hidden" name="relatedModules_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" value='<?php echo Vtiger_Functions::jsonEncode($_smarty_tpl->tpl_vars['RELATED_MODULES']->value[$_smarty_tpl->tpl_vars['MODULE']->value]);?>
' /><input type="hidden" name="recordPermissions_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" value='<?php echo Vtiger_Functions::jsonEncode($_smarty_tpl->tpl_vars['RECORD_PERMISSIONS']->value);?>
'/><div class="row" id="moduleData_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"><h5 style="margin-left: 30px;"><?php echo vtranslate('LBL_PORTAL_FIELDS_PRIVILEGES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><hr style="margin-top: 0px;"><div class="col-sm-6 col-xs-6 portal-fields-container-wrapper"><div class="col-sm-12 col-xs-12"><div class="col-sm-6 col-xs-6" style="padding:0px;"><label><?php echo vtranslate('LBL_READ_ONLY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="portal-fields-switch" id="readOnlySwitch" disabled></div></div><div class="col-sm-6 col-xs-6" style="padding:0px;"><label><?php echo vtranslate('LBL_READ_AND_WRITE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="portal-fields-switch portal-fields-switchOn" id="readWriteSwitch" disabled></div></div><div class="col-sm-10 col-xs-10" style="padding:15px 0px;"><span class="redColor">*</span><span>Mandatory Fields</span></div></div><div class="roww"><div id="fieldRows_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" class="col-sm-12" style="padding:0px;"></div></div><div class="roww"><div class="col-sm-12 addFieldsBlock"><div class=""><select class="inputElement select2 addFields" name="addField_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" id="addField_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" multiple><option></option></select></div><div class=""><button title="<?php echo vtranslate('LBL_ADD_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" class="btn btn-default" id="addFieldButton_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"><?php echo vtranslate('LBL_ADD_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div></div></div><div class="col-sm-6 col-xs-6 portal-related-information"><h5 style="margin-top: 0px;"><?php echo vtranslate('LBL_RECORD_VISIBILITY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><div class="portal-record-privilege  radio-group"><div class="radio label-radio"><label><input type="radio" id="all" name="recordvisible_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" value="all" <?php if ($_smarty_tpl->tpl_vars['RECORD_VISIBLE']->value['all'] == 1 || $_smarty_tpl->tpl_vars['MODULE']->value == 'Faq') {?>checked<?php }?>/>&nbsp;<?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Products' || $_smarty_tpl->tpl_vars['MODULE']->value == 'Services') {
echo vtranslate('products_or_services',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value));
} elseif ($_smarty_tpl->tpl_vars['MODULE']->value == 'Faq') {
echo vtranslate('faq',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value));
} else {
echo vtranslate('all',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value));
}?></label></div><?php if ($_smarty_tpl->tpl_vars['MODULE']->value != 'Faq') {?><div class="radio label-radio"><label><input type="radio" id="onlymine" name="recordvisible_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" value="onlymine" <?php if ($_smarty_tpl->tpl_vars['RECORD_VISIBLE']->value['onlymine'] == 1) {?>checked<?php }?>/>&nbsp;<?php echo vtranslate('onlymine',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value,vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value));?>
</label></div><?php }?></div><br><?php if ($_smarty_tpl->tpl_vars['MODULE']->value != 'Faq') {?><h5><?php echo vtranslate('LBL_RELATED_INFORMATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><div class="portal-record-privilege"><?php if ($_smarty_tpl->tpl_vars['RELATED_MODULES']->value[$_smarty_tpl->tpl_vars['MODULE']->value]) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_MODULES']->value[$_smarty_tpl->tpl_vars['MODULE']->value], 'VALUE', false, 'KEY');
$_smarty_tpl->tpl_vars['VALUE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['VALUE']->value) {
$_smarty_tpl->tpl_vars['VALUE']->do_else = false;
?><div class="checkbox label-checkbox"<?php if (!vtlib_isModuleActive($_smarty_tpl->tpl_vars['VALUE']->value['name']) && $_smarty_tpl->tpl_vars['VALUE']->value['name'] != 'History') {?> hidden <?php }?>><label><input class="relmoduleinfo_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" data-relmodule ="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value['name'];?>
" type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['VALUE']->value['value'];?>
" <?php if ($_smarty_tpl->tpl_vars['VALUE']->value['value']) {?>checked<?php }?>/> <?php echo vtranslate($_smarty_tpl->tpl_vars['VALUE']->value['name'],$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><br></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></div><?php }?><br><?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'HelpDesk' || $_smarty_tpl->tpl_vars['MODULE']->value == 'Assets') {?><h4><?php echo vtranslate('LBL_RECORD_PERMISSIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4><div class="portal-record-privilege" id="recordPrivilege_<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'HelpDesk') {?><div class="checkbox label-checkbox"><label><input class="recordpermissions" name="create" id="create-permission" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_PERMISSIONS']->value['create'];?>
" <?php if ($_smarty_tpl->tpl_vars['RECORD_PERMISSIONS']->value['create']) {?>checked<?php }?>/> <?php echo vtranslate('LBL_CREATE_RECORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><br></div><?php }?><div class="checkbox label-checkbox"><label><input class="recordpermissions" name="edit" id="edit-permission" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_PERMISSIONS']->value['edit'];?>
" <?php if ($_smarty_tpl->tpl_vars['RECORD_PERMISSIONS']->value['edit']) {?>checked<?php }?>/> <?php echo vtranslate('LBL_EDIT_RECORD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><br></div></div><?php }?></div></div>
<?php }
}
