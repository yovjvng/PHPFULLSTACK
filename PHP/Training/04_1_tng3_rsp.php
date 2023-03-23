

<body>
    <form method="post">


        <label for="rsp">가위바위보</label>
        <select name="select" id="select">
            <option value="0">가위</option>
            <option value="1">바위</option>
            <option value="2" selected>보</option>
        </select>
        <input type="submit" value="전송">
    </form> 



<?php



// $rsp = 0;




// if($rsp == 0 && rand(0,2) == 1)
// {
//     echo '졌습니다.';
// }
// else if($rsp == 0 && rand(0,2) == 0)
// {
//     echo '비겼습니다.';
// }
// else if($rsp == 0 && rand(0,2) == 2)
// {
//     echo '이겼습니다.';
// }

// else if($rsp == 1 && rand(0,2) == 0)
// {
//     echo '이겼습니다.';
// }
// else if($rsp == 1 && rand(0,2) == 1)
// {
//     echo '비겼습니다.';
// }
// else if($rsp == 1 && rand(0,2) == 2)
// {
//     echo '졌습니다.';
// }   
  
// else if($rsp == 2 && rand(0,2) == 0)
// {
//     echo '졌습니다.';
// }
// else if($rsp == 2 && rand(0,2) == 1)
// {
//     echo '이겼습니다.';
// }
// else  
// {
//     echo '비겼습니다.';
// } 



// ------------------------------------------------------


$rsp = 1;
$me = "나는";

if($rsp == 0 )
{
    $temp = " 가위 ";
}
else if($rsp == 1)
{
    $temp = " 바위 ";
}
else if($rsp == 2)
{
    $temp = " 보 ";
}


if($rsp == 0 && rand(0,2) == 1)
{
    $result = "졌습니다.";
}
else if($rsp == 0 && rand(0,2) == 0)
{
    $result = "비겼습니다.";
}
else if($rsp == 0 && rand(0,2) == 2)
{
    $result = "이겼습니다.";
}


else if($rsp == 1 && rand(0,2) == 0)
{
    $result = '이겼습니다.';
}
else if($rsp == 1 && rand(0,2) == 1)
{
    $result = '비겼습니다.';
}
else if($rsp == 1 && rand(0,2) == 2)
{
    $result = '졌습니다.';
}   
  
else if($rsp == 2 && rand(0,2) == 0)
{
    $result = '졌습니다.';
}
else if($rsp == 2 && rand(0,2) == 1)
{
    $result = '이겼습니다.';
}
else  
{
    $result = '비겼습니다.';
} 


// echo $me, $temp[], $result; 



// -----------------------------------------



// $rsp = 1;
// $me = "나는";
// $you = "너는";
// $temp2 = rand(0,2);

// if($rsp == 0 )
// {
//     $temp = " 가위 ";
// }
// else if($rsp == 1)
// {
//     $temp = " 바위 ";
// }
// else if($rsp == 2)
// {
//     $temp = " 보 ";
// }


// if($temp2 == 0 )
// {
//     $temp3 = " 가위 ";
// }
// else if($temp2 == 1)
// {
//     $temp3 = " 바위 ";
// }
// else if($temp2 == 2)
// {
//     $temp3 = " 보 ";
// }



// if($rsp == 0 && $temp2 == 1)
// {
//     $result = "졌습니다.";
// }
// else if($rsp == 0 && $temp2 == 0)
// {
//     $result = "비겼습니다.";
// }
// else if($rsp == 0 && $temp2 == 2)
// {
//     $result = "이겼습니다.";
// }


// else if($rsp == 1 && $temp2 == 0)
// {
//     $result = '이겼습니다.';
// }
// else if($rsp == 1 && $temp2 == 1)
// {
//     $result = '비겼습니다.';
// }
// else if($rsp == 1 && $temp2 == 2)
// {
//     $result = '졌습니다.';
// }   
  
// else if($rsp == 2 && $temp2 == 0)
// {
//     $result = '졌습니다.';
// }
// else if($rsp == 2 && $temp2 == 1)
// {
//     $result = '이겼습니다.';
// }
// else  
// {
//     $result = '비겼습니다.';
// } 



// echo $me, $temp, $you, $temp2, $result; 




?>

</body>