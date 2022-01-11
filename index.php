<!--
PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.

PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP.  -->

<!-- PHP => PHP: Hypertext Preprocessor
It is powerful enough to be at the core of the biggest blogging system on the web(WordPress)

It is deep enough to run large social networks!

It is also easy enough to be beginner's first server side language!  -->


<!-- What can PHP Do?
 # PHP can generate dynamic page content
 #PHP can create, open, read, write, delete, and close files on the server
 # PHP can collect form data
 # PHP can send and receive cookies
 # PHP can add, delete, modify data in your database
 # PHP can be used to control user-access
 # PHP can encrypt data  -->

 <!-- ***Programming is a Profession That Requires Constant Learning

 ***Good Developers Don't Need Anyone's help
 ***Programming Isn't The Only Thing That They're Good at!
 ***You Must Be Familiar With Your Tools

 ***Developers are self-taught
***You're Good If You Can Create Something -->

<!-- When I say creating, I mean Programming a piece of software, not designing it. There is an entire world outside Programming and creating websites or mobile apps which requires creativity as well (such as drawing). -->

<!-- However, we're talking about Programming now so if you can create something complicated without using any tutorials to assist you then this fact confirms that your skills are worth being valued by other people! It's all about challenging yourself because the more difficult task is solved successfully, the better developer you become! So don't be afraid of challenges - embrace them instead! -->

<!-- Why PHP?
  #various platforms
  #compatible with almost all servers(Apache, IIS etc)
  #supports a wide range of databases
  # free
  #easy to learn  -->



<?php
$txt = "PHP";

echo "<h1>I love $txt!</h1>";

echo "<h1>A $txt script is executed on the server, and the plain HTML result is sent back to the browser.</h1>";

// In PHP, keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are not case-sensitive.

# Note: However; all variable names are case-sensitive!

// echo "# all-about-php" >> README.md
// git init
// git add README.md
// git commit -m "first commit"
// git branch -M main
// git remote add origin https://github.com/devnuru/all-about-php.git
// git push -u origin main

// git remote add origin https://github.com/devnuru/all-about-php.git
// git branch -M main
// git push -u origin main


// Variables are "containers" for storing information.

$name = "Md. Nuruzzaman Chowdhury";
$age = 25;
echo "Hi, $name. Im $age years old! ";


//PHP is a Loosely Typed Language

//PHP Variables Scope

//In PHP, variables can be declared anywhere in the script.

//The scope of variable is the part of of the script where the variable can be referenced/used.

//PHP has three different variable scopes:
  #local
  #global
  #static
// Global Scope

$x = 25;
function myFunc(){
    echo "<p>Variable x inside function is: $x </p>";

}
myFunc();

echo "<h1>Variable x outside function is: $x </h1>";


// Local Scope

function localV() {
    $x = "Hello";
    echo "<h2>$x world</h2>";
}
localV();

//PHP The global Keyword
//The global keyword is used to access a variable from within a function.
$y= 50;
function hello_global(){
    global $x, $y;
    $y = $x + $y;
}
hello_global();
echo $y;

//PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to upadte global variables directly.
//Ex-



// With php, there are two basic ways to get output: echo & print.


// echo and print are more less the same. They are both used to output data to the screen.

# echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters(although such usage is rare) while print take one argument. echo is marginally faster than print.

// echo and print statement can be used with or without parentheses


/*



PHP data types
Variables can store data of different types, and different data types can do different things.

PHP supports the following data types:

1.String
2.Integer
3.Float(floating point numbers - also called double)
4. Boolean
5. Array
6. Object
7. Null
8. Resource

*/


// Rules for integers:
//   * An integer must have at least one digit
//   * An integer must not have a decimal point
//   * An integer can be either positive or negative
//   * Integer can be specified in: decimal, hexadecimal, octal or binary notation


// PHP var_damp() function returns the data types and value:

echo "<br>";

$i = 1997;

var_dump($i);


// PHP float(floating point number) is a number with a decimal point or a number in exponential form.

$f = 16.10;

var_dump($f);

// A Boolean represents two possible states: TRUE or FALSE;
// Boolean are often used in conditional testing.


// An array stores multiple values in one single variable.

echo "<hr>";


$man = array("Nuruzzaman", "Khokon", "Nusrat Jahan");
var_dump($man);




//PHP Object

//Class and objects are the two man aspects of object-oriented programming.

//A class is a template for objects, and an object is an instance of a class.
//When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.

//If we create a __construct() function, PHP will automatically call this function when we create an object from a class.

echo "<br>";
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
      $this ->color =$color;
      $this ->model =$model;
  }
  public function message() {
      return "My car is a " . $this ->color . " " . $this->model . "!";
  }
}

$myCar = new Car("Black", "Volvo");
echo $myCar ->message();
echo "<br>";

$myCar = new Car("red", "Toyota");
echo $myCar -> message();

//PHP null value
//Null is a special data type which can have only one value: NULL.

//A variable of data tpe NULL is a variable that has no value assigned to it.
// Tips: If a variable is created without a value, it is automatically assigned a value of NULL.
//
echo "<br>";
$n = NULL;
var_dump($n);

echo "<br>";
$u = "Hello PHP";
$u = NULL;
var_dump($u);
//PHP Resource
//The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.
//A common example of using the resource data type is a database call.

//In this chapter we will look at some commonly used functions to manpulate strings.

# strlen() Return the length of a string

echo strlen("hello world");

//str_word_count() - Count Words in a String
echo str_word_count("He llo PHP");
// strrev() - Reverse a String
echo strrev("Hello Nuruzzaman");
///strpos() - Search For a Text within a String

echo "<br>";

echo strpos("Hello World", "World");
 echo "<br>";
//Tip: The first character position in a string is 0 (not 1).

//str_replace() - Replace Text Within a String
echo str_replace("JavaScript", "PHP", "Hello JavaScript");


strlen("Hello");
str_word_count("Hello");
strrev("Hello"); //6
str_replace("world", "Nuruzzaman", "Hello World") 


//PHP Numbers
//One thing to notice about PHP is that it provides automatic data type conversion
// So, if we assign an integer value to a variable, the type of that variable will automatically be an integer.





Here are some rules for integers:

  An integer must have at least one digit
  An integer must NOT have a decimal point
  An integer can be either positive or negative
  Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)
  PHP has the following predefined constants for integers:
  
  PHP_INT_MAX - The largest integer supported
  PHP_INT_MIN - The smallest integer supported
  PHP_INT_SIZE -  The size of an integer in bytes
  PHP has the following functions to check if the type of a variable is integer:
  
  is_int()
  is_integer() - alias of is_int()
  is_long() - alias of is_int()



  PHP has the following predefined constants for floats (from PHP 7.2):

    PHP_FLOAT_MAX - The largest representable floating point number
    PHP_FLOAT_MIN - The smallest representable positive floating point number
    - PHP_FLOAT_MAX - The smallest representable negative floating point number
    PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss
    PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0
    PHP has the following functions to check if the type of a variable is float:
    
    is_float()
    is_double() - alias of is_float()

    PHP Infinity
A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.

PHP has the following functions to check if a numeric value is finite or infinite:

is_finite()
is_infinite()














?>
