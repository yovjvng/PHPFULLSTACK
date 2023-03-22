<?php
    // 성적
    // 범위 :
    //     100점   : A+
    //     90~100점 : A
    //     80~90점 : B
    //     70~80점 : C
    //     60~70점 : D
    //     60미만  : F
            
    // 출력 문구 : "당신의 점수는 XXX점 입니다.<등급>"

    // 0~100까지만 입력 받았을 때, "당신의 점수는 XXX점 입니다.<등급>" 라고 출력하고,
    // 그 외의 값일 경우 "잘못된 값을 입력 했습니다." 라고 출력해 주세요.


    
    // $num = 0;

    // if ($num >= 100) {
    //     echo '당신의 점수는 ' ,$num,'점 입니다. <A+등급>';
    // }
    // else if($num >= 90) {
    //     echo '당신의 점수는 ' ,$num,'점 입니다. <A등급>';
    // }
    // else if($num >= 80) {
    //     echo '당신의 점수는 ' ,$num,'점 입니다. <B등급>';
    // }
    // else if($num >= 70) {
    //     echo '당신의 점수는 ' ,$num,'점 입니다. <C등급>';
    // }
    // else if($num >= 60) {
    //     echo '당신의 점수는 ' ,$num,'점 입니다. <D등급>';
    // }
    // else {
    //     echo '당신의 점수는 ' ,$num,'점 입니다. <F등급>';
    // }

    $num = 100;
    $score = '당신의 점수는 ';
    $temp = '점 입니다.';
    $result2 = '잘못된 값을 입력 했습니다.';
  
       
        if (($num > 100 || $num < 0))
        {
            echo $result2;
        }
        else { 
            $result = "F";
            if ($num == 100 ) {
                $result = "A+";
            }
            else if ($num >= 90) {
                $result = "A";
            }
            else if ($num >= 80) {
                $result = "B";
            }
            else if($num >= 70) {
                $result = "C";
            }
            else if($num >= 60) {
                $result = "D";
            }
        
            echo $score, $num, $temp, $result;
        }





?>
