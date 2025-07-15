<?php
/* Smarty version 4.5.4, created on 2025-05-12 11:51:53
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Portal\EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_6821e0d9eb22f2_32231560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17211120f86846368f96a6b4b7eb5b76096bbe2a' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Portal\\EditView.tpl',
      1 => 1744629583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6821e0d9eb22f2_32231560 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal-dialog"><div class="modal-content"><form class="form-horizontal" id="saveBookmark" method="POST" action="index.php"><input type="hidden" name="record" value="<?php echo (isset($_smarty_tpl->tpl_vars['RECORD']->value)) ? $_smarty_tpl->tpl_vars['RECORD']->value : '';?>
" /><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="action" value="SaveAjax" /><?php if ((isset($_smarty_tpl->tpl_vars['RECORD']->value)) && $_smarty_tpl->tpl_vars['RECORD']->value) {
ob_start();
echo vtranslate('LBL_EDIT_BOOKMARK',$_smarty_tpl->tpl_vars['MODULE']->value);
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('TITLE', $_prefixVariable1);
} else {
ob_start();
echo vtranslate('LBL_ADD_NEW_BOOKMARK',$_smarty_tpl->tpl_vars['MODULE']->value);
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('TITLE', $_prefixVariable2);
}
$_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('TITLE'=>$_smarty_tpl->tpl_vars['TITLE']->value), 0, true);
?><div class="modal-body"><div class="block nameBlock row"><div class="col-lg-1"></div><div class="col-lg-4"><label class="pull-right"><?php echo vtranslate('LBL_BOOKMARK_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<span class="redColor">*</span></label></div><div class="col-lg-5"><input type="text" name="bookmarkName" id="bookmarkName" class="col-lg-6 inputElement" <?php if ((isset($_smarty_tpl->tpl_vars['RECORD']->value))) {?> value="<?php echo $_smarty_tpl->tpl_vars['BOOKMARK_NAME']->value;?>
" <?php } else { ?> value="" <?php }?> placeholder="<?php echo vtranslate('LBL_ENTER_BOOKMARK_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-rule-required="true"/></div><div class="col-lg-2"></div></div><br><div class="block nameBlock row"><div class="col-lg-1"></div><div class="col-lg-4"><label class="pull-right"><?php echo vtranslate('LBL_BOOKMARK_URL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<span class="redColor">*</span></label></div><div class="col-lg-5"><input type="text" class="inputElement" name="bookmarkUrl" id="bookmarkUrl" <?php if ((isset($_smarty_tpl->tpl_vars['RECORD']->value))) {?> value="<?php echo $_smarty_tpl->tpl_vars['BOOKMARK_URL']->value;?>
" <?php } else { ?> value="" <?php }?> placeholder="<?php echo vtranslate('LBL_ENTER_URL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-rule-required="true" data-rule-url="true"/></div><div class="col-lg-2"></div></div></div><br><?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( 'ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></form></div></div>
<?php }
}
