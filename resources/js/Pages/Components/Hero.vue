<template>
  <div  class="hero-section mt-16" >
    <!-- Slider -->
    <div id="slider" class="splide" >
      <div class="splide__track">
        <ul class="splide__list">
          <li class="splide__slide">
            <img src="/img/slider/slider1.png"  alt="Slide 1">
          </li>
          <li class="splide__slide">
            <img src="/img/slider/slider2.jpeg"  alt="Slide 2">
          </li>
          <li class="splide__slide">
            <img src="/img/slider/slider3.png" alt="Slide 3">
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
import { onMounted } from 'vue';
import Splide from '@splidejs/splide';

export default {
  name: 'Hero',
  setup() {
    onMounted(() => {
      new Splide('#slider', {
        type   : 'loop', 
        autoplay: true,
        pauseOnHover: false, 
        pauseOnFocus: false, 
        height: '500px',     
        speed: 800,          
      }).mount();
    });
  },
}
</script>


<style scoped>
.hero-section {
  position: relative;
  width: 100%;
}

#slider {
  max-width: 1200px;
  margin: 0 auto;
}

.splide__slide {
  display: flex;
  justify-content: center;
  align-items: center;
}

.splide__slide img {
  width: 100%;
  max-height: 500px;
  object-fit: cover;
  border-radius: 1rem;
}

/* Responsive para pantallas pequeñas */
@media (max-width: 768px) {
  .splide__slide img {
    max-height: 300px;
    border-radius: 0.5rem;
  }
}
</style>
