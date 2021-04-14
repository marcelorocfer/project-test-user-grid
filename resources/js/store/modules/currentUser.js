import Axios from "axios";

const state = {
    user: {}
};
const getters = {};
const actions = {
    getUser({commit}) {
        axios.get("/api/user/current")
            .then(response => {
                commit('setUser', response.data);
            })
    },
    loginUser( {}, user ) {
        axios.post("/api/user/login", {
            email: user.email,
            password: user.password
        })
        .then(response => {
            if (response.data.access_token) {
                localStorage.setItem(
                    "user_token",
                    response.data.access_token
                );

                window.location.replace("/home");
            }
        })
    },
    logoutUser() {
        localStorage.removeItem("user_token");
        window.location.replace("/login");
    }
};
const mutations = {
    setUser(state, data) {
        state.user = data;
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}