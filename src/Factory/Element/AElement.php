<?php

namespace App\Factory\Element;

class AElement
{
    private $name;

    public function __construct()
    {
        get_class($this);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

}
