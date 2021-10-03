require("./bootstrap");

window.Vue = require("vue");
import VueLazyload from 'vue-lazyload'
import { BootstrapVue, BootstrapVueIcons } from "bootstrap-vue";
import "bootstrap-vue/dist/bootstrap-vue.css";
import Swal from "sweetalert2";
window.Swal = Swal;
Vue.use(VueLazyload)
Vue.use(BootstrapVue);
// or with options
Vue.use(VueLazyload, {
    preLoad: 1.3,
    attempt: 1
})




Vue.filter("strLimit", function(value) {
    if (value)
        if (value.length > 20)
            return (value.slice(0, 15) + '...');
        else
            return value;
    else
        return value;
});
Vue.component('product-component', require('./components/frontend/product/ProductsComponent.vue').default);
Vue.component('lazyload-component', require('./components/frontend/LazyLoadComponent.vue').default);
Vue.prototype.$base_url = window.location.origin;
Vue.prototype.$errorImageUrl = window.location.origin + "/frontend/img/404.gif";
Vue.prototype.$LoadingImageUrl = window.location.origin + "/frontend/img/loading.gif";
Vue.prototype.$hostapi_url = window.location.origin + "/api";
Vue.prototype.$currency = "Rs.";
Vue.prototype.$productviewUrl = window.location.origin + "/product/"

const app = new Vue({
    el: "#app",
});
