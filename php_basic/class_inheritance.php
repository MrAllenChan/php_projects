<?php
class A
{
    public function sayHi()
    {
        echo "Hi".PHP_EOL;
    }
    final public function sayBye()
    {
        echo "Bye".PHP_EOL;
    }
}

class B extends A
{
    public function sayHi()
    {
        // 使用 parent:: 可以调用父类方法或属性
        parent::sayHi();
        echo "Hello".PHP_EOL;
        parent::sayBye();
    }
    // final方法不能被覆盖，报错，练习的时候注意删除该方法
    // public function sayBye()
    // {
    //     echo "See you";
    // }
}

$b = new B();
$b->sayHi();