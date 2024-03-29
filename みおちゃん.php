<?php

class みおちゃん
{
	private int $count = 0;

	/**
	 * @param int $x
	 * @param int $y
	 * @return int|string
	 */
	public function plus(int $x, int $y): int|string
	{
		// 計算回数
		$this->count++;

 		// 計算回数が3の倍数の時にみそスープ飲みたくなる
		if($this->count % 3 === 0){
			return 'みそスープ';
		}
		return $x + $y;
	}
}

// インスタンスを使いまわして5回計算
$みおちゃん = new みおちゃん();
for($i = 0; $i < 5; $i++){
	echo $みおちゃん->plus(1, 1);
	echo PHP_EOL;
}

// 毎回インスタンスを生成して5回計算
for($i = 0; $i < 5; $i++){
	echo (new みおちゃん())->plus(1, 1);
	echo PHP_EOL;
}
