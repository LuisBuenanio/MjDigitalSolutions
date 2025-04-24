<template>
  <div class="bg-white rounded-xl shadow hover:shadow-md transition-all p-4 flex flex-col items-center">
    <img :src="producto.imagen" alt="" class="w-full h-40 object-cover rounded-md mb-3" />
    <h2 class="text-lg font-semibold text-center">{{ producto.nombre }}</h2>
    <p class="text-sm text-gray-600">{{ producto.categoria }}</p>
  </div>
</template>

<script setup>
defineProps(['producto'])
</script>
