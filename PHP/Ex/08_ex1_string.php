<?php

// 문자열 합치기
// $str_1 = "aaa";
// $str_2 = "bbb";
// $str_sum = $str_1 . $str_2;

// echo $str_sum;

// 대소문자 변환
$str_en = "abCd efgh";

echo strtolower($str_en), "\n";

//대문자 변환
echo strtoupper($str_en), "\n";

//맨 앞 글자만 대문자로 변환
echo ucfirst($str_en), "\n";

//각 단언의 맨앞글자만 대문자로 변환
echo ucwords($str_en), "\n";

// URL관련 함수
$url = "https://github.com/yovjvng?tab=overview&from=2023-03-01&to=2023-03-29";

$arr_url = parse_url($url);
var_dump($arr_url);

var_dump($arr_parse);





?>