<template>
    <div class="wrap">
        <HeaderComponent @insertList = insertList($event)></HeaderComponent>
        <ContainerComponent :todolist = "todolist"></ContainerComponent>
    </div>
</template>
<script>
import HeaderComponent from "./HeaderComponent.vue";
import ContainerComponent from "./ContainerComponent.vue";
import { ConstantTypes } from "@vue/compiler-core";

export default {
    name: 'App',
    data() {
        return {
            todolist: [],
            content:'',
        }
    },
    created() {
        axios.get("/api/items")
            .then((res) => {
                // console.log(res);
                this.todolist = res.data;
            })
            .catch( err => {
                this.log(err);
            })
    },
    methods: {
        insertList(content) {
            const data = {
                item: {
                    'content' : content,
                },
            }
            const header = {
                headers: {
                    'Content-Type' : 'application/json'
                }
            };
            axios.post("/api/items", data, header)
            .then((res) => {
                console.log(res);
                this.todolist.unshift(res.data);
            })
            .catch( err => {
                this.log(err);
            })
        }
    },
    components: {
        HeaderComponent,
        ContainerComponent,
  }
}
</script>
<style>
/* @import url("../common.css"); */
    * {
        margin: 0;
        padding: 0;
    }
    .wrap {
        width: 100%;
    }
</style>