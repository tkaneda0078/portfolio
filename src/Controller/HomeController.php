<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
  public function indexAction()
  {
    // TODO blogコンテンツをcsmから取得する
    $views['blogs'] = [['title' => 'title1', 'text' => 'text1'], ['title' => 'title2', 'text' => 'text2']];

    return $this->render('Home/index.html.twig', $views);
  }
}