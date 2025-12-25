<?php
/* Smarty version 4.5.4, created on 2025-07-15 06:32:46
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Settings\SharingAccess\ListRules.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_6875f60ee45d71_79037796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '843a846b84acdc2e3af069e985e42a6c6f8378e4' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Settings\\SharingAccess\\ListRules.tpl',
      1 => 1752561160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6875f60ee45d71_79037796 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="ruleListContainer"><div class="title row"><div class="rulehead col-sm-6"><!-- Check if the module should the for module to get the translations--><p><?php echo vtranslate('LBL_SHARING_RULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<?php echo vtranslate('LBL_FOR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['FOR_MODULE']->value == 'Accounts') {
echo vtranslate($_smarty_tpl->tpl_vars['FOR_MODULE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
} else {
echo vtranslate($_smarty_tpl->tpl_vars['FOR_MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);
}?> :</p></div><div class="col-sm-6"><div class="pull-right"><button class="btn btn-sm btn-default addButton addCustomRule" type="button" data-url="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getCreateRuleUrl();?>
"><i class="fa fa-plus"></i> &nbsp;&nbsp;<?php echo vtranslate('LBL_ADD_CUSTOM_RULE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button></div></div></div><hr><div class="contents"><?php if ($_smarty_tpl->tpl_vars['RULE_MODEL_LIST']->value) {?><table class="table table-borderedd sharing-sub-table table-condensed customRuleTable"><thead><tr class="customRuleHeaders"><th><p><?php echo vtranslate('LBL_RULE_NO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p></th><!-- Check if the module should the for module to get the translations --><th><p><?php if ($_smarty_tpl->tpl_vars['FOR_MODULE']->value == 'Accounts') {
echo vtranslate($_smarty_tpl->tpl_vars['FOR_MODULE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
} else {
echo vtranslate($_smarty_tpl->tpl_vars['FOR_MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);
}?>&nbsp;<?php echo vtranslate('LBL_OF',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</p></th><th><p><?php echo vtranslate('LBL_CAN_ACCESSED_BY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p></th><th><p><?php echo vtranslate('LBL_PRIVILEGES',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</p></th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RULE_MODEL_LIST']->value, 'RULE_MODEL', false, 'RULE_ID', 'customRuleIterator', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['RULE_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['RULE_ID']->value => $_smarty_tpl->tpl_vars['RULE_MODEL']->value) {
$_smarty_tpl->tpl_vars['RULE_MODEL']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_customRuleIterator']->value['index']++;
?><tr class="customRuleEntries"><td class="sequenceNumber"><span><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_customRuleIterator']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_customRuleIterator']->value['index'] : null)+1;?>
</span></td><td><span> <a href="<?php echo $_smarty_tpl->tpl_vars['RULE_MODEL']->value->getSourceDetailViewUrl();?>
"><?php echo vtranslate(('SINGLE_').($_smarty_tpl->tpl_vars['RULE_MODEL']->value->getSourceMemberName()),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
::<?php echo $_smarty_tpl->tpl_vars['RULE_MODEL']->value->getSourceMember()->getName();?>
</a></span></td><td><span><a href="<?php echo $_smarty_tpl->tpl_vars['RULE_MODEL']->value->getTargetDetailViewUrl();?>
"><?php echo vtranslate(('SINGLE_').($_smarty_tpl->tpl_vars['RULE_MODEL']->value->getTargetMemberName()),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
::<?php echo $_smarty_tpl->tpl_vars['RULE_MODEL']->value->getTargetMember()->getName();?>
</a></span></td><td><span><?php if ($_smarty_tpl->tpl_vars['RULE_MODEL']->value->isReadOnly()) {
echo vtranslate('Read Only',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
} else {
echo vtranslate('Read Write',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);
}?></span><div class="table-actions pull-right"><span><a href="javascript:void(0);" class="edit" data-url="<?php echo $_smarty_tpl->tpl_vars['RULE_MODEL']->value->getEditViewUrl();?>
"><i title="<?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="fa fa-pencil"></i></a></span>&nbsp;<span><a href="javascript:void(0);" class="delete" data-url="<?php echo $_smarty_tpl->tpl_vars['RULE_MODEL']->value->getDeleteActionUrl();?>
"><i title="<?php echo vtranslate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" class="fa fa-trash"></i></a></span></div></td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></tbody></table><div class="recordDetails textAlignCenter hide"><span class="text-light-color"><?php echo vtranslate('LBL_CUSTOM_ACCESS_MESG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
.<!--<a href=""><?php echo vtranslate('LBL_CLICK_HERE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a>&nbsp;<?php echo vtranslate('LBL_CREATE_RULE_MESG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
--></span></div><?php } else { ?><div class="recordDetails textAlignCenter"><span class="text-light-color"><?php echo vtranslate('LBL_CUSTOM_ACCESS_MESG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
.<!--<a href=""><?php echo vtranslate('LBL_CLICK_HERE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a>&nbsp;<?php echo vtranslate('LBL_CREATE_RULE_MESG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
--></span></div><?php }?></div></div>
<?php }
}
