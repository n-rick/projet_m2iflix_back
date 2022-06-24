<?php

namespace App\DataPersister;

use ApiPlatform\Core\DataPersister\DataPersisterInterface;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserDataPersister implements DataPersisterInterface
{
    public function __construct(private EntityManagerInterface $em, private UserPasswordHasherInterface $passwordEncoder)
    {
        $this->em = $em;
    }
    
    public function supports($data, array $context = []): bool
    {
        return $data instanceof User;
    }

    public function persist($data, array $context = [])
    {
        if(($context['collection_operation_name'] ?? null) == "post") {
            $data->setPassword($this->passwordEncoder->hashPassword(
                $data,
                $data->getPassword()
            ));
            $this->em->persist($data);
            $this->em->flush();
        }
    }

    public function remove($data, array $context = [])
    {
        $this->em->remove($data);
        $this->em->flush();
    }

}