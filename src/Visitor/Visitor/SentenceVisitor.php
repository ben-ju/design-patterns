<?php


namespace App\Visitor\Visitor;



use App\Visitor\Visitable\A;
use App\Visitor\Visitable\B;
use App\Visitor\Visitable\C;

class SentenceVisitor implements VisitorInterface
{
    public function visitA(A $a): string
    {
        return "<h1>Pour l'élément A qui contient la description : <b>{$a->getDescription()}</b></h1>";
    }

    public function visitB(B $b): string
    {
        return "<h1>Pour l'élément B qui contient la description : <b>{$b->getDescription()}</b></h1>";
    }

    public function visitC(C $c): string
    {
        return "<h1>Pour l'élément C qui contient la description : <b>{$c->getDescription()}</b></h1>";
    }
}