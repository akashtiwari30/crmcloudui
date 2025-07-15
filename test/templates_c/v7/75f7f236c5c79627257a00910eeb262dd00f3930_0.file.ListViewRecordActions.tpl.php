<?php
/* Smarty version 4.5.4, created on 2025-04-14 11:58:48
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Settings\Workflows\ListViewRecordActions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67fcf8789154c2_11501085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75f7f236c5c79627257a00910eeb262dd00f3930' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Settings\\Workflows\\ListViewRecordActions.tpl',
      1 => 1744629584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67fcf8789154c2_11501085 (Smarty_Internal_Template $_smarty_tpl) {
?><!--LIST VIEW RECORD ACTIONS--><div style="width:80px ;"><a class="deleteRecordButton" style=" opacity: 0; padding: 0 5px;"><i title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="fa fa-trash alignMiddle"></i></a><input style="opacity: 0;" <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get('status')) {?> checked value="on" <?php } else { ?> value="off"<?php }?> data-on-color="success"  data-id="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" type="checkbox" name="workflowstatus" id="workflowstatus"></div><?php }
}
