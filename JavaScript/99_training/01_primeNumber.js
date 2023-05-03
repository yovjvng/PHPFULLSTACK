// let num = 100;

// 1. 1~입력값의 요소를 가지는 배열을 만들어 주세요.
// 2. 그 배열에서 소수만 찾아서 새로운 배열을 만들어 주세요.
// 3. 그 배열을 알러트로 출력해 주세요.
//             alert('경고')
// 4. filter() 필수 사용

// function getPrimeNumber(){
//     let num = 100;
//     let arr_num = [];
//     for (let i = 2; i <= num; i++){
//         let isPrimeNumber = true;

//         for(let j = 2; j < i; j++){
//             if(i % j === 0){
//                 isPrimeNumber=false;
//             }
//         }

//         if(isPrimeNumber){
//             arr_num.push(i);
//         }
//     }
//     return arr_num;
// }

    let num = 100;
    let arr_num = [];
    for (let i = 1; i <= num; i++){
        arr_num[i] = i + 1;
    }

let arr_dec = arr_num.filter(
    function ( p ) {
        if( p === 1 ){
            return false;
        }

        for (let i = 2; i * i <= p; i++){
            if( p % i === 0 ){
                return false;
            }
        }
        return true;
    }
)
alert(arr_dec);


// 짝수만 출력

// let num = 100;
//     let arr_num = [];
//     for (let i = 1; i < num; i++){
//         arr_num[i] = i + 1;
//     }

// let arr_Even = arr_num.filter(
//     function ( a ) {
//         return a % 2 === 0;
//     }
// )
// console.log(arr_Even);

// let arr_odd = arr_num.filter(
//     function ( a ) {
//         return a % 2 === 1;
//     }
// )
// console.log(arr_odd);