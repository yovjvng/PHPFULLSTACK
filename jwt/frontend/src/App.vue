<template>
  <div>
    <router-view></router-view>
  </div>
</template>

<script>
import router from './router.js';

export default {
  name: 'App',
  methods: {
    login() {
      router.push('main');
      // axios.get('http://localhost:8000/api/token?id=ppp')
      // .then(res => {
      //   console.log(res.data);
      //   this.$store.state.token = res.data.token;
      // })
      // .catch(err => {
        // if(err.status >= 400) {
          // console.log(err);
        // }
      // })
    },
    logout() {
      router.push('login');
    }
  },
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
