<?php
namespace application\util;

class UrlUtil {

    // $_GET["url"]을 분석해서 리턴
    public static function getUrl() {
        return isset($_GET["url"]) ? $_GET["url"] : "" ;
    }

    // URL을 "/"로 구분해서 배열을 만들고 리턴
    public static function getUrlArrPath() {
        $url = UrlUtil::getUrl();
        return $url !== "" ? explode("/", $url) : "" ;
    }
    
    // "/"를 "\"로 치환해주는 메소드 
    public static function replaceSlashToBackslash($str) {
        return str_replace("/", "\\", $str);
    }
}


?>