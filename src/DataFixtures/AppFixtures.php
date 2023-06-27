<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Book;
use App\Entity\Author;
use App\Entity\Category;
use App\Entity\Client;
use App\Entity\Format;
use App\Entity\Edition;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create($fakerLocale = 'fr_FR');

        // Création de 20 auteurs
        for ($i = 0; $i < 20; $i++) {
            $author = new Author();
            $author->setFirstname($faker->firstName());
            $author->setLastname($faker->lastName());
            $author->setNationality($faker->country(255));
            $author->setDescription($faker->text(200));
            $author->setBirthday($faker->dateTimeBetween('-100 years', '-20 years'));

            $manager->persist($author);
        }

        // Création de 20 éditeurs
        for ($i = 0; $i < 20; $i++) {
            $edition = new Edition();
            $edition->setName($faker->company());
            $edition->setBirthday($faker->dateTimeBetween('-100 years', '-20 years'));
            $edition->setDescription($faker->text(200));

            $manager->persist($edition);
        }

        // Création de 4 formats
        $formats = ['ebook', 'broché', 'grand format', 'poche'];
        foreach($formats as $format) {
            $new = new Format();
            $new->setName($format);

            $manager->persist($new);
        }

        // Création de 10 catégories
        for ($i = 0; $i < 10; $i++) {
            $category = new Category();
            $category->setName($faker->word());

            $manager->persist($category);
        }

        // Création de 100 livres
        for ($i = 0; $i < 100; $i++) {
            $book = new Book();
            $book->setTitle($faker->sentence(3));
            $book->setIsbn($faker->isbn13());
            $book->setPages($faker->numberBetween(50, 1000));
            $book->setPublicationDate($faker->dateTimeBetween('-50 years', 'now'));
            $book->setDescription($faker->text(200));
            $book->setAuthor($author);
            $book->setEdition($edition);

            $manager->persist($book);
        }

        // Création de 20 clients
        for ($i = 0; $i < 20; $i++) {
            $client = new Client();
            $client->setFirstname($faker->firstName());
            $client->setLastname($faker->lastName());
            $client->setEmail($faker->email());
            $client->setPhone($faker->phoneNumber());
            $client->setAddress($faker->streetAddress());
            $client->setCity($faker->city());
            $client->setPostal($faker->postcode());
            $client->setCountry($faker->country());
            $client->setRoles(['ROLE_USER']);
            $client->setPassword('$2y$13$5PhgmF9mDhmviCc7JsXcwebRHHB2MQ0ulZKyWjQyIpU/Pf21KRPrm');
            $client->setCaution($faker->boolean());

            $manager->persist($client);
        }

        $manager->flush();
    }
}

