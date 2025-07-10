<?php
function SitesUserCreation($entityData)
{
    $data = $entityData->{'data'};
    print_r($data);exit;
    require_once('modules/Users/Users.php');
	$focus = new Users();
	global $adb;

// updating the shiipping addrees fields because user inputed only billing address
    $bill_shopno = $data['shopno'];
    $bill_taluk = $data['taluk'];
    $bill_landmark = $data['landmark'];
    $bill_district = $data['district'];
    // following filds are stored in different table vtiger_accountshipads
    $bill_street = $data['bill_street'];
    $bill_pobox = $data['bill_pobox'];
    $bill_city = $data['bill_city'];
    $bill_state = $data['bill_state'];
    $bill_code = $data['bill_code'];
    $bill_country = $data['bill_country'];
    
    // getting the id of the created record it in the format 12x237
    $recId = $data['id'];
    $idsOfCreated = explode('x', $recId);
    $data['id'] = $idsOfCreated[1];
    
	$businessname = $data['accountname'];
    $dealername = $data['cf_891'];
    if ($data['source'] == 'WEBFORM') {
    $result = $adb->pquery('Update `vtiger_accountscf` set ship_district = ?,'
            . ' ship_shopno = ?, ship_landmark = ?, ship_taluk =?,cf_891 = ?'
            . ' where accountid = ?', array($bill_district,$bill_shopno,$bill_landmark,$bill_taluk,$businessname,$data['id']));
    
	$result = $adb->pquery('Update `vtiger_account` set accountname = ?'
                . ' where accountid = ?', array($dealername, $data['id']));

    $result = $adb->pquery('Update `vtiger_accountshipads` set ship_city = ?,'
            . ' ship_state = ?, ship_pobox = ?, ship_street =?,ship_code =?,ship_country=?'
            . ' where accountaddressid = ?', array($bill_city,$bill_state,$bill_pobox,$bill_street,
                $bill_code,$bill_country,$data['id']));

}
    $username = preg_replace('/\s+/', '', $data['cf_893']);
	$password = preg_replace('/\s+/', '', $data['cf_895']);
    $result = $adb->pquery('SELECT 1 FROM `vtiger_users` where user_name = ?', array($username));
    $rowCount = $adb->num_rows($result);
    if ($rowCount > 0) {
        $viewer = new Vtiger_Viewer();
        $viewer->assign('MESSAGE', "UserName is Alredy Exits");
        $viewer->view('OperationNotPermitted.tpl', 'Vtiger');
        die();
    }
 	$focus->column_fields['user_name'] =   $data['cf_893'];
	$focus->column_fields['first_name'] =  $data['accountname'];
	$focus->column_fields['last_name'] =  $data['cf_885'];
	$focus->column_fields['status'] =  'Active';
	$focus->column_fields['is_admin'] =  'off';
	$focus->column_fields['user_password'] =   $password;
	$focus->column_fields['confirm_password'] =   $password;
	$focus->column_fields['email1'] =   $data['email1'];
	$focus->column_fields['address_street'] = $data['bill_street'];
	$focus->column_fields['phone_mobile'] = $data['phone'];
	$focus->column_fields['roleid'] =  'H14';
	$focus->column_fields['tz'] =  'Asia/Kolkata';
	$focus->column_fields['title'] =  'Asia';
	$focus->save("Users");
	require_once('modules/Users/CreateUserPrivilegeFile.php');
	createUserPrivilegesfile($focus->id);
}
