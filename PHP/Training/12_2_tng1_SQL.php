<?php

include_once("../Ex/12_2_ex2_fnc_db_conn.php");
// 우리가 작성한 DB Connect 함수(my_db_conn)를 이용해서 아래 데이터를 출력해주세요.


$obj_conn = null; // PDO Class

// DB Connect
my_db_conn( $obj_conn );

// 1. 전체 월급의 평균

// $sql =

// " SELECT "
// ." AVG(salary) "
// ." FROM "
// ." salaries ";


// $stmt = $obj_conn->prepare( $sql );
// $stmt->execute();
// $result = $stmt->fetchALL();
// var_dump( $result );


// 2. 새로운 사원 정보를 employees 테이블에 등록해주세요.

$sql =

" INSERT INTO "
." employees( "
." emp_no "
." ,birth_date "
." ,first_name "
." ,last_name "
." ,gender "
." ,hire_date "
." ) "
." VALUES ( "
." :emp_no "
." ,:birth_date "
." ,:first_name "
." ,:last_name "
." ,:gender "
." ,:hire_date "
." ) ";


$arr_prepare = 
    array (
        ":emp_no" => 500003
        ,":birth" => DATE(19940517)
        ,":first" => "YuJeong"
        ,":last" => "Beak"
        ,":gender" => "F"
        ,":hire" => "20230403"
    );


    $stmt = $obj_conn->prepare( $sql );
    $stmt->execute( $arr_prepare );
    $obj_conn->commit();
    
    var_dump( $result );

// 3. 2에서 등록한 사원의 이름을 "길동", 성은 "홍" 으로 변경해 주세요.


// $sql =
// " UPDATE "
// ." employees "
// ." SET "
// ." first_name ="
// ." :frist_name "
// ." ,last_name ="
// ." :last_name "
// ." WHERE"
// ." emp_no = :emp_no ";



// $arr_prepare = 
//     array (
//         ":frist_name" => '길동'
//         ,":last_name" => '홍'
//         ,":emp_no" => 500003
//     );



//     $stmt = $obj_conn->prepare( $sql );
//     $stmt->execute( $arr_prepare );
//     $obj_conn->commit();


// 4. 2에서 등록한 사원을 삭제해 주세요.

$sql = 
"DELETE"
."FROM"
."employees"
."WHERE"
."emp_no = :emp_no";

$arr_prepare =
    array(
        ":emp_no" => 500003
    );

$stmt = $obj_conn->prepare($sql);
$stmt->execute($arr_prepare);
$obj_conn->commit();



$obj_conn= null; 



?>