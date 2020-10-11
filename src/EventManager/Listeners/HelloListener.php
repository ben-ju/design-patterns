<?php
namespace App\EventManager\Listeners;
use App\EventManager\Model\User;
class HelloListener implements ListenerInterface
{
    public function action(User $user)
    {
        echo "hello {$user->getName()} \n";
    }
}