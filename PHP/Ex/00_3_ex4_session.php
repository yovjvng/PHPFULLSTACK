<?php

// 세션 시작하기
session_name("kim");
session_start();

var_dump($_SESSION);
var_dump($_COOKIE); // 세션ID가 쿠키에 자동저장된다.
var_dump("세션ID : ".session_id()); // sessionID를 반환



?>