<?php
// Switch로 만들어주세요.
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

    $num = 100;
    $score = '당신의 점수는';
    $temp = '점 입니다.';


    switch ($num) {
        case $num > 100 || $num < 0 :
            echo '잘못된 값을 입력 했습니다.';
            break;
        case $num = 100:
            echo $result = "A+";
            break;
        case $num = 90 :
            echo $result = "A";
            break;
        case $num = 80 :
            echo $result = "B";
            break;
        case $num = 70:
            echo $result = "C";
            break;
        case $num = 60 :
            echo $result = "D";
            break;    
        default:
            echo $result = "F";
            break;
    }

    echo $score, $num, $temp, $result;

?>