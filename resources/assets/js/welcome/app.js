import Turbolinks from 'turbolinks'
import Vue from 'vue'
import VueTurbolinks from './mixins/vue-turbolinks.js'
import myComponent from './components/myComponent.vue'

Vue.mixin(VueTurbolinks);
Vue.use(require('vue-rut'));
Turbolinks.start()
// Vue.component('my-component', require('./components/myComponent.vue'));

var testAppEl = '#test-app';
initTestApp();

function initTestApp() {

  if (window.isInit) {
    return
  }
  window.isInit = true

  let loadTestApp = function(e) {
    if (!document.querySelector(testAppEl)) {
      return
    }
    if (e.type == 'pageshow' && window.testApp && !window.testApp._isDestroyed) {
      return
    }

    window.testApp = new Vue({
      el: testAppEl,
      components: {
        myComponent
      }
    });
  }

  document.addEventListener("turbolinks:load", loadTestApp);
  window.addEventListener("pageshow", loadTestApp);

  document.addEventListener("turbolinks:before-cache", function() {
    if (!document.querySelector(testAppEl)) {
      return
    }
    if (window.testApp) {
      window.testApp.$destroy()
    }
  });
}
