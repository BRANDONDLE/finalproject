<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '150217968581-8b6n7mtt1m5j2tk6pnuq8ofja15f41g4.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'znUbjmP6K6-UJ2k0r-ZmMbHm'; //Google client secret
$redirectURL = 'http://208.68.37.21/finalproject/html/dashboard.html'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>