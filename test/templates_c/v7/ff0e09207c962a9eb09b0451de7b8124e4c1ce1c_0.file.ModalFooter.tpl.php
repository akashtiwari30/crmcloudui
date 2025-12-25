<?php
/* Smarty version 4.5.4, created on 2025-07-18 06:51:11
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Vtiger\ModalFooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_6879eedf4582d9_78554009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff0e09207c962a9eb09b0451de7b8124e4c1ce1c' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Vtiger\\ModalFooter.tpl',
      1 => 1752817852,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6879eedf4582d9_78554009 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-footer "><div class='footer-btns'><?php if ($_smarty_tpl->tpl_vars['BUTTON_NAME']->value != null) {
$_smarty_tpl->_assignInScope('BUTTON_LABEL', $_smarty_tpl->tpl_vars['BUTTON_NAME']->value);
} else {
ob_start();
echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('BUTTON_LABEL', $_prefixVariable1);
}?><button <?php if ($_smarty_tpl->tpl_vars['BUTTON_ID']->value != null) {?> id="<?php echo $_smarty_tpl->tpl_vars['BUTTON_ID']->value;?>
" <?php }?> class="btn btn-submit" type="submit" name="saveButton"><?php echo $_smarty_tpl->tpl_vars['BUTTON_LABEL']->value;?>
</button><a href="#" class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div></div><?php }
}
