<?php
class A
{
    private $hi = 'Hi'.PHP_EOL;
    protected $hello = 'Hello'.PHP_EOL;
    public $bye = 'Bye'.PHP_EOL;

    private function sayHi()
    {
        echo $this->hi;
    }

    protected function sayHello()
    {
        echo $this->hello;
    }

    public function sayBye()
    {
        echo $this->bye;
    }

}

class B extends A
{
    public function talk()
    {
        parent::sayHello();
    }
}

$a = new A();
$a->sayHi();//报错，无法调用


$b = new B();
$b->sayHello();//报错，无法调用
$b->talk();
$b->sayBye();
