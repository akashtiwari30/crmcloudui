<?php

class Mobile_WS_GenerateOTP extends Mobile_WS_Controller {
    public function process(Mobile_API_Request $request) {
        global $adb;
        global $current_user; // Required for vtws_update API
		$current_user = $this->getActiveUser();

		$mobile = $request->get('mobile');
       
        if (empty($mobile)) {
            $response = new Mobile_API_Response();
            $response->setError('MOBILE_MISSING', 'Mobile number is required.');
            return $response;
        }

        $otp = rand(100000, 999999);
        $token = bin2hex(random_bytes(16)); // a unique identifier
        $now = date('Y-m-d H:i:s');

        $adb->pquery("INSERT INTO vtiger_mobile_otp (mobile, otp, token, created_time) VALUES (?, ?, ?, ?)", [
            $mobile, $otp, $token, $now
        ]);

        // Here you should send the OTP via SMS or email
        // sendSms($mobile, $otp);

        $response = new Mobile_API_Response();
        $response->setResult([
            'message' => 'OTP sent successfully',
            'token' => $token, // return token to frontend
            'otp' => $otp
        ]);
        return $response;
    }
}
