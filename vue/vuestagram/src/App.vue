<template>
    <!-- 헤더 -->
    <div class="header">
        <ul>
            <li class="header-button header-button-left" @click="$store.commit('changeTabFlg', 0); $store.commit('clearState');" v-if="$store.state.tabFlg != 0">취소</li>
            <li>
                <img class="logo" alt="Vue logo" src="./assets/logo.png" />
            </li>
            <li class="header-button header-button-right" @click="$store.commit('changeTabFlg', 2);" v-if="$store.state.tabFlg == 1">다음</li>
            <li class="header-button header-button-right" @click="$store.dispatch('writeContent');" v-if="$store.state.tabFlg == 2">작성</li>
        </ul>
    </div>
<!-- {{ $store.state.lastId }} -->
    <!-- 컨텐츠 -->
    <ConteinerComponent></ConteinerComponent>

    <button v-if="$store.state.addBtnFlg && $store.state.tabFlg == 0" @click="$store.dispatch('getMoreList');">더보기</button>


    <!-- 푸터 -->
    <div class="footer">
        <div class="footer-button-store">
            <label for="file" class="label-store">+</label>
            <input @change="updateImg" accept="image/*" id="file" type="file" class="input-file" />
        </div>
    </div>
</template>

<script>
import ConteinerComponent from "./components/ConteinerComponent.vue";

export default {
    name: "App",
    created() {
      this.$store.dispatch('getMainList');
    },
    methods: {
      updateImg(e) {
        let file = e.target.files;
        let imgFile = file[0];
        // console.log(e.target);
        // console.log(e.target.value);
        let imgUrl = URL.createObjectURL(file[0]); // 파일로 가져오기
        this.$store.commit('changeImgUrl', imgUrl); // 이미지 url
        this.$store.commit('uploadImgFile', imgFile);
        this.$store.commit('changeTabFlg', 1);
        e.target.value = '';
      }
    },
    components: {
        ConteinerComponent,
    },
};
</script>

<style>
@import url("./assets/css/common.css");
#app {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
}
</style>
