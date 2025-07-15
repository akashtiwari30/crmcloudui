<?php
/* Smarty version 4.5.4, created on 2025-07-11 07:41:16
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Vtiger\AdvanceSearch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_6870c01c403dd2_30195133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18300654b828b0b4ac1929c1f2dbe9b50cf343da' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Vtiger\\AdvanceSearch.tpl',
      1 => 1752219650,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6870c01c403dd2_30195133 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="searchResults-container" class="advanceFilterContainer search-header-container"><div class="modal-content"><div class="modal-header"><div class="row"><div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><h5 class="pull-left m-xy-0" data-result="<?php echo vtranslate('LBL_SEARCH_RESULTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-modify="<?php echo vtranslate('LBL_SAVE_MODIFY_FILTER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php echo vtranslate('LBL_ADVANCE_SEARCH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate('LBL_SEARCH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h5></div><div class="search-action-container col-lg-6 col-md-6 col-sm-6 col-xs-6"><div class=" p-r-0"><button type="button" class="close" aria-label="Close" data-dismiss="modal"><span aria-hidden="true" class='fa fa-close'></span></button></div></div></div></div><div class="container-fluid modal-body"><div id="advanceSearchHolder"><div id="advanceSearchContainer"><div class="searchModuleComponent"><h6 class="pull-left" style="margin-right:10px;"><?php echo vtranslate('LBL_SEARCH_IN',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h6><select class="select2 col-lg-3" id="searchModuleList" data-placeholder="<?php echo vtranslate('LBL_SELECT_MODULE');?>
"><option></option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SEARCHABLE_MODULES']->value, 'fieldObject', false, 'MODULE_NAME');
$_smarty_tpl->tpl_vars['fieldObject']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_NAME']->value => $_smarty_tpl->tpl_vars['fieldObject']->value) {
$_smarty_tpl->tpl_vars['fieldObject']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value == $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value) {?>selected="selected"<?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div><div class="clearfix"></div><div class="filterElements well filterConditionContainer" id="searchContainer" style="height: auto;"><form name="advanceFilterForm" method="POST"><?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value == 'Home') {?><p class="textAlignCenter well contentsBackground"><?php echo vtranslate('LBL_PLEASE_SELECT_MODULE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</p><?php } else { ?><input type="hidden" name="labelFields" <?php if (!empty($_smarty_tpl->tpl_vars['SOURCE_MODULE_MODEL']->value)) {?>  data-value='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['SOURCE_MODULE_MODEL']->value->getNameFields());?>
' <?php }?> /><?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( 'AdvanceFilter.tpl' )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?></form></div></div></div><div class="searchResults"></div></div><div class="modal-overlay-footer clearfix"><div class="advance-search-btns clearfix"><div class=""><button class="btn" id="advanceSearchButton" <?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value == 'Home') {?> disabled="" <?php }?>type="submit"><strong><?php echo vtranslate('LBL_SEARCH',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div><div class=""><?php if ($_smarty_tpl->tpl_vars['SAVE_FILTER_PERMITTED']->value) {?><button class="btn marginLeft10px" <?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value == 'Home') {?> disabled="" <?php }?>id="advanceIntiateSave"><strong><?php echo vtranslate('LBL_SAVE_AS_FILTER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><input class="hide col-lg-3 marginLeft10px" type="text" value="" name="viewname" /><button class="btn btn-submit hide marginLeft10px" <?php if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value == 'Home') {?> disabled="" <?php }?>id="advanceSave"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><?php }?></div></div></div><div>&nbsp;</div></div><div class="col-lg-2 col-md-1 hidden-xs hidden-sm">&nbsp;</div></div></div><?php }
}
