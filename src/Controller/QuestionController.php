<?php

namespace App\Controller;

use App\Entity\Question;
use App\Repository\QuestionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

final class QuestionController extends AbstractController
{
    #[Route('/api/questions', name: 'questions', methods:['GET'])]
    public function getallQuestion(QuestionRepository $questionRepository, SerializerInterface $serializer): JsonResponse
    {
        $questionList = $questionRepository->findAll();
        $jsonQuestionList= $serializer->serialize($questionList, 'json',['groups' => 'question:read']);
        return new JsonResponse($jsonQuestionList, Response::HTTP_OK, [], true);

    }

     #[Route('/api/questions/{id}', name: 'deleteQuestion', methods:['DELETE'])]
    public function deleteQuestion(Question $question, EntityManagerInterface $em) :JsonResponse {
        $em->remove($question);
        $em->flush;
        return new JsonResponse(['message' => $question->getDescription() .  ' has been deleted'], Response::HTTP_OK);
    }
}
