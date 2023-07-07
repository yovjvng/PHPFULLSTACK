<template>
    <div class="bg_black" v-if="modalFlg">
        <button @click="$emit('closeModal')">X</button>
        <div class="bg_white">
            <img src="" />
            <h4>{{ product[productNum].name }}</h4>
            <p>{{ product[productNum].content }}</p>
            <p>{{ product[productNum].price }}</p>
            <button>+</button><span>1</span>
            <button>-</button>
        </div>
    </div>
</template>
<script>
export default {
    name: "Modal",
    props: {
        modalFlg: Boolean,
        product: Object,
    },
};
</script>
<style></style>
