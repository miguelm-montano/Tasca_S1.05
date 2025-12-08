<?php

require_once "Notification.php";

class OrdinaryMailNotification extends Notification {

    public function notify(): void {
        echo "{$this->getRecipient()} You have 1 new message." . PHP_EOL;
    }
}

?>