<?php


include_once("../Ex/12_2_ex2_fnc_db_conn.php");
// 아래 쿼리르 이용해서 DB접속 > data획득 후 출력해 주세요.
// try-catch로 에러 처리를 해 주세요.
// 에러가 날 경우의 해당 Exception의 에러메세지를 출력해 주세요.
// 정상 종료일 경우 "정상종료"라고 출력해 주세요.
// $sql1 = "SELECT * FROM department ";
// $sql2 = "SELECT * FROM dept_manager  ";


// try 
// {
//     $obj_conn = null;
//     my_db_conn( $obj_conn );
//     $sql1 = "SELECT * FROM department ";
//     $stmt = $obj_conn->query( $sql1 );
//     $result = $stmt->fetchALL();
//     if ( count( $result ) === 0 )
//     {
//         // throw Exception : 에러를 강제로 일으키는 구문
//         throw new Exception("E99");
//     }
//     var_dump( $result );
//     echo "try\n";
// } 
// catch(Exception $e)
// {
//     echo "----에러 발생----\n";
//     echo $e->getMessage();
//     echo "\n----에러 발생----\n";
// }
// finally
// {
//     echo "finally\n";
//     $obj_conn = null;
// }
// echo "종료";




// try 
// {
//     $obj_conn = null;
//     my_db_conn( $obj_conn );
//     $sql2 = "SELECT * FROM dept_manager  ";
//     $stmt = $obj_conn->query( $sql2 );
//     $result = $stmt->fetchALL();

//     var_dump( $result );
//     echo "try\n";
// } 
// catch(Exception $e)
// {
//     echo "----에러 발생----\n";
//     echo $e->getMessage();
//     echo "\n----에러 발생----\n";
// }
// finally
// {
//     echo "finally\n";
//     if (count( $result ) !== 0 ) 
//     {
//         echo "정상종료";
//     }
//     $obj_conn = null;
// }






$sql1 = "SELECT * FROM department ";
$sql2 = "SELECT * FROM dept_manager ";
try 
{
    $obj_conn = null;
    my_db_conn( $obj_conn );

    // $stmt = $obj_conn->query( $sql1 );
    // $result = $stmt->fetchALL();

    $stmt2 = $obj_conn->query( $sql2 );
    $result2 = $stmt2->fetchALL();
    // if ( count( $result2 ) === 0 )
    // {
    //     // throw Exception : 에러를 강제로 일으키는 구문
    //     throw new Exception("E99");
    // }
    var_dump( $result2 ); // 우리가 확인용으로 쓰는 것
    echo "정상종료\n";
} 
catch(Exception $e)
{
    echo "----에러 발생----\n";
    echo $e->getMessage();
    echo "\n----에러 발생----\n";
}
finally
{
    echo "finally\n";
    $obj_conn = null;
}




?>