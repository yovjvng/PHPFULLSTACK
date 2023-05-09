// setTimeout(function() {
//     console.log('A');
// },3000);

// setTimeout(function() {
//     console.log('B');
// },2000);

// setTimeout(function() {
//     console.log('C');
// },1000);


// 1. 콜백함수를 이용해서 A, B, C 순서로 콘솔에 출력해 주세요.
// function myCallBack(i) {
//     return i ;
// }

// setTimeout(function(fn) {
//     console.log(fn('A'));
// },3000);

// setTimeout(function(fn) {
//     console.log(fn('B'));
// },2000);

// setTimeout(function(fn) {
//     console.log(fn('C'));
// },1000);


// printNum(myCallBack);

function func1(next) {
	setTimeout(()=>{
		console.log('A');
		if(next) {
			next();
		}
	});
}

function func2(next) {
	setTimeout(()=>{
		console.log('B');
		if(next) {
			next();
		}
	});
}

function func3(next) {
	setTimeout(()=>{
		console.log('C');
		if(next) {
			next();
		}
	});
}

func1(()=>{
	func2(()=>{
		func3();
	});
});







// 2. promise를 이용해서 A, B, C 순서로 콘솔에 출력해 주세요.
// ( Promise를 함수로 등록해서 구현 )




// function myPromise(){
//     return new Promise(resolve => {
//         setTimeout(() => resolve(A), 3000)
//         setTimeout(() => resolve(B), 2000)
//         setTimeout(() => resolve(C), 1000)
//     });
// }
// myPromise()
// .then(result => {console.log(result);}) 
// .then(result => {console.log(result);}) 
// .then(result => {console.log(result);}) 



function myPromise(ms, value){
    return new Promise(resolve => {
        setTimeout(() => {
            resolve(console.log(value));
        }, ms)
    });
}

myPromise(300, 'A')
.then(() => myPromise(200, 'B'))
.then(() => myPromise(100, 'C'));