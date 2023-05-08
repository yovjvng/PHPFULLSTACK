
// 1. 버튼을 클릭시 아래 내용의 알러트가 나옵니다.
        // "안녕하세요."
        // "숨어 있는 div를 찾아보세요."

function btnclick(){
    alert('안녕하세요,\n숨어 있는 div를 찾아보세요.');

}

const div1 = document.querySelector('.div1');
div1.style.backgroundColor ='transparent';
let str1 = Math.round(Math.random()*1000);
let str2 = Math.round(Math.random()*1000);
div1.style.top = str1 + 'px';
div1.style.left = str2 + 'px';

div1.addEventListener( 'mouseenter',  function() {
    if(div1.style.backgroundColor ==='transparent'){
        alert('두근두근');
    }
});



// 2. 특정 영역에 마우스 포인터가 진입하면 아래 내용의 알러트가 나옵니다.
        // "두근두근" 
// const div1 = document.querySelector('.div1');
// div1.addEventListener('mouseenter', () => alert('두근두근'), { once : true});



// 3. 2번의 영역을 클리하면 배경색이 베이지 색으로 바뀌어 나타납니다.

div1.addEventListener( 'mousedown', function() {
    if (div1.style.backgroundColor === 'transparent') {
        div1.style.backgroundColor = 'blue';
    } else {
        div1.style.backgroundColor ='transparent';
        alert('다시 숨는다.');
    }
});






// 4. 3번의 상태에서 다시 한번 더 클릭하면 아래의 알러트를 출력하고, 배경색이 흰색으로 바뀌어 안보이게 됩니다.
        // "다시 숨는다."

// 5. 박스 랜덤으로 나타나게 하기

// const random = Math.random();
