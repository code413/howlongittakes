
import InstantSearch from 'vue-instantsearch';

require('./bootstrap');

window.Vue = require('vue');

Vue.use(InstantSearch);
// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


Vue.component('example-component', require('./components/ExampleComponent.vue').default);

window.onload = function () {

    const app = new Vue({
        el: '#search',
    });
}