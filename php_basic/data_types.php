<?php
/*
PHP 支持 8 种原始数据类型。

四种标量类型：

boolean（布尔型）
integer（整型）
float（浮点型，也称作 double)
string（字符串）
两种复合类型：

array（数组）
object（对象）
最后是两种特殊类型：

resource（资源）
NULL（无类型）
 */
$a = true;
$b = "foo";
$c = 11;

if (is_string($b)) {
    echo "$b 是字符串" . PHP_EOL;
}

if (is_int($c)) {
    echo "$c 是整型" . PHP_EOL;
}

var_dump($a);
var_dump($b);
echo gettype($c) . PHP_EOL;
var_dump($c); // 检测表达式的值和类型
echo gettype($c); // 检测变量类型

// Boolean type
$a = '';
$b = 0;
$c = false;
$d = "0";

var_dump($a == $b);
var_dump($b == $d);
var_dump($a == $c);
var_dump($b == $c);

// 整数溢出
// 如果给定的一个数超出了 integer 的范围，将会被解释为 float。
// 同样如果执行的运算结果超出了 integer 范围，也会返回 float。
$a = 123445566;
$b = 9223372036854775807;
$c = 9223372036854775808;
$d = 50000000000000 * 1000000;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);

// String type
$a = 'Hello';
echo '$a \n World'; //$a \n World 单引号内变量和特殊字符不会被解析

$a = 'Hello';
echo "\n $a World"; //双引号内变量和特殊字符会被解析
