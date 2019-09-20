
1) Class, Method and Object, OOP principles
**PHP Classes**
*Classes are the blueprints, templates for making many instances of the same kind of objects. Classes is used to model or map a real-world entity to a template of data (properties) and functionality (methods). For example, there is a single Product class, but many Product objects can be instances of this class — book, DVD-disc, Furniture, etc. One of the big differences between functions and classes is that a class contains both data (variables) and functions that form a package called an: 'object.*

**Method and Object**
*Also, Class  includes local variables(properties) and local methods(functions). For example, for the Product class, we might have name,price, and size. Then each Product object will have its own values for those properties. You can also define methods in the class that allow you to manipulate the values of object properties and perform operations on objects. As an example, you could define a save method which saves the object information to a database.*
*In OOP, a class is a definition of an object, whereas an object is an instance of an object, meaning that from one class you can create many objects. you define a class once and then make many objects that belong to it. Objects are also known as instance.*

**OOP principles**
A) Encapsulation 
*Encapsulation is the mechanism of hiding of data implementation by restricting access to public methods. Instance variables are kept private and accessor methods are made public to achieve this. For example, in this Product class we are hiding the barcode and name attributes of Product:*

-----------------------------------------
class Product extends Main
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
-----------------------------------------

B) Abstraction
*Abstract means a concept or an Idea which is not associated with any particular instance. Using abstract class/Interface we express the intent of the class rather than the actual implementation. In a way, one class should not know the inner details of another in order to use it, just knowing the interfaces should be good enough. In my example, Product class can only access/read in Main class to table propertie:*

-----------------------------------------
class Product extends Main
{
    protected $table = 'products';

    private $barcode;
    private $name;
}
----------------------------------------- 


C) Inheritance
*Inheritance is an important aspect of the object-oriented programming paradigm which allows you to inherit properties and methods of other classes by extending them. The class which is being inherited is called the parent class, and the class which inherits the other class is called the child class. When you instantiate an object of the child class, it inherits the properties and methods of the parent class as well.*
*For example, when we want to use class A code (properties and methods) in class B, We use "extends" keyword..  B class is abled to use A classes properties and methods*
*In my task example Class Product is child class and extends Class Main and it inherits properties and methods of Class Product*

D) Polymorphism
*polymorphism means the ability to have many forms. It describes a pattern in which a class has varying functionality while sharing a common interfaces. Instead of sending in the specific implementations, We would create classes such that they have common interface and a common type. We can write a code that works on the superclass, and it will work with any subclass type as well. The beauty of polymorphism is that the code working with the different classes does not need to know which class it is using since they're all used the same way. you create interchangeable objects that you select based on your needs. That is the basic goal of polymorphism. That allows your code to be more flexible, easier to maintain and more dynamic.*
მაგალითი: https://www.youtube.com/watch?v=4WK-Q0d2o48  (Interface-ის საუკეთესო მაგალითი)
  
##############################################################################################################################

2) constructor/destructor
**Constructor**
*A constructor is a special class method which is called automatically when you instantiate an object. It is used to initialize object properties when the object is being created. Classes which have a constructor method call this method on each newly-created object, so it is suitable for any initialization that the object may need before it is used. To add a constructor to a class, you just simply add a special method called __construct()*

**Destructor**
*The destructor method will be called as soon as there are no other references to a particular object, or in any order during the shutdown sequence. It is used for destroying the object.To add a destructor to a class, you just simply add a special method called __destruct().*

##############################################################################################################################

3) Class constants
**Constants **
*Constants can be of any of the basic data types.It is possible to define constant values on a per-class basis remaining the same and unchangeable. Constants differ from normal variables in that you don't use the $ symbol to declare or use them. The default visibility of class constants is public.The value must be a constant expression, not (for example) a variable, a property, or a function call. In other words, constant value is the one which does not change during the execution of a program.*

-----------------------------------------
class MyClass
{
    const CONSTANT = 'constant value';

    function showConstant() {
        echo  self::CONSTANT . "\n";
    }
}
-----------------------------------------

##############################################################################################################################


4) static properties and methods
*Static Function in PHP. In certain cases, it is very handy to access methods and properties in terms of a class rather than an object. Any method declared as static is accessible without the creation of an object. Static functions are associated with the class, not an instance of the class. In other words, STATIC properties/methods - They don't need make an object for calling outside a class. It receives all information from its arguments. I use static properties For utility methods that don't require any object state. in this file there wasn't no need to access instance variables and used static methods, because they eliminates the need for the caller to instantiate the object just to call the method.*
*When we use the Normal properties/methods we use $ this keyword to assign them. but with static properties/methods we use self:: keyword!*

----------------------------------------
class DB
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
----------------------------------------

5) inheritance
*Inheritance is an important aspect of the object-oriented programming paradigm which allows you to inherit properties and methods of other classes by extending them. The class which is being inherited is called the parent class, and the class which inherits the other class is called the child class. When you instantiate an object of the child class, it inherits the properties and methods of the parent class as well.*
*For example, when we want to use class A code (properties and methods) in class B, We use "extends" keyword..  B class is abled to use A classes properties and methods*
*In my task example Class Product is child class and extends Class Main and it inherits properties and methods of Class Product*


6) Preventing from Extending & Overriding
    'final' - keyword




    
7) Access Modifiers
8) Polymorphism
9) interface
10) Abstract class
11) Magic Methods
12) autoloading classes
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

24) *PHP Namespaces*
    * Namespaces are common ideas in many programming languages and php has had them since PHP 5.3. 
    * Basic idea of using Namespaces is to ensure that two different classes functions or constants with the same name don't cause conflicts.  for example, if you try to define two classes called 'Product', then the second definition will cause a fatal error complaining that you cannot redefine that class. if instead you put that class into namespacen you can refer to both of them differently.

25) Abstract Factory Design Pattern
26) MySQL-Connect OO Way
27) MySQLi-Select/Update Data OO Way
28) MySQLi-Basic Prepared Statements
29) MySQLi- Prepared Statement with Variables
30) BLOB With Prepared Statements
31) PDO - PHP Data Objects
    * PDO allows you to learn one PHP API for interacting many supported databases. This allows you to use the same API to interact with MySQL, Postgres and SQLite or many others without having to relearn a brand new set of functions and classes.

32) Prepared Statements with PDO
33) bindValue() and bindParam()
34) Select Data With PDO-Prepared Statements
35) Update, Delete Data With PDO-Prepared Statements
36) CRUD With PDO + Abstract Factory Pattern
37) Model View Controller (MVC) Design Pattern
