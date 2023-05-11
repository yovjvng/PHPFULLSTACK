<?php

//  Cookie란?
	// - 쿠키는 ** 필요한 데이터를 클라이언트의 브라우저에 저장 **하는 것입니다.
	// - 클라이언트의 브라우저에 저장하는 것이므로 보안이 매우 취약합니다.
	// - 서버는 클라이언트의 요청에 대한 응답을 할 때, 
	//   클라이언트 측에 저장하고 싶은 정보를 Response Header에 보내 쿠키에 저장합니다.
	//   이후 클라이언트가 재요청 할 때 저장된 쿠키를 Request Header에 담아 서버에 요청합니다.

// cookie 작성
setcookie("name", "Kim Mihyeon", time() + 30);
setcookie("age", "26", time() + 300);

// cookie 삭제
setcookie("age", "", 0);

?>