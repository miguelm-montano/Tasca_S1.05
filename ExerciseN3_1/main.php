<?php

require_once "EmailNotification.php";
require_once "SmsNotification.php";
require_once "OrdinaryMailNotification.php";

$newEmail = new EmailNotification("Miguel");
echo $newEmail->notify() . PHP_EOL;

$newSms = new SmsNotification("Antonia");
echo $newSms->notify() . PHP_EOL;

$newOridaryMail = new OrdinaryMailNotification("Juan");
echo $newOridaryMail->notify() . PHP_EOL;

?> 