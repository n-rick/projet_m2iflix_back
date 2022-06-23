<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $passwordEncoder)
    {
    }

    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setNom('Fic');
        $user->setPrenom('Enrick');
        $user->setEmail('enrick.f@mail.com');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword($this->passwordEncoder->hashPassword(
            $user,
            'adminFic'
        ));
        $manager->persist($user);

        $user2 = new User();
        $user2->setNom('Dupond');
        $user2->setPrenom('henry');
        $user2->setEmail('henry.dupond@mail.com');
        $user2->setPassword($this->passwordEncoder->hashPassword(
            $user2,
            'henry8'
        ));
        $manager->persist($user2);

        $user3 = new User();
        $user3->setNom('Orienta');
        $user3->setPrenom('Huguette');
        $user3->setEmail('o.hug@mail.fr');
        $user3->setPassword($this->passwordEncoder->hashPassword(
            $user3,
            'huguett-o'
        ));
        $manager->persist($user3);

        $manager->flush();
    }
}
