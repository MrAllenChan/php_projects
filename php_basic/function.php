<?php
// &符号，通过引用传递参数
function passRef(&$string)
{
    $string .= 'and something extra.';
}
$str = 'This is a string, ';
passRef($str);
echo $str; // outputs 'This is a string, and something extra.'

// 返回一个数组以得到多个返回值
function small_numbers()
{
    return array(0, 1, 2);
}
list($zero, $one, $two) = small_numbers();
echo ("\n" . $zero . $one . $two . "\n");

// PHP 7 增加了对返回类型声明的支持。
// 类似于参数类型声明，返回类型声明指明了函数返回值的类型。
// 可用的类型与参数声明中可用的类型相同。
function arraysSum(array...$arrays): array
{
    return array_map(
        function (array $array): int 
        {
            return array_sum($array);
        }, $arrays);
}

var_dump(arraysSum([1, 2, 3], [4, 5, 6], [7, 8, 9]));

// PHP 支持可变函数的概念。这意味着如果一个变量名后有圆括号，PHP 将寻找与变量的值同名的函数
// 并且尝试执行它。可变函数可以用来实现包括回调函数，函数表在内的一些用途。
class Test
{
    public static $actionB = "property B";

    public function actionA()
    {
        echo "method A \n";
    }
    public static function actionB()
    {
        echo "method B \n";
    }
}

function sayHi() {
    echo "Hi".PHP_EOL;
}

function sayHello($word = '') {
    echo "Hello $word \n";
}

// 可以用可变函数的语法来调用一个对象方法和静态方法。
// 静态方法调用优先级高于属性调用

$func = 'sayHi';
$func();

$func = 'sayHello';
$func('World');

$func = 'actionA';
(new Test())->$func();

echo Test::$actionB;
$actionB = 'actionB';
Test::$actionB();

// 匿名函数-anonymous functions，也叫closures-闭包函数
// 临时创建一个没有指定名称的函数
// 最经常用作回调函数(callback) 参数的值
$greet = function($name)
{
    printf("Hello %s\r\n", $name);
};
$greet('PHP');

// 从父作用域继承变量
// 匿名函数可以从父作用域中继承变量。任何此类变量都应该用 use 语言结构传递进去
$msg = 'hello';

$a = function () {
    var_dump($msg);
};
$a();

// 使用use从父作用域继承变量
$b = function () use ($msg) {
    var_dump($msg);
};
$b();

$msg = 'hi';
$b(); // 匿名函数是在定义的时候继承父作用域变量，而不是在调用的时候继承

$c = function () use (&$msg) {
    var_dump($msg);
};
$c();

$d = function ($arg) use ($msg) {
    var_dump($arg . ' ' . $msg);
};
$d("hello");
