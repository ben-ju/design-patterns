<?php


namespace App\Visitor\Visitable;


use App\Visitor\Visitor\VisitorInterface;

class B implements VisitableInterface
{
    private string $description;

    public function __construct(string $description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    public function accept(VisitorInterface $visitor)
    {
        $visitor->visitB($this);
    }
}