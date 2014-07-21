<?php

namespace Ant\WebBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Ant\WebBundle\Entity\Page;

/**
 * Page controller.
 *
 */
class PageController extends Controller
{

    /**
     * Finds and displays a Page entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AntWebBundle:Page')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Page entity.');
        }

        return $this->render('AntWebBundle:Page:show.html.twig', array(
            'entity'      => $entity,
        ));
    }


    /**
     * Finds and displays a Page entity in blank.
     *
     */
    public function showBlankAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AntWebBundle:Page')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Page entity.');
        }

        return $this->render('AntWebBundle:Page:_blank.html.twig', array(
            'entity'      => $entity,
        ));
    }
}
