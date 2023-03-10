<template>
   <nav class="bg-orange-100 fixed z-20 flex w-full border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
  <div class="container flex flex-wrap items-center justify-between mx-auto">
    <a href="https://flowbite.com/" class="flex items-center">
        <!-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" /> -->
        <span class="self-center text-xl text-black font-semibold whitespace-nowrap dark:text-white">Endaweke Enkuahone</span>
    </a>
    <button @click="showMenu=!showMenu" data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
    <div :class="{hidden:showMenu}" class=" w-full md:block md:w-auto" id="navbar-default">
      <ul class="flex flex-col p-4 mt-4 border border-blue-400 rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-orange-100 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li v-for="(navigation,index) in navigations" :key="index">
          <a :href="navigation.href" class="block py-2 pl-3 pr-4 lg:text-teal-500 hover:text-teal-900  text-teal-500   rounded  md:text-blue-700 md:p-0 dark:text-white" aria-current="page">{{navigation.name}}</a>
        </li>
    
      </ul>
    </div>
  </div>
</nav>
</template>

<script setup>
  import {ref} from 'vue'

  const navigations=[
    {name:"Home", href:"#home"},
    {name:"About", href:"#about"},
    {name:"Portfolio", href:"#portfolio"},
    {name:"Services", href:"#services"},
    {name:"Contact", href:"#contact"},
  ]

   const showMenu=ref('false')
</script>
