<?php

namespace Ant\QuestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Quiz
 */
class Quiz
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
     * @var \Ant\QuestBundle\Entity\Answer $answers
     *
     */
    private $answers;

    /**
     *
     * @var \Ant\QuestBundle\Entity\Question $questions
     */
    private $questions;



    public function __construct()
    {
        $this->answers = new ArrayCollection();
        $this->questions = new ArrayCollection();
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
     * @return Quiz
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
     * @param mixed $questions
     */
    public function setQuestions($questions)
    {
        $this->questions = $questions;
    }

    /**
     * @return mixed
     */
    public function getQuestions()
    {
        return $this->questions;
    }
    /**
     * Get question
     *
     */
    public function getAnswers()
    {
        return $this->answers;
    }


    public function addQuestion(Question $question)
    {
        $question->addQuiz($this); // synchronously updating inverse side
        $this->questions[] = $question;
    }

    public function removeQuestion(Question $question){
        $this->questions->removeElement($question);

    }


}
