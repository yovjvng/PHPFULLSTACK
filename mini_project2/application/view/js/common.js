
function chkDuplicationId() {
    const id = document.getElementById('id');

    const url = "/api/user?id=" + id.value;

    const idspan = document.getElementById('errMsgId');
    // 빈값
    if(id.value === ""){
        idspan.innerHTML = "ID를 입력하세요.";
        return
    }
    // API
    fetch(url)
    .then(data => {return data.json();})
    .then(apiData => {
        if(apiData["flg"] === "1") {
            idspan.innerHTML = apiData["msg"];
        } else {
            idspan.innerHTML = apiData["msg"];
        }
    });
}
function chkDuplicationPw() {
    const pw = document.getElementById('pw');
    const idspan = document.getElementById('errMsgPw');
    const url = "/api/user?pw=" + pw.value;

    if(pw.value.length < 8){
        idspan.innerHTML = "PW는 8~20글자로 입력해 주세요."
    } else if (pw.value === "" || pw.value.length > 8) {
        idspan.innerHTML = "";
    }

    fetch(url)
    .then(data => {return data.json();})

}
function chkDuplicationpwChk() {
    const pw = document.getElementById('pw');
    const pwChk = document.getElementById('pwChk');
    const idspan = document.getElementById('errMsgPwChk');
    const url = "/api/user?pwChk=" + pwChk.value;

    if(pw.value !== pwChk.value) {
        idspan.innerHTML = "비밀번호가 일치하지 않습니다.";
    } else if (pw.value === pwChk.value) {
        idspan.innerHTML = "";
    }

    fetch(url)
    .then(data => {return data.json();})
}

function chkDuplicationName() {

    const name = document.getElementById('name');
    const idspan = document.getElementById('errMsgId');

    if(name.value === ""){
        idspan.innerHTML = "이름를 입력하세요.";
        return
    }
}














// 회원가입
function joinuserinfo() {

    var i = confirm("회원가입이 완료되었습니다.");

    if(i == true){
        location.href = "/user/login";
    };
}

// 비번 변경
function pwuserinfo() {
    location.href = "/user/mypageup";
}
// 수정 js
function edituserinfo() {

    var i = confirm("수정 완료하셨습니까?");

    if(i == true){
        location.href = "/user/login";
    };
}
// 취소 btn
function backuserinfo() {
    location.href = "/user/mypage";
}

// 삭제 js 
function deluserinfo() {
    var i = confirm("정말 삭제하시겠습니까?\n삭제한 아이디는 복원하실 수 없습니다.");

    if(i == true){
        location.href = "/user/withdraw";
    };
}
