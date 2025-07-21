<?php
/* Smarty version 4.5.4, created on 2025-07-18 10:51:13
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Settings\ExtensionStore\ExtensionModules.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_687a27216a1540_50592511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ee96729184d092dc4db94b4cd62a4af2b852908' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Settings\\ExtensionStore\\ExtensionModules.tpl',
      1 => 1752835867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_687a27216a1540_50592511 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\cloudcrm\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>

<div class="row"><?php $_smarty_tpl->_assignInScope('IS_AUTH', ($_smarty_tpl->tpl_vars['REGISTRATION_STATUS']->value && $_smarty_tpl->tpl_vars['PASSWORD_STATUS']->value));
$_smarty_tpl->_assignInScope('EXTENSIONS_COUNT', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['EXTENSIONS_LIST']->value, 'EXTENSION', false, NULL, 'extensions', array (
));
$_smarty_tpl->tpl_vars['EXTENSION']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['EXTENSION']->value) {
$_smarty_tpl->tpl_vars['EXTENSION']->do_else = false;
if (!$_smarty_tpl->tpl_vars['EXTENSION']->value->isVtigerCompatible()) {
continue 1;
}
$_smarty_tpl->_assignInScope('EXTENSIONS_COUNT', $_smarty_tpl->tpl_vars['EXTENSIONS_COUNT']->value+1);
if ($_smarty_tpl->tpl_vars['EXTENSION']->value->isAlreadyExists()) {
$_smarty_tpl->_assignInScope('EXTENSION_MODULE_MODEL', $_smarty_tpl->tpl_vars['EXTENSION']->value->get('moduleModel'));
} else {
$_smarty_tpl->_assignInScope('EXTENSION_MODULE_MODEL', 'false');
}
$_smarty_tpl->_assignInScope('IS_FREE', (($_smarty_tpl->tpl_vars['EXTENSION']->value->get('price') == 'Free') || ($_smarty_tpl->tpl_vars['EXTENSION']->value->get('price') == 0)));?><div class="col-lg-4 col-md-6 col-sm-6 "><div class="extension_container extensionWidgetContainer"><div class="extension_header"><div class="font-x-x-large boxSizingBorderBox"><h6><?php echo vtranslate($_smarty_tpl->tpl_vars['EXTENSION']->value->get('label'),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h6></div><input type="hidden" name="extensionName" value="<?php echo $_smarty_tpl->tpl_vars['EXTENSION']->value->get('name');?>
" /><input type="hidden" name="extensionUrl" value="<?php echo $_smarty_tpl->tpl_vars['EXTENSION']->value->get('downloadURL');?>
" /><input type="hidden" name="moduleAction" value="<?php if (($_smarty_tpl->tpl_vars['EXTENSION']->value->isAlreadyExists()) && (!$_smarty_tpl->tpl_vars['EXTENSION_MODULE_MODEL']->value->get('trial'))) {
if ($_smarty_tpl->tpl_vars['EXTENSION']->value->isUpgradable()) {?>Upgrade<?php } else { ?>Installed<?php }
} else { ?>Install<?php }?>" /><input type="hidden" name="extensionId" value="<?php echo $_smarty_tpl->tpl_vars['EXTENSION']->value->get('id');?>
" /></div><div style="padding-left:3px;"><div class="row extension_contents" style="border:none;"><div class="col-sm-8 col-xs-8"><div class="row extensionDescription" style="word-wrap:break-word;margin: 0px;"><span><?php $_smarty_tpl->_assignInScope('SUMMARY', $_smarty_tpl->tpl_vars['EXTENSION']->value->get('summary'));
if (empty($_smarty_tpl->tpl_vars['SUMMARY']->value)) {
ob_start();
echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['EXTENSION']->value->get('description'),100);
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('SUMMARY', $_prefixVariable1);
}
echo $_smarty_tpl->tpl_vars['SUMMARY']->value;?>
 </span></div></div><div class="col-sm-4 col-xs-4"><?php if ($_smarty_tpl->tpl_vars['EXTENSION']->value->get('thumbnailURL') != NULL) {
$_smarty_tpl->_assignInScope('imageSource', $_smarty_tpl->tpl_vars['EXTENSION']->value->get('thumbnailURL'));?><img width="100%" height="100%" class="thumbnailImage" src="<?php echo $_smarty_tpl->tpl_vars['imageSource']->value;?>
"/><?php } else { ?><i class="fa fa-picture-o" style="color:#ddd;font-size: 90px;" title="Image not available"></i><?php }?></div></div><div class="extensionInfo"><div class=""><?php $_smarty_tpl->_assignInScope('ON_RATINGS', $_smarty_tpl->tpl_vars['EXTENSION']->value->get('avgrating'));?><div class=""><span class="rating" data-score="<?php echo $_smarty_tpl->tpl_vars['ON_RATINGS']->value;?>
" data-readonly=true></span><span><?php if ($_smarty_tpl->tpl_vars['EXTENSION']->value->get('avgrating')) {?>&nbsp;(<?php echo $_smarty_tpl->tpl_vars['EXTENSION']->value->get('avgrating');?>
)<?php }?></span></div><div class="extension-btn-container"><div class="pull-rightt" style="display:flex; gap:6px"><?php if ($_smarty_tpl->tpl_vars['EXTENSION']->value->isVtigerCompatible()) {?><button class="btn btn-sm btn-default installExtension addButton"><?php echo vtranslate('LBL_MORE_DETAILS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php if ($_smarty_tpl->tpl_vars['EXTENSION']->value->isAlreadyExists()) {
if (($_smarty_tpl->tpl_vars['EXTENSION']->value->isUpgradable())) {?><button class="btn btn-submit btn-sm margin0px oneclickInstallFree <?php if ($_smarty_tpl->tpl_vars['IS_AUTH']->value) {?>authenticated <?php } else { ?> loginRequired<?php }?>"><?php echo vtranslate('LBL_UPGRADE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php } else {
if ($_smarty_tpl->tpl_vars['EXTENSION_MODULE_MODEL']->value != 'false' && $_smarty_tpl->tpl_vars['EXTENSION_MODULE_MODEL']->value->get('trial')) {?><span class="alert alert-info"><?php echo vtranslate('LBL_TRIAL_INSTALLED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><?php } else { ?><span class="alert alert-info" style="vertical-align:middle; padding: 3px 8px; margin-bottom:0px"><?php echo vtranslate('LBL_INSTALLED',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><?php }
if (!($_smarty_tpl->tpl_vars['EXTENSION']->value->get('price') == 'Free' || $_smarty_tpl->tpl_vars['EXTENSION']->value->get('price') == 0)) {?>&nbsp;&nbsp;<button class="oneclickInstallPaid btn btn-info <?php if ($_smarty_tpl->tpl_vars['IS_AUTH']->value) {?>authenticated <?php } else { ?> loginRequired<?php }?>" data-trial=<?php if ($_smarty_tpl->tpl_vars['EXTENSION']->value->get('trialdays') > 0) {?>true<?php } else { ?>false<?php }?>><?php echo vtranslate('LBL_BUY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
$<?php echo $_smarty_tpl->tpl_vars['EXTENSION']->value->get('price');?>
</button><?php }
}
} else {
if ($_smarty_tpl->tpl_vars['EXTENSION']->value->get('price') == 'Free' || $_smarty_tpl->tpl_vars['EXTENSION']->value->get('price') == 0) {?><button class=" btn btn-submit btn-sm oneclickInstallFree <?php if ($_smarty_tpl->tpl_vars['IS_AUTH']->value) {?>authenticated <?php } else { ?> loginRequired<?php }?>"><?php echo vtranslate('LBL_INSTALL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button><?php } else { ?><button class="oneclickInstallPaid btn btn-info btn-sm <?php if ($_smarty_tpl->tpl_vars['IS_AUTH']->value) {?>authenticated <?php } else { ?> loginRequired<?php }?>" data-trial=false><?php echo vtranslate('LBL_BUY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
$<?php echo $_smarty_tpl->tpl_vars['EXTENSION']->value->get('price');?>
</button><?php }
}
} else { ?><span class="alert alert-error"><?php echo vtranslate('LBL_EXTENSION_NOT_COMPATABLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span><?php }?></div></div></div></div></div></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (empty($_smarty_tpl->tpl_vars['EXTENSIONS_LIST']->value) || $_smarty_tpl->tpl_vars['EXTENSIONS_COUNT']->value == 0) {?><div class="row"><div class="col-sm-2 col-xs-2"></div><div class="col-sm-8 col-xs-8"><br><br><br><h3><center> <?php echo vtranslate('LBL_NO_EXTENSIONS_FOUND',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 </center></h3></div><div class="col-sm-2 col-xs-2"></div></div><?php }?></div><?php }
}
