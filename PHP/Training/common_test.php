<?php

function db_conn( &$param_conn )
{
  $host = "localhost";
  $user = "root";
  $pw = "root506";
  $charset = "utf8mb4";
  $db_name = "pet_todolist";
  $dns = "mysql:host=".$host.";dbname=".$db_name.";charset=".$charset;
  $pdo_option = 
        array(
            PDO::ATTR_EMULATE_PREPARES      => false
            ,PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION
            ,PDO::ATTR_DEFAULT_FETCH_MODE    => PDO::FETCH_ASSOC
        );
  try
  {
    $param_conn = new PDO( $dns, $user, $pw, $pdo_option );
  }
  catch( Exception $e )
  {
      $param_conn = null;
    throw new Exception( $e->getMessage() );
  }

}


//------------------------------------------------
// 함수명   : board_update
// 기능     : 게시글 수정
// 파라미터 : Array     &$param_search
// 리턴값   : INT/STFING       $result_cnt/ERRMSG
//------------------------------------------------







//------------------------------------------------
// 함수명   : insert_pet
// 기능     : 펫 프로필 작성
// 파라미터 : Array     &$param_insert
// 리턴값   : INT/STFING       $result_cnt/ERRMSG
//------------------------------------------------
?>
