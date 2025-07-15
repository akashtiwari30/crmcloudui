<?php
/* Smarty version 4.5.4, created on 2025-06-25 09:56:58
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Settings\Workflows\Tasks\VTSMSTask.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_685bc7ea268775_10830168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8aa341233484ccf5bb7e7dcc18b34d8ca6a1f66' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Settings\\Workflows\\Tasks\\VTSMSTask.tpl',
      1 => 1744629586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_685bc7ea268775_10830168 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row" style="margin-bottom: 70px;"><div class="col-lg-9"><div class="row form-group"><div class="col-lg-2"><?php echo vtranslate('LBL_RECEPIENTS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
<span class="redColor">*</span></div><div class="col-lg-8"><div class="row"><div class="col-lg-5"><input type="text" class="inputElement fields" data-rule-required="true" name="sms_recepient" value="<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->sms_recepient;?>
" /></div><div class="col-lg-6"><select class="select2 task-fields" style="min-width: 150px;" data-placeholder="<?php echo vtranslate('LBL_SELECT_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><option></option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE_MODEL']->value->getFieldsByType('phone'), 'FIELD', false, 'FIELD_VALUE');
$_smarty_tpl->tpl_vars['FIELD']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_VALUE']->value => $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->tpl_vars['FIELD']->do_else = false;
?><option value=",$<?php echo $_smarty_tpl->tpl_vars['FIELD_VALUE']->value;?>
">(<?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD']->value->getModule()->get('name'),$_smarty_tpl->tpl_vars['FIELD']->value->getModule()->get('name'));?>
)  <?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['FIELD']->value->getModule()->get('name'));?>
</option><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></select></div></div></div></div><div class="row form-group"><div class="col-lg-2"><?php echo vtranslate('LBL_ADD_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-lg-10"><select class="select2 task-fields" style="min-width: 150px;" data-placeholder="<?php echo vtranslate('LBL_SELECT_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"><option></option><?php echo $_smarty_tpl->tpl_vars['ALL_FIELD_OPTIONS']->value;?>
</select></div><div class="col-lg-2"> &nbsp; </div><div class="col-lg-10"> &nbsp; </div><div class="col-lg-2"><?php echo vtranslate('LBL_SMS_TEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="col-lg-6"><textarea name="content" class="inputElement fields" style="height: inherit;"><?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->content;?>
</textarea></div></div></div></div>	
<?php }
}
