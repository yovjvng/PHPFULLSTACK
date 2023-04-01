<?php

// 콘솔에 출력
// print "프린트\n";

// echo "에코\n";

// print_r(array(1, 2, 3));

// var_dump(array(3, 4, 5));

// 변수 : 정보들을 저장하는 장소
// $int_i = 1; // 변수명은 영어, 숫자, '_'만 사용할 것
// echo $int_i;
// $sum = $int_i + 5;

// 스네이크 기법 : 영어 소문자, 단어사이의 연결은 '_'로 작성하는 방법(예 : $arr_food)
// 카멜 기법 : 영어만 사용, 단어 사이의 첫글자로 대문자로 작성(예 : $arrFood)

//  숫자 10을 $i_ten, 숫자 5를 $i_five, 숫자 8을 $i_eight, 숫자 3을 $i_three 에 저장하고,
// 아래 연상을 해주세요.
// 10 - 5 + 8 하고, 3을 나눈 나머지를 구해주세요.

$i_ten = 10;
$i_five = 5;
$i_eight = 8;
$i_three = 3;

// $result = ($i_ten - $i_five + $i_eight) % $i_three;

// echo $result;

// 증가 연산자, 감소 연산자
$i_increase = 0;
$i_decrease = 0;

++$i_increase; // 전위 증가 연산자
$i_increase++; // 후위 증가 연산자

--$i_decrease; // 전위 감소 연산자
$i_decrease--; // 후위 감소 연산자

// echo $i_increase;
$i_increase = 0;
// echo ++$i_increase;
// echo $i_increase++;

// echo $i_increase;

// 산술 대입 연산자(축약형)
$i = 0;

$i = $i + 2;
$i += 2;
$i -= 1;
$i *= 3;
$i /= 4;
$i = 6;
$i %= 6;
// 문자 합치기
$str = "aa";
$str = $str."aa";
$str .= "bb";
// echo $str;


// 비교 연산자
// $a < $b : a가 b보다 작다, b가 a보다 크다.
// $a > $b : a가 b보다 크다, b가 a보다 작다.
// $a <= $b : a가 b보다 작거나 같다, b가 a보다 크거나 같다.
// $a >= $b : a가 b보다 크거나 같다, b가 a보다 작거나 같다.
// $a != $b : a와 b의 값이 다르다.
// $a !== $b : a와 b의 값과 데이터 형식이 다르다.
// $a == $b : a와 b의 값이 같다.
// $a === $b : a와 b의 값과 데이터 형식이 같다.

$a = 1;
$b = "1";
// var_dump( $a != $b);
// var_dump( $a !== $b);

// 데이터를 비교할 때는 데이터 형식까지 비교해야 버그가 줄어듭니다.
// var_dump( false === 0 );
// var_dump( true === 1 );

// 논리 연산자
// && (and 연산자) : 모든 조건이 만족해야할 때 사용
$i = 1;
// var_dump( $i === 1 && $i <= 1 && $i > 0 );
// || (or 연산자) : 여러 조건 중 하나만 만족할 때 사용
$i = 1;
// var_dump( $i === 1 || $i < 1 && $i > 0 );
// | (not 연산자) : 결과를 반전 시킬 때 사용
$i = 1;
// var_dump( !($i ===2) );

// 삼항연산자 : 조건 ? 참일 경우 : 거짓일 경우
$i = 1;
$str = "";
$i < 0 ? $str = "000" : $str = "111";
// echo $str;

// 삼항 연산자를 이용해서 짝수일때는 짝수를 "짝수"
// 홀수 일때는 "홀수"를 출력하는 프로글매을 만들어주세요.

$a = 4;
$str = "";

// 1.
// $a = ($a % 2 == )0 ? $str = "짝수" : $str = "홀수";
// echo $str;

// 2.
// $i % 2 === 0 ? $str = "짝수" : $str = "홀수";
// echo $str;

// -----------------------------------------------------------
// 보강 2
// -----------------------------------------------------------

// if문
// $i = 1; 
// if( $i % 2 === 0 )
// {
//     echo "짝수";
// }
// else
// {
//     echo "홀수";
// }


// $i = "1";
// if( $i === "1" )
// {
//     echo "문자열 1입니다.";
// }
// else if ($i === 1) 
// {
//     echo "숫자 1입니다.";
// }
// else 
// {
//     echo "1이 아닙니다.";
// }

// 과목의 종류는 국어, 영어, 수학, 과학
// 평균점수가 60점 이상이고, 각 과목별 점수가 40점 이상 일 때 "합격"을 출력
// 그 외는 "불합격"을 출력하는 프로그램을 만들어 주세요.

// $a = 80;
// $b = 70;
// $c = 40;
// $d = 50;

// $temp = ($a + $b + $c + $d) / 4;

// if ( $temp >= 60  || ($a >= 40 && $b >= 40 && $c >= 40 && $d >= 40) ) 
// {
//     echo "합격";
// }
// else
// {
//     echo "불합격";
// }

// switch문
// $str_loc에 지역명을 저장하고,
// 서울은 "서울사람", 대구는 "대구사람", 부산은 "부산사람", 
// 그외에는 "타지역사람"을 출력하는 프로그램을 switch문으로 작성해주세요. 
// $str_loc = "서울";
// switch($str_loc)
// {
//     case "서울":
//         echo "서울사람";
//         break;
//     case "대구":
//         echo "대구사람";
//         break;
//     case "부산":
//         echo "부산사람";
//         break;        

//     default:
//         echo "타지역사람";
//         break;
// }

// 반복문 : while, do_while, for, foreach
// $i = 1;
// while : 조건을 체크하고 연산을 실행하는 루프
// while($i === 1)
// {
//     echo $i;
//     break;
// }

// $i = 1;
// do-while : 연산을 실행하고 조건을 체크하는 루프
// do
// {
//     echo $i;
// } while( $i !== 1 );

// for문 : 시작과 끝을 우리가 지정해주는 루프(루프의 횟수를 지정가능)
// for($i = 0; $i < 3; $i++)
// {
//     echo $i, "\n";
// }

// 1~ 50 까지, 반복문을 이용해서 더하는 프로그램을 만들어주세요.
// $result = $i ;

// $result = 0;
// for ($i=1; $i < 50; $i++) 
// { 
//     $result = $result + $i;
// }
// echo $result + $i;

// $a = 1;
// $result_sum = 0;
// while ($a <= 50) 
// {
//     $result_sum += $a;
//     ++$a;
// }
// echo $result_sum;


// -----------------------------------------------------------
// 보강 2
// -----------------------------------------------------------
// 배열
// $num = array(1, 2, 3);
// echo $num[1];


// 연상배열
// 키값 : std_no, std_name, std_age, std_gender
// $arr_i = array(
//     "std_no" => 14
//     ,"std_name" => "백유정"
//     ,"std_age" => 30
//     ,"std_gender" => "F"
// );
// echo $arr_i["std_name"];

// 다차원 배열
// $arr_i = array(
//     "std_no" => 14
//     ,"std_name" => "백유정"
//     ,"std_age" => 30
//     ,"std_gender" => "F"
//     ,"std_secret_info" => array(
//                                 "std_citz_no" => 0517
//                                 ,"std_addr" => "대구 수성구 신매로"
//                                 )
// );

// echo $arr_i["std_secret_info"]["std_addr"]."\n";
// echo $arr_i["std_age"];

// foreach문 : 배열을 루프해서 연산을 하고 싶을 때
$arr_acc = array(
    "std_no" => 14
    ,"std_name" => "백유정"
    ,"std_age" => 10
    ,"std_gender" => "F"
);
// foreach ($arr_acc as $key => $val) 
// {
//     echo "$key : $val\n";
// }

// foreach 루프를 돌려서 나이만 출력되게 프로그램을 만들어 주세요.

foreach ($arr_acc as $key => $val) 
{
    if ($key === "std_age") 
    {
        $arr_acc["$key"] += 10;
    }
}
// var_dump($arr_acc);
// print_r($arr_acc);


// 함수 : 사용하는 이유는 재사용성 증가, 가독성 증가

//-----------------------------------------------
// 함수명   : clean_class_room
// 기능     : 이름과 구역을 받아 청소 지정 문자열을 반환
// 파라미터 : $pram_name string
//            $pram_loc string
// 리턴    : $result_str string or 없음
//-----------------------------------------------

// function clean_class_room($pram_name, $pram_loc)
// {
//     $result_str = $pram_name."씨, ".$pram_loc."을/를 청소해주세요.\n";
//     return $result_str;
//     // echo $result_str;
// }
// // $result = clean_class_room("봉정","책상");
// // echo $result;
// clean_class_room("동호","책상");
// clean_class_room("수지","창문");
// clean_class_room("미현","창문");
// clean_class_room("성엽","바닥");
// clean_class_room("진영","바닥");



//-----------------------------------------------
// 함수명   : my_sum_all
// 기능     : 1부터 지정 숫자까지의 합을 구해서 리턴
// 파라미터 : $pram_int int
// 리턴    : $result_int int
//-----------------------------------------------

function my_sum_all($pram_int)
{
    $result_int = 0;
    for ($i = 1; $i <= $pram_int; $i++) 
    { 
        $result_int += $i;
    }
    return $result_int;
}

echo my_sum_all(10);

?>