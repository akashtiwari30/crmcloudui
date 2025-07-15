<?php
/* Smarty version 4.5.4, created on 2025-06-30 12:28:51
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Settings\Groups\DetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_68628303cfc418_44026344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b8a0eefd9cd29a3195320886f190a473b89b449' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Settings\\Groups\\DetailView.tpl',
      1 => 1751286530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68628303cfc418_44026344 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="detailViewContainer full-height"><div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-scroll"><div class="detailViewInfo" ><form id="detailView" class="form-horizontal" method="POST"><div class="clearfix"><h4 class="pull-left"><?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('groupname');?>
</h4><div class="btn-group pull-right" ><button class="btn btn-default" onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getEditViewUrl();?>
'" type="button"><strong><?php echo vtranslate('LBL_EDIT_RECORD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></div><hr><div class="form-group"><span class="fieldLabel col-lg-3 col-md-3 col-sm-3"><?php echo vtranslate('LBL_GROUP_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<span class="redColor">*</span></span><div class="fieldValue"><b><?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getName();?>
</b></div></div><div class="form-group"><span class="fieldLabel col-lg-3 col-md-3 col-sm-3"><?php echo vtranslate('LBL_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><div class="fieldValue"><b><?php echo $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getDescription();?>
</b></div></div><div class="form-group "><div class=" col-lg-12 col-md-12 col-sm-12 "><span class="fieldLabel"><?php echo vtranslate('LBL_GROUP_MEMBERS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
&nbsp;<span class="redColor">*</span></span></div><div class="fieldValue"><div class="col-lg-7 col-md-7 col-sm-7"><div class="collectiveGroupMembers"><ul class="nav"><?php $_smarty_tpl->_assignInScope('GROUPS', $_smarty_tpl->tpl_vars['RECORD_MODEL']->value->getMembers());
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUPS']->value, 'GROUP_MEMBERS', false, 'GROUP_LABEL');
$_smarty_tpl->tpl_vars['GROUP_MEMBERS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_LABEL']->value => $_smarty_tpl->tpl_vars['GROUP_MEMBERS']->value) {
$_smarty_tpl->tpl_vars['GROUP_MEMBERS']->do_else = false;
if (!empty($_smarty_tpl->tpl_vars['GROUP_MEMBERS']->value)) {?><li class="groupLabel"><?php echo vtranslate($_smarty_tpl->tpl_vars['GROUP_LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</li><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUP_MEMBERS']->value, 'GROUP_MEMBER_INFO');
$_smarty_tpl->tpl_vars['GROUP_MEMBER_INFO']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_MEMBER_INFO']->value) {
$_smarty_tpl->tpl_vars['GROUP_MEMBER_INFO']->do_else = false;
?><li><a href="<?php echo $_smarty_tpl->tpl_vars['GROUP_MEMBER_INFO']->value->getDetailViewUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['GROUP_MEMBER_INFO']->value->get('name');?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></ul></div></div></div></div></form></div></div></div><?php }
}
