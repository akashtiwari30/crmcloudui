<?php
/* Smarty version 4.5.4, created on 2025-07-07 12:21:02
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Portal\DetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_686bbbae887642_79791394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53b97f44f421eb2acfe86947ea2653a3c6a61405' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Portal\\DetailView.tpl',
      1 => 1751868815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686bbbae887642_79791394 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="listViewPageDiv"><div class="container-fluid"><div class="row"><div class="col-lg-7"></div><div class="col-lg-2" style="padding-top: 14px"><div class="pull-right"><label><?php echo vtranslate('LBL_BOOKMARKS_LIST',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></div></div><div class="col-lg-3" style="padding-top: 10px"><select class="inputElement select2" id="bookmarksDropdown" name="bookmarksList"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORDS_LIST']->value, 'RECORD');
$_smarty_tpl->tpl_vars['RECORD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['RECORD']->value) {
$_smarty_tpl->tpl_vars['RECORD']->do_else = false;
?><option value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['RECORD']->value['id'] == $_smarty_tpl->tpl_vars['RECORD_ID']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['RECORD']->value['portalname'];?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div><div class="row"><span class="listViewLoadingImageBlock hide modal noprint" id="loadingListViewModal"><img class="listViewLoadingImage" src="<?php echo vimage_path('loading.gif');?>
" alt="no-image" title="<?php echo vtranslate('LBL_LOADING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"/><p class="listViewLoadingMsg"><?php echo vtranslate('LBL_LOADING_LISTVIEW_CONTENTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
........</p></span><br><?php if (substr($_smarty_tpl->tpl_vars['URL']->value,0,8) != 'https://') {?><div id="portalDetailViewHttpError" class=""><div class="col-lg-12"><p><?php echo vtranslate('HTTP_ERROR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</p></div></div><?php }?><br></div><div class="row"><div class="col-lg-12"><iframe src="<?php if (substr($_smarty_tpl->tpl_vars['URL']->value,0,4) != 'http') {?>//<?php }
echo $_smarty_tpl->tpl_vars['URL']->value;?>
" frameborder="1" height="600" scrolling="auto" width="100%" style="border: solid 2px; border-color: #dddddd;"></iframe></div></div></div></div>
<?php }
}
