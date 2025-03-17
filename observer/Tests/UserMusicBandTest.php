<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use App\User;
use App\MusicBand;

class UserMusicBandTest extends TestCase
{
    public function testUserNotification()
    {
        $albert = new User('Albert Mudhat');
        $michelle = new User('Michelle Ectron');
        $yves = new User('Yves Haigé');

        $band = new MusicBand('Daft PHPunk');

        $band->attach($albert);
        $band->attach($michelle);
        $band->attach($yves);

        // Yves se désabonne du groupe
        $band->detach($yves);

        // Ajouter une nouvelle date de concert
        $band->addNewConcertDate('19/11/2027', 'Bercy');

        // Vérifier les notifications
        $this->assertTrue($albert->isNotified(), "Albert should be notified.");
        $this->assertTrue($michelle->isNotified(), "Michelle should be notified.");
        $this->assertFalse($yves->isNotified(), "Yves should not be notified.");
    }
}
