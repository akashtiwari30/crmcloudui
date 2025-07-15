<?php
/* Smarty version 4.5.4, created on 2025-07-03 10:20:50
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Settings\PBXManager\Edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_686659823d8187_52152143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '756a21b3f803fe62da28d2d75bdbdab07fb02426' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Settings\\PBXManager\\Edit.tpl',
      1 => 1751526213,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686659823d8187_52152143 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="widget_header col-lg-12"><h4><?php echo vtranslate('LBL_PBXMANAGER',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h4><hr></div><div class="container-fluid"><?php $_smarty_tpl->_assignInScope('MODULE_MODEL', Settings_PBXManager_Module_Model::getCleanInstance());?><form id="MyModal" class="form-horizontal" data-detail-url="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getDetailViewUrl();?>
"><input type="hidden" name="module" value="PBXManager"/><input type="hidden" name="action" value="SaveAjax"/><input type="hidden" name="parent" value="Settings"/><input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
"><div class="blockData"><table class="table detailview-table no-border"><tbody><?php $_smarty_tpl->_assignInScope('FIELDS', PBXManager_PBXManager_Connector::getSettingsParameters());
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'FIELD_TYPE', false, 'FIELD_NAME');
$_smarty_tpl->tpl_vars['FIELD_TYPE']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_TYPE']->value) {
$_smarty_tpl->tpl_vars['FIELD_TYPE']->do_else = false;
?><tr><td class="fieldLabel control-label" style="width:25%"><label><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_NAME']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<span class="redColor">*</span></label></td><td style="word-wrap:break-word;"><input class="inputElement fieldValue" type="<?php echo $_smarty_tpl->tpl_vars['FIELD_TYPE']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" data-rule-required="true" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME']->value);?>
" /></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table></div><div class="modal-overlay-footer clearfix"><div class="row clearfix"><div class="textAlignCenter col-lg-12 col-md-12 col-sm-12"><button type="submit" class="btn btn-success saveButton"><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button>&nbsp;&nbsp;<a class="cancelLink" data-dismiss="modal" href="#"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div></div></div></form></div><div class="col-lg-12"><div class="col-sm-6 alert alert-info container-fluid marginTop10px"><b><?php echo vtranslate('LBL_NOTE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</b> <?php echo vtranslate('LBL_INFO_WEBAPP_URL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<br><br><?php echo vtranslate('LBL_FORMAT_WEBAPP_URL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 : <?php echo vtranslate('LBL_FORMAT_INFO_WEBAPP_URL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div><?php }
}
