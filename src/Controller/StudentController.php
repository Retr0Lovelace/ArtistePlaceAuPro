<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StudentController extends AbstractController
{
    #[Route('/student', name: 'app_student')]
    public function index(): Response
    {
        return $this->render('student/home.html.twig', [
            'controller_name' => 'StudentController',
        ]);
    }

    #[\Symfony\Component\Routing\Annotation\Route('course/{token}', name: 'app_studentCourse')]
    public function post(EntityManagerInterface $entityManager, string $token): Response
    {
        return $this->render('student/course.html.twig', [
            'controller_name' => 'StudentController',
        ]);
    }
}
