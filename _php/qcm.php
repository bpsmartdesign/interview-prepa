<?php
/**** 1
 * What are the differences between `echo` and `print` in PHP?
 * 
 * ** 'echo' can take multiple params while 'print' can take only one param.
 * ** 'echo' is faster than 'print'.
 * ** 'echo' does not return any value while 'print' returns 1 so it can be used in expressions.
 * ** 'echo' is an instant language construct while 'print' is a function;
 *    so echo can be used without parentheses while print requires parentheses.
 */

/**** 2
 * What will this code output and why?
 * 
 * >> $x = true and false;
 * >> var_dump($x);
 * 
 * ** this can be converted to ($x = true) and false; so $x will be true.
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
 * 
 * ** $a will be '21' and $b will be '21' because $b is a reference to $a.
 */

/**** 5
 * What will be the output of each of the statements below and why?
 * 
 * >> var_dump(0123 == 123);
 * >> var_dump('0123' == 123);
 * >> var_dump('0123' === 123);
 * 
 * ** the first one will be true because 0123 is an octal number and 123 is a decimal number.
 * ** the second one will be true because '0123' will be converted to 123 due to loose comparison (==).
 * ** the third one will be false because '0123' is a string and 123 is an integer.
 */

/**** 6
 * What will $x be equal to after the statement $x = 3 + "15%" + "$25"?
 * 
 * ** $x will be 18 because '15%' will be converted to 15 and '$25' will be converted to 0.
 */

/**** 7
 * After the code below is executed, what will be the value of $text and what will strlen($text) return?
 * 
 * >> $text = 'John ';
 * >> $text[10] = 'Doe';
 * 
 * ** $text will be 'John Doe' and strlen($text) will return 11.
 */

/**** 8
 * What does the follow code echo?
 * 
 * $a = "PHP";
 * $a = $a + 1;
 * echo $a;
 * 
 * ** it will echo 1 because "PHP" is a string and it will be converted to 0.
 */

/**** 9
 * What are Traits in PHP?
 * 
 * ** Traits are a mechanism for code that allows you to reuse code (functions) in classes
 *    without taking care of inheritance.
 */

/**** 10
 * What is PEAR in php?
 * 
 * ** PEAR (Php Extension and Application Repository) is a package manager for PHP just like composer.
 */

/**** 11
 * What is use of the header() function in PHP?
 * 
 * ** The header() function is used to send a raw HTTP header to a client.
 *    It must be called before sending the actual output, otherwise it will not work.
 *    It is used to redirect a page to another location.
 *    It is used to create HTTP response status.
 *    It is used to set cookies.
 *    It is used to protect the webpage from cache.
 * 
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
 * 
 * ** $x will be 255 because '0xFF' will be converted to 255.
 */

/**** 13
 * What is the difference between include_once() and require_once()
 * 
 * ** include_once() check if the file has already been included before. 
 *      If it has, it will not be included again.
 *      if it has not been included before, it will be included.
 *      It will return an alert without interrupts the script in case of failure.
 *    require_once() works the same way as include_once() 
 *      but it will return a fatal error in case of failure.
 */

/**** 14
 * What is the difference between a session and cookies?
 * 
 * ** A cookie is stored in browser user while session is stored in server.
 */

/**** 15
 * How can we get the IP address of the client?
 * 
 * ** $_SERVER['REMOTE_ADDR']
 */

/**** 16
 * What’s the difference between unset() and unlink()?
 * 
 * ** unset() is used to destroy a variable while unlink() is used to delete a file.
 */

/**** 17
 * What are the main error types in PHP and how do they differ?
 * 
 * ** There are 4 main error types in PHP:
 *    1. Notices: These are trivial, non-critical errors that PHP encounters while executing a script.
 *    2. Warnings: These are more serious errors that PHP encounters while executing a script.
 *    3. Fatal: These are critical errors that halt the execution of a script.
 *    4. Parse: These parse errors occur when PHP encounters something that it cannot parse.
 */

/**** 18
 * What is the difference between GET and POST?
 * 
 * ** GET is used to request data from a specified resource while 
 *    POST is used to send data to a server to create/update a resource.
 */

/**** 19
 * How can you enable error reporting in PHP?
 * 
 * ** error_reporting(E_ALL);
 */

/**** 20
 * Can you extend a Final defined class?
 * 
 * ** No, you can't.
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

