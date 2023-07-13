<template>
    <div class="header">
        <h1>TO DO LIST</h1>
        <div class="add">
                <input name="content" v-model="content" id="content" type="text" placeholder="내용을 입력해주세요">
                <button type="submit" @click="$emit('insertList',content); ">등록</button>
        </div>
    </div>
</template>
<script>
export default {
    name: "HeaderComponent",
    data() {
        return {
            content: '',
        }
    },
}
</script>
<style>
    .header {
        padding: 5px;
        width: 550px;
        height: 150px;
        margin: 0 auto;
        background-color: #dde1e7;
    }
    h1 {
        text-align: center;
        font-family: "Arial Black", sans-serif;
        font-weight: bolder;
        font-size: 36px;
        color: #dde1e7;
        text-shadow: -3px -3px 7px #85848473;
    }
    .add {
        width: 200px;
        margin: 0 auto;
        margin-top: 20px;
    }
    input {
        width: 200px;
        height: 25px;
        background: transparent;
        outline: none;
        box-shadow: -3px -3px 7px #ffffff73, 3px 3px 5px rgba(94, 104, 121, .288);
    }
    button {
        color: #666666;
        width: 200px;
        border-radius: 5px;
        background: none;
        cursor: pointer;
        box-shadow: -3px -3px 7px #ffffff73, 3px 3px 5px rgba(94, 104, 121, .288);
        font-family: 'Cafe24Oneprettynight';
        font-weight: bold;
    }
    button:hover{
        box-shadow: inset -3px -3px 7px #ffffff73, inset 3px 3px 5px rgba(94, 104, 121, .288);
    }
</style>