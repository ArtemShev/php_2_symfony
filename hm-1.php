<?php
// 1-4
class Product
{
    protected $title;
    protected $price;
    protected $count;
    public function __construct($title,$price,$count)
    {
        $this->title=$title;
        $this->price=$price;
        $this->count=$count;
    }

    public function __destruct()
    {
        echo 'object destruct';
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getCount()
    {
        return $this->count;
    }
}

class itemProduct extends Product
{
    protected $description;

    public function setDescription($description){
        $this->description=$description;
    }

    public function getDescription()
    {
        return $this->description;
    }

}

//5
// так как переменная статичная, то она будет увеличиваться на 1 при каждом вызове функции
// class A {
//     public function foo() {
//         static $x = 0;
//         echo ++$x;
//     }
// }
// $a1 = new A();
// $a2 = new A();
// $a1->foo();
// $a2->foo();
// $a1->foo();
// $a2->foo();


//6
// $x увеличивается отдельно в классе A и классе B
// class A {
//     public function foo() {
//         static $x = 0;
//         echo ++$x;
//     }
// }
// class B extends A {
// }
// $a1 = new A();
// $b1 = new B();
// $a1->foo();
// $b1->foo();
// $a1->foo();
// $a1->foo();
// $b1->foo();


//7
//мы ничего не передаем в классы, поэтому можно вызвать без скобок
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A;
$b1 = new B;
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();