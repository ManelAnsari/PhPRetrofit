<?php
require_once 'firebaseLib.php';
// --- This is your Firebase URL
$url = 'https://fir-android-6c15f-default-rtdb.firebaseio.com';
// --- Use your token from Firebase here
$token = 'YAIzaSyAg-f-2L7nupToeNXfildDy0ehOksICdtE';
// --- Here is your parameter from the http GET
$arduino_data = $_GET['arduino_data'];
// --- Set up your Firebase url structure here
$firebasePath = '/databases/{database}/documents';

/// --- Making calls
$fb = new fireBase($url, $token);
$response = $fb->set($firebasePath, $rfidid);

sleep(2);
