

// AJAX : 웹 페이지 전체를 다시 로딩하지 않고도 일부분만을 갱신 할 수 있습니다.
// 대표적으로 XMLHttpRequest 방식과 fetch API 방식이 있습니다.

// https://picsum.photos/

// const url = "https://picsum.photos/v2/list?page=1&limit=5";
function makeurl() {
    const url = document.getElementById('urlput').value;
    fetch(url)
    .then(res => {return res.json()})
    .then(data => makeList(data))
    .catch(console.log);
}

const btn = document.getElementById('btn');


btn.addEventListener('mousedown', () => makeurl() );
const img_box = document.getElementById('img_box');

function makeList(data) {
    img_box.replaceChildren();
    // img_box.innerHTML ='';
    data.forEach(item => {
        console.log(item);
        const tagImg = document.createElement('img');
        tagImg.setAttribute('src', item.download_url); 
        // tagImg.setAttribute('width', '400px'); 
        // tagImg.style.width = '300px';
        tagImg.classList.add('image');

        img_box.appendChild(tagImg);
    });
}

// function loginButtonClick() {
//     console.log(urlput.value);
// };

// btn.addEventListener('mousedown', function () {
//     urlput.
// });


// const form = document.getElementById('form');

//     form.addEventListener('submit', (e) => {
//       e.preventDefault();

//       const payload = new FormData(form);

//       fetch('http://localhost:8080', {
//         method: 'POST',
//         headers: {
//           'Content-Type': 'application/x-www-form-urlencoded'
//         },
//         body: payload,
//       })
//       .then(res => res.json())
//       .then(data => console.log(data));
//     });
