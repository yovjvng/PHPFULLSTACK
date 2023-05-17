
function chkDuplicationId() {
    const id = document.getElementById('id');

    const url = "/api/user?id=" + id.value;

    // API
    fetch(url)
    .then(data => {return data.json();})
    .then(apiData => {
        const idspan = document.getElementById('errMsgId');
        if(apiData["flg"] === "1") {
            idspan.innerHTML = apiData["msg"];
        } else {
            idspan.innerHTML = apiData["msg"];
        }
    });
}