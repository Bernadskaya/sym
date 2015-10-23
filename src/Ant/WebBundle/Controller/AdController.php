<?php

namespace Ant\WebBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Ant\WebBundle\Entity\Ad;
use Ant\WebBundle\Entity\AdGroup;


/**
 * Ad controller.
 *
 */
class AdController extends Controller
{


    /**
     * Lists all Ad entities.
     * @Cache(expires="+7 days")
     */


    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $repository = $em->getRepository('AntWebBundle:Ad');


        $oneGroupAds = $em->getRepository('AntWebBundle:Ad')->findByAdGroup(1);
        $oneGroup = $em->find('AntWebBundle:AdGroup', 1);

        $twoGroupAds = $em->getRepository('AntWebBundle:Ad')->findByAdGroup(2);
        $twoGroup = $em->find('AntWebBundle:AdGroup', 2);

        $threeGroupAds = $em->getRepository('AntWebBundle:Ad')->findByAdGroup(3);
        $threeGroup = $em->find('AntWebBundle:AdGroup', 3);

        $fourGroupAds = $em->getRepository('AntWebBundle:Ad')->findByAdGroup(4);
        $fourGroup = $em->find('AntWebBundle:AdGroup', 4);

        $fiveGroupAds = $em->getRepository('AntWebBundle:Ad')->findByAdGroup(5);
        $fiveGroup = $em->find('AntWebBundle:AdGroup', 5);

        $sixGroupAds = $em->getRepository('AntWebBundle:Ad')->findByAdGroup(6);
        $sixGroup = $em->find('AntWebBundle:AdGroup', 6);


        $entities = $repository->findBy(
            array('active' => true),
            array('position' => 'ASC')

        );

        return $this->render('AntWebBundle:Ad:index.html.twig', array(
            'entities' => $entities,
            'oneGroup' => $oneGroup,
            'oneGroupAds' => $oneGroupAds,
            'twoGroup' => $twoGroup,
            'twoGroupAds' => $twoGroupAds,
            'threeGroup' => $threeGroup,
            'threeGroupAds' => $threeGroupAds,
            'fourGroup' => $fourGroup,
            'fourGroupAds' => $fourGroupAds,
            'fiveGroup' => $fiveGroup,
            'fiveGroupAds' => $fiveGroupAds,
            'sixGroup' => $sixGroup,
            'sixGroupAds' => $sixGroupAds,
        ));
    }

    /**
     * Show list ads in group
     *
     */
    public function listOneGroupAction($id, $adGroupTemplate)
    {
        $em = $this->getDoctrine()->getManager();
        $ad = $em->getRepository('AntWebBundle:Ad')->findByAdGroup($id);

        $adGroup = $this->getDoctrine()
            ->getRepository('AntWebBundle:AdGroup')
            ->find($id);
        $adGroupTitle = $adGroup->getTitle();

        return $this->render($adGroupTemplate, array(
            'ad'=>$ad,
            'adGroupTitle'=>$adGroupTitle,
        ));
    }


    /**
     * Finds and displays a Ad entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AntWebBundle:Ad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ad entity.');
        }

        return $this->render('AntWebBundle:Ad:show.html.twig', array(
            'entity'      => $entity,
        ));
    }
}
