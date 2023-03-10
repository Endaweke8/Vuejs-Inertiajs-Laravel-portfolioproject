<script setup>
import Hero from '@/Components/Frontend/Hero.vue';
import About from '@/Components/Frontend/About.vue';

import Promote from '@/Components/Frontend/Promote.vue';
import { Head, Link } from '@inertiajs/vue3';
import FrontendLayout from '../Layouts/Frontend.vue'
import Skills from '@/Components/Frontend/Skills.vue';
import Portfolio from '@/Components/Frontend/Portfolio.vue';
import Services from '@/Components/Frontend/Services.vue';
import ContactMe from '@/Components/Frontend/ContactMe.vue';

defineProps({
    skills:Object,
    projects:Object,
});
</script>

<template>
    <Head title="Welcome" />

     <FrontendLayout >
    
  <!-- Hero Section -->
        <Hero />

  <!-- Promote Section -->
        <Promote />
  <!-- About Section -->
       <About />
  <!-- Skills Section -->
        <Skills :skills="skills"/>
  <!-- Portfolio Section -->
         <Portfolio :projects="projects" :skills="skills"/>
  <!-- Services Section -->
      <Services />
      <!-- Contact Me -->
      <ContactMe />
     </FrontendLayout >
  
</template>

