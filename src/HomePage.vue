<template>
  <div id="app" class="font-sans font-normal text-black leading-normal bg-white">
    <Header />
    <Hero />
    <IntroContent />
    <Projects />
    <Information />
    <Officers />
    <Quote />
    <Footer />
  </div>
</template>

<script>
import './assets/styles/main.css'
import Header from './components/sections/Header.vue'
import Footer from './components/sections/Footer.vue'
import Hero from './components/Hero.vue'
import IntroContent from './components/IntroContent.vue'
import Officers from './components/Officers.vue'
import Projects from './components/Projects.vue'
import Information from './components/Information.vue'
import Quote from './components/Quote.vue'
import Partners from './components/Partners.vue'

export default {
  name: 'HomePage',
  components: {
    Header, Footer, Hero, IntroContent, Officers, Projects, Information, Quote, Partners
  }
}
</script>

<style></style>
