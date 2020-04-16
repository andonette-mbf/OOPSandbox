<?php
class User {
  public $name;
  public $age;
  public static $minpasslength = 6;
  public static function validatePass($pass){
    if (strlen($pass) >= self::$minpasslength) {
      return true;
    } else {
      return false;
    }
  }
}

$password = 'hello';
if(User::validatePass($password)){
  echo 'Password Valid';
} else {
  echo 'Password is too short';
}
