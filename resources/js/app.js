
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

    let $feedAggregation = $('#feed-aggregation');
    $feedAggregation.change(function () {

        if($feedAggregation.val() === 'range'){
            $('#range-answer').removeClass('d-none').find('input').removeAttr('disabled');
            $('#average-answer').addClass('d-none').find('input').attr('disabled');
        }else{
            $('#average-answer').removeClass('d-none').find('input').removeAttr('disabled');
            $('#range-answer').addClass('d-none').find('input').attr('disabled');

        }

    });

});