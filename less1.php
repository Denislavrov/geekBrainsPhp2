<?php
/*
 * Created by PhpStorm.
 * User: denis
 * Date: 13/03/2019
 * Time: 19:10
 */

class Product {
    public $name;
    public $qty;
    public $price;

    function __construct($name, $qty, $price)
    {
        $this->name = $name;
        $this->qty = $qty;
        $this->price = $price;
    }

    function view() {
        echo "<h1>$this->name</h1><div>$this->price</div>";
    }
}

class Jeans extends Product {
    function view()
    {
        echo "<h1>$this->name</h1><div>$this->price</div>";
    }
}

$product = new Product('t-shirt', '2', '300');
$product->view();

$jeans = new Jeans('jeans', '1', '700');
$jeans->view();



//class A {
//    public function foo() {
//        static $x = 0;
//        echo ++$x;
//    }
//}
//$a1 = new A();
//$a2 = new A();
//$a1->foo();
//$a2->foo();
//$a1->foo();
//$a2->foo();
// выведет 1234, так как присваивание выполняется один раз при первом вызове функции, а дальше число будет увеличиваться
//единицу

//class A {
//    public function foo() {
//        static $x = 0;
//        echo ++$x;
//    }
//}
//class B extends A {
//}
//$a1 = new A();
//$b1 = new B();
//$a1->foo();
//$b1->foo();
//$a1->foo();
//$b1->foo();
//веведет 1122 так как класс В наследуется от А мы создаем экземпляры разных классов то в первый раз в статик х в каждом
//классе присвоется по единице, а дальше он увеличится
