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
?>