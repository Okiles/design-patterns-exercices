<?php

namespace App;

class User implements \SplObserver {
    private string $name;
    private bool $notified = false;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function update(\SplSubject $subject): void {
        if ($subject instanceof MusicBand) {
            $this->notified = true;
            echo "L'utilisateur {$this->name} a été notifié d'une nouvelle date de concert pour le groupe {$subject->getName()}.\n";
        }
    }

    public function isNotified(): bool {
        return $this->notified;
    }
}
