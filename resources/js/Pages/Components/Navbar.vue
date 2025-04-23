<template>
  <header
    :class="[
      'fixed top-0 left-0 w-full z-50 transition-all duration-300',
      isScrolled ? 'bg-white shadow-md' : 'bg-transparent'
    ]"
  >
    <nav class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">
      <!-- Logo -->
      <a href="/" class="flex items-center gap-2">
        <img src="/img/logo/logomj.png" alt="Logo" class="h-10" />
        <span class="text-xl font-bold text-gray-800">MULTISERVICIOS JHOSUE</span>
      </a>

      <!-- Menú grande (escritorio) -->
      <div class="hidden md:flex items-center gap-6 text-gray-700 font-medium">
        <a href="/" class="hover:text-blue-600 transition">Inicio</a>
        <a href="#productos" class="hover:text-blue-600 transition">Productos</a>
        <a href="#servicios" class="hover:text-blue-600 transition">Servicios</a>
        <a href="#contacto" class="hover:text-blue-600 transition">Contacto</a>
        <input
          type="text"
          placeholder="Buscar productos..."
          class="px-3 py-1 rounded-md border border-gray-300 focus:outline-none focus:ring focus:ring-blue-200"
        />
      </div>

      <!-- Botón hamburguesa (móvil) -->
      <button @click="menuOpen = !menuOpen" class="md:hidden text-gray-700 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
             viewBox="0 0 24 24" stroke="currentColor">
          <path v-if="!menuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16"/>
          <path v-else stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M6 18L18 6M6 6l12 12"/>
        </svg>
      </button>
    </nav>

    <!-- Menú móvil desplegable -->
    <div v-if="menuOpen" class="md:hidden bg-white border-t border-gray-200 shadow-md">
      <div class="flex flex-col px-4 py-4 text-gray-700 gap-4">
        <a href="/" @click="menuOpen = false" class="hover:text-blue-600">Inicio</a>
        <a href="#productos" @click="menuOpen = false" class="hover:text-blue-600">Productos</a>
        <a href="#servicios" @click="menuOpen = false" class="hover:text-blue-600">Servicios</a>
        <a href="#contacto" @click="menuOpen = false" class="hover:text-blue-600">Contacto</a>
        <input
          type="text"
          placeholder="Buscar productos..."
          class="px-3 py-1 rounded-md border border-gray-300 focus:outline-none focus:ring focus:ring-blue-200"
        />
      </div>
    </div>
  </header>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'

const isScrolled = ref(false)
const menuOpen = ref(false)

const handleScroll = () => {
  isScrolled.value = window.scrollY > 10
}

onMounted(() => {
  window.addEventListener('scroll', handleScroll)
})
onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll)
})
</script>

<style scoped>
body {
  padding-top: 72px;
}
</style>
