<?php

namespace Ant\QuestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Answer
 */
class Answer
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Ant\QuestBundle\Entity\Question
     */
    private $question;

    /**
     * @var
     */
    private $questions;

    /**
     * @var string
     */
    private $value;

    public function __construct() {
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
     *
     */
    public function setQuestions($questions)
    {

        foreach ($questions as $question)
        {
            $question->setAnswer($this);
        }

        $this->questions = $questions;
    }

    /**
     *
     *
     */
    public function getQuestions()
    {
        return $this->questions;
    }
    /**
     * Set question
     *
     * @param \Ant\QuestBundle\Entity\Question $question
     * @return Answer
     */
    public function setQuestion($question)
    {
        $this->question = $question;

        return $this;
    }


    /**
     * Add questions
     *
     *
     *
     */
    public function addQuestion(Question $question = null)
    {
        $question->setAnswers($this);

        $this->questions->add($question);

        return $this;
    }


    /**
     * Get question
     *
     * @return \Ant\QuestBundle\Entity\Question
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return Answer
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }


}
