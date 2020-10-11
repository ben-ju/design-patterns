<?php


namespace App\EventManager\Listeners;


use App\EventManager\Model\User;

interface ListenerInterface
{
    public function action(User $user);
}