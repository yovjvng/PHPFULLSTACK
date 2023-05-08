// 타이머 함수

// 1. setTimeout() / clearTimeout()
const timeOut = setTimeout(() => console.log('A'), 2000); // 타이머 셋팅
clearTimeout(timeOut);// 타이머 제거

//2. setInterval() / clearInterval()
const myinterval = setInterval(() => console.log('A'), 1000); // 인터벌 셋팅
clearInterval(myinterval); // 인터벌 제거



// 1~5를 1초마다 콘솔에 출력해주세요.
// 1
// 2
// 3
// 4
// 5
// for(let i = 1; i < 5; i++)
// {
//     const myinterval2 = setInterval(() => console.log('A'), 1000);
// }


let i =1;
const interval1 = setInterval(() =>{
    console.log(i);
    if(i++ === 5){
        clearInterval(interval1); // i가 5일때 인터벌 제거
    }
}, 1000);