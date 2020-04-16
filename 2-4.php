<?php
 class User {

    public $name;
    public $age;

    // This constructor will always run
    // without us having to call it
    // this is constructing whatever is below
    // with the properties name and age
    // that we just created above
    // a consttuctor runs when an object is instantiated
    public function __construct($name, $age){
      echo 'Class ' . __CLASS__ . ' intatantiated';
      echo '<br>';
      echo '<hr>';
      $this->name = $name;
      $this->age = $age;
    }
    // users name will say hello
    public function sayHello(){
      return $this->name . ' Says Hello';
    }
    //this gets called when there are no more
    // references left to a certain object
    // its used for clean up, closing connections etc
    public function __destruct() {
      echo 'destructor ran...';
    }
 }

// lets create a new user, As you can see, we can pass
// it the stuff in the constructor
// not really too sure what happens if you have more than one construct
// at this point i am guessing you can't
$user1 = new User('Andonette', 45);
echo $user1->name . ' is  ' . $user1->age . ' years old';
echo '<br>';
echo $user1->sayhello();

echo '<br>';

// each user will have been constructed with the
//properties that we passed to it
// I can see how this would work with gaming
$user2 = new User('Matthew', 38);
echo $user2->name . ' is  ' . $user2->age . ' years old';
echo '<br>';
echo $user2->sayhello();
