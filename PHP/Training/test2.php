<?php


//1. 게임 시작시 유저와 딜러는 카드를 2개 받는다.
// 1-1. 이때 유저 또는 딜러의 카드 합이 21이면 결과 출력
$card = array("A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "K", "Q", "J");
// $card = array();
for ($i=1; $i <= 2; $i++) 
{ 
	$card[$i] = rand();
	for ($p=0; $p < $i; $p++) 
	{ 
		if ($card[$i] == $card[$p]) 
		{
			$i--;
		}
	}
}
print_r($card);


?>