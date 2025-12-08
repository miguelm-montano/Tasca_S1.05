<?php

require_once "Notification.php";

class EmailNotification extends Notification {

    public function notify(): void {
        echo "{$this->getRecipient()}: You have 1 new email." . PHP_EOL;
    }
}

?>