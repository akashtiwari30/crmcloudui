<?php
/* Smarty version 4.5.4, created on 2025-07-08 04:56:02
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Vtiger\partials\SidebarAppMenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_686ca4e24aece2_81878876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc6b106b2a07f0d8c103a45e8388d376a3f3f1fe' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Vtiger\\partials\\SidebarAppMenu.tpl',
      1 => 1751950498,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686ca4e24aece2_81878876 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="app-menu hide" id="app-menu">
	<div class="container-fluid">
		<div class="row overflow-logo">
			<div class="logo-container col-lg-9 ">
				<div class="row">
					<a href="index.php" class="company-logo">
						<img src="<?php echo $_smarty_tpl->tpl_vars['COMPANY_LOGO']->value->get('imagepath');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['COMPANY_LOGO']->value->get('alt');?>
" />
					</a>
				</div>
			</div>

		</div>
		<?php $_smarty_tpl->_assignInScope('USER_PRIVILEGES_MODEL', Users_Privileges_Model::getCurrentUserPrivilegesModel());?>
		<?php $_smarty_tpl->_assignInScope('HOME_MODULE_MODEL', Vtiger_Module_Model::getInstance('Home'));?>
		<?php $_smarty_tpl->_assignInScope('DASHBOARD_MODULE_MODEL', Vtiger_Module_Model::getInstance('Dashboard'));?>
		<div class="app-list row">
			<?php if ($_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL']->value->hasModulePermission($_smarty_tpl->tpl_vars['DASHBOARD_MODULE_MODEL']->value->getId())) {?>
				<div id="dashboard" class="comman-menu menu-item app-item dropdown-toggle" data-default-url="<?php echo $_smarty_tpl->tpl_vars['HOME_MODULE_MODEL']->value->getDefaultUrl();?>
">
					<div class="menu-items-wrapper">
						<span class="app-icon-list fa fa-dashboard"></span>
						<span class="app-name textOverflowEllipsis"> <?php echo vtranslate('LBL_DASHBOARD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span>
					</div>
				</div>
			<?php }?>
			<?php $_smarty_tpl->_assignInScope('APP_GROUPED_MENU', Settings_MenuEditor_Module_Model::getAllVisibleModules());?>
			<?php $_smarty_tpl->_assignInScope('APP_LIST', Vtiger_MenuStructure_Model::getAppMenuList());?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['APP_LIST']->value, 'APP_NAME');
$_smarty_tpl->tpl_vars['APP_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['APP_NAME']->value) {
$_smarty_tpl->tpl_vars['APP_NAME']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['APP_NAME']->value == 'ANALYTICS') {?> <?php continue 1;
}?>
				<?php if (!empty($_smarty_tpl->tpl_vars['APP_GROUPED_MENU']->value[$_smarty_tpl->tpl_vars['APP_NAME']->value])) {?>
					<div class="dropdown app-modules-dropdown-container menud-drop-down">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['APP_GROUPED_MENU']->value[$_smarty_tpl->tpl_vars['APP_NAME']->value], 'APP_MENU_MODEL');
$_smarty_tpl->tpl_vars['APP_MENU_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['APP_MENU_MODEL']->value) {
$_smarty_tpl->tpl_vars['APP_MENU_MODEL']->do_else = false;
?>
							<?php $_smarty_tpl->_assignInScope('FIRST_MENU_MODEL', $_smarty_tpl->tpl_vars['APP_MENU_MODEL']->value);?>
							<?php if ($_smarty_tpl->tpl_vars['APP_MENU_MODEL']->value) {?>
								<?php break 1;?>
							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												<div class="menu-item app-item dropdown-toggle app-item-color-<?php echo $_smarty_tpl->tpl_vars['APP_NAME']->value;?>
" data-app-name="<?php echo $_smarty_tpl->tpl_vars['APP_NAME']->value;?>
"
							id="<?php echo $_smarty_tpl->tpl_vars['APP_NAME']->value;?>
_modules_dropdownMenu"  aria-haspopup="true"
							aria-expanded="true" data-default-url="#">
							<div class="menu-items-wrapper app-menu-items-wrapper">
								<span class="app-icon-list fa <?php echo $_smarty_tpl->tpl_vars['APP_IMAGE_MAP']->value[$_smarty_tpl->tpl_vars['APP_NAME']->value];?>
"></span>
								<span class="app-name textOverflowEllipsis"> <?php echo vtranslate("LBL_".((string)$_smarty_tpl->tpl_vars['APP_NAME']->value));?>
</span>
								<span class="fa fa-chevron-right pull-right"></span>
							</div>
						</div>
						<ul class="dropdown-menu app-modules-dropdown" aria-labelledby="<?php echo $_smarty_tpl->tpl_vars['APP_NAME']->value;?>
_modules_dropdownMenu">
														<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['APP_GROUPED_MENU']->value[$_smarty_tpl->tpl_vars['APP_NAME']->value], 'moduleModel', false, 'moduleName');
$_smarty_tpl->tpl_vars['moduleModel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['moduleName']->value => $_smarty_tpl->tpl_vars['moduleModel']->value) {
$_smarty_tpl->tpl_vars['moduleModel']->do_else = false;
?>
								<?php $_smarty_tpl->_assignInScope('translatedModuleLabel', vtranslate($_smarty_tpl->tpl_vars['moduleModel']->value->get('label'),$_smarty_tpl->tpl_vars['moduleName']->value));?>
								<?php $_smarty_tpl->_assignInScope('isActive', ($_smarty_tpl->tpl_vars['moduleName']->value == $_smarty_tpl->tpl_vars['MODULE']->value));?>
								<li class="<?php if ($_smarty_tpl->tpl_vars['isActive']->value) {?>active<?php }?>">
									<a href="<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getDefaultUrl();?>
&app=<?php echo $_smarty_tpl->tpl_vars['APP_NAME']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['translatedModuleLabel']->value;?>
">
										<span class="module-icon"><?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getModuleIcon();?>
</span>
										<span class="module-name textOverflowEllipsis"><?php echo $_smarty_tpl->tpl_vars['translatedModuleLabel']->value;?>
</span>
									</a>
								</li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

						</ul>
					</div>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<div class="app-list-divider"></div>
			<?php $_smarty_tpl->_assignInScope('MAILMANAGER_MODULE_MODEL', Vtiger_Module_Model::getInstance('MailManager'));?>
			<?php if ($_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL']->value->hasModulePermission($_smarty_tpl->tpl_vars['MAILMANAGER_MODULE_MODEL']->value->getId())) {?>
				<div id="mailmanager" class="comman-menu menu-item app-item app-item-misc" data-default-url="index.php?module=MailManager&view=List">
					<div class="menu-items-wrapper">
						<span class="app-icon-list fa"><?php echo $_smarty_tpl->tpl_vars['MAILMANAGER_MODULE_MODEL']->value->getModuleIcon();?>
</span>
						<span class="app-name textOverflowEllipsis"> <?php echo vtranslate('MailManager');?>
</span>
					</div>
				</div>
			<?php }?>
			<?php $_smarty_tpl->_assignInScope('DOCUMENTS_MODULE_MODEL', Vtiger_Module_Model::getInstance('Documents'));?>
			<?php if ($_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL']->value->hasModulePermission($_smarty_tpl->tpl_vars['DOCUMENTS_MODULE_MODEL']->value->getId())) {?>
				<div id="document" class="comman-menu menu-item app-item app-item-misc" data-default-url="index.php?module=Documents&view=List">
					<div class="menu-items-wrapper">
						<span class="app-icon-list fa"><?php echo $_smarty_tpl->tpl_vars['DOCUMENTS_MODULE_MODEL']->value->getModuleIcon();?>
</span>
						<span class="app-name textOverflowEllipsis"> <?php echo vtranslate('Documents');?>
</span>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser()) {?>
				<?php if (vtlib_isModuleActive('ExtensionStore')) {?>
					<div id="extstore" class="comman-menu menu-item app-item app-item-misc"
						data-default-url="index.php?module=ExtensionStore&parent=Settings&view=ExtensionStore">
						<div class="menu-items-wrapper">
							<span class="app-icon-list fa fa-shopping-cart"></span>
							<span class="app-name textOverflowEllipsis">
								<?php echo vtranslate('LBL_EXTENSION_STORE','Settings:Vtiger');?>
</span>
						</div>
					</div>
				<?php }?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser()) {?>
				<div class="dropdown app-modules-dropdown-container dropdown-compact">
					<div class="menu-item app-item dropdown-toggle app-item-misc" data-app-name="TOOLS"
						id="TOOLS_modules_dropdownMenu"  aria-haspopup="true" aria-expanded="true"
						data-default-url="#">
						<div class="menu-items-wrapper app-menu-items-wrapper">
							<span class="app-icon-list fa fa-cog"></span>
							<span class="app-name textOverflowEllipsis">
								<?php echo vtranslate('LBL_SETTINGS','Settings:Vtiger');?>
</span>
							<?php if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser()) {?>
								<span class="fa fa-chevron-right pull-right"></span>
							<?php }?>
						</div>
					</div>
					<ul class="dropdown-menu app-modules-dropdown dropdown-modules-compact"
						aria-labelledby="<?php echo $_smarty_tpl->tpl_vars['APP_NAME']->value;?>
_modules_dropdownMenu" data-height="0.27">
						<li class="<?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Vtiger' && $_smarty_tpl->tpl_vars['PARENT_MODULE']->value == 'Settings') {?>active<?php }?>">
							<a href="?module=Vtiger&parent=Settings&view=Index">
								<span class="fa fa-cog module-icon"></span>
								<span class="module-name textOverflowEllipsis">
									<?php echo vtranslate('LBL_CRM_SETTINGS','Vtiger');?>
</span>
							</a>
						</li>
						<li class="<?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Users' && $_smarty_tpl->tpl_vars['PARENT_MODULE']->value == 'Settings') {?>active<?php }?>">
							<a href="?module=Users&parent=Settings&view=List">
								<span class="fa fa-user module-icon"></span>
								<span class="module-name textOverflowEllipsis">
									<?php echo vtranslate('LBL_MANAGE_USERS','Vtiger');?>
</span>
							</a>
						</li>

					</ul>
				</div>
			<?php }?>
		</div>
	</div>
</div><?php }
}
