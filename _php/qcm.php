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
 * 
 * ** __construct() is a method that is automatically called when an object is initialized.
 *    __destruct() is a method that is automatically called when an object is destroyed.
 */

/**** 22
 * How we can get the number of elements in an array?
 * 
 * ** By using the fuction `count()` => count($array);
 */

/**** 23
 * What are the 3 scope levels available in PHP and how would you define them?
 * 
 * ** 1. Local: declared within a function has a LOCAL SCOPE and can only be accessed within that function.
 *    2. Global: declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function.
 *    3. Static: declared within a function has a STATIC SCOPE and can only be accessed within that function.
 */

/**** 24
 * What are getters and setters and why are they important?
 * 
 * ** Getters and setters are methods used to get and set the values of variables.
 *    They are important because they allow you to control the values of variables with a layer of security.
 */

/**** 25
 * What does MVC stand for and what does each component do?
 * 
 * ** MVC stands for Model View Controller.
 *    Model: is the data layer of the application.
 *    View: is the presentation layer of the application.
 *    Controller: is the logic layer of the application.
 */

/**** 26
 * What are SQL Injections, how do you prevent them and what are the best practices?
 * 
 * ** SQL Injections are malicious code that is used to manipulate a database.
 *    To prevent them, you should use prepared statements and parameterized queries.
 *    Best practices are to use PDO and to never trust user input.
 */

/**** 27
 * What are PSRs? Choose 1 and briefly describe it.
 * 
 * ** PSRs are PHP Standards Recommendations.
 *    PSR-1: Basic Coding Standard
 *    PSR-2: Coding Style Guide
 *    PSR-3: Logger Interface
 *    PSR-4: Autoloader
 *    PSR-5: PHPDoc
 *    PSR-6: Caching Interface
 *    PSR-7: HTTP Message Interface
 *    PSR-11: Container Interface
 *    PSR-13: Hypermedia Links
 *    PSR-14: Event Dispatcher
 *    PSR-15: HTTP Handlers
 *    PSR-16: Simple Cache
 *    PSR-17: HTTP Factories
 *    PSR-18: HTTP Client
 */

/**** 28
 * Describe how inheritance works with PHP.
 * 
 * ** Inheritance is a mechanism that allows you to create a new class from an existing class.
 */

/**** 29
 * Who do we know as the father of PHP?
 * 
 * ** Rasmus Lerdorf
 */

/**** 30
 * What did the acronym PHP originally stand for?
 * 
 * ** Personal Home Page
 */

/**** 31
 * What is the PHP scripting engine called?
 * 
 * ** Zend Engine
 */

/**** 32
 * How does PHP interact with Javascript?
 */

/**** 33
 * What do we mean by ‘escaping to PHP’?
 * 
 * ** Escaping to PHP means to switch from HTML to PHP.
 */

/**** 34
 * How many types of an array are there in PHP?
 * 
 * ** There are 3 types of arrays in PHP:
 *    1. Indexed arrays: arrays with numeric index.
 *    2. Associative arrays: arrays with named keys.
 *    3. Multidimensional arrays: arrays containing one or more arrays.
 */

/**** 35
 * What is the use of the function' imagetypes()'?
 * 
 * ** The function 'imagetypes()' returns the image format supported by the current PHP installation.
 */

/**** 36
 * What is needed to be able to use the image function?
 * 
 * ** GD library is needed to be able to use the image function.
 */

/**** 37
 * What is the main difference between require() and require_once()?
 * 
 * ** require() includes and evaluates a specific file while 
 *    require_once() does that only if it has not been included before.
 */

/**** 38
 * What is the primary difference between include_once() and include()?
 * 
 * ** include() includes and evaluates a specific file while
 *    include_once() does that only if it has not been included before.
 */

/**** 39
 * How do we set an infinite execution time for PHP script?
 * 
 * ** By using the function `set_time_limit()` => set_time_limit(0);
 *    By using the function `ini_set()` => ini_set('max_execution_time', 0);
 *    By updating the value of `max_execution_time` in php.ini file to 0.
 */

/**** 40
 * How to export data into an Excel file?
 * 
 * ** By using the function `header()` => header('Content-Type: application/vnd.ms-excel');
 *    By using the function `header()` => header('Content-Disposition: attachment; filename="filename.xls"');
 */

/**** 41
 * How can you pass a variable by reference?
 * 
 * ** By using the ampersand (&) => function foo(&$var) { ... }
 */

/**** 42
 * What does $GLOBALS mean?
 * 
 * ** $GLOBALS is a PHP super global variable which is used to access global variables from anywhere in the PHP script.
 */

/**** 43
 * What is the use of ini_set() function?
 * 
 * ** The ini_set() function is used to set the value of a configuration option.
 */

/**** 44
 * What are the differences between die and exit?
 * 
 * ** die() and exit() are equivalent.
 */

/**** 45
 * What are the difference between const and define?
 * 
 * ** const is a language construct while define is a function.
 *    const can be used in classes while define can't.
 */

/**** 46
 * What is PDO in PHP ?
 * 
 * ** PDO stands for PHP Data Objects.
 *    PDO is a lean, consistent way to access databases.
 *    PDO is a database access layer providing a uniform method of access to multiple databases.
 */

/**** 47
 * What is stdClass in PHP ?
 * 
 * ** stdClass is a generic empty class that is used to store data.
 */

/**** 48
 * What are the differences between var_dump and print_r
 * 
 * ** var_dump() displays structured information about one or more expressions that includes its type and value.
 *    print_r() displays information about a variable in a way that's readable by humans.
 */

/**** 49
 * What's the diefferences between isset() and array_key_exists() ?
 * 
 * ** isset() checks if a variable has a value including (false, 0, or empty string) while
 *    array_key_exists() checks if the key exists in the array.
 */

/**** 50
 * How to check if an array is associative
 * 
 * ** By using the function `array_keys()` => array_keys($array) !== range(0, count($array) - 1);
 */

/**** 51
 * What is the differences between error and exception in PHP?
 * 
 * ** An error is a problem that occurs unexpectedly that prevents the script from running correctly.
 *    An exception is a problem that occurs unexpectedly that allows the script to run correctly.
 */

/**** 52
 * Explain differences between exec(), eval(), system() and passthru() functions.
 * 
 * ** exec() executes an external program and returns the last line of the output.
 *    eval() evaluates a string as PHP code.
 *    system() executes an external program and displays the output.
 *    passthru() executes an external program and displays raw output.
 */

/**** 53
 * What is Singleton class in PHP?
 * 
 * ** A Singleton class is a class that can only be instantiated once.
 */

/**** 54
 * What are the differences between array_map, array_walk and array_filter?
 * 
 * ** array_map() returns an array containing all the elements of the original array after applying the callback function to each one.
 *    array_walk() applies a user function to every member of an array.
 *    array_filter() filters elements of an array using a callback function.
 */

/**** 55
 * What is the differences between array_merge and array_combine?
 * 
 * ** array_merge() merges one or more arrays into one array.
 *    array_combine() creates an array by using one array for keys and another for its values.
 */

/**** 56
 * What is the differences between PDO's query() and execute()
 * 
 * ** query() executes an SQL statement in a single function call while
 *    execute() prepares an SQL statement and executes it.
 */

/**** 57
 * What is null of coalescing operator?
 * 
 * ** The null coalescing operator (??) 
 *    is used to check if a value exists and return it if it does, otherwise return a default value.
 */

/**** 58
 * Compare MySQLi and PDO
 * 
 * ** MySQLi is an extension of PHP's mysqli class.
 *    PDO is a PHP extension that defines a lightweight, consistent interface for accessing databases in PHP.
 */

/**** 59
 * Does PHP have threading?
 * 
 * ** No, PHP does not have threading.
 */

/**** 60
 * How to measure execution time of php scripts
 * 
 * ** By using the function `microtime()` => microtime(true);
 */

/**** 61
 * Is PHP single or multiple threads?
 * 
 * ** PHP is single threaded.
 */

/**** 62
 * What are late static bindings in PHP
 * 
 * ** Late static bindings is a mechanism in PHP that allows static methods to be overridden in child classes.
 */

/**** 63
 * What is the best method to merge two 
 */

/**** 64
 * What is the use of Spaceship Operator?
 * 
 * ** The spaceship operator (<=>) is used to compare two expressions.
 *    It returns 0 if both expressions are equal.
 *    It returns 1 if the left is greater.
 *    It returns -1 if the right is greater.
 */

/**** 65
 * Explain what is a closure in PHP and why does it use the “use” identifier?
 * 
 * ** A closure is an anonymous function that can be stored in a variable.
 *    The “use” identifier is used to pass variables from the parent scope to the closure.
 */

/**** 66
 * How could we implement method overloading in PHP?
 * 
 * ** Method overloading can be implemented in PHP by using the magic method __call().
 */

/**** 67
 * Provide some ways to mimic multiple constructors in PHP
 * 
 * ** Multiple constructors can be mimicked in PHP by using static methods.
 *    Multiple constructors can be mimicked in PHP by using the magic method __callStatic().
 *    Multiple constructors can be mimicked in PHP by using the magic method __invoke().
 *    Multiple constructors can be mimicked in PHP by using the magic method __set_state().
 *    Multiple constructors can be mimicked in PHP by using the magic method __clone().
 */

/**** 68
 * What is the meaning of PEAR in PHP?
 */

/**** 69
 * What are the types of variables present in PHP?
 * 
 * ** There are 8 types of variables in PHP:
 *    1. Integers: whole numbers.
 *    2. Doubles: floating point numbers.
 *    3. Booleans: true or false.
 *    4. NULL: no value.
 *    5. Strings: sequence of characters.
 *    6. Arrays: collection of values.
 *    7. Objects: instances of classes.
 *    8. Resources: special variables that hold references to resources external to PHP.
 */

/**** 70
 * What is the use of the constant() function in PHP?
 * 
 * ** The constant() function is used to return the value of a constant.
 */

/**** 71
 * What are the various constants predefined in PHP?
 * 
 * ** There are 8 types of constants predefined in PHP:
 *    1. __LINE__: current line number of the file.
 *    2. __FILE__: full path and filename of the file.
 *    3. __DIR__: full path of the directory of the file.
 *    4. __FUNCTION__: name of the function.
 *    5. __CLASS__: name of the class.
 *    6. __TRAIT__: name of the trait.
 *    7. __METHOD__: name of the method.
 *    8. __NAMESPACE__: name of the current namespace.
 */

/**** 72
 * What is the meaning of break and continue statements in PHP?
 * 
 * ** The break statement is used to exit a loop.
 *    The continue statement is used to skip the current iteration of a loop.
 */

/**** 73
 * What is the use of session_start() and session_destroy() functions?
 * 
 * ** The session_start() function is used to start a session.
 *    The session_destroy() function is used to destroy a session.
 */

/**** 74
 * What is the use of lambda functions in PHP?
 * 
 * ** Lambda functions are anonymous functions that can be stored in a variable.
 */

/**** 75
 * Differentiate between compile-time exception and runtime exception in PHP.
 * 
 * ** Compile-time exceptions are syntax errors that occur during the compilation of a script.
 *    Runtime exceptions are errors that occur during the execution of a script.
 */

/**** 76
 * What is htaccess? Why do we use it and where?
 * 
 * ** htaccess is a configuration file for use on web servers running the Apache Web Server software.
 */

/**** 77
 * What are magic methods?
 * 
 * ** Magic methods are special methods that are automatically called when certain actions occur.
 *    __construct() is called when a new object is created.
 *    __destruct() is called when an object is destroyed.
 *    __call() is called when a method is called that does not exist.
 *    __callStatic() is called when a static method is called that does not exist.
 *    __get() is called when a property is called that does not exist.
 *    __set() is called when a property is set that does not exist.
 *    __isset() is called when a property is checked if it exists.
 *    __unset() is called when a property is unset.    
 *    __sleep() is called when a script is serialized.
 *    __wakeup() is called when a script is unserialized.
 *    __toString() is called when an object is converted to a string.
 *    __invoke() is called when an object is used as a function.
 *    __set_state() is called when var_export() is called on an object.
 *    __clone() is called when an object is cloned.
 *    __debugInfo() is called when var_dump() is called on an object.
 *    __autoload() is called when a class is called that does not exist.
 */

/**** 78
 * Explain soundex() and metaphone().
 * 
 * ** soundex() is used to calculate the soundex key of a string.
 *    metaphone() is used to calculate the metaphone key of a string.
 */

/**** 79
 * What is the difference between abstract classes and interfaces in PHP?
 * 
 * ** Abstract classes can have properties while interfaces can't.
 */

/**** 80
 * 
 */

