import { createStore } from "vuex";
import axios from "axios";

const store = createStore({
    state() {
        return {
            boardData: [], // 게시글 데이터 저장 변수
            lastid: '', // 가장 마지막에 로드된 게시물의 ID
            addBtnFlg: true, // 더보기 버튼 표시용 Flg
            tabFlg: 0, // 탭UI flg (0:메인, 1:필터, 2:작성)
            imgUrl: '', // 이미지 url
            filter:'', // 필터명
        };
    },
    mutations: { // 일반적인 처리하는 곳
        // 초기 데이터 셋팅용
        createBoardData(state, data) {
            state.boardData = data;
            this.commit('changeLastId', data[data.length-1].id);
        },
        // 더보기 데이터 셋팅용
        addBoardData(state, data) {
            state.boardData.push(data);
            this.commit('changeLastId', data.id);
        },
        // lastId 변경
        changeLastId(state, id) {
            state.lastId = id;
        },
        // 탭UI flg 변경
        changeTabFlg(state, num) {
            state.tabFlg = num;
        },
        // 이미지 URL 변경
        changeImgUrl(state, imgUrl) {
            state.imgUrl = imgUrl;
        },
        // 필터 변경 적용
        changeFilter(state, filter) {
            state.filter = filter;
        },
        // 초기화
        clearState(state) {
            state.filter='';
            state.imgUrl ='';
        }
    },
    actions: { // 비동기 처리, 시간이 오래걸리는 것들 처리하는 곳
        getMainList(context) {
            axios.get("http://192.168.0.66/api/boards").then((res) => {
                // console.log(res.data);
                context.commit('createBoardData', res.data);
            })
            .catch( err => {
                console.log(err);
            })
        },
        getMoreList(context) {
            axios.get('http://192.168.0.66/api/boards/'+ context.state.lastId)
            .then(res => {
                if(res.data){
                    context.commit('addBoardData', res.data);
                } else {
                    context.state.addBtnFlg = false;
                    alert('더이상 내용이 없습니다.');
                }
            })
            .catch( err => {
                console.log(err);
            })
        }
    },
});

export default store;
