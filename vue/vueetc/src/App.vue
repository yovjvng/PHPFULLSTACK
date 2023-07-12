<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <h1>App.vue</h1>

  <PostComponent :propsTest="1"></PostComponent>

  <p>{{ data.name }}</p>

<button @click="data.name = '김김김'">김김김</button>
<br><br>

<p>{{ data2.name }}</p>

<button @click="data2.name = 'data2'">data2</button>

<!-- <h1>{{ test }}</h1>
<button @click="test = '김김김'">김김김</button> -->

  <!-- <router-link to="/">홈으로</router-link>
  <router-link to="/post">POST</router-link>
  
  <router-view :test="222"></router-view> -->

  <!-- <ContainerComponent v-if="!flg"></ContainerComponent>
  <PostComponent v-if="!flg"></PostComponent>
  <button @click="flg = !flg"></button> -->

</template>

<script>
import PostComponent from './components/PostComponent.vue';
import { ref, reactive } from 'vue';

export default {

  name: 'App',
  setup() {
    let data = ref({
      name: '홍길동',
      age: 20,
    });
    let data2 = reactive({
      name: '철수',
      age: 5,
    });

    let test = 'aaa';

    return { test, data, data2 };
  },
  components: {
    PostComponent,
  }
}

</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
