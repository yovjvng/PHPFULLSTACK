<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet"  type="text/css" href="/application/view/css/main.css">
    <link rel="stylesheet"  type="text/css" href="/application/view/css/register.css">
    <title>Join</title>
</head>
<body>
    <div class="wrap">
    <!-- 네이게이션 바 -->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: transparent; border-bottom: 1px solid rgb(75, 75, 75);">
            <div class="container-fluid">
            <a class="navbar-brand" href="/shop/main">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/shop/main">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">NEW</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    SHOP
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
                </ul>
                <form class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/user/login">LOGIN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/user/register">JOIN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CART</a>
                        </li>
                    </ul>
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            </div>
        </nav>


        <!-- 회원가입 폼 -->
    <div class="join_wrap">
        <form action="/user/register" method="POST" id="join_form">
            <h1>회원 가입</h1>
            <br>
            <br>
            <?php if(isset($this->errMsg)) { ?>
                <div>
                    <span class="arr"><?php echo $this->errMsg ?></span>
                </div>
            <?php
            } ?>
            <div class="join_form">
                <div class="textb">
                    <input type="text" id="name" name="name" placeholder="이름" maxlength="30" required value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ""; ?>">
                    <br>
                    <span class="arr">
                    <?php if(isset($this->arrError["name"])) {
                            echo $this->arrError["name"];
                    } ?>
                    </span>
                </div>
                <br>
                <div class="textb">
                    <input type="text" id="id" name="id" placeholder="아이디" required maxlength="12">
                    <br>
                    <button class="chkbtn" type="button" onclick="chkDuplicationId();">중복확인</button>
                    <span id="errMsgId" class="arr">
                        <?php if(isset($this->arrError["id"])) {
                            echo $this->arrError["id"];
                        } ?>
                    </span>
                </div>
                <br>
                <div class="textb">
                    <input type="password" id="pw" name="pw" placeholder="비밀번호" required maxlength="20">
                    <!-- <div class="show-password fas fa-eye-slash"></div> -->
                    <br>
                    <span class="arr">
                    <?php if(isset($this->arrError["pw"])) {
                            echo $this->arrError["pw"];
                    } ?>
                    </span>
                </div>
                <br>
                <div class="textb">
                    <input type="password" id="pwChk" name="pwChk" placeholder="비밀번호 확인" required maxlength="20">
                    <br>
                    <span class="arr">
                    <?php if(isset($this->arrError["pwChk"])) {
                            echo $this->arrError["pwChk"];
                    } ?>
                    </span>
                </div>
                <br>
                <button class="login_btn fas fa-arrow-right" type="submit" value="회원 가입">회원가입</button>
            </form>
        </div>
    </div>


    <!-- footer -->
    
    <footer>
        <div class="footer-top">
            <ul>
                <a href="#">
                    <li>고객센터</li>
                </a>
                <a href="#">
                    <li>개인정보취급방침</li>
                </a>
                <a href="#">
                    <li>이용약관</li>
                </a>
                <a href="#">
                    <li>이용안내</li>
                </a>
                <a href="#">
                    <li>회사소개</li>
                </a>
            </ul>
        </div>
        <hr>
        <div class="copyright footer-bottom">
            <p>2023. ⓒcopyright Beak Yu Jeong All rights reserved.</p>
        </div>
        </footer>
        
    </div>

    <!-- <script>
    var fields = document.querySelectorAll('.textb input');

    document.querySelector('.show-password').addEventListener('click', function(){
        if( this.classList[2] == 'fa-eye-slash' ) {
            this.classList.remove('fa-eye-slash');
            this.classList.add('fa-eye');
            fields[1].type = "text";
        } else {
            this.classList.remove('fa-eye');
            this.classList.add('fa-eye-slash');
            fields[1].type = "password";
        }
    });
    </script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/application/view/js/common.js"></script>
</body>
</html>