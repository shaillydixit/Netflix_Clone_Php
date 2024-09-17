<?php
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;

require_once("PayPal-PHP-SDK/autoload.php");

$apiContext = new ApiContext(
    new OAuthTokenCredential(
        'Abo4OPetBb_kS2vhZMObC_cPFdN0mrdsy_cfaBTZ1JVGEzXYtYVrXNwq6wprxVxScuDaJRwnDXHxjGFI',
        'EBM2fenjAjSympQNkdUg-S_n6OkyTuSujuX3EGBWTtduIqzDvuo0Ju99fPCvA7AkB4Z_wuetgaupTGBT'
    )
);
?>