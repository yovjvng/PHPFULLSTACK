<?php

    //1. Get Method로 사용자가 입력한 데이터를  HTTP Request를 합니다.
    //2. 입력한 데이터의 상세 내역은 아래와 같습니다.
    //  2-1. key : id, pw, name, birth_date
    //3. echo를 이용해서 각각의 데이터를 출력해 주세요.

    // var_dump($_GET);
    echo $_GET['id'].'<br>';
    echo $_GET['pw'].'<br>';
    echo $_GET['name'].'<br>';
    echo $_GET['birth_date'];

    // $post_get = $_GET;
    // $post_get[];
    // URL을 직접 입력
    // http://localhost/20_2_ex1_http_get_method.php?id=&pw=&name=&birth_date=
?>

<!--  form Tag를 이용하는 방법  -->
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="20_2_ex1_http_get_method.php">
        <label for="id" name="id">ID</label>
        <input type="text" name="id" id="id" placeholder="id">
        <br>
        <label for="pw" name="pw">PW</label>
        <input type="text" name="pw" id="pw" placeholder="pw">
        <br>
        <label for="name" name="name">NAME</label>
        <input type="text" name="name" id="name" placeholder="name">
        <br>
        <label for="birth_date" name="birth_date">BIRTHDATE</label>
        <input type="date" name="birth_date" id="birth_date" placeholder="YYYY-MM-DD">
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>