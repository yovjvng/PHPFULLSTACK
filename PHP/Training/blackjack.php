<?php
//블랙잭 게임
//-카드 숫자를 합쳐 가능한 21에 가깝게 만들면 이기는 게임

//1. 게임 시작시 유저와 딜러는 카드를 2개 받는다.
// 1-1. 이때 유저 또는 딜러의 카드 합이 21이면 결과 출력
//2. 카드 합이 21을 초과하면 패배
// 2-1. 유저 또는 딜러의 카드의 합이 21이 넘으면 결과 바로 출력
//4. 카드의 계산은 아래의 규칙을 따른다.
// 4-1.카드 2~10는 그 숫자대로 점수
// 4-2. K·Q·J은 10점
// 4-3. A는 1점 또는 11점 둘 중의 하나로 계산
//5. 카드의 합이 같으면 다음의 규칙에 따름
// 5-1. 카드수가 적은 쪽이 승리
// 5-2. 카드수가 같을경우 스페이드>크로버>다이아>하트 순
//6. 유저가 카드를 받을 때 딜러는 아래의 규칙을 따른다.
// 6-1. 딜러는 카드의 합이 17보다 낮을 경우 카드를 더 받음
// 6-2. 17 이상일 경우는 받지 않는다.
//7. 1입력 : 카드 더받기, 2입력 : 카드비교, 0입력 : 게임종료

// while(true) {
// 	echo '시작';
// 	print "\n";
// 	fscanf(STDIN, "%d\n", $input);        
// 	if($input === 0) {
// 		break;
// 	}
// 	echo $input;
// 	print "\n";
// }
// echo "끝!\n";


class BlackJack
{
	private $cards = array("A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "K", "Q", "J");
	private $shapes = array("♠", "♣", "◆", "♥");
	private $deck = array();
	private $user = array();
	private $dealer = array();

	public function __construct()
	{
		// $this->score();
			foreach ($this->cards as $arr_card) 
		{
			foreach ($this->shapes as $arr_sha) 
			{
				array_push($this->deck, "$arr_card$arr_sha");
			}
		}
		$cnt = count($this->cards)*count($this->shapes) -1;
		shuffle($this->deck);

		for ($i = 0; $i < 2; $i++) 
		{ 
			$this->user[] = ($this->deck[$cnt]);
			--$cnt;
		}
		for ($i = 0; $i < 2; $i++) 
		{ 
			$this->dealer[] = ($this->deck[$cnt]);
			--$cnt;
		}
		return $this->deck;
	}
	public function score($param_score)
	{
		$sum = 0;
		// $dealer_sum = 0;
		foreach ($param_score as $val) 
		{
			if (strpos( $val , "A") !== false ) 
			{
				$sum += 1;
			}
			else if (strpos( $val , "J") !== false || strpos( $val , "Q") !== false || strpos( $val , "K") !== false)
			{
				$sum += 10;
			}
			else 
			{
				$sum += intval( substr($val, 0, 1));
			}
			return $sum;
		}
		// foreach ($dealer as $val) 
		// {
		// 	if (strpos( $val , "A") !== false ) 
		// 	{
		// 		$dealer_sum += 1;
		// 	}
		// 	else if (strpos( $val , "J") !== false || strpos( $val , "Q") !== false || strpos( $val , "K") !== false)
		// 	{
		// 		$dealer_sum += 10;
		// 	}
		// 	else 
		// 	{
		// 		$dealer_sum += intval( substr($val, 0, 1));
		// 	}
		// }
		return($sum);
		// return($dealer_sum);

	}

	// public function set_fnc_game()
	// {
	// 	if($sum > 21)
	// 	{

	// 	}
	// }

	public function debug()
	{
		var_dump( $this->user );
		var_dump( $this->dealer );
	}

}

// $obj_bj->debug();
// $obj_bj->score();

while(true) {
	echo '시작';
	print "\n";
	fscanf(STDIN, "%d\n", $input);        
	if($input === 0) {
		$obj_bj = new BlackJack();

		echo "User 카드 : ".$this->user[0].$this->user[1]."\n";
		echo "Dealer 카드 : ".$this->dealer[0]."\n";
		break;
	}
	echo $input;
	print "\n";
}
echo "끝!\n";


// class BlackJack
// {
// 	private $arr_num;
// 	private $arr_shape;
// 	private $arr_deck;

// 	// construct
// 	public function __construct()
// 	{
// 		$this->arr_num = array( "A", "2", "3", "4", "5", "6", "7", "8", "9", "10", "J", "Q", "K");
// 		$this->arr_shape = array("♠", "♣", "◆", "♥");
// 		$this->set_deck();
// 	}

// 	// set
// 	private function set_deck()
// 	{
// 		// 카드 52장 덱에 셋팅
// 		foreach( $this->arr_shape as $shape )
// 		{
// 			foreach( $this->arr_num as $num )
// 			{
// 				$this->arr_deck[] = $num.$shape;
// 			}
// 		}
// 		// 덱 셔플
// 		shuffle( $this->arr_deck );
// 	}
// 	// TODO : debug
// 	public function debug()
// 	{
// 		var_dump( $this->arr_deck );
// 	}
// }
// $obj_bj = new BlackJack();
// $obj_bj->debug();










?>