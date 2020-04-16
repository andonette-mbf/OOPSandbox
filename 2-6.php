<?php
class User {
  protected $name = 'Andonette';
  protected $age;

  public function __construct($name, $age){
    $this->name = $name;
    $this->age = $age;
  }
}
// this will give this class access to the one its extending
class Customer extends User {
  private $balance;

  public function pay($amount) {
   // even though this is protected we can use it
   // because we've extended it
   return $this->name . ' paid $' . $amount;
 }
 public function __construct($name, $age, $balance){
   parent::__construct($name, $age);
   $this->balance = $balance;
 }
 public function getBalance(){
   return $this->balance;
 }
}


$customer1 = new Customer('John', 33, 500);
echo $customer1->getBalance();
//echo $customer1->pay(100);
