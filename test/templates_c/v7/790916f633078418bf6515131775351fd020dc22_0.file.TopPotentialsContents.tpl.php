<?php
/* Smarty version 4.5.4, created on 2025-04-21 10:22:27
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Potentials\dashboards\TopPotentialsContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_68061c636ce025_76078515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '790916f633078418bf6515131775351fd020dc22' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Potentials\\dashboards\\TopPotentialsContents.tpl',
      1 => 1744629583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68061c636ce025_76078515 (Smarty_Internal_Template $_smarty_tpl) {
?><div style='padding:5px'>
<?php if (php7_count($_smarty_tpl->tpl_vars['MODELS']->value) > 0) {?>
	<div>
        <div class='row'>
            <div class='col-lg-4'>
                <b><?php echo vtranslate('Potential Name',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b>
            </div>
            <div class='col-lg-4'>
                <b><?php echo vtranslate('Amount',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b>
            </div>
            <div class='col-lg-4'>
                <b><?php echo vtranslate('Related To',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b>
            </div>
        </div>
		<hr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODELS']->value, 'MODEL');
$_smarty_tpl->tpl_vars['MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODEL']->value) {
$_smarty_tpl->tpl_vars['MODEL']->do_else = false;
?>
		<div class='row'>
			<div class='col-lg-4'>
				<a href="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getDetailViewUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getName();?>
</a>
			</div>
			<div class='col-lg-4'>
				<?php echo CurrencyField::appendCurrencySymbol($_smarty_tpl->tpl_vars['MODEL']->value->getDisplayValue('amount'),$_smarty_tpl->tpl_vars['USER_CURRENCY_SYMBOL']->value);?>

			</div>
			<div class='col-lg-4'>
				<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getDisplayValue('related_to');?>

			</div>
		</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
<?php } else { ?>
	<span class="noDataMsg">
		<?php echo vtranslate('LBL_NO');?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 <?php echo vtranslate('LBL_MATCHED_THIS_CRITERIA');?>

	</span>
<?php }?>
</div><?php }
}
