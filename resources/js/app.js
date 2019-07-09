
import InstantSearch from 'vue-instantsearch';

require('./bootstrap');

window.Vue = require('vue');

Vue.use(InstantSearch);



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
};

window.App = {
  init : function () {
      require('./components/feed');
  }
};

$(document).ready(function () {
    App.init();
});