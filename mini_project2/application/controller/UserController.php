<?php
namespace application\controller;

class UserController extends Controller {
        public function loginGet() {
            return "login"._EXTENSION_PHP;
        }

        public function loginPost() {
            $result = $this->model->getUser($_POST);
            $this->model->close(); // DB 파기

            // 유저 유무 체크
            if(count($result) === 0) {
                $errMsg = "* 입력하신 회원 정보가 없습니다.";
                $this->addDynamicProperty("errMsg", $errMsg);
                // 로그인 페이지 리턴
                return "login"._EXTENSION_PHP;
            }
            // session에 User ID 저장
            $_SESSION["u_id"] = $_POST["id"];

            // 리스트 페이지 리턴
            return _BASE_REDIRECT."/shop/main";
        }

        // 로그아웃 메소드
        public function logoutGet() {
            session_unset();
            session_destroy();
            // 로그인 페이지 리턴
            return "login"._EXTENSION_PHP;
        }

        // 회원가입
        public function registerGet() {
            return "register"._EXTENSION_PHP;
        }
        public function registerPost() {
            // $result = $this->model->insertUser($_POST);
            // 유효성 체크
            $arrPost = $_POST;
            $arrChkErr = [];
            // 아이디 글자수 체크
            // mb_strlen 제한 --> 데이터베이스에서 설정했던 숫자와 똑같이 설정
            if(mb_strlen($arrPost["id"]) === 0 || mb_strlen($arrPost["id"]) > 12 ) {
                $arrChkErr["id"] = "ID는 12글자 이하로 입력해 주세요.";
            }
            // ID 영문숫자 체크 해보기


            // PW 글자수 체크
            if(mb_strlen($arrPost["pw"]) < 8 || mb_strlen($arrPost["pw"]) > 20 ) {
                $arrChkErr["pw"] = "PW는 8~20글자로 입력해 주세요.";
            }
            // PW 영문숫자 특수문자 체크 해보기


            // 비밀번호 체크 확인
            if($arrPost["pw"] !== $arrPost["pwChk"]) {
                $arrChkErr["pwChk"] = "비밀번호가 일치하지 않습니다.";
            }

            // NAME 글자수 확인
            if(mb_strlen($arrPost["name"]) === 0  || mb_strlen($arrPost["name"]) > 30) {
                $arrChkErr["name"] = "이름을 30글자 이하로 입력해 주세요";
            }

            // 유효성체크 에러일 경우
            if(!empty($arrChkErr)) {
                // 에러메세지 셋팅
                $this->addDynamicProperty('arrError', $arrChkErr);
                return "register"._EXTENSION_PHP;
            }
            
            $result = $this->model->getUser($arrPost, false);

            // 유저 유무 체크
            if(count($result) !== 0) {
                $errMsg = "* 입력하신 아이디가 사용중입니다.";
                $this->addDynamicProperty("errMsg", $errMsg);
                // 회원가입페이지 리턴
                return "register"._EXTENSION_PHP;
            }

            // Transaction Start
            $this->model->beginTransaction();

            // user insert
            if(!$this->model->insertUser($arrPost)) {
                // 예외처리 롤백
                $this->model->rollback();
                echo "User Register ERROR";
                exit();
            }
            $this->model->commit(); // 정상처리 커밋


            // **** Transaction END
    
            // 로그인페이지로 이동
            return _BASE_REDIRECT."/user/login";



            
            // $_SESSION["u_id"] = $_POST["id"];
            // $_SESSION["u_pw"] = $_POST["pw"];
        }
        // mypage
        public function mypageGet() {
            return "mypage"._EXTENSION_PHP;
        }

}

?>