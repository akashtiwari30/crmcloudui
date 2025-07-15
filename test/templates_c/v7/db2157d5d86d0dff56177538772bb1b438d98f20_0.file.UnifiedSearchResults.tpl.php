<?php
/* Smarty version 4.5.4, created on 2025-05-09 05:51:14
  from 'C:\wamp64\www\cloudcrm\layouts\v7\modules\Vtiger\UnifiedSearchResults.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_681d97d2554a63_73161419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db2157d5d86d0dff56177538772bb1b438d98f20' => 
    array (
      0 => 'C:\\wamp64\\www\\cloudcrm\\layouts\\v7\\modules\\Vtiger\\UnifiedSearchResults.tpl',
      1 => 1744629584,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_681d97d2554a63_73161419 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="searchResults-container">
    <div class="container-fluid">
        <div class="row" style="margin-top: 10px; margin-bottom: 10px;">
            <div class="col-lg-6">
                <span style="font-size: 24px;"><strong> <?php echo vtranslate('LBL_SEARCH_RESULTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 </strong></span>
            </div>
            <div class="col-lg-6">
                <div class="pull-right">
                    <a class="btn btn-default module-buttons" href="javascript:void(0);" id="showFilter"><?php echo vtranslate('LBL_SAVE_MODIFY_FILTER',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a>
                </div>
            </div>
        </div>
        <div class="row moduleResults-container">
            <?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "UnifiedSearchResultsContents.tpl",$_smarty_tpl->tpl_vars['MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['ADV_SEARCH_FIELDS_INFO']->value != null) {?>
        <?php echo '<script'; ?>
 type="text/javascript">
            var adv_search_uimeta = (function() {
                var fieldInfo = <?php echo $_smarty_tpl->tpl_vars['ADV_SEARCH_FIELDS_INFO']->value;?>
;
                return {
                    field: {
                        get: function(name, property) {
                            if (name && property === undefined) {
                                return fieldInfo[name];
                            }
                            if (name && property) {
                                return fieldInfo[name][property]
                            }
                        },
                        isMandatory: function(name) {
                            if (fieldInfo[name]) {
                                return fieldInfo[name].mandatory;
                            }
                            return false;
                        },
                        getType: function(name) {
                            if (fieldInfo[name]) {
                                return fieldInfo[name].type;
                            }
                            return false;
                        }
                    },
                };
            })();
        <?php echo '</script'; ?>
>
<?php }?>
</div>

<?php }
}
