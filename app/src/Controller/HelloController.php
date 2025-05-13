<?php

/**
 * Hello controller.
 */

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

/**
 * Class HelloController.
 */
#[Route('/hello')]
class HelloController extends AbstractController
{
    /**
     * Index action.
     *
     * @param string $userName User input
     *
     * @return Response HTTP Response
     */
    #[Route(
        '/{user_name}',
        name: 'hello_index',
        requirements: ['user_name' => '[a-zA-Z]+'],
        defaults: ['user_name' => 'world'],
        methods: ['GET']
    )]
    public function index(string $userName): Response
    {
        return $this->render(
            'hello/index.html.twig',
            ['user_name' => $userName]
        );
    }
}
