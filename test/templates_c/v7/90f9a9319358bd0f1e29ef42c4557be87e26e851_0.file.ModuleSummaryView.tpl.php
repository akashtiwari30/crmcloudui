<?php
/* Smarty version 4.5.4, created on 2025-05-08 08:06:21
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Vtiger\ModuleSummaryView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_681c65fd408178_30507869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90f9a9319358bd0f1e29ef42c4557be87e26e851' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Vtiger\\ModuleSummaryView.tpl',
      1 => 1744629584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_681c65fd408178_30507869 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="recordDetails">
    <?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( 'DetailViewBlockView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['SUMMARY_RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0, true);
?>
</div><?php }
}
