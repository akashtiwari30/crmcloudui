<?php
require_once __DIR__ . '/vendor/autoload.php';
include_once('vtlib/Vtiger/Module.php');

$module = Vtiger_Module::getInstance('Potentials');

// Create related (reference) field
$field = new Vtiger_Field();
$field->name = 'cf_related_product'; // DB column name
$field->label = 'Product';   // Label shown in UI
$field->table = $module->basetable;
$field->column = 'cf_related_product';
$field->columntype = 'INT(11)';
$field->uitype = 10; // Reference field
$field->typeofdata = 'V~O'; // Optional field

// Add to "Custom Information" block
$block = Vtiger_Block::getInstance('LBL_CUSTOM_INFORMATION', $module);
if ($block) {
    $block->addField($field);
    $field->setRelatedModules(array('Products')); // Set reference to Products module
    echo "Related field to Products added in Potentials module.\n";
} else {
    echo "Block not found.\n";
}
