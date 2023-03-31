<?php

// 사번이 10005 이하 사원의 사번, 이름(성 이름), 성별, 생일

$dbc = mysqli_connect("localhost", "root", "root506", "employees",3306);
$sql = 
"SELECT emp_no, CONCAT(last_name, ' ', first_name)as name, gender, birth_date
                                    FROM employees
                                    WHERE emp_no <= 0;";

$result_query = mysqli_query($dbc, $sql);



// var_dump로 출력하기 1.
// while ($temp_row = mysqli_fetch_assoc($result_query))
// {
//     var_dump($temp_row);
// }


// echo로 출력하기 2.
// while ($temp_row = mysqli_fetch_assoc($result_query))
// {
//     echo $temp_row["emp_no"]." ".$temp_row["name"]." ".$temp_row["gender"]. " ".$temp_row["birth_date"]."\n";
// }



// 없는 값 없다고 출력하기 3.(살짝 오류)
// $temp_row = mysqli_fetch_assoc($result_query);
// if (!(isset($temp_assoc)) ) 
// {
//   echo "값이 없습니다.";   
// }
// else 
// {
//         while ($temp_row = mysqli_fetch_assoc($result_query))
//     {
//         echo $temp_row["emp_no"]." ".$temp_row["name"]." ".$temp_row["gender"]. " ".$temp_row["birth_date"]."\n";
//     }
// }

// mysqli_num_rows() 를 이용해서 레코드 수를 체크하는 방법 4.
if(mysqli_num_rows($result_query) === 0)
{
    echo "데이터가 0건 입니다.";
}
else
{
    while ($temp_row = mysqli_fetch_assoc($result_query))
    {
        echo $temp_row["emp_no"]." ".$temp_row["name"]." ".$temp_row["gender"]. " ".$temp_row["birth_date"]."\n";
    }
}

// 플레그를 이용하는 방법
$flg_cnt = false;
while ($temp_row = mysqli_fetch_assoc($result_query))
    {
        echo implode(" ", $temp_row),"\n";
        $flg_cnt = true;
    }
if ( !$flg_cnt )
{
    echo "데이터가 0건 입니다.";
}








// print_r($result_query);
// echo $result_query[1];
// echo $result_query['employess'];



mysqli_close($dbc);


?>