require("./bootstrap");

window.Vue = require("vue");

import iosAlertView from "vue-ios-alertview";
Vue.use(iosAlertView);

import UsersComponent from "./components/UsersComponent.vue";
import ProfileComponent from "./components/ProfileComponent.vue";
import AdduserComponent from "./components/AdduserComponent.vue";
Vue.component("users-component", UsersComponent);
Vue.component("profile-component", ProfileComponent);
Vue.component("adduser-component", AdduserComponent);

const app = new Vue({
    el: "#app",
    data() {
        return {
            user: AuthUser,
        };
    },
    methods: {
        userCan(permission) {
            if (this.user && this.user.allPermissions.includes(permission)) {
                return true;
            }
            return false;
        },
        MakeUrl(path) {
            return BaseUrl(path);
        },
    },
});
