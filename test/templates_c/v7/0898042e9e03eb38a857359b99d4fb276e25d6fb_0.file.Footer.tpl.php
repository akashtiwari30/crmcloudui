<?php
/* Smarty version 4.5.4, created on 2025-05-05 13:32:22
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Vtiger\Footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_6818bde6c126a7_83606617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0898042e9e03eb38a857359b99d4fb276e25d6fb' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Vtiger\\Footer.tpl',
      1 => 1746451938,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6818bde6c126a7_83606617 (Smarty_Internal_Template $_smarty_tpl) {
?>
</div>
<div id='overlayPage'>
	<!-- arrow is added to point arrow to the clicked element (Ex:- TaskManagement), 
	any one can use this by adding "show" class to it -->
	<div class='arrow'></div>
	<div class='data'>
	</div>
</div>
<div id='helpPageOverlay'></div>
<div id="js_strings" class="hide noprint"><?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['LANGUAGE_STRINGS']->value);?>
</div>
<div id="maxListFieldsSelectionSize" class="hide noprint"><?php echo $_smarty_tpl->tpl_vars['MAX_LISTFIELDS_SELECTION_SIZE']->value;?>
</div>
<div class="modal myModal fade"></div>
<?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( 'JSResources.tpl' )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>

</html>
<?php }
}
