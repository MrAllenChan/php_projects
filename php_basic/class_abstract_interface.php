<?php
abstract class Say
{
    abstract protected function sayHello($word);
    abstract public function sayHi();
}

class Speak extends Say
{
    // 方法的访问控制必须和父类中一样（或者更为宽松）
    public function sayHello($word)
    {
        echo "Hello $word";
    }

    public function sayHi()
    {
        echo "Hi".PHP_EOL;
    }
}

$s = new Speak();
$s->sayHi();
$s->sayHello("World");

// 使用接口（interface），你可以指定某个类必须实现哪些方法，但不需要定义这些方法的具体内容。
// 我们可以通过 interface 来定义一个接口，就像定义一个标准的类一样，
// 但其中定义所有的方法都是空的。 接口中定义的所有方法都必须是public，这是接口的特性。
interface A
{
    public function actionA();
}

interface B extends A
{
    public function actionB();
}

// 实现多个接口时，接口中的方法不能有重名。
// 接口也可以继承，通过使用 extends 操作符。
class C implements A
{
    public function actionA()
    {
        //do something
    }
    public function actionB()
    {
        //do something
    }
}
