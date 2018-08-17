<template>
  <div id="app" class="font-sans font-normal text-black leading-normal bg-white">
    <Header />

    <div class="container mx-auto">
      <div class="m-4">
        <Breadcrumb />
        <h1 class="text-5xl">
          Software
        </h1>
        <p class="text-xl">Welcome to your one-stop-shopping center for software!<br>This is a collection of free programming tools and documentation that you may find useful.</p>
        <div class="flex flex-wrap justify-center mt-8 w-full">
          <Card title="Git Clients" color="bg-orange" href="#" />
          <Card title="Text Editors" color="bg-green" href="#" />
          <Card title="IDEs" color="bg-purple" href="#" />
          <Card title="Shells for Windows" color="bg-blue" href="#" />
          <Card title="FTP Clients" color="bg-red" href="#" />
          <Card title="Misc" color="bg-black" href="#" />
        </div>
      </div>
    </div>

    
    <Footer />
  </div>
</template>

<script>
import './assets/styles/main.css'
import Header from './components/sections/Header.vue'
import Footer from './components/sections/Footer.vue'
import Breadcrumb from './components/Breadcrumb.vue'
import Card from './components/Card.vue'

export default {
  name: 'CardsPage',
  components: {
    Header, Breadcrumb, Card, Footer
  }
}
</script>

<style></style>
