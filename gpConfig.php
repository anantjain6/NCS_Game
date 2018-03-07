<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '822621562083-eaff0pkicb9gerprcsdujlcjcsi09sbq.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'bXg01ssNFVvQmNhUPRJMKvdd'; //Google client secret
$redirectURL = 'http://localhost/NCS_Game/login_validate.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>