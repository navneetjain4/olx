<?php
require_once('/var/www/olx/constants/general_constants.php');
require_once(FILE_PATH.'/facebook-php-sdk-v4-5.0-dev/src/Facebook/autoload.php');
require_once(FILE_PATH.'/libraries/facebookApi.php');
session_start();
$facebookApi = new facebookApi();
$fb = $facebookApi->getFacebookObj();
$helper = $fb->getRedirectLoginHelper();
$permissions = ['email', 'user_likes']; // optional
$loginUrl = $helper->getLoginUrl('http://olxmashup.com/controllers/login-callback.php', $permissions);
echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
?>
