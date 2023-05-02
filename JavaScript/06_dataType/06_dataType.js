// --------------------
// 기본 데이터 타입
// --------------------

// 숫자 (number)
let num = 1;
function test()
{
    let num = 2;
    console.log("함수 : " + num);
}
console.log("전역 : "+ num);

// 문자열 (string)
let str = "안녕";

// 불리언 (boolean)
let bool = true;

// null
let test1 = null;

// undefined
let test2;

// 심볼 ( symbol ) 대문자로
const S_CONST1 = Symbol("심볼입니다.");
const S_CONST2 = Symbol("심볼입니다.");


// --------------------
// 객체 타입 ( JSON _ JavaScript Object Notation )
// --------------------
let obj1 = {
    u_name: "홍길동"
    ,u_age: 30
    ,u_gender: "남자" 
    ,test: function()
    {
        console.log("객체 함수 test");
    }
    ,addr: {
        addr1 : "대구"
        ,addr2 : "중구"
    }
}

// 배열 (Array)
let arr = [ "탕수육", "짜장면", "짬뽕" ];
