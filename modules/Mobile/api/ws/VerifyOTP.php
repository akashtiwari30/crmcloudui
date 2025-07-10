<?php


class Mobile_WS_VerifyOTP extends Mobile_WS_Controller {



    public function process(Mobile_API_Request $request) {
        global $adb;

        global $current_user; // Required for vtws_update API
		$current_user = $this->getActiveUser();


        $mobile = $request->get('mobile');
        $otp = $request->get('otp');
        $token = $request->get('token');

        if (empty($mobile) || empty($otp) || empty($token)) {
            $response = new Mobile_API_Response();
            $response->setError('MISSING_PARAMS', 'Mobile, OTP, and Token are required.');
            return $response;
        }

        $result = $adb->pquery(
            "SELECT id, otp, created_time FROM vtiger_mobile_otp WHERE mobile = ? AND token = ? ORDER BY id DESC LIMIT 1",
            [$mobile, $token]
        );

        if ($adb->num_rows($result) == 0) {
            $response = new Mobile_API_Response();
            $response->setError('OTP_NOT_FOUND', 'Invalid or expired OTP request.');
            return $response;
        }

        $rowOtp = $adb->query_result($result, 0, 'otp');
        $createdTime = $adb->query_result($result, 0, 'created_time');
        $otpId = $adb->query_result($result, 0, 'id');


        $expiryTime = strtotime($createdTime) + 600; // 10 mins expiry
        if (time() > $expiryTime) {
            $response = new Mobile_API_Response();
            $response->setError('OTP_EXPIRED', 'The OTP has expired. Please request a new one.');
            return $response;
        }

        if ($rowOtp != $otp) {
            $response = new Mobile_API_Response();
            $response->setError('OTP_INVALID', 'The OTP entered is incorrect.');
            return $response;
        }

        $adb->pquery("DELETE FROM vtiger_mobile_otp WHERE id = ?", [$otpId]);

        $response = new Mobile_API_Response();
        $response->setResult(['message' => 'OTP verified successfully']);
        return $response;
    }
}
