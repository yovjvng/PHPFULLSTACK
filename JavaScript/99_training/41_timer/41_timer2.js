// let nowtime = new Date();


// const now = document.getElementById('time');

// function clock() {
//     let timetext = document.getElementById('time');
//     let today = new Date();
// }


const time = document.getElementById('time');
   const timetime = setInterval(() => {
        const now = new Date();
        time.innerHTML = now.toLocaleTimeString(); // 현재 지역 표기법으로 변환
    }, 1000);

// 멈추게 하기
const stop = document.getElementById('btn');
stop.addEventListener('mousedown', function() {
    clearInterval(timetime); 
});

// 재시작 하기
const start = document.getElementById('btn_re');
start.addEventListener('mousedown', function() {
    timetime = setInterval(() => {
        const now = new Date();
        time.innerHTML = now.toLocaleTimeString();
    }, 1000);
});




