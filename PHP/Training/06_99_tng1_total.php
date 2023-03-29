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
    for ($b = 0; $b < $a; $b++)
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

// function print_star_rect($d)
// {
//     for ($i=1; $i <= $d; $i++) { 
//         print_star($i);
//     }
// }

// print_star_rect(5);


function star($c)
{
    for($a=0; $a<$c; $a++)
    {
        echo "*";
    }
    echo"\n";
}

// function print_star($d)
// {
//     for ($b=1; $b <= $d; $b++) { 
//         star($b);
//     }
// }
// print_star(5);

// function star($c)
// {
//     for ($j=0; $j < $c; $J++) { 
//         star($c);
//     }
// }
// print_star_rect(4);








//void 함수 (리턴값이 없는)

// function sum($n1, $n2)
// {
//     echo $n1 + $n2;
//     return;
// }


//return 함수 (리턴값이 있는)
// function sum2($n1, $n2)
// {
//     return $n1 + $n2;
// }


// sum(1,2);
// sum(2,4);
// $result = sum2(3,6);
// echo sum2(3,6);










?>