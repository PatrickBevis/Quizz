<?php

namespace App\DataFixtures;

use App\Entity\Answer;
use App\Entity\Question;
use App\Entity\Quiz;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setPseudo('Fluff');
        $user->setRoles(["ROLE_USER"]);
        $manager->persist($user);


        $quiz1 = new Quiz();
        $quiz1->setTheme('Movie');
        $quiz1->setDescription('Simple questions for everyone');
        $quiz1->setIsFinal(false);
        $manager->persist($quiz1);

        $question1 = new Question();
        $question1->setDescription('Who is Luke Skywalkers Dad');
        $question1->setQuiz($quiz1);
        $manager->persist($question1);

         $answers1 = [
            ['Anakin Skywalker', true],
            ['Yoda', false],
            ['Padme Amidala', false],
            ['Obi-wan Kenobi', false],
        ];

        foreach ($answers1 as [$label, $correct]) {
            $a = new Answer();
            $a->setLabel($label);
            $a->setIsCorrect($correct);
            $a->setQuestion($question1);
            $manager->persist($a);
        }



        $manager->flush();
    }
}
