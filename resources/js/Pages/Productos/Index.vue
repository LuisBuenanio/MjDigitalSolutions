<template>
  <div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Productos Destacados</h1>

    <div class="flex flex-wrap gap-4 mb-4 items-center">
      <FiltroCategorias @filtrar="filtrarPorCategoria" />
      <FiltroEtiquetas @filtrar="filtrarPorEtiqueta" />
      <button @click="limpiarFiltros" class="bg-gray-200 px-4 py-2 rounded hover:bg-gray-300">
        Limpiar filtros
      </button>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-6">
      <ProductoCard
        v-for="producto in productosPaginados"
        :key="producto.id"
        :producto="producto"
      />
    </div>

    <div class="flex justify-center gap-4">
      <button
        @click="paginaActual--"
        :disabled="paginaActual === 1"
        class="px-4 py-2 bg-gray-100 rounded hover:bg-gray-200 disabled:opacity-50"
      >
        Anterior
      </button>
      <button
        @click="paginaActual++"
        :disabled="paginaActual >= totalPaginas"
        class="px-4 py-2 bg-gray-100 rounded hover:bg-gray-200 disabled:opacity-50"
      >
        Siguiente
      </button>
    </div>
  </div>
</template>

<script setup>
import { ref, computed } from 'vue'
import FiltroCategorias from './FiltroCategorias.vue'
import FiltroEtiquetas from './FiltroEtiquetas.vue'
import ProductoCard from './ProductoCard.vue'

// Productos simulados
const productos = ref([
  { id: 1, nombre: 'Laptop Lenovo', categoria: 'Computadoras', etiquetas: ['oficina', 'portátil'], imagen: '/img/producto1.jpg' },
  { id: 2, nombre: 'Impresora HP', categoria: 'Impresoras', etiquetas: ['láser', 'color'], imagen: '/img/producto2.jpg' },
  { id: 3, nombre: 'Mouse inalámbrico', categoria: 'Accesorios', etiquetas: ['wireless'], imagen: '/img/producto3.jpg' },
  { id: 4, nombre: 'Monitor LG', categoria: 'Computadoras', etiquetas: ['oficina'], imagen: '/img/producto4.jpg' },
  { id: 5, nombre: 'Teclado mecánico', categoria: 'Accesorios', etiquetas: ['oficina'], imagen: '/img/producto5.jpg' },
  { id: 6, nombre: 'Router TP-Link', categoria: 'Accesorios', etiquetas: ['wireless'], imagen: '/img/producto6.jpg' },
])

// Filtros
const filtroCategoria = ref(null)
const filtroEtiqueta = ref(null)

const productosFiltrados = computed(() => {
  return productos.value.filter(p => {
    const categoriaMatch = !filtroCategoria.value || p.categoria === filtroCategoria.value
    const etiquetaMatch = !filtroEtiqueta.value || p.etiquetas.includes(filtroEtiqueta.value)
    return categoriaMatch && etiquetaMatch
  })
})

// 🔢 Paginación
const productosPorPagina = 3
const paginaActual = ref(1)

const totalPaginas = computed(() =>
  Math.ceil(productosFiltrados.value.length / productosPorPagina)
)

const productosPaginados = computed(() => {
  const inicio = (paginaActual.value - 1) * productosPorPagina
  return productosFiltrados.value.slice(inicio, inicio + productosPorPagina)
})

// 🔄 Funciones
const filtrarPorCategoria = (categoria) => {
  filtroCategoria.value = categoria
  paginaActual.value = 1
}

const filtrarPorEtiqueta = (etiqueta) => {
  filtroEtiqueta.value = etiqueta
  paginaActual.value = 1
}

const limpiarFiltros = () => {
  filtroCategoria.value = null
  filtroEtiqueta.value = null
  paginaActual.value = 1
}
</script>
