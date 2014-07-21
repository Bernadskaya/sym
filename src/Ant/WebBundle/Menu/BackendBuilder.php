<?php
/**
 * Created by PhpStorm.
 * User: nevada
 * Date: 10.01.14
 * Time: 12:04
 */

namespace Ant\WebBundle\Menu;


use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;


class BackendBuilder extends ContainerAware {

    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav')
            ->addChild('Index', array('label'=>'menu.backend.index','route' => 'ads_list'))
            ->setExtra('translation_domain', 'AntWebBundle');
        $menu
            ->addChild('menu.backend.ads', array('route' => 'ads_list'))
            ->setExtra('translation_domain', 'AntWebBundle');
        $menu
            ->addChild('menu.backend.news', array('route' => 'news_list'))
            ->setExtra('translation_domain', 'AntWebBundle');
        $menu
            ->addChild('Pages', array('label'=>'menu.backend.pages','route' => 'page_list'))
            ->setExtra('translation_domain', 'AntWebBundle');
        $menu
            ->addChild('Portfolio', array('label'=>'menu.backend.pf_all'))
            ->setAttributes(array ('class'=>'dropdown'))
            ->setExtra('translation_domain', 'AntWebBundle');
        $menu
            ->addChild('Orders', array('label'=>'menu.backend.orders','route' => 'order_list'))
            ->setExtra('translation_domain', 'AntWebBundle');
        $menu['Portfolio']->setUri('#');
        $menu['Portfolio']
            ->addChild('Items', array('label'=>'menu.backend.pf_items','route' => 'pf_list'))
            ->setExtra('translation_domain', 'AntWebBundle');
        $menu['Portfolio']
            ->addChild('Albums', array('label'=>'menu.backend.pf_albums','route' => ''))
            ->setExtra('translation_domain', 'AntWebBundle');
        $menu['Portfolio']->setChildrenAttributes(array ('class'=>'dropdown-menu'));
        $menu['Portfolio']->setLinkAttributes(array ('data-toggle'=>'dropdown','class'=>'dropdown-toggle'));


        return $menu;
    }
}