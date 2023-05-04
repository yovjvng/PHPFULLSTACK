
// 1. 요소를 선택하는 방법
//  1-1. ID로 선택하는 방법
const title = document.getElementById('title');

//  1-2. 태그명으로 요소를 선택하는 방법
const li = document.getElementsByTagName('li');

// 탕수육은 노란색, 짬뽕은 빨강색으로 변경
li[1].style.color = 'blue';
li[2].style.color = 'red';

// 탕수육, 볶음밥, 깐풍기는 배경색상을 오렌지색
// 짜장면 짬뽕, 라조기는 배경색상을 베이지색

// let num = li.length;
// for( let i = 0; i < num; i++ ){
//     if( i % 2 === 0 ){
//         li[i].style.backgroundColor = 'lavender';
//     }
//     else{
//         li[i].style.backgroundColor = 'pink';
//     }
// }

//  1-3. 클래스명으로 요소를 선택하는 방법
const noneli = document.getElementsByClassName('none_li');

//  1-4. CSS 선택자로 요소를 선택하는 방법
// querySelector() : 복수의 요소가 있다면 가장 첫번째 것만 선택
const title2 = document.querySelector('#title');
const li2 = document.querySelector('.none_li');
// querySelectorAll() : 복수의 요소라면 전부 선택
const li3 = document.querySelectorAll('.none_li');


// 2. 요소 조작하기

//  2-1. 콘텐츠를 조작하는 방법
// textContent :  순수한 텍스트 데이터를 전달, 이전의 태그들은 모두 제거
title.textContent ='<span>바꿧지롱~</span>';

// innerHTML : 태그는 태그로 인식해서 전달, 이전의 태그들은 모두 제거
title.innerHTML = '<span>inner로 바꿧지롱~</span>';


// 요소에 속성을 추가
const it = document.getElementById('it');
// it.setAttribute('placeholder','setAttribute로 삽입');

const aa = document.getElementById('aa');
aa.setAttribute('href', 'http://www.naver.com');

// 요소에 속성을 제거
it.removeAttribute('placeholder');

// 마우스 올리면 생기는 event
it.addEventListener('mouseenter', function(){
    it.setAttribute('placeholder','입력');
})
it.addEventListener('mouseleave', function(){
    it.removeAttribute('placeholder');
})

// 요소의 스타일링
// 인라인으로 스타일 추가
// aa.style.textDecoration = 'none';
// aa.style.color = 'skyblue';

// 클래스로 스타일 추가
aa.classList.add('aa1', 'aa2', 'aa3');


// 새로운 요소 만들기
// 요소 만들기 _ 태그명이 들어감
const cli = document.createElement('li');
cli.innerHTML = '야끼우동';

// 요소를 자식요소의 가장 마지막에 삽입
const ul = document.getElementsByTagName('ul');
ul[0].appendChild(cli);

// 요소를 특정 위치에 삽입하는 방법
const zzam = document.querySelector('li:nth-child(3)');
ul[0].insertBefore( cli, zzam );


// 해당 요소를 지우는 방법
// cli.remove();

// 라조기와 깐풍기 사이에 "잡채밥", "동파육" 순서대로 넣고, 배경색상 넣은것도 제대로 나오도록 수정
const a = document.createElement('li');
a.innerHTML = '잡채밥';
const b = document.createElement('li');
b.innerHTML = '동파육';
const add1 = document.querySelector('li:nth-child(7)');
ul[0].insertBefore( a, add1 );
ul[0].insertBefore( b, add1 );


let num = li.length;
for( let i = 0; i < num; i++ ){
    if( i % 2 === 0 ){
        li[i].style.backgroundColor = 'lavender';
    }
    else{
        li[i].style.backgroundColor = 'pink';
    }
}

