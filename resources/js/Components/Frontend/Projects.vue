<template>
    <section id="projects" class="container mx-auto">
        <nav
            class="mb-12  mt-6 border-b-2 border-gray-300 dark:border-gray-700"
        >
            <ul class="flex flex-col lg:flex-row justify-evenly items-center">
                <li>
                    <button
                        @click="filterProjects('all')"
                        class="flex hover:bg-orange-400 bg-green-400 hover:rounded-full text-center px-6 py-4 rounded-lg"
                        :class="[selectedSkill.id==='all'? 'bg-yellow-500':'']"
                    >
                        All
                    </button>
                </li>
                <li
                    @click="filterProjects(projectKill.id)"
                    class="capitalize m-4 bg-green-400 rounded-lg cursor-pointer hover:bg-orange-400 hover:rounded-full py-2 px-4"
                    v-for="projectKill in skills.data"
                    :key="projectKill.id"
                >
               
                <button
                        
                        class="flex hover:bg-orange-400 hover:rounded-full text-center px-4 py-2"
                :class="[selectedSkill.id==projectKill.id? 'text-red-500':'text-white']"
                    >
                        {{projectKill.name}}
                       
                    </button>
                        
                </li>
            </ul>
        </nav>
        <section class="grid gap-y-12 lg:grid-cols-3 lg-gap-8">
            <Project
                v-for="project in filteredProjects"
                :key="project.id"
                :project="project"
            />
        </section>
    </section>
</template>

<script setup>
import { ref } from "vue";
import Project from "./Project.vue";
const props = defineProps({
    skills: Object,
    projects: Object,
});

const filteredProjects = ref(props.projects.data);
const selectedSkill = ref("all");

const filterProjects = (id) => {
    if (id === "all") {
        filteredProjects.value = props.projects.data;
        selectedSkill.value = id;
    } else {
        filteredProjects.value = props.projects.data.filter((project) => {
            return project.skill.id === id;
        });
        selectedSkill.value = id;
        
    }
};
</script>
