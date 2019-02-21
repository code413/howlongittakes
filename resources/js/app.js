
import InstantSearch from 'vue-instantsearch';

require('./bootstrap');

window.Vue = require('vue');

Vue.use(InstantSearch);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);



window.onload = function () {

    const app = new Vue({
        el: '#search',
        methods: {
            updateValue: () => {
                $('#search .ais-input').keyup(function () {
                    $('#new-question').val($(this).val());
                });
            }
        }
    });
}

$(document).ready(function () {

});