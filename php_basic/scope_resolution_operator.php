<?php

// 范围解析操作符，可以简单地说是一对冒号，可以用于访问静态成员、方法和常量，
// 还可以用于覆盖类中的成员和方法。
// 当在类的外部访问这些静态成员、方法和常量时，必须使用类的名字。
class A
{
    const CONST_A = 'A constant value';

    public static function sayHello()
    {
        echo 'Hello';
    }
}

class B extends A
{
    public static $b = 'static var b';
    public static $test = [1, 2];

    /**
     * 覆盖父类方法
     */
    public static function sayHello()
    {
        echo parent::sayHello() . ' World' . PHP_EOL;
    }

    public static function actionB()
    {
        self::sayHello(); // 静态属性和方法可以通过 self 关键字调用
        echo parent::CONST_A . PHP_EOL;
        echo self::$b; // 静态属性不可以由对象通过 -> 操作符来访问。
        // $this->test; //$this can not be used in static methods.
    }

    public function testHi()
    {
        var_dump(self::$test);
    }
}

// 静态方法不需要通过对象即可调用，所以伪变量 $this 在静态方法中不可用
B::actionB();
(new B())->testHi();
