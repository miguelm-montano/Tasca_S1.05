<?php

require_once "Notifications/EmailNotification.php";
require_once "Notifications/SmsNotification.php";
require_once "Notifications/OrdinaryMailNotification.php";

$newEmail = new EmailNotification("Miguel");
$newEmail->notify() . PHP_EOL;

$newSms = new SmsNotification("Antonia");
$newSms->notify() . PHP_EOL;

$newOridaryMail = new OrdinaryMailNotification("Juan");
$newOridaryMail->notify() . PHP_EOL;

?> 