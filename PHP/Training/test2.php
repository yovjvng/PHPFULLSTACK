<?php

//1. 게임 시작시 유저와 딜러는 카드를 2개 받는다.
// 1-1. 이때 유저 또는 딜러의 카드 합이 21이면 결과 출력
//2. 카드 합이 21을 초과하면 패배
// 2-1. 유저 또는 딜러의 카드의 합이 21이 넘으면 결과 바로 출력
//4. 카드의 계산은 아래의 규칙을 따른다.

	$cards = array("A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "K", "Q", "J");
	$shapes = array("♠", "♣", "◆", "♥");
	$deck = array();

	foreach ($cards as $arr_card) 
	{
		foreach ($shapes as $arr_sha) 
		{
			array_push($deck, "$arr_card$arr_sha");
		}
	}
	$cnt = count($cards)*count($shapes) -1;
	shuffle($deck);

	$user = array();
	$dealer = array();
	for ($i = 0; $i < 2; $i++) 
	{ 
		$user[] = ($deck[$cnt]);
		--$cnt;
	}
	for ($i = 0; $i < 2; $i++) 
	{ 
		$dealer[] = ($deck[$cnt]);
		--$cnt;
	}
	// var_dump($user);

	$user_sum = 0;
	$dealer_sum = 0;
	foreach ($user as $val) 
	{
		if (strpos( $val , "A") !== false ) 
		{
			$user_sum += 1;
		}
		else if (strpos( $val , "J") !== false || strpos( $val , "Q") !== false || strpos( $val , "K") !== false)
		{
			$user_sum += 10;
		}
		else 
		{
			$user_sum += intval( substr($val, 0, 1));
		}
	}
	foreach ($dealer as $val) 
	{
		if (strpos( $val , "A") !== false ) 
		{
			$dealer_sum += 1;
		}
		else if (strpos( $val , "J") !== false || strpos( $val , "Q") !== false || strpos( $val , "K") !== false)
		{
			$dealer_sum += 10;
		}
		else 
		{
			$dealer_sum += intval( substr($val, 0, 1));
		}
	}




	// print_r ($user);
	// print_r ($dealer);

	echo "---게임 시작---\n";
	echo "User 카드 : ".$user[0].$user[1]."\n";
	echo "Dealer 카드 : ".$user[0]."\n";


	if ($user_sum === $dealer_sum) 
	{
		echo "무승부";
	}
	else if ($user_sum > $dealer_sum)
	{
		echo "유저승리";
	}
	else if ($user_sum < $dealer_sum)
	{
		echo "딜러승리";
	}


while(true) {
	echo '시작';
	print "\n";
	fscanf(STDIN, "%d\n", $input);        
	if($input === 0) {
		break;
	}
	echo $input;
	print "\n";
}
echo "끝!\n";








// echo $user_sum
// ;
// echo $dealer_sum;


	// $cards = array("A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "K", "Q", "J");
	// $shapes = array("♠", "♣", "◆", "♥");
	// $deck = array();
	// $cnt = count($cards)*count($shapes) -1;

	// foreach ($cards as $arr_card) 
	// {
	// 	foreach ($shapes as $arr_sha) 
	// 	{
	// 		$deck[] = array("card"=>$arr_card, "shape"=>$arr_sha);
	// 	}
	// }

	// $card_shuffle = shuffle($deck);
	// $user = array();
	// $user[] = $deck[$cnt];
	// --$cnt;
	// $user[] = $deck[$cnt];
	// --$cnt;
	// $dealer = array();
	// $dealer[] = $deck[$cnt];
	// --$cnt;
	// $dealer[] = $deck[$cnt];
	// --$cnt;


	// // var_dump(game());
	// print_r ($user);
	// print_r ($dealer);
	// $user_sum = 0;
	// foreach ($user as $val) 
	// {
	// 	switch ($user[0] == "K" || $user[0] == "J" || $user[0] == "Q" )
	// 	{
			 
	// 	}

	// }



?>