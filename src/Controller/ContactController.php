<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
  public function indexAction()
  {
    $views = [];
    return $this->render('Contact/index.html.twig', $views);
  }
}