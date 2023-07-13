<template>
    <div class="contents" v-for="item in todolist">
        <div class="list">{{ item.content }}</div>
        <div class="created">{{ item.created_at }}</div>
    </div>
</template>
<script>
export default {
    name: "ContainerComponent",
    props: {
        todolist: Object,
    },
}
</script>
<style>
    .contents {
        padding: 5px;
        width: 550px;
        height: 150px;
        margin: 0 auto;
        background-color: #dde1e7;
    }
    .list {
        margin: 0 auto;
        height: 50px;
        width: 500px;
        background: #dde1e7;
        box-shadow: inset -3px -3px 7px #ffffff73, inset 3px 3px 5px rgba(94, 104, 121, .288);
        border-radius: 5px;
    }
    .created {
        position: relative;
        float: right;
        right: 5%;
    }
</style>