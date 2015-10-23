<?php

namespace Ant\QuestBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ant\QuestBundle\Entity\Question;

/**
 * Question controller.
 *
 */
class QuestionController extends Controller
{

    /**
     * Lists all Question entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AntQuestBundle:Question')->findAll();

        return $this->render('AntQuestBundle:Question:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Question entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AntQuestBundle:Question')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Question entity.');
        }

        return $this->render('AntQuestBundle:Question:show.html.twig', array(
            'entity'      => $entity,
        ));
    }
}
