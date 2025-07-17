<?php
/* Smarty version 4.5.4, created on 2025-07-16 10:41:55
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Settings\Workflows\Tasks\VTUpdateFieldsTask.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_687781f3581575_63032119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1d3f824af8977ed57008b6bda48933cbb738200' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Settings\\Workflows\\Tasks\\VTUpdateFieldsTask.tpl',
      1 => 1752662305,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_687781f3581575_63032119 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row"><div class="col-sm-2 col-xs-2"><label><?php echo vtranslate('LBL_SET_FIELD_VALUES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div></div><br><div><button type="button" class="btn btn-default" id="addFieldBtn"><?php echo vtranslate('LBL_ADD_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div><br><div class="conditionsContainer" id="save_fieldvaluemapping" style="margin-bottom: 70px;"><?php $_smarty_tpl->_assignInScope('FIELD_VALUE_MAPPING', ZEND_JSON::decode($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->field_value_mapping));?><input type="hidden" id="fieldValueMapping" name="field_value_mapping" value='<?php echo Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->field_value_mapping);?>
' /><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_VALUE_MAPPING']->value, 'FIELD_MAP');
$_smarty_tpl->tpl_vars['FIELD_MAP']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MAP']->value) {
$_smarty_tpl->tpl_vars['FIELD_MAP']->do_else = false;
?><div class="row conditionRow" style="margin-bottom: 15px;"><div class="col-sm-3 col-xs-3"><select name="fieldname" class="select2" style="min-width: 250px" data-placeholder="<?php echo vtranslate('LBL_SELECT_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><option></option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value, 'FIELDS');
$_smarty_tpl->tpl_vars['FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELDS']->value) {
$_smarty_tpl->tpl_vars['FIELDS']->do_else = false;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'FIELD_MODEL');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
if ((!($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('workflow_fieldEditable') == true)) || ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name') == "Documents" && in_array($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name'),$_smarty_tpl->tpl_vars['RESTRICTFIELDS']->value))) {
continue 1;
}
$_smarty_tpl->_assignInScope('FIELD_INFO', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo());
$_smarty_tpl->_assignInScope('FIELD_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName());
$_smarty_tpl->_assignInScope('FIELD_MODULE_MODEL', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModule());?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('workflow_columnname');?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_MAP']->value['fieldname'] == $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('workflow_columnname')) {?>selected=""<?php }?>data-fieldtype="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldType();?>
" data-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
"<?php if (($_smarty_tpl->tpl_vars['FIELD_MODULE_MODEL']->value->get('name') == 'Events') && ($_smarty_tpl->tpl_vars['FIELD_NAME']->value == 'recurringtype')) {
$_smarty_tpl->_assignInScope('PICKLIST_VALUES', Calendar_Field_Model::getReccurencePicklistValues());
$_tmp_array = isset($_smarty_tpl->tpl_vars['FIELD_INFO']) ? $_smarty_tpl->tpl_vars['FIELD_INFO']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['picklistvalues'] = $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value;
$_smarty_tpl->_assignInScope('FIELD_INFO', $_tmp_array);
}?>data-fieldinfo='<?php echo Vtiger_Functions::jsonEncode($_smarty_tpl->tpl_vars['FIELD_INFO']->value);?>
' ><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('workflow_columnlabel'),$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><div class="fieldUiHolder col-sm-3 col-xs-3"><input type="text" class="getPopupUi inputElement" readonly="" name="fieldValue" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MAP']->value['value'];?>
" /><input type="hidden" name="valuetype" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MAP']->value['valuetype'];?>
" /></div><div class="cursorPointer col-sm-1 col-xs-1 paddingLeftZero"><div> <i class="alignMiddle deleteCondition fa fa-trash" style="position: relative; top: 4px;"></i> </div></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "FieldExpressions.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><br><div class="row basicAddFieldContainer hide" style="margin-bottom: 15px;"><div class="col-sm-3 col-xs-3"><select name="fieldname" data-placeholder="<?php echo vtranslate('LBL_SELECT_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" style="min-width: 250px"><option></option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value, 'FIELDS');
$_smarty_tpl->tpl_vars['FIELDS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELDS']->value) {
$_smarty_tpl->tpl_vars['FIELDS']->do_else = false;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'FIELD_MODEL');
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
$_smarty_tpl->tpl_vars['FIELD_MODEL']->do_else = false;
if ((!($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('workflow_fieldEditable') == true)) || ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->get('name') == "Documents" && in_array($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name'),$_smarty_tpl->tpl_vars['RESTRICTFIELDS']->value))) {
continue 1;
}
$_smarty_tpl->_assignInScope('FIELD_INFO', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo());
$_smarty_tpl->_assignInScope('FIELD_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName());
$_smarty_tpl->_assignInScope('FIELD_MODULE_MODEL', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModule());?><option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('workflow_columnname');?>
" data-fieldtype="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldType();?>
" data-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
"<?php if (($_smarty_tpl->tpl_vars['FIELD_MODULE_MODEL']->value->get('name') == 'Events') && ($_smarty_tpl->tpl_vars['FIELD_NAME']->value == 'recurringtype')) {
$_smarty_tpl->_assignInScope('PICKLIST_VALUES', Calendar_Field_Model::getReccurencePicklistValues());
$_tmp_array = isset($_smarty_tpl->tpl_vars['FIELD_INFO']) ? $_smarty_tpl->tpl_vars['FIELD_INFO']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['picklistvalues'] = $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value;
$_smarty_tpl->_assignInScope('FIELD_INFO', $_tmp_array);
}?>data-fieldinfo='<?php echo Vtiger_Functions::jsonEncode($_smarty_tpl->tpl_vars['FIELD_INFO']->value);?>
' ><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('workflow_columnlabel'),$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><div class="fieldUiHolder col-sm-3 col-xs-3"><input type="text" class="inputElement" readonly="" name="fieldValue" value="" /><input type="hidden" name="valuetype" value="rawtext" /></div><div class="cursorPointer col-sm-1 col-xs-1 paddingLeftZero"><div> <i class="alignMiddle deleteCondition fa fa-trash" style="position: relative; top: 4px;"></i> </div></div></div>
<?php }
}
