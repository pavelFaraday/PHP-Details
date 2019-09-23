


## PHP Classes

*Classes are the blueprints, templates for making many instances of the same kind of objects. Classes is used to model or map a real-world entity to a template of data (properties) and functionality (methods). For example, there is a single Product class, but many Product objects can be instances of this class — book, DVD-disc, Furniture, etc. One of the big differences between functions and classes is that a class contains both data (variables) and functions that form a package called an: 'object.*

## Method and Object

*Also, Class  includes local variables(properties) and local methods(functions). For example, for the Product class, we might have name,price, and size. Then each Product object will have its own values for those properties. You can also define methods in the class that allow you to manipulate the values of object properties and perform operations on objects. As an example, you could define a save method which saves the object information to a database.*
*In OOP, a class is a definition of an object, whereas an object is an instance of an object, meaning that from one class you can create many objects. you define a class once and then make many objects that belong to it. Objects are also known as instance.*

## OOP principles

**A) Encapsulation** 

*Encapsulation is the mechanism of hiding of data implementation by restricting access to public methods. Instance variables are kept private and accessor methods are made public to achieve this. For example, in this Product class we are hiding the barcode and name attributes of Product:*


```class Product extends Main
{
    protected $table = 'products';

    private $barcode;
    private $name;

    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}
```


**B) Abstraction**

*Abstract means a concept or an Idea which is not associated with any particular instance. Using abstract class/Interface we express the intent of the class rather than the actual implementation. In a way, one class should not know the inner details of another in order to use it, just knowing the interfaces should be good enough. In my example, Product class can only access/read in Main class to table propertie:*


```class Product extends Main
{
    protected $table = 'products';

    private $barcode;
    private $name;
}
```


**C) Inheritance**

*Inheritance is an important aspect of the object-oriented programming paradigm which allows you to inherit properties and methods of other classes by extending them. The class which is being inherited is called the parent class, and the class which inherits the other class is called the child class. When you instantiate an object of the child class, it inherits the properties and methods of the parent class as well.*
*For example, when we want to use class A code (properties and methods) in class B, We use "extends" keyword..  B class is abled to use A classes properties and methods*
*In my task example Class Product is child class and extends Class Main and it inherits properties and methods of Class Product*


**D) Polymorphism**

*polymorphism means the ability to have many forms. It describes a pattern in which a class has varying functionality while sharing a common interfaces. Instead of sending in the specific implementations, We would create classes such that they have common interface and a common type. We can write a code that works on the superclass, and it will work with any subclass type as well. The beauty of polymorphism is that the code working with the different classes does not need to know which class it is using since they're all used the same way. you create interchangeable objects that you select based on your needs. That is the basic goal of polymorphism. That allows your code to be more flexible, easier to maintain and more dynamic.*

*When we start to extend classes, and add functionality to them which wasn't there previously, and even override existing methods (functions), this is called polymorphism. The basis of polymorphism is Inheritance and overridden methods*

[Show more on Youtobe..](https://www.youtube.com/watch?v=4WK-Q0d2o48  "Polymorphism")
  


## constructor/destructor

**Constructor**

*A constructor is a special class method which is called automatically when you instantiate an object. It is used to initialize object properties when the object is being created. Classes which have a constructor method call this method on each newly-created object, so it is suitable for any initialization that the object may need before it is used. To add a constructor to a class, you just simply add a special method called __construct()*

**Destructor**

*The destructor method will be called as soon as there are no other references to a particular object, or in any order during the shutdown sequence. It is used for destroying the object.To add a destructor to a class, you just simply add a special method called __destruct().*



## Class constants

*Constants can be of any of the basic data types.It is possible to define constant values on a per-class basis remaining the same and unchangeable. Constants differ from normal variables in that you don't use the $ symbol to declare or use them. The default visibility of class constants is public.The value must be a constant expression, not (for example) a variable, a property, or a function call. In other words, constant value is the one which does not change during the execution of a program.*


```class MyClass
{
    const CONSTANT = 'constant value';

    function showConstant() {
        echo  self::CONSTANT . "\n";
    }
}
```





## Static properties and methods

*Static Function in PHP. In certain cases, it is very handy to access methods and properties in terms of a class rather than an object. Any method declared as static is accessible without the creation of an object. Static functions are associated with the class, not an instance of the class. In other words, STATIC properties/methods - They don't need make an object for calling outside a class. It receives all information from its arguments. I use static properties For utility methods that don't require any object state. in this file there wasn't no need to access instance variables and used static methods, because they eliminates the need for the caller to instantiate the object just to call the method.*
*When we use the Normal properties/methods we use $ this keyword to assign them. but with static properties/methods we use self:: keyword!*


```class DB
{
    private static $pdo;

    public static function connection()
    {
        if (!isset(self::$pdo)) {
            try {
                self::$pdo = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME, DB_USER, DB_PASS);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        return self::$pdo;
    }
```


## Inheritance

*Inheritance is an important aspect of the object-oriented programming paradigm which allows you to inherit properties and methods of other classes by extending them. The class which is being inherited is called the parent class, and the class which inherits the other class is called the child class. When you instantiate an object of the child class, it inherits the properties and methods of the parent class as well.*
*For example, when we want to use class A code (properties and methods) in class B, We use "extends" keyword..  B class is abled to use A classes properties and methods*
*In my task example Class Product is child class and extends Class Main and it inherits properties and methods of Class Product*



## Preventing from Extending & Overriding ('final' - keyword)

*PHP 5 introduces the final keyword, which prevents child classes from overriding a method by prefixing the definition with final. If the class itself is being defined final then it cannot be extended. Note: Properties and constants cannot be declared final, only classes and methods may be declared as final !!! A class declared as final cannot be extended while a method declared as final cannot be overridden in its subclasses. A method or a class is declared to be final using the final keyword. Though a final class cannot be extended, it can extend other classes.*
[Show more on Youtobe..](https://www.youtube.com/watch?v=zFS_ityK-z4&list=PLTydW-y9HsbTlai7BFSPN5gH7GlJGwdB5&index=9  "final keyword")

```final class BaseClass {
   public function test() {
       echo "BaseClass::test() called\n";
   }

   // Here it doesn't matter if you specify the function as final or not
   final public function moreTesting() {
       echo "BaseClass::moreTesting() called\n";
   }
}

class ChildClass extends BaseClass {
}
// Results in Fatal error: Class ChildClass may not inherit from final class (BaseClass)
```


## Access Modifiers (visibility): PUBLIC | PROTECTED | PRIVATE

**PUBLIC** - *public propertie/method u can use everywhere: inside/outside a class or in extended class too.*
**PROTECTED** - *proteceted propertie/method u can use only inside a class or in extended classes.*
**PRIVATE** - *provate propertie/method u can use only inside a class.*

**public** *– class or its members defined with this access modifier will be publicly accessible from anywhere, even from outside the scope of the class.*
**private** *– class members with this keyword will be accessed within the class itself. It protects members from outside class access with the reference of the class instance.*
**protected** *– same as private, except by allowing subclasses to access protected superclass members.*
**abstract** *– This keyword can be used only for PHP classes and its functions. For containing abstract functions, a PHP class should be an abstract class.*
**final** *– It prevents subclasses to override super class members defined with final keyword.*



## Interface

*An Interface allows the users to create programs, specifying the public methods that a class must implement, without involving the complexities and details of how the particular methods are implemented. It is generally referred to as the next level of abstraction.*

*An interface allows unrelated classes to implement the same set of methods, regardless of their positions in the class inheritance hierarchy. An interface enables you to model multiple inheritance because a class can implement more than one interface whereas it can extend only one class.*

*Interfaces in OOP. An interface is a programming structure/syntax that allows you to enforce certain properties on an object (class). For example, say we have a car class and a scooter class and a truck class. Each of these three classes should have a start_engine() action.*

*An interface consists of methods that have no implementations, which means the interface methods are abstract methods.*
*All the methods in interfaces must have public visibility scope.*
*Interfaces are different from classes as the class can inherit from one class only whereas the class can implement one or more interfaces.*

*interface is a similar lika abstract.*

*abstract class - in abstract class we can make both, complete and incomplete methods.*

*interface class - in interface class we can make only incomplete methods, then you will implement (complete) the class to access an incomplete method.*

*In interface class, Methods have abstract keyword by default !! Therefor methods are incomplete (abstract means incomplete)*

*if you make complete method (with body - curly bracket {}) in Interface, there will be ERROR !!*

*You can make multiple interfaces and implement them all in one single class !!*



## Abstract class

*Abstract classes are classes that contain one or more abstract methods. An abstract method is a method that is declared, but contains no implementation.*

*Abstract classes - means incompelete class, you can't make an object of this class.*

*There will be Error, if you make object of abstract class !!!*

*You need to make another class, which Extends abstract class*

*Abstract can be Method/function too - it we can't complete with curly bracket {};*

*In abstract class we can make both, complete and incomplete methods..*

*You need to make another class, which Extends this Incomplete abstract Method*


*An abstract class is a class that is only partially implemented by the programmer. It may contain at least one abstract method, which is a method without any actual code in it — just the name and the parameters, and that it has been marked as “abstract”.*

*An abstract method is simply a function definition that serves to tell the programmer that the method must be implemented in a child class.*

*Abstract Classes are a good fit if you want to provide implementation details to your child/subclass but don't want to allow an instance of your class to be directly instantiated (which allows you to partially define a class).*

*I had used abstract classes, because I should remove duplicate code. In my project, I needed 'public function insert();' two times, so I prevent dublication.*

```abstract class Main
{
    protected $table;

    abstract public function insert();
}
```


## Setters & Getters

*'Getters' and 'Setters' are object methods that allow you to control access to a certain class variables / properties. A 'getter' allows to you to retrieve or 'get' a given property. A “setter” allows you to “set” the value of a given property.*

*Because the visibility of these properties is set to private, I was unable to modify or set their values. Instead, I had used one of the setter functions that we created: setName or setBarcode.*

*When we have private properties. Because they are private properties, you will be unable to access them. To provide access to private properties, you have create getters. These functions simply return the values of private properties. That is all they do.*


```class Product extends Main
{
    protected $table = 'products';

    private $barcode;
    private $name;
  
    // SET Parametres
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}
```


## Autoloading classes

*Many developers writing object-oriented applications create one PHP source file per class definition. One of the biggest annoyances is having to write a long list of needed includes at the beginning of each script (one for each class).In PHP 5, this is no longer necessary. The spl_autoload_register() function registers any number of autoloaders, enabling for classes and interfaces to be automatically loaded if they are currently not defined. By registering autoloaders, PHP is given a last chance to load the class or interface before it fails with an error.*

*spl_autoload_register() function loads classes automatically without having to require them. its common and good practice to define each class in separate file. Before you can use a class that's define in a separate file, you have to require it. If you have a lot of separate files (i.e. classes), you can end up with a lot of requires in each script, which is messy and difficult to maintain. and every time you add a new class you have got to require a new file. So instead of doig this, we can configure PHP to load class files automatically. We can do this by spl_autoload_register() function. when you create new object, if the class exists it creates the object, if not it raises an error. We can add autoload_register() function before the error occurs, giving us a chance to load the class file into our script.*

*My example attempts to load all files from folder 'classes'. '$class_name' is a placeholder for all class file names. ".php" is extension for PHP files in 'classes' folder, which should load by with spl_autoload_register() function.*


```// PHP AutoLoader
spl_autoload_register(function($class_name) {   
    include "classes/".$class_name.".php";   
});
```


13) PHP Method Chaining
14) Type Hinting in PHP
15) PHP Object Iteration
16) Using Traits in PHP
17) __CLASS__ and get_class
18) Late Static Binding in PHP
19) Object Cloning in PHP
20) Magic Method __clone
21) PHP ArrayObject
22) Standard PHP Library - SPL
23) PHP Object Serialization



## PHP Namespaces

*Namespaces are common ideas in many programming languages and php has had them since PHP 5.3.*

*Basic idea of using Namespaces is to ensure that two different classes functions or constants with the same name don't cause conflicts.  for example, if you try to define two classes called 'Product', then the second definition will cause a fatal error complaining that you cannot redefine that class. if instead you put that class into namespacen you can refer to both of them differently.*

25) Abstract Factory Design Pattern
26) MySQL-Connect OO Way
27) MySQLi-Select/Update Data OO Way
28) MySQLi-Basic Prepared Statements
29) MySQLi- Prepared Statement with Variables
30) BLOB With Prepared Statements


## PDO (PHP Data Objects)

*PDO is an acronym for PHP Data Objects. PDO is a lean, consistent way to access databases. This means developers can write portable code much easier. PDO is a more like a data access layer which uses a unified API (Application Programming Interface).*

*PDO allows you to learn one PHP API for interacting many supported databases. This allows you to use the same API to interact with MySQL, Postgres and SQLite or many others without having to relearn a brand new set of functions and classes.*

*MySQLi is a replacement for the mysql functions, with object-oriented and procedural versions. It has support for prepared statements. PDO (PHP Data Objects) is a general database abstraction layer with support for MySQL among many other databases.*

*While both PDO and MySQLi are quite fast, MySQLi performs insignificantly faster in benchmarks - ~2.5% for non-prepared statements, and ~6.5% for prepared ones. Still, the native MySQL extension is even faster than both of these, but it is not safe way.*

*PDO has its advantages, such as a clean, simple, portable API, its main disadvantage is that it doesn't allow you to use all of the advanced features that are available in the latest versions of MySQL server. For example, PDO does not allow you to use MySQL's support for Multiple Statements.*

*Both MySQLi and PDO have their advantages: PDO will work on 12 different database systems, whereas MySQLi will only work with MySQL databases. So, if you have to switch your project to use another database, PDO makes the process easy. You only have to change the connection string and a few queries.*

*PDO - PHP Data Objects - is a database access layer providing a uniform method of access to multiple databases. It doesn't account for database-specific syntax, but can allow for the process of switching databases and platforms to be fairly painless, simply by switching the connection string in many instances.*

**Why You Should Use PDO Instead of MySQLi?** *PDO provides a data-access abstraction layer, which means that, regardless of which database you’re using, you use the same functions to issue queries and fetch data. PDO does not provide a database abstraction; it doesn’t rewrite SQL or emulate missing features. You should use a full-blown abstraction layer if you need that facility. From these two paragraphs, hopefully, you can begin to see just why PDO is the future, and why, in time, the MySQLi extension, might go the way of MySQL extension. Ask yourself: Why use a vendor-specific extension, when you can use one which supports multiple vendors? Why invest the time learning all about an extension, when it only supports one vendor; when you can learn an extension which supports up to 12?*


**A) Prepared Statements with PDO ||| First thing we will do is add our DB Connection:**

*I had created a variable to represent a DB handler, make that equal to **new** PDO Object Instance. So I supply the hostname for the DB driver that I wanted, in my case it's MySQL DataBase and host - localhost. Other parametres are: DB Name, DB UserName and DB Password. And because PHP Manual recommends that we use **try and catch**, I did it so.*
    
```try {
    self::$pdo = new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME, DB_USER, DB_PASS);
    } catch (PDOException $e) {
    echo $e->getMessage();
}
```

**A.a) try and catch exception:**  *When a PHP exception is thrown, the PHP runtime looks for a catch statement that can handle that type of exception. It will continue checking the calling methods up the stack trace until a catch statement is found. If one is not found, the exception is handed to the global exception handler that we will also cover in this article.*
**Try:** *The try block contains the code that may potentially throw an exception. All of the code within the try block is executed until an exception is potentially thrown.*
**Catch:** *This block of code will be called only if an exception occurs within the try code block. The code within your catch statement must handle the exception that was thrown.*


B) **SELECT * FROM table**  |  *For the next step I established the SQL Syntax for select Data and I selected All Data from Product Table:*
    
```$sql = "SELECT * FROM $this->table";
```
    

C) **INSERT INTO table**  |  *For adding new Data to my table wrote SQL Insert statement: In VALUES I had put named placeholders.*
    
```$sql = "INSERT INTO $this->table(barcode, name, price, size, height, width, length, weight, image)VALUES(:barcode, :name, :price, :size, :height, :width, :length, :weight, :image)";```
    

D) **prepare($sql)**  |  *And in the next line of each statmenet I had created a variable named $stmt (statement). This is equal to DB handler and using a OOP approach I had run the prepare($sql) function and put SQL syntax as a parameter.*
    
```$stmt = DB::prepare($sql);
```
    

E) **bindParam()** | *After this I binded parameters to the prepared statement, so for the $stmt I had run bindParam(':barcode', $this->barcode) function. The first argument is the named placeholder, and the second patameter is the variable data that's used when is executed the prepared statement.*
    
```$stmt->bindParam(':name', $this->name);
$stmt->bindParam(':price', $this->price);
$stmt->bindParam(':size', $this->size);
$stmt->bindParam(':height', $this->height);
$stmt->bindParam(':width', $this->width);
$stmt->bindParam(':length', $this->length);
$stmt->bindParam(':weight', $this->weight);
$stmt->bindParam(':image', $this->image);
```    

F) **execute()**  |  *And then I executed prepared statement, so when prepared statement execute() is called to run all data is going to be put in place in the prepared statement and i had insert into my Product table:*
    
```return $stmt->execute();
```
    



34) Select Data With PDO-Prepared Statements
35) Update, Delete Data With PDO-Prepared Statements
36) CRUD With PDO + Abstract Factory Pattern
37) Model View Controller (MVC) Design Pattern
