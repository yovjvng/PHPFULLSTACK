<?php

// 파일을 여는 방법 : fopen( 파일위치, 파일여는방식 )

// $f_food = fopen( "./sam/food.txt", "r" ); // r : 읽기전용
// $f_food = fopen( "./sam/food.txt", "w" ); // w : 쓰기전용(포인터가 파일 시작부분)
// $f_food = fopen( "./sam/food.txt", "a" ); // a : 쓰기전용(포인터가 파일의 끝부분)

// var_dump($f_food);

// 파일을 한 줄 씩 읽어오는 방법 : fgets( open한 파일 )
// 1.
// print fgets($f_food);
// print fgets($f_food);
// print fgets($f_food);
// print fgets($f_food);
// print fgets($f_food);
// print fgets($f_food);



// 2.
// $a = 1;
// while ($line = fgets($f_food))
// {
//     echo($a." ".$line);
//     $a++;
// }


// 3.
// while(!feof($f_food))
// {
//     print fgets($f_food);
// }



$f_food = fopen( "./sam/food.txt", "a" ); // a : 쓰기전용(포인터가 파일의 끝부분)

// 파일에 내용 추가 : fputs( open한 파일, 추가할 내용 )
fputs($f_food, "\n돈가스1");
fputs($f_food, "\n돈가스2");
fputs($f_food, "\n돈가스3");




// 파일을 닫는 방법 : fclose( open한 파일 )
fclose($f_food);


?>