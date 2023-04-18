<?php

    //1. Post Method로 사용자가 입력한 데이터를  HTTP Request를 합니다.
    //2. 입력한 데이터의 상세 내역은 아래와 같습니다.
    //  2-1. key : id, pw, name, birth_date
    //3. 유저가 입력하지 않은 데이터도 함께 출력
    //  3-1. key : h_page, val : h1
    //4. echo를 이용해서 각각의 데이터를 출력해 주세요.
    echo 'id : '.$_POST['id'].'<br>';
    echo 'pw : '.$_POST['pw'].'<br>';
    echo 'name : '.$_POST['name'].'<br>';
    echo 'birthdate : '.$_POST['birth_date'].'<br>';
    echo 'hidden : '.$_POST['h1_1'];


    $arr_post = $_POST;
    foreach($arr_post as $key => $val)
    {
        echo $key." : ".$val."<br>";
    }

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="20_2_tng1_http_post_method.php">
        <input type="text" name="id" placeholder="id">
        <br>
        <input type="text" name="pw" placeholder="pw">
        <br>
        <input type="text" name="name" placeholder="name">
        <br>
        <input type="date" name="birth_date" placeholder="birthdate">
        <br>
        <input type="hidden" value="h1" name="h1_1">
        <br>
        <button type="submit">Submit</button>
    </form>
    
</body>
</html>