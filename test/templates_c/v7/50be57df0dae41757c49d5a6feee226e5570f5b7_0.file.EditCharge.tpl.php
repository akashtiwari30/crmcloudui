<?php
/* Smarty version 4.5.4, created on 2025-07-03 05:46:58
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Settings\Vtiger\EditCharge.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_68661952e9f9f0_29192770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50be57df0dae41757c49d5a6feee226e5570f5b7' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Settings\\Vtiger\\EditCharge.tpl',
      1 => 1744629586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68661952e9f9f0_29192770 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('CHARGE_ID', $_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->getId());
$_smarty_tpl->_assignInScope('WIDTHTYPE', $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('rowheight'));
$_smarty_tpl->_assignInScope('CHARGE_FORMAT', $_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->get('format'));
if ($_smarty_tpl->tpl_vars['CHARGE_FORMAT']->value == 'Percent') {
$_smarty_tpl->_assignInScope('IS_PERCENT_FORMAT', true);
} else {
$_smarty_tpl->_assignInScope('IS_PERCENT_FORMAT', false);
}?><input type="hidden" value=<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 id="widthHeight"><div class="chargeModalContainer modal-dialog modal-xs"><div class="modal-content"><form id="editCharge" class="form-horizontal"><?php if (!empty($_smarty_tpl->tpl_vars['CHARGE_ID']->value)) {
ob_start();
echo vtranslate('LBL_EDIT_CHARGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('TITLE', $_prefixVariable1);
} else {
ob_start();
echo vtranslate('LBL_ADD_NEW_CHARGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('TITLE', $_prefixVariable2);
}
$_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TITLE'=>$_smarty_tpl->tpl_vars['TITLE']->value), 0, true);
?><input type="hidden" name="chargeid" value="<?php echo $_smarty_tpl->tpl_vars['CHARGE_ID']->value;?>
" /><div class="modal-body" id="scrollContainer"><div class=""><div class="block row nameContainer"><div class="col-lg-1"></div><div class="col-lg-3"><label class="pull-right"><?php echo vtranslate('LBL_CHARGE_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<span class="redColor">*</span></label></div><div class="col-lg-5"><input class="inputElement" type="text" name="name" placeholder="<?php echo vtranslate('LBL_ENTER_CHARGE_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" value="<?php echo $_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->getName();?>
" data-rule-required="true" data-prompt-position="bottomLeft" /></div><div class="col-lg-3"></div></div><div class="row block formatContainer"><div class="col-lg-1"></div><div class="col-lg-3"><label class="pull-right"><?php echo vtranslate('LBL_CHARGE_FORMAT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><div class="col-lg-5"><label class="span radio-group" id="flat"><input type="radio" name="format" class="input-medium" <?php if (!$_smarty_tpl->tpl_vars['IS_PERCENT_FORMAT']->value || !$_smarty_tpl->tpl_vars['CHARGE_ID']->value) {?>checked<?php }?> value="Flat" />&nbsp;&nbsp;<span class="radio-label"><?php echo vtranslate('LBL_DIRECT_PRICE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></label>&nbsp;&nbsp;<label class="span radio-group" id="percent"><input type="radio" name="format" class="input-medium" <?php if ($_smarty_tpl->tpl_vars['IS_PERCENT_FORMAT']->value) {?>checked<?php }?> value="Percent" />&nbsp;&nbsp;<span class="radio-label"><?php echo vtranslate('LBL_PERCENT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></label>&nbsp;&nbsp;</div><div class="col-lg-3"></div></div><div class="row block typeContainer"><div class="col-lg-1"></div><div class="col-lg-3"><label class="pull-right"><?php echo vtranslate('LBL_CHARGE_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><div class="col-lg-7"><label class="span radio-group" id="fixed"><input type="radio" name="type" class="input-medium" <?php if ($_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->get('type') == 'Fixed' || !$_smarty_tpl->tpl_vars['CHARGE_ID']->value) {?>checked<?php }?> value="Fixed" />&nbsp;&nbsp;<span class="radio-label"><?php echo vtranslate('LBL_FIXED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></label>&nbsp;&nbsp;<label class="span radio-group" id="variable"><input type="radio" name="type" class="input-medium" <?php if ($_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->get('type') == 'Variable') {?>checked<?php }?> value="Variable" />&nbsp;&nbsp;<span class="radio-label"><?php echo vtranslate('LBL_VARIABLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></label>&nbsp;&nbsp;</div><div class="col-lg-1"></div></div><div class="row block chargeValueContainer <?php if ($_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->get('type') == 'Variable') {?>hide<?php }?>"><div class="col-lg-1"></div><div class="col-lg-3"><label class="pull-right"><?php echo vtranslate('LBL_CHARGE_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<span class="redColor">*</span></label></div><div class="col-lg-5"><div class="input-group"><?php ob_start();
echo $_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->getValue();
$_prefixVariable3 = ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->getValue()) {
echo number_format($_prefixVariable3,getCurrencyDecimalPlaces(),'.','');
} else {
echo "0";
}
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_assignInScope('CHARGE_VALUE', $_prefixVariable4);?><span style="height:30px;width:30px;" class="input-group-addon percentIcon pull-left <?php if (!$_smarty_tpl->tpl_vars['IS_PERCENT_FORMAT']->value) {?>hide<?php }?>">%</span><input class="inputEle input-medium" type="text" name="value" placeholder="<?php echo vtranslate('LBL_ENTER_CHARGE_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" value="<?php echo $_smarty_tpl->tpl_vars['CHARGE_VALUE']->value;?>
" data-rule-required="true" <?php if ($_smarty_tpl->tpl_vars['IS_PERCENT_FORMAT']->value) {?>data-rule-inventory_percentage="true"<?php } else { ?>data-rule-PositiveNumber="true"<?php }?> /></div></div><div class="col-lg-3"></div></div><div class="row block regionsContainer <?php if ($_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->get('type') != 'Variable') {?>hide<?php }?>" style="padding: 0px 70px 0px 40px;"><table class="table table-bordered regionsTable"><tr><th class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="width:60%;"><strong><?php echo vtranslate('LBL_REGIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></th><th class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="text-align: center; width:40%;"><strong><?php echo vtranslate('LBL_CHARGE_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="percentIcon <?php if (!$_smarty_tpl->tpl_vars['IS_PERCENT_FORMAT']->value) {?>hide<?php }?>">&nbsp;(%)</span></strong></th></tr><tr><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><label><?php echo vtranslate('LBL_DEFAULT_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<span class="redColor">*</span></label></label></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="text-align: center;"><input class="inputElement input-medium" type="text" name="defaultValue" value="<?php echo $_smarty_tpl->tpl_vars['CHARGE_VALUE']->value;?>
" data-rule-required="true" <?php if ($_smarty_tpl->tpl_vars['IS_PERCENT_FORMAT']->value) {?>data-rule-inventory_percentage="true"<?php } else { ?>data-rule-PositiveNumber="true"<?php }?> /></td></tr><?php $_smarty_tpl->_assignInScope('i', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->getSelectedRegions(), 'REGIONS_INFO', false, NULL, 'i', array (
));
$_smarty_tpl->tpl_vars['REGIONS_INFO']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['REGIONS_INFO']->value) {
$_smarty_tpl->tpl_vars['REGIONS_INFO']->do_else = false;
?><tr><td class="regionsList <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><span class="deleteRow close" style="float:left;">×</span>&nbsp;<select id="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" data-placeholder="<?php echo vtranslate('LBL_SELECT_REGIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" name="regions[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][list]" class="regions select2 columns span3" multiple="" data-rule-required="true" style="width:90%;">'<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TAX_REGIONS']->value, 'TAX_REGION_MODEL');
$_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->value) {
$_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->do_else = false;
$_smarty_tpl->_assignInScope('TAX_REGION_ID', $_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->value->getId());?><option value="<?php echo $_smarty_tpl->tpl_vars['TAX_REGION_ID']->value;?>
" <?php if (in_array($_smarty_tpl->tpl_vars['TAX_REGION_ID']->value,$_smarty_tpl->tpl_vars['REGIONS_INFO']->value['list'])) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->value->getName();?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></td><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" style="text-align: center;"><?php ob_start();
echo $_smarty_tpl->tpl_vars['REGIONS_INFO']->value['value'];
$_prefixVariable5 = ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->getValue()) {
echo number_format($_prefixVariable5,getCurrencyDecimalPlaces(),'.','');
} else {
echo "0";
}
$_prefixVariable6=ob_get_clean();
$_smarty_tpl->_assignInScope('REGION_VALUE', $_prefixVariable6);?><input class="inputElement valuesList input-medium" type="text" name="regions[<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
][value]" value="<?php echo $_smarty_tpl->tpl_vars['REGION_VALUE']->value;?>
" data-rule-required="true" <?php if ($_smarty_tpl->tpl_vars['IS_PERCENT_FORMAT']->value) {?>data-rule-inventory_percentage="true"<?php } else { ?>data-rule-PositiveNumber="true"<?php }?> /></td></tr><?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><input type="hidden" class="regionsCount" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" /></table><span class="addNewTaxBracket"><a href="#"><u><?php echo vtranslate('LBL_ADD_TAX_BRACKET',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</u></a><select class="taxRegionElements hide"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TAX_REGIONS']->value, 'TAX_REGION_MODEL');
$_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->value) {
$_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['TAX_REGION_MODEL']->value->getName();?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></span><br><br><div><i class="fa fa-info-circle"></i> <?php echo vtranslate('LBL_TAX_BRACKETS_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><br><br></div><div class="row block"><div class="col-lg-1"></div><div class="col-lg-3"><label class="pull-right"><?php echo vtranslate('LBL_IS_TAXABLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><div class="col-lg-7"><input type="hidden" name="istaxable" value="0" /><label><input type="checkbox" name="istaxable" value="1" class="isTaxable alignBottom" <?php if ($_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->get('istaxable') == 1 || !$_smarty_tpl->tpl_vars['CHARGE_ID']->value) {?> checked <?php }?> />&nbsp;&nbsp;<span><?php echo vtranslate('LBL_ENABLE_TAXES_FOR_CHARGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></label></div><div class="col-lg-1"></div></div><div class="row block taxContainer <?php if ($_smarty_tpl->tpl_vars['CHARGE_MODEL']->value->get('istaxable') != 1 && $_smarty_tpl->tpl_vars['CHARGE_ID']->value) {?>hide<?php }?>"><div class="col-lg-1"></div><div class="col-lg-3"><label class="pull-right"><?php echo vtranslate('LBL_SELECT_TAX',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<span class="redColor">*</span></label></div><div class="col-lg-7"><div class=""><select data-placeholder="<?php echo vtranslate('LBL_SELECT_TAXES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
" id="selectTax" class="select2 columns inputEle" multiple="" name="taxes" data-rule-required="true"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CHARGE_TAXES']->value, 'CHARGE_TAX_MODEL', false, 'TAX_ID');
$_smarty_tpl->tpl_vars['CHARGE_TAX_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TAX_ID']->value => $_smarty_tpl->tpl_vars['CHARGE_TAX_MODEL']->value) {
$_smarty_tpl->tpl_vars['CHARGE_TAX_MODEL']->do_else = false;
if ($_smarty_tpl->tpl_vars['CHARGE_TAX_MODEL']->value->isDeleted() == false) {?><option value="<?php echo $_smarty_tpl->tpl_vars['TAX_ID']->value;?>
" <?php if (!empty($_smarty_tpl->tpl_vars['SELECTED_TAXES']->value) && in_array($_smarty_tpl->tpl_vars['TAX_ID']->value,$_smarty_tpl->tpl_vars['SELECTED_TAXES']->value)) {?>selected=""<?php }?>><?php echo $_smarty_tpl->tpl_vars['CHARGE_TAX_MODEL']->value->getName();?>
 (<?php echo $_smarty_tpl->tpl_vars['CHARGE_TAX_MODEL']->value->getTax();?>
%)</option><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><div class="">(<?php echo vtranslate('LBL_SELECT_TAX_DESC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
)</div></div><div class="col-lg-1"></div></div><div style="padding: 0px 40px;"><i class="fa fa-info-circle"></i> <?php echo vtranslate('LBL_CHARGE_STORE_DISC',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 (<?php echo Vtiger_Functions::getCurrencyName(CurrencyField::getDBCurrencyId());?>
)</div><br><br></div></div><?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( 'ModalFooter.tpl','Vtiger' )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></form></div></div><?php }
}
