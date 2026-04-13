<?php

namespace App\Controller;

use App\Repository\QuestionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

final class QuestionController extends AbstractController
{
    #[Route('/api/question', name: 'question', methods:['GET'])]
    public function getallQuestion(QuestionRepository $questionRepository, SerializerInterface $serializer): JsonResponse
    {
        $questionList = $questionRepository->findAll();
        $jsonQuestionList= $serializer->serialize($questionList, 'json',['groups' => 'question:read']);
        return new JsonResponse($jsonQuestionList, Response::HTTP_OK, [], true);

    }
}
