<template>
    <div class="container mx-auto">
    
    <a class="flex flex-col group items-center text-center " :href="project.project_url">
        <div class="mb-6">
            <img :src="project.image" :alt="project.name" class="rounded-2xl h-56">
        </div>
        <span>
            {{ project.skill.name }}
        </span>
    </a>
    
    </div> 
    
    </template>
    
    <script setup>
    import { Link } from '@inertiajs/vue3';
       defineProps({
        
        project:Object
       })
    
      
    </script>
    
    