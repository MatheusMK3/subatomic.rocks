<template>
  <website-page :background="background" :dark-scheme="true" background-offset="150px">
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2 mt-0 mt-xl-4">
          <div class="grid-row grid-align-mid grid-mt-h mb-5 mb-xl-0">
            <h1>
              Desenvolvendo o futuro.<br class="d-block d-xl-none" />
              Pixel por pixel.
            </h1>
          </div>
          <div class="grid-row grid-align-top">
            <h2>Somos uma empresa 100% digital, focada em entregar as melhores experiências web aos nossos clientes e seus usuários.</h2>
          </div>
        </div>
      </div>
    </div>
  </website-page>
</template>

<script>
export default {
  name: 'home',
  data () {
    return {
      background: require('../assets/home-bg.jpg')
    }
  }
}
</script>
