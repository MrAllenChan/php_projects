<?php
class test
{
}

$a = new test();
$b = $a;
$c = &$a; // 和a是一个引用地址
$d = clone $a;

$a = null;

var_dump($a, $b, $c, $d);

// 伪变量 $this 可以在当一个方法在对象内部调用时使用。
// $this 是一个到调用对象（通常是方法所属于的对象，但也可以是另一个对象，
// 如果该方法是从第二个对象内静态调用的话）的引用。
class A
{
    function actionA()
    {
        if (isset($this)) {
            echo '$this is defined (';
            echo get_class($this);
            echo ")\n";
        } else {
            echo '$this is not defined.' . PHP_EOL;
        }
    }
}

class B
{
    public function actionB()
    {
        A::actionA();
    }
}

$a = new A();
$a->actionA();
A::actionA(); // $this 只能在对象中使用，不能在静态方法中调用。
$b = new B();
$b->actionB();
B::actionB(); // 但是如果在另一个对象（类 B）中调用静态方法，则 $this 指向该类（ B ）。
