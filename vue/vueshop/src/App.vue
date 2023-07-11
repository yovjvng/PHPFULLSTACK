<template>
    <img id="logo" alt="Vue logo" src="./assets/logo.png" />
    <!-- 네비 -->
    <Navi :navList="navList" />
    <!-- <div class="nav">
        <ul>
            <li>HOME</li>
            <li>PRODUCTS</li>
            <li>ETC</li>
        </ul>
    </div> -->

    <div class="discount">
        <p>지금 당장 구매하시면, {{ timer }}% 할인</p>
    </div>
    <!-- <button @click="hookTest = !hookTest">훅 테스트</button>
    {{ hookTest }} -->
    <br />
    <!-- v-modal 테스트 -->
    <!-- <br /> -->
    <!-- <input type="text" @input="inputTest = $event.target.value" /> -->
    <!-- <input type="text" v-model="inputTest" />
    <br />
    <span>{{ inputTest }}</span>
    <br /> -->
    <!-- 모달 -->
    <!-- <div class="startTransition" :class="{ endTransition: modalFlg }"> -->
    <!-- 모달 애니메이션 효과 -->
    <transition name="modalTransition">
        <Modal
            @closeModal="
                modalFlg = false;
                inputTest = '';
            "
            :modalFlg="modalFlg"
            :products="products"
            :productNum="productNum"
        />
    </transition>
    <!-- </div> -->
    <!-- <Modal
        @closeModal="modalFlg = false"
        @plus="plus(productNum)"
        @minus="minus(productNum)"
        :modalFlg="modalFlg"
        :products="products"
        :productNum="productNum"
    /> -->
    <!-- <div class="bg_black" v-if="modalFlg">
        <button @click="modalFlg = false">X</button>
        <div class="bg_white">
            <img :src="products[productNum].img" />
            <h4>{{ products[productNum].name }}</h4>
            <p>{{ products[productNum].content }}</p>
            <p>
                {{ products[productNum].price * products[productNum].count }}원
            </p>
            <button @click="plus(productNum)">+</button
            ><span>{{ products[productNum].count }}</span>
            <button @click="minus(productNum)">-</button>
        </div>
    </div> -->

    <!-- 반복문 -->
    <ProductList
        @openModal="
            modalFlg = true;
            productNum = i;
        "
        :product="product"
        v-for="(product, i) in products"
        :key="i"
    />
    <!-- <div class="pro" v-for="(item, i) in products" :key="i">
        <img
            :style="styleW"
            :src="item.img"
            alt=""
            @click="
                modalFlg = true;
                productNum = i;
            "
        />
        <h4>{{ item.name }}</h4>
        <p>{{ item.price }}원</p>
        <p>{{ item.count }}개</p>
    </div> -->

    <!-- if -->
    <!-- <p v-if="1 == 1">if문 테스트</p> -->

    <!-- <div>
        <h4>{{ product1 }}</h4>
        <p>{{ price1 }}원</p>
    </div>
    <div>
        <h4 :style="styleR">{{ product2 }}</h4>
        <p>{{ price2 }}원</p>
    </div> -->
</template>

<script>
import data from "./assets/js/data.js";

import Navi from "./components/Navi.vue";
import ProductList from "./components/ProductList.vue";
import Modal from "./components/Modal.vue";

export default {
    name: "App",
    data() {
        // 데이터 바인딩
        return {
            timer: 20,
            // flg: false,
            // hookTest: false,
            inputTest: "",
            navList: ["HOME", "PRODUCTS", "ETC"],
            products: data,
            modalFlg: false,
            productNum: 0,
            product1: "양말",
            price1: "3800",
            product2: "바지",
            price2: "5000",
            styleR: "color:red",
        };
    },
    // updated() {
    //     this.flg = "true";
    // },
    mounted() {
        const stop = setInterval(() => {
            this.timer--;
            if (this.timer < 1) {
                clearInterval(stop);
            }
        }, 1000);
    },

    watch: {
        // 실시간 감시 함수 정의 영역
        // inputTest(input) {
        //     if (input == 3) {
        //         alert("3333");
        //         this.inputTest = "";
        //     }
        // },
        inputTest(input) {
            if (input == 3) {
                alert("3333");
                this.inputTest = "";
            }
        },
    },
    methods: {
        // 함수를 설정하는 영역
        plus(i) {
            this.products[i].count++;
        },
        minus(i) {
            if (this.products[i].count > 0) {
                this.products[i].count--;
            }
            // this.products[i].count--;
        },
        openModal(i) {
            this.modalFlg = true;
            this.productNum = i;
        },
    },
    components: {
        // 컴포넌트 정의
        // Navi  --> 이름이 똑같을 시 하나만 적어줘도 됨
        Navi: Navi,
        ProductList,
        Modal,
    },
};
</script>

<style>
@import url("./assets/css/app.css");

#app {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
}
</style>
