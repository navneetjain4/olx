<?php
require_once('/var/www/olx/constants/general_constants.php');
require_once(FILE_PATH.'/facebook-php-sdk-v4-5.0-dev/src/Facebook/autoload.php');
require_once(FILE_PATH.'/libraries/facebookApi.php');
session_start();
$facebookApi = new facebookApi();
$fb = $facebookApi->getFacebookObj();
$helper = $fb->getRedirectLoginHelper();
try {
  $accessToken = $helper->getAccessToken();
  } catch(Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
      echo 'Graph returned an error: ' . $e->getMessage();
        exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
          // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
              exit;
              }

              if (isset($accessToken)) {
                // Logged in!
                  $_SESSION['facebook_access_token'] = (string) $accessToken;

                    // Now you can redirect to another page and use the
                      // access token from $_SESSION['facebook_access_token']
                      }

try {
  // Returns a `Facebook\FacebookResponse` object
    $response = $fb->get('/me?fields=id,name,likes', $accessToken);
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
      echo 'Graph returned an error: ' . $e->getMessage();
        exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
          echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
            }

            $user = $response->getGraphUser();

