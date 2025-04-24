<template>
  <section class="py-16 bg-gray-100 dark:bg-gray-900">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold mb-10 text-center text-gray-800 dark:text-white">
        Productos Destacados
      </h2>

      <div class="grid gap-8 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        <div
          v-for="product in products"
          :key="product.id"
          class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg p-4 hover:shadow-xl transition-shadow"
        >
          <img
            :src="product.image"
            :alt="product.name"
            class="w-full h-48 object-cover rounded-xl mb-4"
          />
          <h3 class="text-xl font-semibold text-gray-800 dark:text-white">
            {{ product.name }}
          </h3>
          <p class="text-gray-500 dark:text-gray-300 text-sm mb-2">
            {{ product.description }}
          </p>
          <div class="text-lg font-bold text-indigo-600 dark:text-indigo-400">
            S/ {{ product.price }}
          </div>
        </div>
      </div>
    </div>
    <div class="mt-10 text-center">
  <a
    href="/productos"
    class="inline-block px-6 py-3 bg-indigo-600 text-white font-semibold rounded-full shadow-lg hover:bg-indigo-700 transition"
  >
    Ver más productos
  </a>
</div>
  </section>
</template>

<script setup>
const products = [
  {
    id: 1,
    name: 'Impresora Epson L3210',
    description: 'Impresión multifunción con sistema continuo.',
    price: 699.90,
    image: '/img/productos/impresora1.jpg',
  },
  {
    id: 2,
    name: 'Laptop Lenovo Ideapad',
    description: 'Procesador i5, 8GB RAM, SSD 256GB.',
    price: 1999.90,
    image: '/img/productos/laptop1.jpg',
  },
  {
    id: 3,
    name: 'Cámara de Seguridad IP',
    description: 'Visión nocturna HD, control remoto desde app.',
    price: 249.00,
    image: '/img/productos/camara1.jpg',
  },
  {
    id: 4,
    name: 'Router TP-Link Archer C6',
    description: 'Wi-Fi AC1200, ideal para streaming y gaming.',
    price: 159.90,
    image: '/img/productos/router1.jpg',
  },
];
</script>
