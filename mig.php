<?php

require_once __DIR__ . '/vendor/autoload.php';

include_once 'include/events/include.inc';
include_once 'vtlib/Vtiger/Module.php';

$adb = PearDatabase::getInstance();
$evb = new VTEventsManager($adb);

$evb->registerHandler(
    'vtiger.entity.beforedelete', 
    'modules/Potentials/handlers/DeleteHook.php', 
    'CustomHooks_DeleteHook'
);

echo "Delete event hook registered.\n";
