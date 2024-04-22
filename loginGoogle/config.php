<?php

//start session on web page
session_start();

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('38223600508-tbcond0qop2vk4nkqjrh1r3j125vn3c8.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/ajax/loginGoogle/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>