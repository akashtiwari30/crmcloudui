<?php
/* Smarty version 4.5.4, created on 2025-07-16 05:26:37
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Vtiger\AddDashBoardTabForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_6877380dc19619_23178588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6be3b1876c90573148e893b4e635ab80d0f7554' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Vtiger\\AddDashBoardTabForm.tpl',
      1 => 1752483978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6877380dc19619_23178588 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modelContainer"><div class="modal-content"><?php ob_start();
echo vtranslate('LBL_ADD_DASHBOARD');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TITLE'=>$_prefixVariable1), 0, true);
?><form id="AddDashBoardTab" name="AddDashBoardTab" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"/><input type="hidden" name="action" value="DashBoardTab"/><input type="hidden" name="mode" value="addTab"/><div class="modal-body clearfix"><div class="col-lg-5"><label class="control-label pull-right marginTop5px"><?php echo vtranslate('LBL_TAB_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<span class="redColor">*</span></label></div><div class="col-lg-6"><input type="text" name="tabName" data-rule-required="true" size="25" class="inputElement" maxlength='30'/></div><div class="col-lg-12" style='margin-top: 10px; padding: 5px;'><div class="alert-info"><center><i class="fa fa-info-circle"></i>&nbsp;&nbsp;<?php echo vtranslate('LBL_MAX_CHARACTERS_ALLOWED_DASHBOARD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</center></div></div></div><?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "ModalFooter.tpl",$_smarty_tpl->tpl_vars['MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></form></div></div>
<?php }
}
