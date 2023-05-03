
let arr = [1, 2, 3, 4, 5];


// push() 메소드 : 배열에 값의 맨 뒤에 추가
// 배열에 값을 넣을 때 순서대로 넣기 _중간에 비워 둔채 넣지 않기를 권장
arr.push(6);

// delete : 배열의 값 삭제(인덱스는 남아 있다.)
delete arr[5];

// splice() 메소드 : 배열의 요소를 삭제 또는 교체
// 첫번째_ 매게 변수 방번호, 두번째_ 매게 변수 몇개까지 삭제,교체하는지, 세번째_ 매게변수 넣어줄 값
arr = [1, 2, 3, 4, 5];
arr.splice(2, 1); // 배열에서 arr[2]가 삭제
arr.splice(2, 0, 3); // 배열의 arr[2]뒤에 값 3인 인덱스를 추가
arr.splice(2, 1, 3); // 배열의 arr[2]의 값을 3 으로 변경
arr.splice(2, 1, 3, 5, 6, 7); // 3번째 매게변수부터는 가변파라미터로 모든 값을 추가

// indexOf() 메소드 : 배열에서 특정 요소를 찾는데 사용
let arr2 = [1, 2, 3, 4, 5];
arr2.indexOf(3);

// lastIndexOf() 메소드 : 배열에서 가장 마지막 위치의 특정 요소를 찾는데 사용
arr2 = [1, 2, 3, 4, 3, 5, 6, 6, 1];
arr2.lastIndexOf(6);

// slice() 메소드 :

// 예제--------------------------------------------

// let fileName = 'javaScript.log.php';
// // 아래처럼 콘솔에 출력해 주세요. ( slice() 메소드를 이용 )
// // javaScript
// // log
// // php

// // slice
// result1 = fileName.slice(0, 10);
// result2 = fileName.slice(-7, 14);
// result3 = fileName.slice(15);

// console.log(result1);
// console.log(result2);
// console.log(result3);

// // indexOf, lastIndexOf, slice
// let first_dot = fileName.indexOf(".");
// let last_dot = fileName.lastIndexOf(".")

// res1 = fileName.slice(0, first_dot);
// res2 = fileName.slice(first_dot +1, last_dot);
// res3 = fileName.slice(last_dot +1);

// console.log(res1);
// console.log(res2);
// console.log(res3);

// // split for_in
// let jbSplit = fileName.split('.');
// for ( let i in jbSplit ) {
//   document.write( jbSplit[i] );
// }
// console.log(jbSplit);


// // split foreach
// let spl = fileName.split('.');
// spl.forEach(function (i) {
//     console.log(i);
// });

// --------------------------------------------

// concat() 메소드 : 배열들의 값을 기존 배열에 합쳐서 새배열을 반환
let arrCon1 = [1, 2, 3];
let arrCon2 = [10, 20, 30];
let arrCon4 = [100, 200, 300];
let arrCon3 = arrCon1.concat(arrCon2, arrCon4);
// console.log(arrCon3);


// includes() 메소드 : 배열이 특정요소를 가지고 있는지 판별
let arrInc = [1, 2, 3, 4];
// console.log(arrInc.includes( 2 ));


// sort() 메소드 : 배열의 요소를 아스키코드 기준으로 정렬해서 반환
const arrSort = [6, 3, 5, 8, 92, 3, 7, 5, 100, 80, 40];
// arrSort.sort(); // [100, 3, 3, 40, 5, 5, 6, 7, 8, 80, 92]
arrSort.sort( ( a, b ) => a - b ); // 오름차순 정렬
arrSort.sort( 
    function ( a, b ) {
        return a - b;
    } 
);
arrSort.sort( ( a, b ) => b - a ); // 내림차순 정렬


// join() 메소드 : 배열에 모든 요소를 연결해서 하나의 문자열로 만들어줌
const arrJoin = ["안녕", "하세", "요"];
arrJoin.join(); // '안녕,하세,요'
arrJoin.join(''); // '안녕하세요'
arrJoin.join('/'); // '안녕/하세/요'


// every() 메소드 : 배열의 요소들이 주어진 함수를 통과하는지 판별
const arrEvery = [1, 2 ,3, 4, 5];
let result = arrEvery.every( function( val ) {
                                return val <= 4;
                            });
console.log(result);

// 모든 요소의 2로 나눈 나머지가 0인지 판별해주세요.
// let result2 = arrEvery.every( function( val ) {
//                                 return val %2 === 0
//                             });

// 화살표 함수
let result2 = arrEvery.every( ( val ) => val % 2 === 0 ); //파라미터를 2로 나눠서 확인 _ return 타입은 boolean
console.log(result2);


// some() 메소드 : 배열 안에 어떤 요소라도 주어진 함수를 통과하는지 판별
const arrSome = [1, 2 ,3, 4, 5];
let result_2 = arrSome.some( val => val >= 2 );
// console.log(result_2);


// filer() 메소드 : 주어진 함수를 통과하는 모든 요소를 모아서 새로운 배열로 반환
const arrFilter = [1, 2, 3, 4, 5];
let result_3 = arrFilter.filter( val => val >= 3 );
console.log( result_3 );

