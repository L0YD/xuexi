<?php
/**
2016-10-21
显示某个目录的文件
*/

$path = "C:/xampp/htdocs";
show_files($path);


// 函数的作用是显示某个目录文件
function show_files($path)
{
	// 生成一个可以遍历目录的对象
	$di = new DirectoryIterator($path);


	foreach ($di as $f) {
		echo $f . PHP_EOL;
	}
}
