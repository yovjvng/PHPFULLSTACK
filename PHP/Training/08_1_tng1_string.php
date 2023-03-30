<?php


// "I am always Hello." "Hello"를 "Happy"로 바꾸어 출력하는
// 프로그램을 구현해 주세요.


// 1.
// define("TEMP", "I am always %s");
// printf(TEMP, "Happy");
// echo "\n";

//2. php 기본 함수
// $str_replace = "I am always Hello.";
// echo str_replace ("Hello", "Happy", $str_replace);

//3.
// $str_empl = explode(" ", $str_replace);
// $str_empl[3] = "Happy";
// print_r($str_empl);

//4.
// $str_exp = explode("Hello", $str_replace);
// $str_exp2 = implode("Happy", $str_exp);
// echo $str_exp2;


// var_dump($str_exp);


// 함수명 : my_str_replace
// 리턴값 : String $result_str
// $str_replace = "I am always Hello.";
// $result_str = explode(" ", $str_replace);
// function my_str_replace($result_str)
// {
//     for ($i=0; $i < count($result_str); $i++) 
//     { 
//         if ($result_str[$i] == "Hello.") 
//         {
//             $result_str[$i] = "Happy.";
//         }
//     }
//     return $result_str;
// }
// print_r (my_str_replace($result_str));





// $str = "I am always Hello.";
// function my_str_replace($str)
// {
//     $str_expl = explode("Hello", $str);
//     $result_str = implode("Happy", $str_expl);
//     return $result_str;
// }

// echo my_str_replace($str);




// 재사용성 개선
$str = "I am always Hello.";
function my_str_replace($pram_str, $param_separator, $param_ch)
{
    $arr_expl = explode($param_separator, $pram_str);

    return implode($param_ch, $arr_expl);
}

echo my_str_replace($str, "Hello", "Happy");




?>