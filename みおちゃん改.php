<?php

class みおちゃん改
{
	/**
	 * @param int $x
	 * @param int $y
	 * @param int $count 計算回数
	 * @return int|string
	 */
	public function plus(int $x, int $y, int $count): int|string
	{
		// 計算回数が3の倍数の時にみそスープ飲みたくなる
		if ($count % 3 === 0) {
			return 'みそスープ';
		}
		return $x + $y;
	}
}


// インスタンスを使いまわして5回計算
$みおちゃん改 = new みおちゃん改();
for ($i = 1; $i < 6; $i++) {
	echo $みおちゃん改->plus(1, 1, $i);
	echo PHP_EOL;
}
