<?php

/**
 * 计算两个非负整数p 和q 的最大公约数：若
 * q 是0，则最大公约数为p。否则，将p 除以
 * q 得到余数r，p 和q 的最大公约数即为q 和
 * r 的最大公约数。
 */
function gcd(int $p, int $q)
{
	if ($q == 0) return $p;
	$r = $p % $q;
	return array($q, $r);
}

$result = gcd(3, 4);

var_dump($result);