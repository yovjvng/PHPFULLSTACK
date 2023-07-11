<template>
    <div class="bg_black" v-if="modalFlg">
        <!-- $emit : 상위 클래스로 메세지 전달 -->
        <button
            class="btn"
            @click="
                $emit('closeModal');
                inputTest = 0;
            "
        >
            X
        </button>
        <div class="bg_white">
            <img :src="products[productNum].img" />
            <h4>{{ products[productNum].name }}</h4>
            <p>{{ products[productNum].content }}</p>
            <p>{{ inputTest * products[productNum].price }}</p>
            <input type="text" v-model="inputTest" />
            <!-- <span>{{ inputTest * products[productNum].price }}</span> -->
            <!-- <button @click="$emit('plus')">+</button>
            <span>{{ products[productNum].count }}</span>
            <button @click="$emit('minus')">-</button> -->
        </div>
    </div>
</template>
<script>
export default {
    name: "Modal",
    props: {
        modalFlg: Boolean,
        products: Array,
        productNum: Number,
    },
    data() {
        // 데이터 바인딩
        return {
            inputTest: 0,
        };
    },
    watch: {
        // 실시간 감시 함수 정의 영역
        inputTest(input) {
            if (input > 10) {
                alert("10개까지만 구매 가능합니다.");
                this.inputTest = 10;
            }
        },
    },
};
</script>
<style></style>
