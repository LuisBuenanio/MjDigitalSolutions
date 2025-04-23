<template>
  <div class="min-h-screen bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-100">
   <Navbar />
    <Hero />
    <Services />
    <FeaturedProducts :productos="productos" />
    <ContactMap />
    <Footer />
  </div>
</template>

<script setup>
import Navbar from './Components/Navbar.vue'
import Hero from './Components/Hero.vue'
import Services from './Components/Services.vue'
import FeaturedProducts from './Components/FeaturedProducts.vue'
import ContactMap from './Components/ContactMap.vue'
import Footer from './Components/Footer.vue'

defineProps({ productos: Array })
</script>
