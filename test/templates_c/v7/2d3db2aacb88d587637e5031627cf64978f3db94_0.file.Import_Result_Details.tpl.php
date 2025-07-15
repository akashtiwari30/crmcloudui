<?php
/* Smarty version 4.5.4, created on 2025-07-11 05:24:58
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Import\Import_Result_Details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_6870a02a1e9272_40989085',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d3db2aacb88d587637e5031627cf64978f3db94' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Import\\Import_Result_Details.tpl',
      1 => 1751976924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6870a02a1e9272_40989085 (Smarty_Internal_Template $_smarty_tpl) {
?>
<table width="100%" class="table table-borderless bg-light-color-2">
	<tr>
		<td class = "secondary-color"><p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtranslate' ][ 0 ], array( 'LBL_TOTAL_RECORDS_IMPORTED',$_smarty_tpl->tpl_vars['MODULE']->value ));?>
</p></td>
		<td width="10%">:</td>
		<td class = "secondary-color" width="30%"><span><?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['IMPORTED'];?>
 / <?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['TOTAL'];?>
</span></td>
	</tr>
	<tr>
		<td class = "secondary-color" width="20%"><p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtranslate' ][ 0 ], array( 'LBL_NUMBER_OF_RECORDS_CREATED',$_smarty_tpl->tpl_vars['MODULE']->value ));?>
</p></td>
		<td width="1%">:</td>
		<td  class = "secondary-color" width="60%">
			<span><?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['CREATED'];?>

				<?php if ($_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['CREATED'] != '0') {?>
					<?php if ($_smarty_tpl->tpl_vars['FOR_MODULE']->value != 'Users') {?>
						&nbsp;&nbsp;&nbsp;&nbsp;<a class="cursorPointer" onclick="return Vtiger_Import_Js.showLastImportedRecords('index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&for_module=<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
&view=List&start=1&foruser=<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
&_showContents=0')"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtranslate' ][ 0 ], array( 'LBL_DETAILS',$_smarty_tpl->tpl_vars['MODULE']->value ));?>
</a>
					<?php }?>
				<?php }?>
			</span>
		</td>

	</tr>
	<?php if (in_array($_smarty_tpl->tpl_vars['FOR_MODULE']->value,$_smarty_tpl->tpl_vars['INVENTORY_MODULES']->value) == FALSE) {?>
		<tr>
			<td><p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtranslate' ][ 0 ], array( 'LBL_NUMBER_OF_RECORDS_UPDATED',$_smarty_tpl->tpl_vars['MODULE']->value ));?>
</p></td>
			<td width="10%">:</td>
			<td width="30%"><span><?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['UPDATED'];?>
</span></td>
		</tr>
		<tr>
			<td><p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtranslate' ][ 0 ], array( 'LBL_NUMBER_OF_RECORDS_SKIPPED',$_smarty_tpl->tpl_vars['MODULE']->value ));?>
</p></td>
			<td width="10%">:</td>
			<td width="30%"><span><?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['SKIPPED'];?>

				<?php if ($_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['SKIPPED'] != '0') {?>
					&nbsp;&nbsp;&nbsp;&nbsp;<a class="cursorPointer" onclick="return Vtiger_Import_Js.showSkippedRecords('index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&view=List&mode=getImportDetails&type=skipped&start=1&foruser=<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
&_showContents=0&for_module=<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
')"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtranslate' ][ 0 ], array( 'LBL_DETAILS',$_smarty_tpl->tpl_vars['MODULE']->value ));?>
</a>
				<?php }?>
			</span></td>
		</tr>
		<tr>
			<td><p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtranslate' ][ 0 ], array( 'LBL_NUMBER_OF_RECORDS_MERGED',$_smarty_tpl->tpl_vars['MODULE']->value ));?>
</p></td>
			<td width="10%">:</td>
			<td width="10%"><span><?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['MERGED'];?>
</span></td>
		</tr>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['FAILED'] != '0') {?>
		<tr>
			<td><p><font color = "red"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtranslate' ][ 0 ], array( 'LBL_TOTAL_RECORDS_FAILED',$_smarty_tpl->tpl_vars['MODULE']->value ));?>
</font></p></td>
			<td width="10%">:</td>
			<td width="30%"><span></span><font color = "red"><?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['FAILED'];?>
 / <?php echo $_smarty_tpl->tpl_vars['IMPORT_RESULT']->value['TOTAL'];?>
</font>
				&nbsp;&nbsp;&nbsp;&nbsp;<a class="cursorPointer" onclick="return Vtiger_Import_Js.showFailedImportRecords('index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&view=List&mode=getImportDetails&type=failed&start=1&foruser=<?php echo $_smarty_tpl->tpl_vars['OWNER_ID']->value;?>
&_showContents=0&for_module=<?php echo $_smarty_tpl->tpl_vars['FOR_MODULE']->value;?>
')"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtranslate' ][ 0 ], array( 'LBL_DETAILS',$_smarty_tpl->tpl_vars['MODULE']->value ));?>
</a>
			</span></td>
		</tr>
	<?php }?>
</table><?php }
}
