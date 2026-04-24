<?php
namespace User;

//defining the class: class is nothing the but the main structure of object from where object used propery and method.

// class Fruits {

//     public $name;
//     public $season;
//     private $color = 'blue';

//     //constructor is a special type of function which calls automatically when new object creates.
//     function __construct($name, $season) {
//         $this->name = $name;
//         $this->season = $season;
//     }

//     public function fruitName() {
//         echo 'Fruits ' .  $this->name . ' will see on ' . $this->season;
//     }

//     public function getColor() {
//         echo $this->color;
//     }
//     public function setColor($color) {
//         $this->color = $color;
//     }
// }

// //instantiating an object
// $apple = new Fruits('apple', 'winter');
// $apple->fruitName();
// $apple->getColor('red');
// var_dump($apple);



class User {

    public $name;
    public $email;
    private $status = 'active';

    //lets create a construct function
    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function login() {
        echo $this->name . ' has successsfuylly logged In. ';
    }

    public function getStatus() {
        echo $this->status;
    }
    
    public function setStatus($status) {
        $this->status = $status;
    }

}


// $user1 = new User('shadab', 'shadabmajid13@gmail.com');
// $user1->getStatus();
// var_dump($user1);


class Admin extends User {
    public $level;

    public function __construct($name, $email, $level) {
        $this->level = $level;
        parent::__construct($name, $email);
    }

    public static function add(...$nums) {
        return array_sum($nums);
    }
}

$admin = new Admin('haris', 'haris@gmail.com',  5);
$admin->setStatus('admin');
$admin->login();
var_dump($admin);



//when we dont want to instantiate a new object every time and use the method or property
//we can create static property or method

echo Admin::add(1,23,4);
