<?php
/**** 1
 * What are the differences between `echo` and `print` in PHP?
 */

/**** 2
 * What will this code output and why?
 * 
 * >> $x = true and false;
 * >> var_dump($x);
 */

/**** 3
 * What will be the output of the code below and why?
 * 
 * >> $x = 5;
 * >> echo $x;
 * >> echo "<br />";
 * >> echo $x+++$x++;
 * >> echo "<br />";
 * >> echo $x;
 * >> echo "<br />";
 * >> echo $x---$x--;
 * >> echo "<br />";
 * >> echo $x;
 */

/**** 4
 * What will be the values of $a and $b after the code below is executed? Explain your answer.
 * 
 * >> $a = '1';
 * >> $b = &$a;
 * >> $b = "2$b";
 */

/**** 5
 * What will be the output of each of the statements below and why?
 * 
 * >> var_dump(0123 == 123);
 * >> var_dump('0123' == 123);
 * >> var_dump('0123' === 123);
 */

/**** 6
 * What will $x be equal to after the statement $x = 3 + "15%" + "$25"?
 */

/**** 7
 * After the code below is executed, what will be the value of $text and what will strlen($text) return?
 * 
 * >> $text = 'John ';
 * >> $text[10] = 'Doe';
 */

/**** 8
 * What does the follow code echo?
 * 
 * $a = "PHP";
 * $a = $a + 1;
 * echo $a;
 */

/**** 9
 * What are Traits?
 */

/**** 10
 * What is PEAR in php?
 */

/**** 11
 * What is use of the header() function in PHP?
 */

/**** 12
 * Consider the following code:
 * 
 * >> $x = NULL;
 * >> if ('0xFF' == 255) {
 * >>   $x = (int)'0xFF';
 * >> }
 * 
 * What will be the value of $x after this code executes?
 */

/**** 13
 * What is the difference between include_once() and require_once()
 */

/**** 14
 * What is the difference between a session and cookies?
 */

/**** 15
 * How can we get the IP address of the client?
 */

/**** 16
 * What’s the difference between unset() and unlink()?
 */

/**** 17
 * What are the main error types in PHP and how do they differ?
 */

/**** 18
 * What is the difference between GET and POST?
 */

/**** 19
 * How can you enable error reporting in PHP?
 */

/**** 20
 * Can you extend a Final defined class?
 */

/**** 21
 * What are the __construct() and __destruct() methods in a PHP class?
 */

/**** 22
 * How we can get the number of elements in an array?
 */

/**** 23
 * What are the 3 scope levels available in PHP and how would you define them?
 */

/**** 24
 * What are getters and setters and why are they important?
 */

/**** 25
 * What does MVC stand for and what does each component do?
 */

/**** 26
 * What are SQL Injections, how do you prevent them and what are the best practices?
 */

/**** 27
 * What are PSRs? Choose 1 and briefly describe it.
 */

/**** 28
 * Describe how inheritance works with PHP.
 */

/**** 29
 * Who do we know as the father of PHP?
 */

/**** 30
 * What did the acronym PHP originally stand for?
 */

/**** 31
 * What is the PHP scripting engine called?
 */

/**** 32
 * How does PHP interact with Javascript?
 */

/**** 33
 * What do we mean by ‘escaping to PHP’?
 */

/**** 34
 * How many types of an array are there in PHP?
 */

/**** 35
 * What is the use of the function' imagetypes()'?
 */

/**** 36
 * What is needed to be able to use the image function?
 */

/**** 37
 * What is the main difference between require() and require_once()?
 */

/**** 38
 * What is the primary difference between include_once() and include()?
 */

/**** 39
 * How do we set an infinite execution time for PHP script?
 */

/**** 40
 * How to export data into an Excel file?
 */

/**** 41
 * How can you pass a variable by reference?
 */

/**** 42
 * What does $GLOBALS mean?
 */

/**** 43
 * What is the use of ini_set() function?
 */

/**** 44
 * What are the differences between die and exit?
 */

/**** 45
 * What are the difference between const and define?
 */

/**** 46
 * What is PDO in PHP ?
 */

/**** 47
 * What is stdClass in PHP ?
 */

/**** 48
 * What are the differences between var_dump and print_r
 */

/**** 49
 * What's the diefferences between isset() and array_key_exists() ?
 */

/**** 50
 * How to check if an array is associative
 */

/**** 51
 * What is the differences between error and exception in PHP?
 */

/**** 52
 * Explain differences between exec(), eval(), system() and passthru() functions.
 */

/**** 53
 * What is Singleton class in PHP?
 */

/**** 54
 * What are the differences between array_map, array_walk and array_filter?
 */

/**** 55
 * What is the differences between array_merge and array_combine?
 */

/**** 56
 * What is the differences between PDO's query() and execute()
 */

/**** 57
 * What is null of coalescing operator?
 */

/**** 58
 * Compare MySQLi and PDO
 */

/**** 59
 * Does PHP have threading?
 */

/**** 60
 * How to measure execution time of php scripts
 */

/**** 61
 * Is PHP single or multiple threads?
 */

/**** 62
 * What are late static bindings in PHP
 */

/**** 63
 * What is the best method to merge two 
 */

/**** 64
 * What is the use of Spaceship Operator?
 */

/**** 65
 * Explain what is a closure in PHP and why does it use the “use” identifier?
 */

/**** 66
 * How could we implement method overloading in PHP?
 */

/**** 67
 * Provide some ways to mimic multiple constructors in PHP
 */

/**** 68
 * What is the meaning of PEAR in PHP?
 */

/**** 69
 * What are the types of variables present in PHP?
 */

/**** 70
 * What is the use of the constant() function in PHP?
 */

/**** 71
 * What are the various constants predefined in PHP?
 */

/**** 72
 * What is the meaning of break and continue statements in PHP?
 */

/**** 73
 * What is the use of session_start() and session_destroy() functions?
 */

/**** 74
 * What is the use of lambda functions in PHP?
 */

/**** 75
 * Differentiate between compile-time exception and runtime exception in PHP.
 */

/**** 76
 * What is htaccess? Why do we use it and where?
 */

/**** 77
 * What are magic methods?
 */

/**** 78
 * Explain soundex() and metaphone().
 */

/**** 79
 * What is the difference between abstract classes and interfaces in PHP?
 */

/**** 80
 * 
 */
