<?php
require_once('/var/www/olx/constants/general_constants.php');
require_once(FILE_PATH.'/facebook-php-sdk-v4-5.0-dev/src/Facebook/autoload.php');
require_once(FILE_PATH.'/libraries/facebookApi.php');
$facebookApi = new facebookApi();
$fb = $facebookApi->getFacebookObj();
?>
