<template>
    <div class="pro">
        <img :src="product.img" alt="" @click="$emit('openModal')" />
        <h4>{{ product.name }}</h4>
        <p>{{ product.price }}원</p>
        <p>{{ product.count }}개</p>
    </div>
</template>
<script>
export default {
    name: "ProductList",
    props: {
        product: Object,
        productNum: Number,
    },
};
</script>
<style>
img {
    width: 300px;
}
</style>
