<?php

namespace App\EventManager\Event;

use App\EventManager\Listeners\ListenerInterface;
use App\EventManager\Model\User;

class EventDispatcher
{
    private array $listeners = [];

//    Save the listener name, listener object and the method name into the property array $listeners
    public function addListener(string $name, ListenerInterface $listener, string $method) :void
    {
        if(!array_key_exists($name, $this->listeners)) {
            $this->listeners[$name] = [];
        }
        $this->listeners[$name][] = [
            'listener' => $listener,
            'method' => $method,
        ];
    }

//    Read the array, find the index corresponding with the $name and call the method
    public function dispatch(string $name, User $object) :void
    {
        foreach($this->listeners[$name] as $listener) {
            $listener['listener']->{$listener['method']}($object);
        }
    }
}