<?php

namespace Ant\WebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use \Ant\MediaBundle\Entity\Gallery;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * GalleryCategory
 */
class Category
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $title;



    /**
     * @var string
     */
    private $galleries;

    /**
     * @var string
     */
    private $gallery;



    public function __construct() {
        $this->galleries = new ArrayCollection();
    }


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
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param \Ant\MediaBundle\Entity\Gallery $gallery Set gallery
     *
     * @return Category
     */
    public function setGallery($gallery = null)
    {
        $this->gallery = $gallery;

        return $this;
    }


    public function addGallery(Gallery $gallery)
    {
        $this->galleries[] = $gallery;
    }

    /**
     * Get gallery
     *
     * @return \Ant\MediaBundle\Entity\Gallery
     */
    public function getGalleries()
    {
        return $this->gallery;

  }


    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return $this->getName() ?: '-';
    }
    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
}
