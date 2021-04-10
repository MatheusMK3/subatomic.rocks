<template>
  <div id="app">
    <nav>
      <div class="wrapper">
        <img id="logo" src="./assets/logo.svg" alt="Subatomic" />
        <div class="menu-wrapper">
          <a class="menu-toggle" href="javascript:void(0)">
            <img src="./assets/icon/menu.svg" alt="Menu" title="Menu" />
          </a>
          <ul>
            <li><a href="#sobre">Sobre</a></li>
            <li><a href="#servicos">Serviços</a></li>
            <li><a href="#clientes">Clientes</a></li>
            <li><a href="#contato">Contatos</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <header>
      <div class="wrapper">
        <h2>
          Desenvolvemos o futuro.
          <br class="break mobile small" />
          Um pixel de cada vez.
        </h2>
      </div>
    </header>
    <main>
      <div class="wrapper">
        <section class="intro" id="sobre">
          <p>Fundada em 2018, a Subatomic nasceu com a ideia de ser totalmente digital e officeless, utilizando da tecnologia para ser 100% eficiente, independente do local de trabalho.</p>
        </section>

        <section class="services" id="servicos">
          <h3>Serviços</h3>
          <ul v-if="services && services.length > 0">
            <li v-for="(service, i) in services" v-bind:key="i" :style="{ 'animation-delay': `${ i * 0.1 }s` }">
              <img class="icon" :src="image(service.Icon)" :alt="service.Name" />
              <h4 class="title">{{ service.Name }}</h4>
              <p class="desc">{{ service.Description }}</p>
            </li>
          </ul>
          <ul v-else>
            <li v-for="(service, i) in [1, 2, 3, 4]" v-bind:key="i" class="placeholder"></li>
          </ul>
        </section>

        <section class="clients" id="clientes">
          <h3>Clientes e Parceiros</h3>
          <p class="subtitle">Conheça alguns de nossos clientes e parceiros de negócios:</p>
          <ul v-if="clients && clients.length > 0">
            <li v-for="(client, i) in clients" v-bind:key="i" :style="{ 'animation-delay': `${ i * 0.1 }s` }">
              <img class="icon" :src="image(client.Logo)" :alt="client.Name" :title="client.Name" />
            </li>
          </ul>
          <div v-else class="loader">
            <img src="./assets/loader.svg" alt="Carregando..." />
          </div>
        </section>
      </div>
    </main>
    <footer id="contato">
      <div class="wrapper">
        <div class="column">
          <h3>Fale Conosco</h3>
          <p class="subtitle">Vamos marcar uma call?</p>

          <div class="contact-info">
            <img src="./assets/icon/whatsapp.svg" alt="WhatsApp" />
            <span>+55 (19) 2222-0091</span>
          </div>
          <div class="contact-info">
            <img src="./assets/icon/email.svg" alt="E-mail" />
            <span>contato@subatomic.rocks</span>
          </div>
          <div class="contact-info">
            <img src="./assets/icon/messenger.svg" alt="Messenger" />
            <span>@subatomic.rocks</span>
          </div>
          <div class="contact-info">
            <img src="./assets/icon/instagram.svg" alt="Instagram" />
            <span>@subatomic.rocks</span>
          </div>
        </div>
      </div>
    </footer>
  </div>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'
import axios from 'axios'

const API_URL = 'https://content.subatomic.rocks'

export default {
  name: 'App',
  components: {
    HelloWorld
  },
  data () {
    return {
      clients: [],
      services: [],
    }
  },
  methods: {
    image(imgObj) {
      return `${API_URL}${imgObj.url}`
    },
  },
  async mounted () {
    this.services = (await axios.get(`${API_URL}/services`)).data
    this.clients = (await axios.get(`${API_URL}/clients`)).data
  }
}
</script>

<style lang="scss">
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap');
@import './scss/normalize.css';
@import './scss/colors';

html, body {
  margin: 0px;
  padding: 0px;

  font-size: 18px;
  color: $accent;
  background-color: $bg-normal;
}

#app {
  font-family: Quicksand, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;

  display: flex;
  flex-direction: column;

  --column-count: 1;
  --column-template: '.';

  @import './scss/main';
}
</style>
