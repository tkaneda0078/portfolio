<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends AbstractController
{
  public function indexAction()
  {
    $views = [];
    $views['form'] = $this->createForm(ContactType::class, null)->createView();
    return $this->render('Contact/index.html.twig', $views);
  }

  /**
   * @param Request $request
   */
  public function sendAction(Request $request)
  {
    $form = $this->createForm(ContactType::class, new Contact());
    $form->handleRequest($request);

    if (!$form->isValid()) {
      // TODO: error処理
    }

    var_dump($form->getData());exit;
  }
}