
console.log( Math.ceil(3.33) );
console.log( Math.round(3.5) );
console.log( Math.floor(3.8) );


// random() : 0이상 ~ 1미만 사이의 수를 랜덤으로 가져옴
console.log( Math.random() );

// random() 메소드를 이용해서 1~10까지 랜덤으로 나오게 해주세요.
const random = Math.ceil((Math.random() * 10))
// const random = Math.floor((Math.random() * 10)+1)
console.log( random );



// let ran = Math.random();
// console.log(ran);
// for( let i = 0; i < 1000000; i++){
//     ran = i;
// }
// console.log(ran);