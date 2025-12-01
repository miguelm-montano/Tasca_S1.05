<?php
/*Imagina que estem implementant un mecanisme de notificacions.

Les notificacions notifiquen(com no podia ser d'altra manera :)) un missatge.

Podem notificar mitjançant Email, SMS o Correu ordinari.

Fes una estructura de classes que ens permeti implementar tot plegat.*/

abstract class Notification {
    private string $recipient;

    public function __construct(string $recipient) {
        $this->recipient = $recipient;
    }

    public function getRecipient(): string {
        return $this->recipient;
    }

    abstract public function notify(): void;
}

class EmailNotification extends Notification {

    public function notify(): void {
        echo "Send email to {$this->getRecipient()}: You have 1 new email." . PHP_EOL;
    
    }
}

class SmsNotification extends Notification {

    public function notify(): void {
        echo "{$this->getRecipient()} You have 1 missing call." . PHP_EOL;
    }
}

class OrdinaryMailNotification extends Notification {

    public function notify(): void
    {
        echo "{$this->getRecipient()} You have 1 new message." . PHP_EOL;
    }
}

$newEmail = new EmailNotification("Miguel");
echo $newEmail->notify() . PHP_EOL;

$newSms = new SmsNotification("Antonia");
echo $newSms->notify() . PHP_EOL;

$newOridaryMail = new OrdinaryMailNotification("Juan");
echo $newOridaryMail->notify() . PHP_EOL;
?>