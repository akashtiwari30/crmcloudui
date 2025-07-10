<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once 'include/utils/utils.php';
require_once 'modules/com_vtiger_workflow/VTEntityMethodManager.inc';
global $adb;

$moduleName = 'Potentials';
$methodName = 'SitesUserCreation';
$functionPath = 'modules/Potentials/SitesUserCreation.php';
$functionName = 'SitesUserCreation';

$emm = new VTEntityMethodManager($adb);


$existingMethods = $emm->methodsForModule($moduleName);
if (!in_array($methodName, $existingMethods)) {
    $emm->addEntityMethod($moduleName, $methodName, $functionPath, $functionName);
    echo "Custom method successfully registered in com_vtiger_workflowtasks_entitymethod.\n";
} else {
    echo "Method already exists.\n";
}

