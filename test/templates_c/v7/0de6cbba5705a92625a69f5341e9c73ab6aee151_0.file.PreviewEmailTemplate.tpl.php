<?php
/* Smarty version 4.5.4, created on 2025-07-07 13:27:14
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\EmailTemplates\PreviewEmailTemplate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_686bcb32463d15_11810983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0de6cbba5705a92625a69f5341e9c73ab6aee151' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\EmailTemplates\\PreviewEmailTemplate.tpl',
      1 => 1750856026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686bcb32463d15_11810983 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="templateContainer" class="fc-overlay-modal modal-content" style="max-height: 550px;"><div class="overlayHeader"><div class="modal-header"><div class="clearfix"><div class="pull-right " ><button type="button" class="close" aria-label="Close" data-dismiss="modal"><span aria-hidden="true" class='fa fa-close'></span></button></div></div><?php $_smarty_tpl->_assignInScope('TEMPLATE_NAME', ((string)$_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('templatename')));
$_smarty_tpl->_assignInScope('TEMPLATE_ID', ((string)$_smarty_tpl->tpl_vars['RECORD_MODEL']->value->get('templateid')));?><div class="clearfix marginTop10px"><div class="col-lg-6"><h4><?php echo $_smarty_tpl->tpl_vars['TEMPLATE_NAME']->value;?>
</h4></div></div></div></div><div class='modal-body'><div class='datacontent container-fluid ' id='previewTemplateContainer'><iframe id="TemplateIFrame" class='overflowScrollBlock' style="height:450px;width: 100%;overflow-y: auto"></iframe></div></div></div>
<?php }
}
