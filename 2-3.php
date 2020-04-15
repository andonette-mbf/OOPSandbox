<?php
//let's define a class
class user {
  //properties (attributes)
  //these are variables
  public $name;
  //Methods (functions
  public function sayHello(){
    return $this->name . ' says hello';
  }
}
// instantiate a user object from the user class

$user1 = new user();
$user1->name = 'Andonette';
echo $user1->name;
echo '<br>';
echo $user1->sayhello();
echo '<br>';
$user2 = new user();
$user2->name = 'Matthew';
echo $user2->name;
echo '<br>';
echo $user2->sayHello();
