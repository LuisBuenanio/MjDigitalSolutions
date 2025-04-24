<template>
  <select @change="$emit('filtrar', $event.target.value)" class="border p-2 rounded">
    <option value="">Todas las etiquetas</option>
    <option>portátil</option>
    <option>oficina</option>
    <option>láser</option>
    <option>color</option>
    <option>wireless</option>
  </select>
</template>
