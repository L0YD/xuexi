<?php
/**
2016-10-21
��ʾĳ��Ŀ¼���ļ�
*/

$path = "C:/xampp/htdocs";
show_files($path);


// ��������������ʾĳ��Ŀ¼�ļ�
function show_files($path)
{
	// ����һ�����Ա���Ŀ¼�Ķ���
	$di = new DirectoryIterator($path);


	foreach ($di as $f) {
		echo $f . PHP_EOL;
	}
}
