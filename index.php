

//Firt why we Should Learn OOP of PHP ?
there are a bunch of reasons first You have to learn basic php functions like (if conditions and loops ..etc).
then we have to implement them into classes and objects ( this is oop) to facilite working with eachother and with MVC like laravel framework,it also helps to write a clean code and testing it by testing techniques.
_____________________________________________________________________________________________________________________________________________________________________________________________________________________________________

//what is the difference between Object And class ?
A class is a Template for Objects That defines object behaviours.whereas define object properties.
for ex: 

class Car{
color="red";
Price= 2000;
}

//this is the template for objects
$p = new car;                 //any variable has the word (new) then the class name is called an object.
echo $p->color;               //this is how to access color of the car.


// how to write a function into the class ?
class car{
  function buyCar(){      //give the name of the function
  echo "hello we will get you a car tonight."
  }
}
$p = new car();   //this is how we create an object with the class properties.
$p->buycar();
___________________________________________________________________________________________________________________________________________________________

//inheritance:
the majority of inheritance is to create a class that inherits from the parent class and inherit from the parent class itself.
for ex:

  class father{
    function fatherMoney(){
      echo "2000 dollar is Your balance Now";
    }
  }
  class son extends father{                            //by writing extends and the parent class the child class inherits from the parent class
    function sonMoney(){
      echo "1000 dollar is Your balance Now";
    }
  }
  $fa = new father();
  $so= new son();
   $fa->fatherMoney();
  $so->sonMoney();
  $so->fatherMoney();                   //in this case the child class inherits from the parent class can access the function which is in parent class even if its private.
_________________________________________________________________________________________________________________________________________________________________________________

//variables inside the class (public ,Private,Protected)
public can be called outside the class and everywhere.
private can be called only inside the class
protected can be called inside the class and inherited classes.
ex:
class info{
  private $name="sarah";
  public $name2="Atef";
  protected $name3 ="Ahmed";
  echo $name;          // can be called only inside the class it will print (sarah)
  echo $name2; // can be called everywhere so it will print (Atef)
  echo $name3; // can be called inside the class and other inherited classes so it will print (Ahmed)
}
$p = new info();
$p->name; // will return error cause we are outside the class and this is private.
$p->name2; // will return (Atef) cause this is a public var.
$p->name3; // will return error cause this is outside the class and not inside inherited class
________________________________________________________________________________________________________________________________________________________________________

//(this) method to access anything inside the class
class info{
  public $learn = "learn srsr";
  function le(){
    echo "hello from learn function";
  }
}
$x = new info();
echo $x->learn   //without the dollar sign in learn and with variables we use object $x->learn
echo $this->le //with the dollar sign in and with functions we use $this.


___________________________________________________________________________________________________________________________________________________________
//Construct function (automatically been excuted without calling the function)
ex:
class info{
  function __construct(){
    echo "hello info function";
  }
}
$p = new info();  //only create object there is no need to call the function directly .
_________________________________________________________________________________________________________________________________________________________________________________

//Passing Parameters:
class info{
  function __construct($name,$age){
    echo $name."and your age is " . $age;
}}
$x = new info("sarah",25);  //Passing Parameters for the function inside the prackets;


//what about passing Parameters in non Construct function? 
ex:
class info{
  function student($name,$age){
    echo $name."and your age is " . $age;
}}
$x = new info();
$x ->student("sarah",25); 
___________________________________________________________________________________________________________________________________________________________

//constants in class

class emp{
  const name ="sarah";
  public name2 ="Atef";
}
$p = new emp();
$p->name2      //this way to call variable not constants;
echo emp::name     // this way is to call constants in class.
if i tried to call constants by $p->name it will return error.
___________________________________________________________________________________________________________________________________________________________

//static 
class emp{
  public const Age=20;
  public static Age2 = 30;

}
echo emp::Age  //must be without dollar sign to print constant 
echo emp::$Age2 //must have dollar sign to print static variable.

 // so what is the difference between static and constant ?
 static can be changed inside and outside the class
 constant value cannot be changed once it assigned  for ex:
  class emp{
  public const Age=20;
  public static Age2 = 30;

  //to call inside the class 
  echo self::$Age2;
}
emp::Age=33  //will return error cannot be changed
emp::$Age2=55 //will changed the new static value is 55;
______________________________________________________________________________________________________________________________________________________