<?php
/* Smarty version 4.5.4, created on 2025-07-14 11:50:12
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Settings\ExtensionStore\Index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_6874eef4da7567_89030031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02056ebc3e6c946e4a7f5aea368d64052e3a743c' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Settings\\ExtensionStore\\Index.tpl',
      1 => 1752493780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6874eef4da7567_89030031 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-sm-12 col-xs-12 content-area" id="importModules"><div class="row"><div class="col-sm-5 col-xs-5"><input type="text" id="searchExtension" class="extensionSearch form-control" placeholder="<?php echo vtranslate('Search for an extension..',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"/></div></div><br><div class="contents row"><div class="col-sm-12 col-xs-12" id="extensionContainer"><?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( 'ExtensionModules.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div><?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "CardSetupModals.tpl",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div><?php }
}
