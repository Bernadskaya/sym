<?php

namespace Ant\WebBundle\Entity;

/**
 * AdGroup
 */
class AdGroup
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var boolean
     */
    private $active;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return AdGroup
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }


//    /**
//     * Set active
//     *
//     * @param boolean $active
//     *
//     * @return Ad
//     */
//    public function setActive($active)
//    {
//        $this->active = $active;
//
//        return $this;
//    }
//
//    /**
//     * Get active
//     *
//     * @return boolean
//     */
//    public function getActive()
//    {
//        return $this->active;
//    }
}
