<?php

namespace App\Observer\Subject;

use App\Observer\Elements\Article;
use SplObjectStorage;
use SplSubject;
use SplObserver;

class ArticleManager implements SplSubject
{

//    store the article
    private Article $article;

    protected SplObjectStorage $observers;


    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    /**
     * @return SplObjectStorage
     */
    public function getObservers(): SplObjectStorage
    {
        return $this->observers;
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function create(Article $article)
    {
        $this->article = $article;

        $this->notify();

    }

    /**
     * @return Article
     */
    public function getArticle(): Article
    {
        return $this->article;
    }

}