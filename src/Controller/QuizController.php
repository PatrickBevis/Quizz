<?php

namespace App\Controller;

use App\Entity\Quiz;
use App\Repository\QuizRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

final class QuizController extends AbstractController
{
    #[Route('/api/quiz', name: 'quiz', methods:['GET'])]
    public function getallQuiz(QuizRepository $quizRepository, SerializerInterface $serializer): JsonResponse
    {
        $quizList = $quizRepository->findAll();
        $jsonQuizList= $serializer->serialize($quizList, 'json',['groups' => 'quiz:read']);
        return new JsonResponse($jsonQuizList, Response::HTTP_OK, [], true);

    }

     #[Route('/api/quiz/{id}', name: 'deleteQuiz', methods:['DELETE'])]
    public function deleteQuiz(Quiz $quiz, EntityManagerInterface $em) :JsonResponse {
        $em->remove($quiz);
        $em->flush;
        return new JsonResponse(['message' => $quiz->getTheme() .  ' has been deleted'], Response::HTTP_OK);
    }
}
