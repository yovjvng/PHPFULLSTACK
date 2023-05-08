// 인라인 이벤트 등록
// html파일의 12행, 15행 참조
// onclick


// 프로퍼티 리스너
const btn1 = document.querySelector('#btn1');
btn1.onclick = function() {
    location = "https://www.google.com/";
} 

// addEventListener(evenType, function) 방식
const btn2 = document.querySelector('#btn2');
// const btn2 =  document.getElementById('#btn2');

// 현재 창에서 열기
// btn2.addEventListener('click', () => {
//     location.href = 'https://www.daum.net';
// });

// 팝업 창 열기
// let newWindow = null;
// btn2.addEventListener('click', () => {
//     newWindow = open('https://www.daum.net','', 'width=500 height = 500');
// });

// // 팝업 창 닫기
// const btn3 = document.getElementById('btn3');
// btn3.addEventListener('click', popUpClose(newWindow));


// 이벤트 삭제
// removeEventListener(eventType, function)
// addEventListener()로 등록한 이벤트의아규먼트와 같은 아규먼트를 셋팅해야 삭제됩니다.
// btn3.removeEventListener('click', popUpClose(newWindow));

// function popUpClose(win) {
//     win.popUpClose();
// };


// 이벤트 타입
// 1. 마우스 이벤트
// - mousedown - 마우스가 요소안에서 클릭이 눌릴 때
const div1 = document.querySelector('.div1');
div1.addEventListener('mousedown', () => alert('div 클릭'));
// - mouseup - 마우스가 요소안에서 클릭이 해제될 때
// - mouseenter - 마우스 포인터가 요소 안으로 진입 했을 때
div1.addEventListener('mouseenter', () => alert('div 집입'));