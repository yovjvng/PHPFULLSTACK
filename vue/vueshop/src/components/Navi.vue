<template>
    <!-- 네비 -->
    <div class="nav">
        <ul>
            <li v-for="(nav, i) in navList" :key="i">{{ nav }}</li>
        </ul>
    </div>
</template>
<script>
export default {
    name: "Navi",
    props: {
        navList: Array, // 배열로 가져와서 array
    },
};
</script>
<style></style>
