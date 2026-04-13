<?php

namespace App\Controller;

use App\Repository\AnswerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

final class AnswerController extends AbstractController
{
    #[Route('/api/answer', name: 'answer', methods:['GET'])]
    public function getallAnswer(AnswerRepository $answerRepository, SerializerInterface $serializer): JsonResponse
    {
        $answerList = $answerRepository->findAll();
        $jsonAnswerList= $serializer->serialize($answerList, 'json',['groups' => 'answer:read']);
        return new JsonResponse($jsonAnswerList, Response::HTTP_OK, [], true);

    }
}
