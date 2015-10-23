<?php

namespace Ant\QuestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Question
 */
class Question
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
     * @var string
     */
    private $description;

    /**
     * @var \Ant\QuestBundle\Entity\Type
     */
    private $type;
    /**
     * @var \Ant\QuestBundle\Entity\Answer
     */
    private $answers;


    /**
     * @var boolean
     */
    private $enabled;

    /**
     *
     */
    private $variant;

    /**
     *
     */
    protected  $variants;

    private $quizez;


    public function __construct() {
        $this->variants = new ArrayCollection();
    }


    /**
     *
     */
    public function setVariants($variants = null)
    {

        foreach ($variants as $variant)
        {
            $variant->setIdQuestion($this);
        }

        $this->variants = $variants;
    }

    /**
     *
     *
     */
    public function getVariants()
    {
        return $this->variants;
    }



    /**
     * Add variants
     *
     *
     *
     */
    public function addVariant(Variant $variant = null)
    {
        $variant->setIdQuestion($this);

        $this->variants->add($variant);

        return $this;
    }



    /**
     * @param \Ant\QuestBundle\Entity\Variant $variant
     */
    public function setVariant($variant)
    {
        $this->variant = $variant;
    }



    /**
     * @return \Ant\QuestBundle\Entity\Variant
     */
    public function getVariant()
    {
        return $this->variant;
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
     * Set title
     *
     * @param string $title
     * @return Question
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

    /**
     * Set description
     *
     * @param string $description
     * @return Question
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set type
     *
     * @param \Ant\QuestBundle\Entity\Type $type
     * @return Question
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Ant\QuestBundle\Entity\Type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return Question
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param \Ant\QuestBundle\Entity\Answer $answers
     */
    public function setAnswers($answers)
    {
        $this->answers = $answers;
    }

    /**
     * @return \Ant\QuestBundle\Entity\Answer
     */
    public function getAnswers()
    {
        return $this->answers;
    }


    public function addQuiz(Quiz $quiz)
    {
        $this->quizez[] = $quiz;
    }


    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return $this->getTitle() ?: '-';
    }
}
