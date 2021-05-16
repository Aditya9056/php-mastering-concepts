<?php
//  Multilevel Inheritance
/*

class child_class_name {
    use trait_name;
    ...
    ...
    child_class functions
}

E.g. 
<?php
  
// trait Geeks
trait Geeks {
  public function sayhello() {
     echo "Hello";
   }
 }
  
// trait forGeeks
trait forGeeks {
  public function sayfor() {
     echo " Geeks";
   }
 }
  
class Sample {
  use Geeks;
  use forGeeks;
  public function geeksforgeeks() {
      echo "\nGeeksforGeeks";
   } 
}
  
$test = new Sample();
$test->sayhello();
$test->sayfor();
$test->geeksforgeeks();
?>

*/

class Person
{
protected $firstName = "Ram";

function hi($name)
{
return 'hi' . ' ' . $name . ' from ' . $this->firstName;
}
}

trait Shop
{
protected $owner = "Rajesh";

function whois()
{
return 'Owner is ' . $this->owner;
}
}

class Pet extends Person
{
use Shop;

public function owner()
{
$a = $this->firstName;
$a = $this->owner;
return $a;
}
}

$ob = new Pet();

echo $ob->owner();
