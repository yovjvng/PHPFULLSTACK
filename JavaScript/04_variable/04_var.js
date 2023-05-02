// console.log("안녕하세요. js파일입니다.", "두번째");


// ------------------
// 변수
// ------------------
// var : 중복 선언 가능, 재할당 가능, 함수레벨 스코프
// var u_name = "홍길동";
// var u_name = "갑순이";
// u_name = "갑돌이";
// console.log( u_name );

// let : 중복 선언 불가능, 재할당 가능, 블록레벨 스코프
// let u_age = 20;
// let u_age = 30;
// u_age = 30;
// console.log( u_age );

// const - 중복 선언 불가능, 재할당 불가능, 블록레벨 스코프 (상수)
// const gender = "남자";
// gender = "여자";

// ----------------
// 스코프
// ----------------

// 전역 스코프 _ 어디서든지 접근 가능 
let u_name = "홍길동";


// 함수 레벨 스코프
function test() {
    console.log(u_name);
    let u_age = 30;
    console.log(u_age);
}

// 블록 레벨 스코프 _ 중괄호{}안에 변수는 {}안에서만 사용 가능
function test1() {
    let v_test1 = "함수 : 테스트1";
    if( true )
    {
        var v_var1 = "var로 선언"; // var는 블록 밖에서도 사용 가능
    }
    console.log(v_test1);
    // console.log(v_var1);
}

// ----------------
// 호이스팅 ( hoisting )
// ----------------
// 인터프리터가 변수와 함수의 메모리 공간을 선언 전에 미리 할당 하는 것
// (인터프리터 : 프로그래밍 언어의 소스 코드를 바로 실행하는 컴퓨터 프로그램 또는 환경)
// 코드가 실행되기 전에 변수와 함수를 최상단에 끌어 올려지는 것
// console.log( hTest() );
// console.log( "56 line : " + varTest );
// console.log( "57 line : " + letTest );
console.log( "58 line : " + constTest );

function hTest() {
    return "함수 : hTest";
}

var varTest = "var : var변수";
// console.log( "63 line : " + varTest );

let letTest = "let 변수";
const constTest = "const 상수";