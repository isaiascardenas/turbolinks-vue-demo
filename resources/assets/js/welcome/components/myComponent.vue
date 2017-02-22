<style>

</style>
<template>
    <section class="hero is-info is-medium">
      <div class="hero-body">
        <div class="container has-text-centered">
          <p class="title">Vue Test</p>
          <p class="subtitle">rut: {{ rutNumber | rut }}</p>
          <p>
              Nulla eget cursus ipsum. Vestibulum sit amet tellus at ante lobortis sodales nec ac quam. faucibus volutpat. Morbi eget enim vel ligula pulvinar vestibulum. Sed sodales sem sed nunc luctus, quis cursus nisl egestas. In facilisis massa enim, lobortis pretium neque aliquam in.
          </p>
          <div class="column">
            <input v-model="rut">
          </div>
          <p>
              Vue Model: {{ rut }}
          </p>
           <div class="column">
            <button @click="submit()" class="button">panel</button>
            <button @click="showAlert()" class="button">alert</button>
          </div>
          <div v-show="showPanel" class="column">
            <article class="tile is-child notification is-warning">
              <p class="title">Panel Test</p>
              <p class="subtitle">
                Mauris vel egestas turpis. Praesent vel lacus tempus, convallis justo et, porta dui. Donec lacus urna, tempus in turpis id, elementum tincidunt diam. Aliquam tristique elit eu mauris efficitur, eu dictum lacus aliquet. Praesent commodo velit id ante placerat fringilla sed sit amet enim. Phasellus molestie sem risus, non ultricies risus gravida vel. Ut leo ex, molestie ut nulla ac, faucibus pulvinar turpis.
              </p>
            </article>
          </div>
        </div>
      </div>
    </section>
</template>

<script>
    export default {
      data() {
        return {
          rut: '',
          rutNumber: '123456789',
          showPanel: false
        }
      },
      mounted() {
      },
      methods: {
        submit() {
          this.showPanel = true;
        },
        showAlert() {
          alert('Hello from vue component!')
        }
      }
    }
</script>
