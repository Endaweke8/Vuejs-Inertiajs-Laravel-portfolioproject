<template>
    <section id="portfolio" class="bg-orange-100 min-h-[1400px]">    
<div  
v-motion="motionFadesUp"
class="container mx-auto">
   <div class="flex flex-col items-center text-center">
    <h2 class="section-title">My Latest Work</h2>
    <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non exercitationem veniam hic laudantium iusto rerum asperiores iste, cum similique reiciendis, vero sequi enim suscipit, repellat reprehenderit est voluptatum laboriosam sapiente.</p>
   </div>
   <Projects :skills="skills" :projects="projects" />
</div>
    </section>
</template>

<script setup>
import Projects from './Projects.vue';
import { motionFadesUp } from '@/motions';

   defineProps({
    skills:Object,
    projects:Object
   })
</script>

