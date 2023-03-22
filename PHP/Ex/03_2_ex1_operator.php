<?php
    //1. 산술연산자
    // echo "더하기 : 1 + 1 = ". 1 + 1;
    // echo "\n빼기 : 1 - 1 = ", 1 - 1;
    // echo "\n곱하기 :  2 * 3 = ", 2 * 3;
    // echo "\n나누기 : 10 / 2 = ", 10 / 2;
    // echo "\n나머지 : 9 % 7 = ", 9 % 7;
    // echo "\n연산순서 : 10 - 5 * 8 = ", 10 - 5 * 8;
    // echo "\n\n";

    // //2. 증가/감소 연산자
    // $num1 = 1;
    // $num2 = 1;

    // ++$num;
    // $num1 = $num + 1;

    // $num++;

    // echo $num1++, "\n";
    // echo $num1;

    //3. 산술 대입 연산자
    $num1 = 1;
    $num1 = $num1 +1;
    $num2 = 1;
    $num2 += 1;

    $num2 = $num2 / 1;

    // 4. 비교 연산자
    $t1 = 1;
    $t2 = '1';
    // var_dump(1 > 2);
    // var_dump(1 < 2);
    // var_dump(1 >= 1);
    // var_dump(1 <= 1);
    // var_dump($t1 == $t2);
    // var_dump($t1 === $t2);
    // var_dump($t1 != $t2);
    // var_dump($t1 !== $t2);

    // 5.논리 연산자
    // 그리고(and) 논리 연산자
    var_dump( 1 == 1 && 2 == 2 );  
    // 또는(or) 논리 연산자
    var_dump( 1 == 1 || 1 == 2 );
    // NOT 논리 연산자 (반대로 나오는) 
    var_dump( !(1 == 1) ); 


    $resert = 5 + 3 * 2 - (5 + 4) % 2;
    echo($resert);



?>