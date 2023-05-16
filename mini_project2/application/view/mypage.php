<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"  type="text/css" href="/application/view/css/main.css">
    <link rel="stylesheet"  type="text/css" href="/application/view/css/login.css">
    <title>Join</title>
</head>
<body>
    <div class="wrap">
    <!-- 네이게이션 바 -->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: transparent; border-bottom: 1px solid rgb(75, 75, 75);">
            <div class="container-fluid">
            <a class="navbar-brand" href="/main">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/main">Home</a>
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


        <!-- 마이페이지 폼 -->
    <h1>MY PAGE</h1>

    <div class="maypagewrap">
        <div> 이름 :  <?php echo $_SESSION["u_name"]  ?></div> <br>
        <div> 아이디 : <?php echo $_SESSION["u_id"] ?></div> <br>
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

    <script type="text/javascript">
    function test() {
      var p1 = document.getElementById('password1').value;
      var p2 = document.getElementById('password2').value;
      
      if(p1.length < 2) {
              alert('입력한 글자가 2글자 이상이어야 합니다.');
              return false;
          }
          
          if( p1 != p2 ) {
            alert("비밀번호불일치");
            return false;
          } else{
            alert("비밀번호가 일치합니다");
            return true;
          }
    }
  </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>