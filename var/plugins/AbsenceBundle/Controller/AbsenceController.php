<?php

namespace KimaiPlugin\AbsenceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

/**
 * User profile controller
 */
#[Route(path: '/absence')]
#[IsGranted('plugins')]
final class AbsenceController extends AbstractController {
    #[Route(path: '/', methods: ['GET'])]
    public function home()
    {
        return new Response('HOME');
    }
}