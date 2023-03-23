<?php

    // 1. while문
    // $i = 1;
    // while( $i <= 50 )
    // {
    //     echo $i * 2;
    //     $i = $i + 1;
    
        
    // }


    // $i = 1;

    // while( $i <= 10)
    // {
    //     echo '2 *',$i, '=', 2*$i, "\n";
    //     $i++;
    // }


    // $i = 1;

    // while( $i <= 10)
    // {
    //     echo '3 *',$i, '=', $i*3, "\n";
    //     $i++;
    // }

    // 구구단 2단~9단을 while문으로 작성해 주세요.

// $dan = 2;
// $num = 1;

// while( $num < 10)
// {
//     $result = $dan, " * ", $num, " = ", $dan * $num;
//     echo $result;
//     $num++;
// }

// $i = 1;

// while($i <= 9)
// {   $p = 2;
//     echo $i,"단 \n";
//     while ($p <= 9)
//     {
//         echo $i,"*",$p, "=", $i*$p, "\n";
//         $p++;
//     }
//     $i++;
// }

    // 2. do while문
    // do{
    //     반복 할 처리
    // }
    // while(조건);


    // $i = 0;
    // do{
    //     echo $i, " do while";
    // }
    // while( $i === 1 );
    // while( $i === 1 )
    // {
    //     echo $i, "while";
    // }

    // 3. for문
    // for ($i=2; $i <= 9; $i++)
    // { 
    //     echo $i, "단\n";
    // }


    for ($i=2; $i <= 9; $i++)
    { 
        echo $i, "단\n";
        for($p = 1; $p <=9; $p++)
        {
        echo $i, "*", $p,"=", $i * $p,"\n";
        }

    }


?>