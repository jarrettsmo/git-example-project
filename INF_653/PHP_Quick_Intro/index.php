<?php
    $mode = "dark";
    $greeting = "Hello, ";
    $name = "Jarrett";
    // data types
    $num = 42;                      #interger
    $dub = 42.02;                   #double
    $boo = true;                    #boolean (true or false)
    $arr = array('a','b','c');      #array
    define('DAYS_IN_YEAR', 365);    #objects
    $counter = 1;

    /* NOTE: to see your output in the console,
   follow your output with a new line "\n"

   2nd NOTE: This is only for Repl.
   Do not make a habit of adding the new line character
   in your PHP projects.
*/

/* 01: create a class named Pizza that has two 
properties: size and type.
*/
class Pizza {
    // Properties
    public $size;
    public $type;
    //Property added per instructions in Question 09...
    private $slices;
    
    //Method added per instructions in Question 08...
    public function serve() {
      echo "Here's your {$this->type} pizza!";
    } 
  
  /* 02: Add set_size and set_type methods to Pizza. */
    // set Methods
    function set_size($size) {
      $this->size = $size;
    }
    function set_type($type) {
      $this->type = $type;
    }
  
  /* 03: Add get_size and get_type methods to Pizza. */
    // get Methods
    function get_size() {
      return $this->size;
    }
    function get_type() {
      return $this->type;
    }
  
  /* 09: Add a private property named 
  slices to the Pizza class. 
  Add a method named get_slices  
  to the Pizza class. 
  The method should return the number 
  of slices.
  A small pizza has 6 slices. 
  A medium pizza has 8 slices.
  A large pizza has 10 slices.
  Set the value of the private slices 
  property when the size is set.  
  Call the get_slices method and 
  echo the returned value. 
  */
    
    //Method added per instructions in Question 09...
    function get_slices() { 
      return $this->slices;
    }
  }
  
  
  /* 04: Create a $pizza object from the Pizza class. */
  $pizza = new Pizza();
  
  /* 05: Set the $pizza size to "medium" */
  $pizza->set_size("medium");
  
  /* 06: Set the $pizza type to "Pepperoni". */
  $pizza->set_type("Pepperoni");
  
  /* 06: Call the get_size method and echo the 
  returned value. */
  echo $pizza->get_size();
  echo "<br>";
  
  /* 07: Call the get_type method and echo the 
  returned value. */
  echo $pizza->get_type();
  echo "<br>";
  
  /* 08: Add a method to Pizza named serve. 
  The serve method should output: 
  "Here's your {type} pizza!" 
  Replace {type} with the value of the type 
  property.*/
  
  //See "Method added per instructions in Question 08..." under Pizza class in Question 01 section.
  
  /* 09: Call the serve method and echo the 
  returned value. */
  echo $pizza->serve("$type");
  echo "<br>";
  
  /* 09: Add a private property named 
  slices to the Pizza class. 
  Add a method named get_slices  
  to the Pizza class. 
  The method should return the number 
  of slices.
  A small pizza has 6 slices. 
  A medium pizza has 8 slices.
  A large pizza has 10 slices.
  Set the value of the private slices 
  property when the size is set.  
  Call the get_slices method and 
  echo the returned value. 
  */
  echo $pizza->get_slices($size);
  echo "<br>";
  
  /* 10: Add a method named description 
  to the Pizza class. 
  The method should return: 
  "My pizza is a {size} {type} and 
  has {slices} slices!" 
  Replace {slices} with the number of slices.
  Replace {size} and {type} with their values.  
  
  Create a $myPizza object. 
  Set the size to "large". 
  Set the type to "Supreme". 
  Call the description method for $myPizza 
  and output the returned value. 
  */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/main.css">
    <title>Quick Intro to PHP</title>
</head>
<body
    <?php if ($mode === "dark"): ?>
    class="dark"
    <?php endif ?>
>
    <h1>
        <p><?php echo "Hello, {$name}!" ?></p>
    </h1>
</body>
</html>