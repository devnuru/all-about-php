<!-- 
PHp is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.

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
hello_global();



?>