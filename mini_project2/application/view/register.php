<?php
    // $username = $_POST[ 'username' ];
    // $password = $_POST[ 'password' ];
    // $password_confirm = $_POST[ 'password_confirm' ];
    // if ( !is_null( $username ) ) {
    //     while ( $jb_row = mysqli_fetch_array( $jb_result ) ) {
    //     $username_e = $jb_row[ 'username' ];
    //     }
        // if ( $username == $username_e ) {
        // $wu = 1;
        // } elseif ( $password != $password_confirm ) {
        // $wp = 1;
        // } else {
        // $encrypted_password = password_hash( $password, PASSWORD_DEFAULT);
        // }
    // }
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <style>
    input, button {
        font-family: inherit; font-size: inherit; 
    }
    </style>
</head>
<body>

<h1>회원 가입</h1>
    <form action="register.php" method="POST">
        <p><input type="text" name="u_id" placeholder="아이디" required></p>
        <p><input type="password" name="u_pw" placeholder="비밀번호" required></p>
        <p><input type="password" name="u_pw_confirm" placeholder="비밀번호 확인" required></p>
        <p><input type="submit" value="회원 가입"></p>
    </form>
    

    <script>
        $('.pw') keyup(function () {
            let pass1 = $('#password_1').val();
            let pass2 = $('#password_2').val();

            if (pass1 !== "" || pass2 )
        })
    </script>
</body>
</html>