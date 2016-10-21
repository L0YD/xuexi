<?php
/**
2016-10-21
学习for循环
*/

//从0到100，每次递增分1
for ($i=0; $i<100; $i = $i + 2) {
	echo_ln($i);
}

function echo_ln($s)
{
	echo $s . PHP_EOL;
}
