<template>
  <section  id="productos" class="py-12">
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
</template>

<script setup>
defineProps({
  productos: Array
});
</script>
