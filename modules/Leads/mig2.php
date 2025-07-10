<?php
include_once 'vtlib/Vtiger/Module.php';

$module = Vtiger_Module::getInstance('Potentials');

$field = new Vtiger_Field();
$field->name = 'custom_email';
$field->label = 'Email';
$field->uitype = 13; // Email field
$field->column = 'custom_email';
$field->columntype = 'VARCHAR(100)';
$field->typeofdata = 'E~O'; // Email, Optional

$block = Vtiger_Block::getInstance('LBL_OPPORTUNITY_INFORMATION', $module);
if ($block) {
    $block->addField($field);
    echo "Email field added successfully.\n";
} else {
    echo "Failed to get block.\n";
}
