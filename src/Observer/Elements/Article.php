<?php

namespace App\Observer\Elements;

class Article
{
    private $title;

    private $description;

    /**
     * Article constructor.
     * @param $title
     * @param $description
     */
    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
    }


    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }


}