<?php
/* Smarty version 4.5.4, created on 2025-07-14 06:17:01
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Vtiger\partials\Topbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_6874a0dde8d1d6_24191835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04a72ab41908aeaa6502f7c42b8827a520a7118c' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Vtiger\\partials\\Topbar.tpl',
      1 => 1752473819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/Vtiger/Header.tpl' => 1,
  ),
),false)) {
function content_6874a0dde8d1d6_24191835 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:modules/Vtiger/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_assignInScope('APP_IMAGE_MAP', Vtiger_MenuStructure_Model::getAppIcons());?><nav class="navbar navbar-inverse navbar-fixed-top app-fixed-navbar"><div class="container-fluid global-nav search-cont"><div class="row"><div id="toggle-container" class="col-sm-1 col-xs-1 cursorPointer"><div class="row btn-pin-toggle hamburger is-sm is-active"><span class="hamburger-line"></span><span class="hamburger-line"></span><span class="hamburger-line"></span></div></div><div class="navbar-header paddingTop5"><button type="button" class="navbar-toggle collapsed border0" data-toggle="collapse" data-target="#navbar" aria-expanded="false"><i class="fa fa-th"></i></button><button type="button" class="navbar-toggle collapsed border0" data-toggle="collapse" data-target="#search-links-container" aria-expanded="false"><i class="fa fa-search"></i></button></div><div class="topbar-right"><div class="col-sm-4"><div id="search-links-container" class="search-links-container collapse navbar-collapse"><div class="search-link"><span class="fa fa-search" aria-hidden="true"></span><input class="keyword-input" type="text" placeholder="<?php echo vtranslate('LBL_TYPE_SEARCH');?>
" value="<?php echo $_smarty_tpl->tpl_vars['GLOBAL_SEARCH_VALUE']->value;?>
"><span id="adv-search" class="adv-search fa fa-chevron-circle-down pull-right cursorPointer" aria-hidden="true"></span></div></div></div><div id="navbar" class="col-sm-6 col-xs-12 collapse navbar-collapse navbar-right global-actions"><ul class="nav navbar-nav top-navbar"><li><div class="dropdown pull-left"><div class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><a href="#" id="menubar_quickCreate" class="qc-button fa fa-solid fa-plus" title="<?php echo vtranslate('LBL_QUICK_CREATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" aria-hidden="true"></a></div><ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" style="width:750px;"><li class="title" style="padding: 5px 0 0 15px;"><h5><?php echo vtranslate('LBL_QUICK_CREATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h5></li><hr/><li id="quickCreateModules" style="padding: 0 5px;"><div class="col-lg-12" style="padding-bottom:15px;"><?php $_smarty_tpl->_assignInScope('count', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['QUICK_CREATE_MODULES']->value, 'moduleModel', false, 'moduleName');
$_smarty_tpl->tpl_vars['moduleModel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['moduleName']->value => $_smarty_tpl->tpl_vars['moduleModel']->value) {
$_smarty_tpl->tpl_vars['moduleModel']->do_else = false;
if ($_smarty_tpl->tpl_vars['moduleModel']->value->isPermitted('CreateView') || $_smarty_tpl->tpl_vars['moduleModel']->value->isPermitted('EditView')) {
$_smarty_tpl->_assignInScope('quickCreateModule', $_smarty_tpl->tpl_vars['moduleModel']->value->isQuickCreateSupported());
$_smarty_tpl->_assignInScope('singularLabel', $_smarty_tpl->tpl_vars['moduleModel']->value->getSingularLabelKey());
ob_start();
echo !$_smarty_tpl->tpl_vars['moduleModel']->value->isPermitted('CreateView') && $_smarty_tpl->tpl_vars['moduleModel']->value->isPermitted('EditView');
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('hideDiv', $_prefixVariable1);
if ($_smarty_tpl->tpl_vars['quickCreateModule']->value == '1') {
if ($_smarty_tpl->tpl_vars['count']->value%3 == 0) {?><div class="row quick-creat-list"><?php }
if ($_smarty_tpl->tpl_vars['singularLabel']->value == 'SINGLE_Calendar') {
$_smarty_tpl->_assignInScope('singularLabel', 'LBL_TASK');?><div class="<?php if ($_smarty_tpl->tpl_vars['hideDiv']->value) {?>create_restricted_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
 hide<?php } else { ?>col-lg-4 col-xs-4<?php }?>"><a id="menubar_quickCreate_Events" class="quickCreateModule" data-name="Events" data-url="index.php?module=Events&view=QuickCreateAjax" href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getModuleIcon('Event');?>
<span class="quick-create-module"><?php echo vtranslate('LBL_EVENT',$_smarty_tpl->tpl_vars['moduleName']->value);?>
</span></a></div><?php if ($_smarty_tpl->tpl_vars['count']->value%3 == 2) {?></div><div class="row quick-creat-list"><?php }?><div class="<?php if ($_smarty_tpl->tpl_vars['hideDiv']->value) {?>create_restricted_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
 hide<?php } else { ?>col-lg-4 col-xs-4<?php }?>"><a id="menubar_quickCreate_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
" class="quickCreateModule" data-name="<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
"data-url="<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getQuickCreateUrl();?>
" href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getModuleIcon('Task');?>
<span class="quick-create-module"><?php echo vtranslate($_smarty_tpl->tpl_vars['singularLabel']->value,$_smarty_tpl->tpl_vars['moduleName']->value);?>
</span></a></div><?php if (!$_smarty_tpl->tpl_vars['hideDiv']->value) {
$_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);
}
} elseif ($_smarty_tpl->tpl_vars['singularLabel']->value == 'SINGLE_Documents') {?><div class="<?php if ($_smarty_tpl->tpl_vars['hideDiv']->value) {?>create_restricted_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
 hide<?php } else { ?>col-lg-4 col-xs-4<?php }?> dropdown"><a id="menubar_quickCreate_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
" class="quickCreateModuleSubmenu dropdown-toggle" data-name="<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
" data-toggle="dropdown"data-url="<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getQuickCreateUrl();?>
" href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getModuleIcon();?>
<span class="quick-create-module"><?php echo vtranslate($_smarty_tpl->tpl_vars['singularLabel']->value,$_smarty_tpl->tpl_vars['moduleName']->value);?>
<i class="fa fa-caret-down quickcreateMoreDropdownAction"></i></span></a><ul class="dropdown-menu quickcreateMoreDropdown" aria-labelledby="menubar_quickCreate_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
"><li class="dropdown-header"><i class="fa fa-upload"></i> <?php echo vtranslate('LBL_FILE_UPLOAD',$_smarty_tpl->tpl_vars['moduleName']->value);?>
</li><li id="VtigerAction"><a href="javascript:Documents_Index_Js.uploadTo('Vtiger')"><img style="  margin-top: -3px;margin-right: 4%;" title="Vtiger" alt="Vtiger" src="layouts/v7/skins//images/Vtiger.png"><?php ob_start();
echo vtranslate('LBL_VTIGER',$_smarty_tpl->tpl_vars['moduleName']->value);
$_prefixVariable2 = ob_get_clean();
echo vtranslate('LBL_TO_SERVICE',$_smarty_tpl->tpl_vars['moduleName']->value,$_prefixVariable2);?>
</a></li><li class="dropdown-header"><i class="fa fa-link"></i> <?php echo vtranslate('LBL_LINK_EXTERNAL_DOCUMENT',$_smarty_tpl->tpl_vars['moduleName']->value);?>
</li><li id="shareDocument"><a href="javascript:Documents_Index_Js.createDocument('E')">&nbsp;<i class="fa fa-external-link"></i>&nbsp;&nbsp; <?php ob_start();
echo vtranslate('LBL_FILE_URL',$_smarty_tpl->tpl_vars['moduleName']->value);
$_prefixVariable3 = ob_get_clean();
echo vtranslate('LBL_FROM_SERVICE',$_smarty_tpl->tpl_vars['moduleName']->value,$_prefixVariable3);?>
</a></li><li role="separator" class="divider"></li><li id="createDocument"><a href="javascript:Documents_Index_Js.createDocument('W')"><i class="fa fa-file-text"></i> <?php ob_start();
echo vtranslate('SINGLE_Documents',$_smarty_tpl->tpl_vars['moduleName']->value);
$_prefixVariable4 = ob_get_clean();
echo vtranslate('LBL_CREATE_NEW',$_smarty_tpl->tpl_vars['moduleName']->value,$_prefixVariable4);?>
</a></li></ul></div><?php } else { ?><div class="<?php if ($_smarty_tpl->tpl_vars['hideDiv']->value) {?>create_restricted_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
 hide<?php } else { ?>col-lg-4 col-xs-4<?php }?>"><a id="menubar_quickCreate_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
" class="quickCreateModule" data-name="<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
"data-url="<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getQuickCreateUrl();?>
" href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getModuleIcon();?>
<span class="quick-create-module"><?php echo vtranslate($_smarty_tpl->tpl_vars['singularLabel']->value,$_smarty_tpl->tpl_vars['moduleName']->value);?>
</span></a></div><?php }
if ($_smarty_tpl->tpl_vars['count']->value%3 == 2) {?></div><?php }
if (!$_smarty_tpl->tpl_vars['hideDiv']->value) {
$_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);
}
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></li></ul></div></li><?php $_smarty_tpl->_assignInScope('USER_PRIVILEGES_MODEL', Users_Privileges_Model::getCurrentUserPrivilegesModel());
$_smarty_tpl->_assignInScope('CALENDAR_MODULE_MODEL', Vtiger_Module_Model::getInstance('Calendar'));
if ($_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL']->value->hasModulePermission($_smarty_tpl->tpl_vars['CALENDAR_MODULE_MODEL']->value->getId())) {?><li><div><a href="index.php?module=Calendar&view=<?php echo $_smarty_tpl->tpl_vars['CALENDAR_MODULE_MODEL']->value->getDefaultViewName();?>
" class="fa fa-calendar" title="<?php echo vtranslate('Calendar','Calendar');?>
" aria-hidden="true"></a></div></li><?php }
$_smarty_tpl->_assignInScope('REPORTS_MODULE_MODEL', Vtiger_Module_Model::getInstance('Reports'));
if ($_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL']->value->hasModulePermission($_smarty_tpl->tpl_vars['REPORTS_MODULE_MODEL']->value->getId())) {?><li><div><a href="index.php?module=Reports&view=List" class="fa fa-bar-chart" title="<?php echo vtranslate('Reports','Reports');?>
" aria-hidden="true"></a></div></li><?php }
if ($_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL']->value->hasModulePermission($_smarty_tpl->tpl_vars['CALENDAR_MODULE_MODEL']->value->getId())) {?><li><div><a href="#" class="taskManagement vicon vicon-task" title="<?php echo vtranslate('Tasks','Vtiger');?>
" aria-hidden="true"></a></div></li><?php }?><li class="dropdown"><div><a href="#" class="userName dropdown-toggle pull-right" data-toggle="dropdown" role="button"><span class="" aria-hidden="true" title="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('userlabel');?>
(<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('user_name');?>
)"><img class="profile-icon" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIf4R5qPKHPNMyAqV-FjS_OTBB8pfUV29Phg&s" alt="profile icon" /></span><span class="link-text-xs-only hidden-lg hidden-md hidden-sm"><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->getName();?>
</span></a><div class="dropdown-menu logout-content" role="menu"><div class="row"><div class="col-lg-4 col-sm-4"><div class="profile-img-container"><?php $_smarty_tpl->_assignInScope('IMAGE_DETAILS', $_smarty_tpl->tpl_vars['USER_MODEL']->value->getImageDetails());
if ($_smarty_tpl->tpl_vars['IMAGE_DETAILS']->value != '' && $_smarty_tpl->tpl_vars['IMAGE_DETAILS']->value[0] != '' && $_smarty_tpl->tpl_vars['IMAGE_DETAILS']->value[0]['path'] == '') {?><i class='vicon-vtigeruser' style="font-size:90px"></i><?php } else {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['IMAGE_DETAILS']->value, 'IMAGE_INFO');
$_smarty_tpl->tpl_vars['IMAGE_INFO']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['IMAGE_INFO']->value) {
$_smarty_tpl->tpl_vars['IMAGE_INFO']->do_else = false;
if (!empty($_smarty_tpl->tpl_vars['IMAGE_INFO']->value['url'])) {?><img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE_INFO']->value['url'];?>
" width="100px" height="100px"><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></div></div><div class="col-lg-8 col-sm-8"><div class="profile-container"><h5 class="profile-user"><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('first_name');?>
 <?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('last_name');?>
</h5><p class="textOverflowEllipsis profile-roles" title='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('user_name');?>
'><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('user_name');?>
</p><p class="profile-roles"><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->getUserRoleName();?>
</p></div></div></div><div id="logout-footer" class="logout-footer clearfix"><hr style="margin: 10px 0 !important"><div class=""><span class="pull-left"><span class="fa fa-cogs"></span><a id="menubar_item_right_LBL_MY_PREFERENCES" class="my-preferences" href="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->getPreferenceDetailViewUrl();?>
"><?php echo vtranslate('LBL_MY_PREFERENCES');?>
</a></span><span class="pull-right sign-out-btn"><span class="fa fa-power-off"></span><a id="menubar_item_right_LBL_SIGN_OUT" href="index.php?module=Users&action=Logout"><?php echo vtranslate('LBL_SIGN_OUT');?>
</a></span></div></div></div></div></li></ul></div></div><div id="dropdownOverlay"></div></div></div>
<?php }
}
