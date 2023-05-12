<?php
namespace application\controller;

class UserController extends Controller {
        public function loginGet() {
            return "login"._EXTENSION_PHP;
        }

        public function loginPost() {
            $result = $this->model->getUser($_POST);
            // 유저 유무 체크
            if(count($result) === 0) {
                $errMsg = "입력하신 회원 정보가 없습니다.";
                $this->addDynamicProperty("errMsg", $errMsg);
                // 로그인 페이지 리턴
                return "login"._EXTENSION_PHP;
            }
            // session에 User ID 저장
            $_SESSION["u_id"] = $_POST["id"];

            // 리스트 페이지 리턴
            return _BASE_REDIRECT."/product/list";
        }

        // 로그아웃 메소드
        public function logoutGet() {
            session_unset();
            session_destroy();
            // 로그인 페이지 리턴
            return "login"._EXTENSION_PHP;
        }
}

?>