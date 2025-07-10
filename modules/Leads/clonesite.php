<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
function clonesite($entityData) {

$recordInfo = is_object($entityData) ? $entityData->{'data'} : $entityData;



$scriptPath = '"cron/autorun.sh"';

$crmuser = strtolower(str_replace(' ', '', $recordInfo['potentialname'] . $recordInfo['potential_no']));
$record = $recordInfo['id'];
$record = explode('x',$record);
$recordId = $record[1];

if($recordInfo['cf_related_product']){
    $product = $recordInfo['cf_related_product'];
    $product = explode('x',$product);
    $productId = $product[1];
  
    $productRecord = Vtiger_Record_Model::getInstanceById($productId, 'Products');
   
    $prod_path = $productRecord->get('cf_869');
    $prod_db = $productRecord->get('cf_871');
 
}


$id = 123;
$user_id = 456;
$username = $crmuser;
$product_path =  $prod_path;
$product_db = $prod_db;
$name = $recordInfo['potentialname'];
$email = $recordInfo['cf_867'];
$parent_cron_id = 789;
$site_id = $recordInfo['potential_no'];
$recordid = $recordId;

$command = "\"C:/Program Files/Git/bin/bash.exe\" $scriptPath $id $user_id $username \"$product_path\" $product_db \"$name\" \"$email\" $parent_cron_id $site_id $recordid 2>&1";
$output = shell_exec($command);


// print_r($output);exit;

}   