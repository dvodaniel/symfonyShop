<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\RegistrationFormType;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function userAccount(RegistrationFormType $registrationForm,CategoryRepository $categoryRepository): Response
    {
        return $this->render('registration/register.html.twig', ['RegistrationFormType'=>$registrationForm,'categories'=>$categoryRepository->findAll()]);
    }
}
