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

    /**
     * 覆盖父类方法
     */
    public static function sayHello()
    {
        echo parent::sayHello() . ' World' . PHP_EOL;
    }

    public static function actionB()
    {
        self::sayHello();
        echo parent::CONST_A . PHP_EOL;
        echo self::$b;
    }
}

B::actionB();
