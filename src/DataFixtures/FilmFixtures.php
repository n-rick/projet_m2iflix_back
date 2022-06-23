<?php

namespace App\DataFixtures;

use App\Entity\Film;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class FilmFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $film1 = new Film();
        $film1->setTitre("Spiderman 2");
        $film1->setGenre("Action");
        $film1->setAnnee("2018");
        $film1->setImage("https://m.media-amazon.com/images/M/MV5BYWU5YTg2ODgtYjY5Mi00ZDJhLTkyYjktYWRmNTc3ZjQ4YmJkXkEyXkFqcGdeQXVyODE4Njg5ODQ@._V1_SX300.jpg");

        $film2 = new Film();
        $film2->setTitre("Avenger");
        $film2->setGenre("Action");
        $film2->setAnnee("2006");
        $film2->setImage("https://m.media-amazon.com/images/M/MV5BMTMzMjMwMjcyNl5BMl5BanBnXkFtZTcwNTA1NDgzMQ@@._V1_SX300.jpg");
        
        $film3 = new Film();
        $film3->setTitre("Blade Runner");
        $film3->setGenre("Sci-Fi");
        $film3->setAnnee("1982");
        $film3->setImage("https://m.media-amazon.com/images/M/MV5BNzQzMzJhZTEtOWM4NS00MTdhLTg0YjgtMjM4MDRkZjUwZDBlXkEyXkFqcGdeQXVyNjU0OTQ0OTY@._V1_SX300.jpg");

        $manager->persist($film1);
        $manager->persist($film2);
        $manager->persist($film3);
        $manager->flush();
    }
}
