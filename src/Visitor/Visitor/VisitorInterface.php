<?php


namespace App\Visitor\Visitor;



use App\Visitor\Visitable\A;
use App\Visitor\Visitable\B;
use App\Visitor\Visitable\C;

interface VisitorInterface
{
//    On instancie autant d'élément que les Visitor vont devoir utiliser

    public function visitA(A $a): string;
    public function visitB(B $b): string;
    public function visitC(C $c): string;
}