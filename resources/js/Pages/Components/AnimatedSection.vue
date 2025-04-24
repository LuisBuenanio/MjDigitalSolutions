<template>
  <Motion
    v-motion
    :initial="{ opacity: 0, y: 40 }"
    :visible="{ opacity: 1, y: 0, transition: { duration: 0.8, easing: 'ease-out' } }"
    class="w-full"
    v-intersection-observer="onVisible"
  >
    <slot />
  </Motion>
</template>

<script setup>
import { Motion } from '@vueuse/motion'
import { ref } from 'vue'

const onVisible = ref(false)
</script>
