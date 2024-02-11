<?php

class Singleton{

private static $instances = [];

    private final function __construct()
    {
        
    }

    public static function getInstances(){
        $class = get_called_class();

        if (!isset(static::$instances[$class])) {
            static::$instances[$class] = new static();
        }
        return static::$instances[$class];
    }

    private function __clone()
    {
        
    }

    // private function __wakeup()
    // {
        
    // }


}


?>