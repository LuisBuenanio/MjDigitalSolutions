<template>
  <div class="min-h-screen bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-100">
    <!-- Navbar -->
    <nav class="bg-white dark:bg-gray-800 shadow">
      <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">MULTISERVICIOS JHOSUE</h1>
        <div class="space-x-4">
          <a href="#" class="hover:underline">Inicio</a>
          <a href="#" class="hover:underline">Productos</a>
          <a href="#" class="hover:underline">Servicios</a>
          <a href="#" class="hover:underline">Contacto</a>
        </div>
      </div>
    </nav>

    <!-- Hero/Slider -->
    <section class="bg-cover bg-center h-[400px] flex items-center justify-center text-white" style="background-image: url('/images/banner.jpg')">
      <div class="bg-black bg-opacity-50 p-6 rounded">
        <h2 class="text-4xl font-bold">Venta de artículos de tecnología, seguridad y ofimática</h2>
      </div>
    </section>

    <!-- Servicios -->
    <section class="py-12 bg-gray-100 dark:bg-gray-800">
      <div class="container mx-auto px-4 text-center">
        <h3 class="text-2xl font-bold mb-6">Nuestros Servicios</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div class="p-4 bg-white dark:bg-gray-700 rounded shadow">Instalación de equipos</div>
          <div class="p-4 bg-white dark:bg-gray-700 rounded shadow">Mantenimiento y soporte</div>
          <div class="p-4 bg-white dark:bg-gray-700 rounded shadow">Asesoría técnica</div>
        </div>
      </div>
    </section>

    <!-- Productos destacados -->
    <section class="py-12">
      <div class="container mx-auto px-4">
        <h3 class="text-2xl font-bold mb-6 text-center">Productos Destacados</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
          <div v-for="(producto, i) in productos" :key="i" class="p-4 bg-white dark:bg-gray-700 rounded shadow">
            <img :src="producto.imagen" class="h-40 w-full object-cover rounded" />
            <h4 class="mt-2 font-semibold">{{ producto.nombre }}</h4>
            <p class="text-sm text-gray-600 dark:text-gray-300">{{ producto.descripcion }}</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Contacto y mapa -->
    <section class="py-12 bg-gray-100 dark:bg-gray-800">
      <div class="container mx-auto px-4">
        <h3 class="text-2xl font-bold mb-6 text-center">Contáctanos</h3>
        <div class="flex flex-col md:flex-row gap-6">
          <div class="flex-1">
            <p class="mb-2">📍 Dirección: Jr. Ejemplo 123</p>
            <p class="mb-2">📞 Teléfono: 999-999-999</p>
            <p>✉️ Email: contacto@jhosue.com</p>
          </div>
          <div class="flex-1">
            <iframe src="https://maps.google.com/?q=-12.04318,-77.02824&output=embed" class="w-full h-64 rounded shadow"></iframe>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-4">
      © 2025 MULTISERVICIOS JHOSUE - Todos los derechos reservados.
    </footer>
  </div>
</template>

<script setup>
defineProps({
  productos: Array
});
</script>
