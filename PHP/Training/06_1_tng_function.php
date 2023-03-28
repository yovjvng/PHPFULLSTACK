<?php

// 두 매개변수의 차를 구하는 함수를 구현해 주세요.

// function fnc_sub($int_a, $int_b)
// {
//     $sub = $int_a - $int_b;

//     return $sub;
// }

// $result_sub = fnc_sub(10, 5);



// 두 매개변수를 나눈 함수를 구현해 주세요.
// function fnc_div($int_a, $int_b)
// {
//     $div = $int_a / $int_b;

//     return $div;
// }

// $result_div = fnc_div(10, 5);



// 두 매개 변수를 곱하는 함수를 구현해 주세요.

// function fnc_mul($int_a, $int_b)
// {
//     $mul = $int_a * $int_b;

//     return $mul;
// }

// $result_mul = fnc_mul(10, 5);


// 각각의 결과를 출력해 주세요.

// echo $result_sub."\n";
// echo $result_div."\n";
// echo $result_mul."\n";


// 빼기, 곱하기, 나누기를 가변 파라미터 함수로 구현해 주세요.
// 빼기
function fnc_args_sub()
{
    $args =  func_get_args();
    $sub = 0;

    foreach ($args as $val) {
        if ($val === $args[0]) 
        {
            $sub = $val;
        }
        else
        {
            $sub -= $val;
        }
    }
    return $sub;
}
echo fnc_args_sub(10, 2, 5)."\n";

// 곱하기
function fnc_args_mul()
{
    $args = func_get_args();
    $mul = 0;

    foreach ($args as $val) {
        if ($val === $args[0])
        {
            $mul = $val;
        }
        else {
            $mul *= $val;
        }
    }
    return $mul;
}
echo fnc_args_mul(10,2, 5)."\n";

// 나누기

function fnc_args_div()
{
    $args = func_get_args();
    $div = 0;

    foreach ($args as $key => $val) {
        if ($key === 0)
        {
            $div = $val;
        }
        else {
            $div /= $val;
        }
    }
    return $div;
}
echo fnc_args_div(10, 2, 5);

// $temp = "+";

// function fnc_args_div()
// {
//     $args = func_get_args();
//     $div = 0;

//     foreach ($args as $val)
//     {
//         $div+ = $val;
//     }
//     return $div;
// }
// echo fnc_args_div(10, 2, 5);




?>