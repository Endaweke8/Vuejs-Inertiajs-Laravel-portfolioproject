<template>
    <section class="bg-green-200">
   <div class="container mx-auto">
    <!-- <h1 class="text-4xl lg:text-6xl md:text-5xl text-center">Skills</h1> -->
    <div class="grid grid-cols-3 py-16 lg:grid-cols-8  md:grid-flow-col">
       <div v-for="skill in skills.data" :key="skill.id"
       class="flex items-center  justify-center"
       >
        <img class="lg:h-20 h-20 w-20 my-2" :src="skill.image" :alt="skill.name">
       </div>
       
    </div>
   </div>
    </section>
</template>

<script setup>
 defineProps({
    skills:Object
 })
</script>
