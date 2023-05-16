<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"  type="text/css" href="/application/view/css/main.css">
    <title>Main</title>
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
                    <li><a class="dropdown-item" href="#">클래식전구</a></li>
                    <li><a class="dropdown-item" href="#">장식용전구</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="user/main" tabindex="-1" aria-disabled="true">Contact</a>
                </li>
                </ul>
                <form class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <?php
                        if( isset( $_SESSION["u_id"]) ) {
                        ?>
                        <p class="hiuser">안녕하세요! "<?php echo $_SESSION["u_id"] ?>" 님</p>
                        <a class="nav-link" class="nav-link" id="logout" onclick="redirectLogout()">LOGOUT</a>
                        <?php
                        } else {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/user/login">LOGIN</a>
                        </li>
                        <?php
                        }
                        ?>
                       <?php
                        if( isset( $_SESSION["u_id"]) ) {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/user/mypage">MYPAGE</a>
                        </li>
                        <?php
                        } else {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/user/register">JOIN</a>
                        </li>
                        <?php
                        }
                        ?>
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
        <!-- 헤더 -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators"> 
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" style="height: 600px;">
                <img src="/application/view/img/banner.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item"  style="height: 600px;">
                <img src="/application/view/img/banner0.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <!-- <div class="header">
            <img src="https://www.iklamp.co.kr/data/editor/2211/e82e60746f73cf77e83f614f0a2022e1_1669793690_0849.JPG" alt="">
          </div> -->

        <!-- 카드 슬라이드 -->
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
            <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container d-block w-100">
                    <h3>New Arrivals</h3>
                    <div class="row row-xxl-4">
                    <div class="col d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <a href=""><img src="https://www.iklamp.co.kr/data/item/1677729800/SNOWMAN221.1_TableStand_Butter.jpg" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                            <h5 class="card-title">SNOWMAN22 SOLID Table Stand</h5>
                            <p class="card-text">230,000원</p>
                            <!-- <a href="#" class="btn btn-primary"style="background-color: #e3f2fd; color: #333;">구매하기</a> -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: transparent; color: #333;">
                                찜
                            </button>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="https://www.iklamp.co.kr/data/item/1677729789/SNOWBALL221.1_TableStand_Peach.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">SNOWBALL22 SOLID Table Stand</h5>
                            <p class="card-text">210,000원</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: transparent; color: #333;">
                                구매하기
                            </button>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="https://www.iklamp.co.kr:443/data/item/1650346442/MARGRITTE25_Pendant_01_Black.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">MAGRITTE40 Pendant</h5>
                            <p class="card-text">280,000원</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: transparent; color: #333;">
                                구매하기
                            </button>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="https://www.iklamp.co.kr/data/item/1668045904/FONDUE16_TableStand_Ivory.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">FONDUE16 Table Stand KYOBO BOOK Edition</h5>
                            <p class="card-text">280,000원</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: transparent; color: #333;">
                                구매하기
                            </button>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container d-block w-100">
                    <div class="row row-xxl-4">
                    <div class="col d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="https://www.iklamp.co.kr/data/item/1650346813/SLOPE45_Pendant_01_Blue.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">SLOPE45 SMART Pendant</h5>
                            <p class="card-text">290,000원</p>
                            <!-- <a href="#" class="btn btn-primary"style="background-color: #e3f2fd; color: #333;">구매하기</a> -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: transparent; color: #333;">
                                구매하기
                            </button>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="https://www.iklamp.co.kr:443/data/item/1653355793/TRIANGLE120B_Pendant_01_Beech_re.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">TRIANGLE120 B Pendant</h5>
                            <p class="card-text">390,000원</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: transparent; color: #333;">
                                구매하기
                            </button>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="https://www.iklamp.co.kr/data/item/1680582778/WORKSHOP28_P_MossGreenGrayB.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">WORKSHOP28 Pendant</h5>
                            <p class="card-text">150,000원</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: transparent; color: #333;">
                                구매하기
                            </button>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <div class="card" style="width: 18rem;">
                            <img src="https://www.iklamp.co.kr:443/data/item/1617695104/0.JPG" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title">F-LED G125 (6w, E26, Dimmable)</h5>
                            <p class="card-text">6,400원</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: transparent; color: #333;">
                                구매하기
                            </button>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev" style="width: 10%;">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next" style="width: 10%;">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- 모달 -->
        <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        구매하기
    </button> -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                스몰 로고 반팔 티셔츠
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">취소</button>
            <button type="button" class="btn btn-primary">장바구니 담기</button>
            <button type="button" class="btn btn-primary">즉시 구매</button>
            </div>
        </div>
        </div>
    </div>

<!-- 그리드  -->
<div class="wrapper">
    <figure>
      <div class="post-image">
        <img src="https://vittz.co.kr/shopimages/vittz/0630070013493.jpg?1683011268" alt="">
    </div>
      <div class="post-image">
        <img src="https://vittz.co.kr/shopimages/vittz/0630110004983.jpg?1667522020" alt="">
    </div>
    </figure>
    <figure>
        <div class="post-image">
            <img src="https://i.pinimg.com/564x/d6/93/e5/d693e53083d5b67989f0a99546236a38.jpg" alt="">
        </div>
        <div class="post-image">
            <img src="https://i.pinimg.com/564x/bf/ce/41/bfce41113129ddb718a739879607649a.jpg" alt="">
        </div>
        <div class="post-image">
            <img src="https://i.pinimg.com/564x/d6/93/e5/d693e53083d5b67989f0a99546236a38.jpg" alt="">
        </div>
    </figure>
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

    <script>
        function redirectLogout() {
            location.href = "/user/logout";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>