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
        $film1->setTitre("STAR WARS: OBI-WAN KENOBI");
        $film1->setGenre("Sci-Fi");
        $film1->setAnnee("2022");
        $film1->setImage("https://fr.web.img2.acsta.net/c_225_300/pictures/22/02/10/08/42/0948220.jpg");

        $film2 = new Film();
        $film2->setTitre("BREAKING BAD");
        $film2->setGenre("Drame");
        $film2->setAnnee("2008");
        $film2->setImage("https://fr.web.img4.acsta.net/c_225_300/pictures/18/07/23/11/26/2778599.jpg");
        
        $film3 = new Film();
        $film3->setTitre("ARCANE");
        $film3->setGenre("Animation");
        $film3->setAnnee("2021");
        $film3->setImage("https://fr.web.img5.acsta.net/c_225_300/pictures/21/09/21/17/41/5948652.jpg");

        $film4 = new Film();
        $film4->setTitre("JURASSIC WORLD: LE MONDE D'APRÈS");
        $film4->setGenre("Aventure");
        $film4->setAnnee("2022");
        $film4->setImage("https://fr.web.img6.acsta.net/c_310_420/pictures/22/04/14/18/30/0040092.jpg");

        $film5 = new Film();
        $film5->setTitre("FOOTLOOSE");
        $film5->setGenre("Comédie Musical");
        $film5->setAnnee("1984");
        $film5->setImage("https://fr.web.img5.acsta.net/c_310_420/medias/nmedia/18/65/65/28/18879942.jpg");

        $film6 = new Film();
        $film6->setTitre("THE WALKING DEAD");
        $film6->setGenre("Epouvante");
        $film6->setAnnee("2010");
        $film6->setImage("https://fr.web.img4.acsta.net/c_225_300/pictures/21/02/02/10/13/1423956.jpg");

        $film7 = new Film();
        $film7->setTitre("TOP GUN");
        $film7->setGenre("Action");
        $film7->setAnnee("1986");
        $film7->setImage("https://fr.web.img4.acsta.net/c_310_420/pictures/15/06/12/12/58/422779.jpg");

        $film8 = new Film();
        $film8->setTitre("PEAKY BLINDERS");
        $film8->setGenre("Policier");
        $film8->setAnnee("2013");
        $film8->setImage("https://fr.web.img6.acsta.net/c_225_300/pictures/18/03/14/14/20/2069499.jpg");

        $film9 = new Film();
        $film9->setTitre("INTERCEPTOR");
        $film9->setGenre("Action");
        $film9->setAnnee("2022");
        $film9->setImage("https://fr.web.img3.acsta.net/c_310_420/pictures/22/05/05/12/00/4437011.jpg");

        $film10 = new Film();
        $film10->setTitre("LE CHANT DU LOUP");
        $film10->setGenre("Thriller");
        $film10->setAnnee("2019");
        $film10->setImage("https://fr.web.img6.acsta.net/c_310_420/o_club300-310x420.png_0_se/pictures/18/12/10/09/46/3892829.jpg");

        $manager->persist($film1);
        $manager->persist($film2);
        $manager->persist($film3);
        $manager->persist($film4);
        $manager->persist($film5);
        $manager->persist($film6);
        $manager->persist($film7);
        $manager->persist($film8);
        $manager->persist($film9);
        $manager->persist($film10);
        $manager->flush();
    }
}
