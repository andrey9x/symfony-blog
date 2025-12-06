<?php

namespace App\DataFixtures;

use App\Entity\Blog;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    public function __construct(private readonly UserPasswordHasherInterface $hasher)
    {
    }

    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail("admin@yandex.ru");
        $user->setRoles(['ROLE_ADMIN']);
        $password = $this->hasher->hashPassword($user, 'password');
        $user->setPassword($password);
        $manager->persist($user);

        $users = [];
        for($i = 1; $i <= 20; $i++) {
            $user = new User();
            $user->setEmail("user$i@yandex.ru");
            $password = $this->hasher->hashPassword($user, 'password');
            $user->setPassword($password);
            $manager->persist($user);
            $users[] = $user;
        }

        for($j = 1; $j <= 100; $j++) {
            shuffle($users);
            foreach ($users as $user) {
                $blog = new Blog($user);
                $blog->setTitle("Blog title $j");
                $blog->setDescription("Blog description $j");
                $blog->setText("Blog text $j");
                $manager->persist($blog);
            }
        }

        $manager->flush();
    }
}
