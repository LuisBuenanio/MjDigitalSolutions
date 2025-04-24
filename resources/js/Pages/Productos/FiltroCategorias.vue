<template>
  <select @change="$emit('filtrar', $event.target.value)" class="border p-2 rounded">
    <option value="">Todas las categorías</option>
    <option>Computadoras</option>
    <option>Impresoras</option>
    <option>Accesorios</option>
  </select>
</template>
