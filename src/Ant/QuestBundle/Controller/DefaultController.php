<?php

namespace Ant\QuestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AntQuestBundle:Default:index.html.twig', array('name' => $name));
    }
}
