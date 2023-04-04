<?php

// 1. while + if가 조합된거

// $i = 0;
// while ( $i <= 4 ) 
// {
//     if ( $i === 1 )
//     {
//         echo "1입니다.";
//     }
//     else if ( $i === 4 ) 
//     {
//         echo "4입니다.";
//     }
//     $i++;
// }

// foreach + if 조합
// $arr_ass = array( "a" => 1, "b" => 2, "c" => 3 );
// foreach ( $arr_ass as $key => $val ) 
// {
//     if( $key === "c" || $val === 2)
//     {
//         echo "if";
//     }
// }

// 이중 루프
// for ( $i = 2; $i <= 9; $i++) 
// { 
//     echo "$i 단\n";
//     for ($p = 1; $p <= 9; $p++) 
//     { 
//         echo "$i * $p", "=" ,$i*$p, "\n";
//     }
//     echo "\n";
// }


// 1~ 100 숫자 중에 짝수의 합을 구해주세요.
// $result = 0;
// for ($i = 1; $i <= 100 ; $i++) 
// { 
//     if ( $i % 2 === 0 ) 
//     {
//         $result += $i;
//     }
// }
// echo $result."\n";


// $result = 0;
// for ($i = 1; $i * 2 <= 100; $i++) 
// { 
//         $result += $i * 2;
// }
// echo $result."\n";


// $result = 0;
// $i = 0;
// while ($i <= 100) 
// {
//     if ( $i % 2 === 0 ) 
//     {
//         $result += $i;
//     }
//     $i++;
// }
// echo $result;



// $arr_test =
//     array(
//          1
//         , 2
//         , array(
//                 "info_a" => 3
//                 ,"info_b" => 4
//                 ,"info_arr" =>
//                         array(
//                             "f_1" => 5
//                             ,"f_2" => 7
//                         )
//                 )
//         );

// // echo $arr_test["info"]["info_a"]."\n".$arr_test["info"]["info_arr"]["f_2"];
// echo $arr_test[2]["info_arr"]["f_1"];



// 함수명   : fun_sum
// 기능     : 파라미터를 더한 값을 리턴
// 파라미터 :INT $param_a
//          INT $param_b
// 리턴     :INT $sum;



// function fun_sum($param_a, $param_b)
// {  
//     $sum = $param_a + $param_b;
//     return $sum;
// }

// echo fun_sum(1, 2);

//가변 파라미터 1
// function fun_sum2( ...$param_numbers )
// {  
//     $sum = $param_numbers[0] + $param_numbers[1] + $param_numbers[3];
//     return $sum;
// }

// echo fun_sum2(1, 2, 3);

//가변 파라미터 2
// function fun_sum3( ...$param_numbers )
// {  
//     return array_sum($param_numbers);
// }

// echo fun_sum3(1, 2, 3);


// function fnc_gloval()
// {
//     global $global_i;
//     $global_i = 0;
// }
// $global_i = 5;
// fnc_gloval();

// echo $global_i;






// function fnc_static()
// {
//     static $static_i = 0;
//     echo $static_i;
//     $static_i++;
// }

// fnc_static();
// fnc_static();
// fnc_static();
// fnc_static();



// function fnc_reference( &$param_str )
// {
//     $param_str = "fnc_reference";
// }
// $str = "aaa";
// fnc_reference( $str );
// echo $str;


// 별짓기 함수로

// $num = 10;
// for ($i = 0; $i <= $num; $i++) 
// { 
//     for ($p = 0; $p <= $i ; $p++) 
//     { 
//         echo "*";
//     }
//     echo "\n";
// }


function star($pram_int)
{
    for ($i = 1; $i <= $pram_int; $i++) 
    { 
        echo "*";
    }
    echo "\n";
}
star(1);
star(2);
star(3);
star(4);
star();

?>