<?php

namespace App\Controller;

use App\Entity\Answer;
use App\Repository\AnswerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Serializer\SerializerInterface;

final class AnswerController extends AbstractController
{
    #[Route('/api/answers', name: 'answers', methods:['GET'])]
    public function getallAnswer(AnswerRepository $answerRepository, SerializerInterface $serializer): JsonResponse
    {
        $answerList = $answerRepository->findAll();
        $jsonAnswerList= $serializer->serialize($answerList, 'json',['groups' => 'answer:read']);
        return new JsonResponse($jsonAnswerList, Response::HTTP_OK, [], true);

    }
    
    #[Route('/api/answers/{id}', name: 'deleteAnswer', methods:['DELETE'])]
    public function deleteAnswer(Answer $answer, EntityManagerInterface $em) :JsonResponse {
        $em->remove($answer);
        $em->flush;
        return new JsonResponse(['message' => $answer->getLabel() .  ' has been deleted'], Response::HTTP_OK);
    }
    
}
