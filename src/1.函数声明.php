<?php
/**
2016-10-21
学习函数的定义
*/

zhufan(2);

//定义函数 zhufan ,参数为一个$ren
// 函数的功能是打印煮饭的步骤
function zhufan($ren)
{
	echo_ln("洗米");
	echo_ln("插电煮饭");
	echo_ln("OK, 我煮好了" . $ren . "个人的饭");
}

function echo_ln($s)
{
	echo $s . PHP_EOL;
}
