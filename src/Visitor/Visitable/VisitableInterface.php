<?php


namespace App\Visitor\Visitable;

use App\Visitor\Visitor\VisitorInterface;

interface VisitableInterface
{
    public function accept(VisitorInterface $visitor);
}