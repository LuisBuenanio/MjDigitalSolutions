<template>
  <section  id="servicios" class="py-12 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-8 text-center">Nuestros Servicios</h2>
      <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <div v-for="service in services" :key="service.title" class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow hover:shadow-lg transition">
          <div class="flex items-center justify-center w-16 h-16 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 mx-auto mb-4">
            <component :is="service.icon" class="w-8 h-8" />
          </div>
          <h3 class="text-xl font-semibold text-center text-gray-800 dark:text-white mb-2">{{ service.title }}</h3>
          <p class="text-center text-gray-600 dark:text-gray-300">{{ service.description }}</p>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import { Laptop, Printer, Camera, Server, ShieldCheck, Network } from 'lucide-vue-next';

export default {
  name: 'Services',
  components: { Laptop, Printer, Camera, Server, ShieldCheck, Network },
  data() {
    return {
      services: [
        { title: 'Venta de Computadoras', description: 'PCs y laptops para oficina o gaming.', icon: Laptop },
        { title: 'Impresoras y Accesorios', description: 'Venta, instalación y mantenimiento.', icon: Printer },
        { title: 'Cámaras de Seguridad', description: 'Instalación de sistemas CCTV modernos.', icon: Camera },
        { title: 'Soporte Técnico', description: 'Reparación, formateo y mantenimiento.', icon: Server },
        { title: 'Sistemas de Seguridad', description: 'Alarmas, control de acceso y sensores.', icon: ShieldCheck },
        { title: 'Redes y Conectividad', description: 'Cableado estructurado, routers y más.', icon: Network },
      ]
    };
  }
};
</script>

<style scoped>
/* Opcional para animaciones sutiles */
</style>
