<?php

// 음식종류 5개 이상을 배열로 만들어 주세요.

// $cook = array("떡볶이", "초밥", "짜장면", "볶음밥", "고기");

// print $cook[1]. "\n";
// print $cook[2]. "\n";
// print $cook[3]. "\n";
// print $cook[4]. "\n";


// 랜덤
// print $cook[rand(0,4)]. "\n";

//랜덤 변수
// $rand_num = rand(0,5);
// echo $cook[$rand_num]. "\n";

// 키는 요리명, 값은 주재료 하나로 이루어진 배열을 만들어주세요.(배열 길이는 4)

// $cook = array("떡볶이" => "떡"
//             ,"초밥" => "회"
//             ,"짜장면" => "짜장"
//             ,"볶음밥" => "밥"
//             ,"라면" => "면" );
//  echo $cook["라면"];           


 // 키 : 김치 원소를 삭제해 주세요.   
 $arr_ass_del = array(
                    "된장찌개" => "파"
                    , "볶음밥" => "양파"
                    , "김치" => "마늘"
                    , "비빔밥" => "참기름");
unset($arr_ass_del["김치"]);   

// print_r($arr_ass_del); 
// echo($arr_ass_del["비빔밥"]);              



// foreach문을 이용해서 키가 "삭제"인 요소를 제거해 주세요.
// if문 사용, unset("삭제") x, 키가 "삭제" 이외는 "키 : 값"포맷으로 출력
$arr_ass = array(
    "된장찌개" => "파"
    , "볶음밥" => "양파"
    , "삭제" => "값값"
    , "김치" => "마늘"
    , "비빔밥" => "참기름"
);

$arr_ass_del = array(
    "삭제" => "값값"
);


foreach ($arr_ass as $key => $val)
{
    foreach($arr_ass_del as $val2)
    {
        if($val == $val2)
        {
            unset($arr_ass[$key]);
        }
    }
}
print_r($arr_ass);







?>