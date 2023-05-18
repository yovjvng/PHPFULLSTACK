
function chkDuplicationId() {
    const id = document.getElementById('id');

    const url = "/api/user?id=" + id.value;

    // API
    fetch(url)
    .then(data => {return data.json();})
    .then(apiData => {
        const idspan = document.getElementById('errMsgId');
        if(apiData["flg"] === "1") {
            idspan.innerHTML = apiData["msg"];
        } else {
            idspan.innerHTML = apiData["msg"];
        }
    });
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

// 삭제 js 
function deluserinfo() {
    var i = confirm("정말 삭제하시겠습니까?\n삭제한 아이디는 복원하실 수 없습니다.");

    if(i == true){
        location.href = "/user/withdraw";
    };
}
