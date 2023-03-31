<?php

// 파일명 : gugudan.txt
// 파일 위치 : sam
// 내용은 아래와 같습니다.
// 2단
// 2 * 1 = 2
// 2 * 2 = 4
// ...
// 2 * 9 = 10



    // $f_gugudan = fopen("../Ex/sam/gugudan.txt","a");


    // $i = 0;

    // while 1.

    // fputs($f_gugudan, "2단\n");
    // while( $i < 9)
    // { 
    //     $i++;
    //     $result = 2 * $i;
    //     fputs($f_gugudan, '2 * '.$i. '='. $result. "\n");
    // }

    // for 2.

    // for ($i=2; $i <= 9; $i++)
    // { 
    //     fputs($f_gugudan, $i. "단\n");
    //     for($p = 1; $p <=9; $p++)
    //     {
    //     $result = $i * $p;
    //     fputs($f_gugudan, $i. "*". $p."=". $result."\n");
    //     }
    // }


    // for fputs한번만 써서 3.
    // $print_gugudan = "";
    // for ($i=2; $i <= 9; $i++)
    // { 
    //     $print_gugudan .=  $i. "단\n";
    //     for($p = 1; $p <=9; $p++)
    //     {
    //     $result = $i." * ". $p. " = ".$i*$p."\n";
    //     // $print_gugudan = $print_gugudan. $result."\n";
    //     $print_gugudan .= $result;
    //     }
    // }
    // fputs($f_gugudan, $print_gugudan);


    // 함수 4.
    // function gugumake($dan)
    // {
    //     $gugu_ans.=$dan."단\n";
    //     for ($i = 0; $i < 10; $i++)
    //     {
    //         $gugu_ans.="$dan * $i = ".$dan*$i."\n";
    //     }
    //     return $gugu_ans;
    // }
    // fputs($f_gugudan,gugumake(2));

    // fclose($f_gugudan);



    /*
        김밥
        샌드위치
        백반
        국밥
        크림우동
        연어초밥

        "국밥"과 "크림우동" 사이에 "스테이크를"를 추가해주세요.

        김밥
        샌드위치
        백반
        국밥
        스테이크
        크림우동
        연어초밥
    */

    $f_food2 = file("../Ex/sam/food2.txt");
    $print_food = "";
    foreach ($f_food2 as $val) 
    {
        if ( trim($val) === "국밥") {
            $print_food .= $val."스테이크\n";
        }
        else 
        {
            $print_food .= $val."\n";
        }   
    }
    print $print_food;

    $f_food2 = fopen("../Ex/sam/food2.txt","w");
    fputs( $f_food2, $print_food);
    fclose($f_food2);



?>