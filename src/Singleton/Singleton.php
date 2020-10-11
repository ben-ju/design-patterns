<?php
namespace App\Singleton;

class Singleton
{
    // Fonction privée typé nom de la classe avec null comme valeur initiale
    private static ?Singleton $_instance = null;

    // Constructeur privée pour ne pas avoir acces à new Singleton() et ainsi ne pas recréer une nouvelle instance
    private function __construct()
    {
    }

    // Remplace new Singleton() et permet de toujours retourner la même instance
    public static function getInstance()
    {
//        Si la propriété instance est null alors on créer une nouvelle instance
        if(is_null(self::$_instance)) {
            self::$_instance = new Singleton();
        }
//        Sinon on retourne l'instance déjà stockée dans la propriété
        return self::$_instance;
    }

}