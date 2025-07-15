<?php
/* Smarty version 4.5.4, created on 2025-07-02 13:21:19
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Settings\Vtiger\SettingsShortCut.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_6865324f3dc407_69581768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f7f3751d17dbe34dc1b1acc3f7ae43398f66cee' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Settings\\Vtiger\\SettingsShortCut.tpl',
      1 => 1751353411,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6865324f3dc407_69581768 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="shortcut_<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getId();?>
" data-actionurl="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getPinUnpinActionUrl();?>
" class="setting-shortcut-box contentsBackground well cursorPointer moduleBlock" data-url="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getUrl();?>
"><div><p><?php echo vtranslate($_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('name'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</p><div class="unpin-btn"><button data-id="<?php echo $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->getId();?>
" title="<?php echo vtranslate('LBL_REMOVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" type="button" class="unpin close"><i class="fa fa-close"></i></button></div></div><span><?php if ($_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('description') && $_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('description') != 'NULL') {
echo vtranslate($_smarty_tpl->tpl_vars['SETTINGS_SHORTCUT']->value->get('description'),$_smarty_tpl->tpl_vars['MODULE']->value);
}?></span></div>
<?php }
}
