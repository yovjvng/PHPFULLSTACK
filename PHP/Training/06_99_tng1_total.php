<?php

// 1. 배열의 길이를 반환하는 my_len() 함수를 작성하시오.

// $arr_base = array(1, 2, 3, 4, 5);

// function my_len($arr_len)
// {
//     $result = 0;
//     foreach ($arr_len as $val) 
//     {
//         $result  += 1;
//     }
//     return $result;
// }

// echo my_len($arr_base);




// 별찍기를 함수로 만들어봅시다.

// $num = 5;
// for ($i=0; $i <= $num; $i++)
//     { 
//         for ($p = 0; $p <=$i; $p++)
//         {
//             echo "*";
//         }
//         echo "\n";
        
//     }



function print_star($a)
{
    for ($i = 0; $i < $a; $i++)
    {
        echo "*";
    }
    echo "\n";

}   

// print_star(1);    
// print_star(2);    
// print_star(3);    
// print_star(4);    
// print_star(5);    


// ------------------------
function print_star_rect($a)
{
    for($g = 0; $g < $a; $g++)
    {
        print_star($a);
    }

}


print_star_rect(4);    





?>