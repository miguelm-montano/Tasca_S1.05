<?php

require_once "Notification.php";

class SmsNotification extends Notification {

    public function notify(): void {
        echo "{$this->getRecipient()} You have 1 missing call." . PHP_EOL;
    }
}

?>