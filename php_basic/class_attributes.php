<?php
class A
{
    // 构造函数
    public function __construct()
    {
        echo 'A init' . PHP_EOL;
    }

    const ENV = 'env'; // 类常量
    const HELLO = 'HelloWorld';

    private $hello = "Hello"; // 定义的类成员则只能被其所在类访问

    protected $b = <<<EOT
    This is property b
    EOT;//可以被其所在类的子类和父类访问

    public static $c = 'This is a' . ' static property' . PHP_EOL;

    public function talk()
    {
        echo $this->hello . PHP_EOL; // 在类的成员方法里面，可以通过 $this-> 加变量名来访问类的属性和方法
        echo $this->b . PHP_EOL;
        echo self::$c; // 要访问类的静态属性或者在静态方法要使用 self:: 加变量名
        // 注意 self:: 这种方式后的变量名需要加 $ 符号，而 $this-> 后的变量名不需要加
    }

    // 该方法不能被外部调用
    private function sayHelloPrivate()
    {
        echo $this->hello;
    }

    // 该方法能被子类或父类访问
    protected function sayHelloProtected()
    {
        echo $this->hello;
    }

    public function __destruct()
    {
        echo "Finish \n";
    }
}

// 如果子类中定义了构造函数则不会隐式调用其父类的构造函数。
// 要执行父类的构造函数，需要在子类的构造函数中调用parent::__construct()。
class B extends A
{
    public function __construct()
    {
        parent::__construct();
        echo "B init" . PHP_EOL;
    }

    public function talk()
    {
        parent::sayHelloProtected();
    }
}

$a = new A();
$a->talk();
// $a->sayHelloPrivate(); // 报错，不能在外部调用private方法
$b = new B();
$b->talk();
