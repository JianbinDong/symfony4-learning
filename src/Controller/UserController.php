<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    /**
     * @Route("/user", name="user")
     */
    public function index()
    {
        $repository = $this->getDoctrine()->getRepository(User::class);
        $user = $repository->find(3);

        return $this->json([
            'nickname' => $user->getNickname(),
        ]);
    }
}
