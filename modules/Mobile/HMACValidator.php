<?php

function verifyHMACRequest($endpoint)
{
    $sharedSecret = '2d79b2c5ba9285b85ab0e14e065c4062ad4cff5755133b9a0168f98f14fe9b51';
    $headers = apache_request_headers();

    $timestamp = $headers['X-Timestamp'] ?? null;
    $signature = $headers['X-Signature'] ?? null;

    if (!$timestamp || !$signature) {
        echo json_encode(['success' => false, 'error' => ['message' => 'Missing security headers']]);
        exit;
    }

    if (abs(time() - $timestamp) > 300) {
        echo json_encode(['success' => false, 'error' => ['message' => 'Request expired']]);
        exit;
    }

    $expectedSig = hash_hmac('sha256', $timestamp . $endpoint, $sharedSecret);

    if (!hash_equals($expectedSig, $signature)) {
        echo json_encode(['success' => false, 'error' => ['message' => 'Invalid signature']]);
        exit;
    }

    return true;
}
