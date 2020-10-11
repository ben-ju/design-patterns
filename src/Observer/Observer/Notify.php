<?php

namespace App\Observer\Observer;

use SplObserver;
use SplSubject;
class Notify implements SplObserver
{
//      $subject is the ArticleManager instance
    public function update(SplSubject $subject)
    {
        echo "The article {$subject->getArticle()->getTitle()} with the description : {$subject->getArticle()->getDescription()}. \n";
    }
}