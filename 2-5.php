<?php
class User {
  // these can only be accessed from within the class.
  private $name;
  private $age;

  public function __construct($name, $age){
    $this->name = $name;
    $this->age = $age;
  }
  // since we can't get private properties
  // we have to use a 'getter';
  // see below

  public function getName() {
    return $this->name;
  }
  // this one is for setting
  public function setName($name) {
    $this->name = $name;
  }

  //__get Magic Method.
  public function __get($property){
    if (property_exists($this, $property)) {
      return $this->$property;
    }
  }

  //__set Magic Method.
  public function __set($property, $value){
    if (property_exists($this, $property)) {
      $this->$property = $value;
    }
    return $this;
  }
}

// so lets set a user called isla aged 8
$user1 = new User('Isla', 8);
//$user2 = new User('Freddie', 5);

// lets get the user
echo $user1->getName();
// but we can now set a user name too
echo $user1->setName('Simone');
// now when we get it it;s changed.
echo $user1->getName();

echo $user1->__get('name');

$user1->__set('age', 41);
echo $user1->__get('age');
