<?php
/* Smarty version 4.5.4, created on 2025-07-10 04:40:17
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Import\ImportStepTwo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_686f4431cf6b97_06490318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3b683dca785e7effd27cc076df1259022abfd97' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Import\\ImportStepTwo.tpl',
      1 => 1751958713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_686f4431cf6b97_06490318 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class = "importBlockContainer hide" id="importStep2Conatiner">
    <div>
        <h5><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtranslate' ][ 0 ], array( 'LBL_DUPLICATE_RECORD_HANDLING',$_smarty_tpl->tpl_vars['MODULE']->value ));?>
</h5>
    </div>
    <table class = "table table-borderless bg-light-color-2" id="duplicates_merge_configuration">
        <tr>
            <td>
                <p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtranslate' ][ 0 ], array( 'LBL_SPECIFY_MERGE_TYPE',$_smarty_tpl->tpl_vars['MODULE']->value ));?>
</p>
                <select name="merge_type" id="merge_type" class ="select select2 form-control" style="width:40%">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AUTO_MERGE_TYPES']->value, '_MERGE_TYPE_LABEL', false, '_MERGE_TYPE');
$_smarty_tpl->tpl_vars['_MERGE_TYPE_LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_MERGE_TYPE']->value => $_smarty_tpl->tpl_vars['_MERGE_TYPE_LABEL']->value) {
$_smarty_tpl->tpl_vars['_MERGE_TYPE_LABEL']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['_MERGE_TYPE']->value;?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtranslate' ][ 0 ], array( $_smarty_tpl->tpl_vars['_MERGE_TYPE_LABEL']->value,$_smarty_tpl->tpl_vars['MODULE']->value ));?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </td>
        </tr>
        <tr>
            <td><p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtranslate' ][ 0 ], array( 'LBL_SELECT_MERGE_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value ));?>
</p></td>
        </tr>
        <tr>
            <td>
                <table class="bg-light-color-2 table-borderless">
                    <tr>
                        <td><p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtranslate' ][ 0 ], array( 'LBL_AVAILABLE_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value ));?>
</p></td>
                        <td></td>
                        <td><p><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtranslate' ][ 0 ], array( 'LBL_SELECTED_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value ));?>
</p></td>
                    </tr>
                    <tr>
                        <td>
                            <select class="available-fields" id="available_fields" multiple size="10" name="available_fields" class="txtBox" style="width: 100%; display:none;">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AVAILABLE_FIELDS']->value, '_FIELD_INFO', false, '_FIELD_NAME');
$_smarty_tpl->tpl_vars['_FIELD_INFO']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_FIELD_NAME']->value => $_smarty_tpl->tpl_vars['_FIELD_INFO']->value) {
$_smarty_tpl->tpl_vars['_FIELD_INFO']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['_FIELD_NAME']->value == 'tags') {?> <?php continue 1;?> <?php }?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtranslate' ][ 0 ], array( $_smarty_tpl->tpl_vars['_FIELD_INFO']->value->getFieldLabelKey(),$_smarty_tpl->tpl_vars['FOR_MODULE']->value ));?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                          <ul id="available_fields_list" class="custom-select-list"></ul>
                        </td>
                        <td width="8%">
                            <div align="center" class="selected-merge-btn">
                              

                                 <button id="move-right" class="btn btn-default btn-lg" onClick ="return Vtiger_Import_Js.copySelectedOptions('#available_fields', '#selected_merge_fields')"><span class="glyphicon glyphicon-arrow-right"></span></button>
                                <button id="move-left" class="btn btn-default btn-lg" onClick ="return Vtiger_Import_Js.removeSelectedOptions('#selected_merge_fields')"><span class="glyphicon glyphicon-arrow-left"></span></button>
                            </div>
                        </td>
                        <td>
                            <input type="hidden" id="merge_fields" size="10" name="merge_fields" value="" />
                            <select class="selected-merge-fields" id="selected_merge_fields" size="10" name="selected_merge_fields" multiple class="txtBox" style="width: 100%; display:none;">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ENTITY_FIELDS']->value, '_FIELD_INFO', false, '_FIELD_NAME');
$_smarty_tpl->tpl_vars['_FIELD_INFO']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_FIELD_NAME']->value => $_smarty_tpl->tpl_vars['_FIELD_INFO']->value) {
$_smarty_tpl->tpl_vars['_FIELD_INFO']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['_FIELD_NAME']->value;?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtranslate' ][ 0 ], array( $_smarty_tpl->tpl_vars['_FIELD_INFO']->value->getFieldLabelKey(),$_smarty_tpl->tpl_vars['FOR_MODULE']->value ));?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                          <ul id="selected_merge_fields_list" class="custom-select-list"></ul>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>




<?php echo '<script'; ?>
>
    $(document).ready(function () {
   // Build UL list from select
        function buildCustomList(selectId) {
            const $select = $('#' + selectId);
            const $ul = $('#' + selectId + '_list');
            $ul.empty();
            $select.find('option').each(function () {
                const $option = $(this);
                const $li = $('<li>')
                    .text($option.text())
                    .attr('data-value', $option.val());
                if ($option.prop('selected')) {
                    $li.addClass('selected');
                }

                $li.on('click', function () {
                    // Only allow single selection
                    $ul.find('li').removeClass('selected');
                    $(this).addClass('selected');
                    // Set only this option as selected in hidden select
                    $select.find('option').prop('selected', false);
                    $option.prop('selected', true);
                });
                $ul.append($li);
            });
        }

        // Build lists initially
        buildCustomList('available_fields');
        buildCustomList('selected_merge_fields');
        // Copy selected item from left to right (keep on left)
        $('#move-right').on('click', function (e) {
            e.preventDefault();
            const $fromSelect = $('#available_fields');
            const $toSelect = $('#selected_merge_fields');

            // Find selected option in left select
            const $selectedOption = $fromSelect.find('option:selected');
            if ($selectedOption.length) {
                // Check if item already exists in right select
                if ($toSelect.find('option[value="' + $selectedOption.val() + '"]').length === 0) {
                    // Clone and append to right select
                    const $newOption = $selectedOption.clone().prop('selected', false);
                    $toSelect.append($newOption);
                }
            }

            // Rebuild right list only
            buildCustomList('selected_merge_fields');
            // Also clear selection in left list
            $fromSelect.find('option').prop('selected', false);
            buildCustomList('available_fields');
        });
        // Move selected item from right to left (and remove from right)
        $('#move-left').on('click', function (e) {
            e.preventDefault();
            const $fromSelect = $('#selected_merge_fields');
            const $toSelect = $('#available_fields');
            // Find selected option in right select
            const $selectedOption = $fromSelect.find('option:selected');
            if ($selectedOption.length) {
                // Remove from right select
                $selectedOption.remove();
                // Ensure option exists in left select (but keep only one)
                if ($toSelect.find('option[value="' + $selectedOption.val() + '"]').length === 0) {
                    const $newOption = $selectedOption.clone().prop('selected', false);
                    $toSelect.append($newOption);
                }
            }
            // Rebuild both lists
            buildCustomList('selected_merge_fields');
            buildCustomList('available_fields');
        });

    });
<?php echo '</script'; ?>
><?php }
}
