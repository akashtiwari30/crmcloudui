<?php
/* Smarty version 4.5.4, created on 2025-06-17 10:27:34
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Vtiger\dashboards\DashBoardWidgetContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_685143164e6f49_23110501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3971f42d996f40b656967d14681edfbc8b26a875' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Vtiger\\dashboards\\DashBoardWidgetContents.tpl',
      1 => 1750156029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_685143164e6f49_23110501 (Smarty_Internal_Template $_smarty_tpl) {
if (php7_count($_smarty_tpl->tpl_vars['DATA']->value) > 0) {?><input class="widgetData" type=hidden value='<?php echo Vtiger_Util_Helper::toSafeHTML(ZEND_JSON::encode($_smarty_tpl->tpl_vars['DATA']->value));?>
' /><input class="yAxisFieldType" type="hidden" value="<?php if ((isset($_smarty_tpl->tpl_vars['YAXIS_FIELD_TYPE']->value))) {?>$YAXIS_FIELD_TYPE<?php }?>" /><div class="row" style="margin:0px 10px;"><div class="col-lg-11"><div class="widgetChartContainer" name='chartcontent' style="height:220px; min-width:300px; margin: 0 auto"></div><br></div><div class="col-lg-1"></div></div><?php } else { ?><span class="noDataMsg"><?php echo vtranslate('LBL_NO');?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 <?php echo vtranslate('LBL_MATCHED_THIS_CRITERIA');?>
</span><?php }
}
}
