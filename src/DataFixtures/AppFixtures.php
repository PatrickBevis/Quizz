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
        $user->setScore(0);
        $user->setRoles(["ROLE_USER"]);
        $manager->persist($user);


       $data = [

            'Cinema' => [
                'description' => 'Quiz sur le cinéma',
                'questions' => [
                    ['Qui a réalisé Titanic ?', [
                        ['James Cameron', true],
                        ['Steven Spielberg', false],
                        ['Christopher Nolan', false],
                        ['Ridley Scott', false],
                    ]],
                    ['Qui joue Iron Man ?', [
                        ['Robert Downey Jr', true],
                        ['Chris Evans', false],
                        ['Chris Hemsworth', false],
                        ['Mark Ruffalo', false],
                    ]],
                    ['Dans Matrix, quelle pilule prend Neo ?', [
                        ['Rouge', true],
                        ['Bleue', false],
                        ['Verte', false],
                        ['Noire', false],
                    ]],
                    ['Quel film a gagné l’Oscar 2020 ?', [
                        ['Parasite', true],
                        ['Joker', false],
                        ['1917', false],
                        ['Once Upon a Time in Hollywood', false],
                    ]],
                    ['Qui joue Jack Sparrow ?', [
                        ['Johnny Depp', true],
                        ['Brad Pitt', false],
                        ['Tom Cruise', false],
                        ['Leonardo DiCaprio', false],
                    ]],
                    ['Quel est le premier Star Wars ?', [
                        ['Episode IV', true],
                        ['Episode I', false],
                        ['Rogue One', false],
                        ['Episode III', false],
                    ]],
                    ['Qui est Batman dans The Dark Knight ?', [
                        ['Christian Bale', true],
                        ['Ben Affleck', false],
                        ['Robert Pattinson', false],
                        ['Michael Keaton', false],
                    ]],
                    ['Quel studio produit Pixar ?', [
                        ['Disney', true],
                        ['Dreamworks', false],
                        ['Warner', false],
                        ['Sony', false],
                    ]],
                    ['Qui a réalisé Inception ?', [
                        ['Christopher Nolan', true],
                        ['Steven Spielberg', false],
                        ['James Cameron', false],
                        ['Quentin Tarantino', false],
                    ]],
                    ['Dans Harry Potter, qui tue Voldemort ?', [
                        ['Harry Potter', true],
                        ['Dumbledore', false],
                        ['Snape', false],
                        ['Ron', false],
                    ]],
                ],
            ],

            'Football' => [
                'description' => 'Quiz sur le football',
                'questions' => [
                    ['Qui a gagné la Coupe du monde 2018 ?', [
                        ['France', true],
                        ['Brésil', false],
                        ['Allemagne', false],
                        ['Argentine', false],
                    ]],
                    ['Combien de joueurs sur le terrain ?', [
                        ['11', true],
                        ['10', false],
                        ['9', false],
                        ['12', false],
                    ]],
                    ['Quel club est le Real Madrid ?', [
                        ['Espagne', true],
                        ['Italie', false],
                        ['France', false],
                        ['Angleterre', false],
                    ]],
                    ['Qui est CR7 ?', [
                        ['Cristiano Ronaldo', true],
                        ['Messi', false],
                        ['Neymar', false],
                        ['Mbappé', false],
                    ]],
                    ['Quelle compétition est la plus prestigieuse ?', [
                        ['Ligue des Champions', true],
                        ['Ligue 1', false],
                        ['Europa League', false],
                        ['Conférence League', false],
                    ]],
                    ['Quel pays a gagné l’Euro 2016 ?', [
                        ['Portugal', true],
                        ['France', false],
                        ['Espagne', false],
                        ['Allemagne', false],
                    ]],
                    ['Quel poste marque le plus ?', [
                        ['Attaquant', true],
                        ['Gardien', false],
                        ['Défenseur', false],
                        ['Milieu', false],
                    ]],
                    ['Quel est le ballon officiel ?', [
                        ['Adidas', true],
                        ['Nike', false],
                        ['Puma', false],
                        ['Umbro', false],
                    ]],
                    ['Qui organise la Coupe du monde ?', [
                        ['FIFA', true],
                        ['UEFA', false],
                        ['LFP', false],
                        ['IOC', false],
                    ]],
                    ['Combien de temps dure un match ?', [
                        ['90 minutes', true],
                        ['80 minutes', false],
                        ['100 minutes', false],
                        ['70 minutes', false],
                    ]],
                ],
            ],

            'Science' => [
                'description' => 'Quiz scientifique',
                'questions' => [
                    ['Quelle planète est rouge ?', [
                        ['Mars', true],
                        ['Vénus', false],
                        ['Jupiter', false],
                        ['Mercure', false],
                    ]],
                    ['Le soleil est une ?', [
                        ['Étoile', true],
                        ['Planète', false],
                        ['Lune', false],
                        ['Comète', false],
                    ]],
                    ['Combien de planètes ?', [
                        ['8', true],
                        ['9', false],
                        ['7', false],
                        ['10', false],
                    ]],
                    ['Plus grande planète ?', [
                        ['Jupiter', true],
                        ['Terre', false],
                        ['Saturne', false],
                        ['Neptune', false],
                    ]],
                    ['L’eau est ?', [
                        ['H2O', true],
                        ['CO2', false],
                        ['O2', false],
                        ['NaCl', false],
                    ]],
                    ['Un atome contient ?', [
                        ['Protons neutrons électrons', true],
                        ['Seulement électrons', false],
                        ['Seulement neutrons', false],
                        ['Seulement protons', false],
                    ]],
                    ['ADN signifie ?', [
                        ['Acide désoxyribonucléique', true],
                        ['Acide dynamique naturel', false],
                        ['Agent de neurones', false],
                        ['Acide numérique', false],
                    ]],
                    ['Force gravitationnelle découverte par ?', [
                        ['Newton', true],
                        ['Einstein', false],
                        ['Tesla', false],
                        ['Galilée', false],
                    ]],
                    ['Vitesse lumière ?', [
                        ['300 000 km/s', true],
                        ['100 000 km/s', false],
                        ['1 000 km/s', false],
                        ['10 000 km/s', false],
                    ]],
                    ['Planète la plus proche du soleil ?', [
                        ['Mercure', true],
                        ['Venus', false],
                        ['Terre', false],
                        ['Mars', false],
                    ]],
                ],
            ],
        ];

        foreach ($data as $theme => $quizData) {

            $quiz = new Quiz();
            $quiz->setTheme($theme);
            $quiz->setDescription($quizData['description']);
            $quiz->setIsFinal(false);

            $manager->persist($quiz);

            foreach ($quizData['questions'] as $qData) {

                $question = new Question();
                $question->setDescription($qData[0]);
                $question->setQuiz($quiz);

                $manager->persist($question);

                foreach ($qData[1] as [$label, $isCorrect]) {

                    $answer = new Answer();
                    $answer->setLabel($label);
                    $answer->setIsCorrect($isCorrect);
                    $answer->setQuestion($question);

                    $manager->persist($answer);
                }
            }
        }

        $manager->flush();
    }
}
