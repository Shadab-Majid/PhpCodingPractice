<?php

//abstract class are the class which have atleast one abstract method which can be public private it starts with abstract keyword

abstract Class Car {

    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    //Abstract Class
    abstract public function info();
}

Class Audi extends Car {

    public function info() {
        echo 'This is the ' . $this->name;
    }

}

$audi = new Audi('audi');
$audi->info();


//Interface

Interface Fruits {
    public function FruitName();
}

class Apple implements Fruits {

    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function FruitName() {
        echo 'Fruit is' . $this->name;
    }
}

$apple = new Apple('apple');
$apple->FruitName();
// PHP - Interfaces vs. Abstract Classes
// Interface are similar to abstract classes. The difference between interfaces and abstract classes are:

// Interfaces cannot have properties, while abstract classes can
// All interface methods must be public, while abstract methods can be public or protected
// All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
// Classes can implement an interface while inheriting from another class at the same time
// Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism". 



//Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).

//traits can be create using trait key word and use in class by using use keyword followed with trait name.cd 

