<?php

include "google_api/vendor/autoload.php";

$gClient= new Google_Client();

$gClient->setClientId( "362039922709-bag88jkh974hb80f8nej3cqptmr5522n.apps.googleusercontent.com");

$gClient->setClientSecret("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");

$gClient->setApplicationName("2shafix Login");

$gClient->setRedirectUri( "http://localhost/2shafix/dash.php");

$gClient->addScope( "https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

$login_url=$gClient->createAuthUrl();




