<?php

class reflectionMagic
{
    public string $card = 'As';


    public function __construct()
    {
        echo "is called when we create an object of our class. Basically this is used to create a constructor in php5.";
    }

    public function __destruct()
    {
        echo " is called when the object of our class is not defined. It's just the opposite of __construct.";
    }

    public function __get(string $name)
    {
        echo " is called when our object tries to read a property or a variable of the class which is inaccessible or unavailable.";
    }

    public function __set(string $name, mixed $value)
    {
        echo "is called when an object of our class tries to set the value of the property which is really inaccessible or unavailable in our class.";
    }

    public function __isset(string $name)
    {
        echo "__isset methods are triggered when the isset () function is applied to any property of the class that is inaccessible or unavailable.";
    }

    public function __unset(string $name)
    {
        echo " __unset is something the opposite of the isset method. This method is triggered when the unset () function is called on an unreachable or unavailable property of the class.";
    }

    public function _call()
    {
        echo "__call magic method trigger when we try to call a method or function of the class that is either unreachable or unavailable.";
    }

    public static function __callstatic(string $name, array $arguments)
    {
        echo "__callstatic execture when the unreachable or unavailable method is in a static context.";
    }

    public function __sleep()
    {
        echo " __sleep methods are triggered when we are going to serialize your class object.";
    }

    public function __wakeup()
    {
        echo "__wakeup runs when we deserialize a class object.";
    }

    public function __toString(): string
    {
        echo "__toString runs when you use echo on your object.";
        return "__invoke ";
    }

    public function __invoke()
    {
        echo "__invoke called when we use the object of your class as a function";
    }

}