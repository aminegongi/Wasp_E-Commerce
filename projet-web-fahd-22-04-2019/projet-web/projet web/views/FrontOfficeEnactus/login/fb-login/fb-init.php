<?php

//start session
session_start();

//include autoload files
require "./vendor/autoload.php";
$fb=new Facebook\Facebook([
    'app_id' => '1912894938816751',
    'app_secret' => 'f00f569cf6c0e54175ed75ced54a53ac', 
    'default_graph_version' => 'v2.7'
]);
$helper=$fb->getRedirectLoginHelper();
$login_Url=$helper->getLoginUrl("http://localhost/projet-web/projet%20web/views/FrontOfficeEnactus/login/fb-login/");

try {
    $accessToken=$helper->getAccessToken();
    if (isset($accessToken))
    {
        $_SESSION['access_token']=(string)$accessToken;
        header('location: ./index.php');
    }
} catch (\Throwable $th) {
    //throw $th;
}

///we get the user name ,email, last name
if (isset($_SESSION['access_token']))
{
try {
    $fb->setDefaultAccessToken($_SESSION['access_token']);
    $res=$fb->get('/me?locale=en_US$fields=name,email');
    $user=$res->getGraphUser();
    echo $user->getField('name')."  ";
} catch (\Throwable $th) {
    //throw $th;
}
}