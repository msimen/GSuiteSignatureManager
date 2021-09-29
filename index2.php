<?php
require_once '/var/www/html/vendor/autoload.php';
use Moometric\mooSignature;
$mooSig = new mooSignature("gmail.com", "msimens@gmail.com");
// Optionally set the path where your default service-account.json file is stored.
$mooSig->addSettingServiceAccountPath("/home/ubuntu/local_vars/");
// Optionally set the path where your signatures are stored.
$mooSig->addsettingSignaturePath("/home/ubuntu/signatures/");
