<?php
// 定义数组可以用 array() 或 [] 来新建一个数组。
// 它接受任意数量用逗号分隔的键（key） => 值（value）对。
// key 可以是 integer（索引数组）或者 string（关联数组），value 可以是任意类型，如对象、数组。
$a = [
    "b" => "bb",
    "c" => "cc",
];

$b = ["bb", "cc"];

$c = [
    "bb",
    "cc",
    "a" => $a,
    "b" => $b,
];

var_dump($a);
var_dump($a[0]); // 打印数组不存在的 key 的值时，直接返回 NULL
var_dump($b); // 如果没有键名，则数组默认使用从 0 开始的数字键名
var_dump($b['b']);
var_dump($c['a']['b']); // 数组可以多维嵌套，通过键名可以获取特定值

class fuck
{
    function do() {
        echo "fuck you";
    }
}

$f = new fuck;
$f->do();

class A
{}

$a = new A();
$b = (object) $a;
$c = (object) 'A';
$d = (object) null;
$e = (object) ['hello' => 'world'];

var_dump($a);
var_dump($b); // 如果将一个对象转换成对象，它将不会有任何变化。
var_dump($c->scalar); // 如果其它任何类型的值被转换成对象，将会创建一个内置类 stdClass 的实例。
var_dump($d); // 如果该值为 NULL，则新的实例为空
var_dump($e->hello); // array 转换成 object 将使键名成为属性名并具有相对应的值，除了数字键，不迭代就无法被访问。

// 资源 resource 是一种特殊变量，保存了外部资源的一个引用，如打开文件、数据库连接等，资源是通过专门的函数来建立和使用的

// $file = fopen($filename);//打开文件
$db = mysqli_connect(); //数据库连接

// 转换为资源
// 由于资源类型变量保存有为打开文件、数据库连接、图形画布区域等的特殊句柄，
// 因此将其它类型的值转换为资源没有意义。

// 释放资源
// 引用计数系统是 Zend 引擎的一部分，可以自动检测到一个资源不再被引用了（和 Java 一样）。
// 这种情况下此资源使用的所有外部资源都会被垃圾回收系统释放。因此，很少需要手工释放内存。

$foo = "0";
var_dump($foo);

$foo += 2;
var_dump($foo);

$foo = $foo + 1.3;
var_dump($foo);

$foo = 5+"10 Little Piggies";
var_dump($foo);

$foo = 5+"10 Small Pigs";
var_dump($foo);

$foo = "0"; // $foo 是整数
$bar = (boolean) $foo; // 转换成布尔类型
var_dump($bar);
