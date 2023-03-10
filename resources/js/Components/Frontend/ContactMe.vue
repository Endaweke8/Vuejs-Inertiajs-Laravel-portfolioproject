<template>
    
    <section id="contact"
    
   
    
    class="">
        <div class="container mx-auto"
        
        v-motion="motionFadesUp"
     

        >
          <div 
     
  
            class="flex flex-col items-center text-center">
                <h1 class="section-title">Contact Me</h1>
                <p class="">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Ratione praesentium velit quas eveniet vel. Molestiae, vitae
                    ab ducimus facere maxime nihil sequi, ullam laborum et
                    praesentium quaerat assumenda vero architecto.
                </p>
            </div>
            <div class="flex flex-col lg:flex-row lg:gap-x-8 mt-8">
                <div
                    class="flex flex-1 flex-col items-start space-y-8 mb-12 lg:mb-0 mt-10"
                >
                    <div class="flex m-10 flex-col lg:flex-row gap-x-4">
                        <div
                            class="rounded-sm w-14 h-14 items-center justify-center mt-2 mb-4 lg:mb-0 text-2xl"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="w-6 h-6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"
                                />
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-xl mb-1">
                                Have a question ?
                            </h4>
                            <p class="mb-1">I am here to help you.</p>
                            <p>Email me at endaweke1234@gmail.com</p>
                        </div>
                    </div>

                    <div class="flex m-10 flex-col lg:flex-row gap-x-4">
                        <div
                            class="rounded-sm w-14 h-14 items-center justify-center mt-2 mb-2 lg:mb-0 text-2xl"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                class="w-6 h-6"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"
                                />
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"
                                />
                            </svg>
                        </div>
                        <div >
                            <h4 class="font-bold text-xl mb-1">
                                Current Location
                            </h4>
                            <p class="mb-1">Bahirdar City</p>
                            <p class="mb-1">Bahirdar University</p>
                            <p class="mb-1">
                                Bahirdar Institute of Technology(BIT)
                            </p>
                        </div>
                    </div>
                </div>
                <div  class="space-y-8 w-full m-10 max-w-md">
                    <div class="m-2 p-4 bg-green-300 text-center rounded-xl" v-if="showMessage">Thank you for contacting Me</div>
                    <div class="flex gap-8">
                        <div class="flex flex-col lg:flex-row ">
                            <div class="mr-2 mb-5">
                                <input
                                    v-model="form.name"
                                    type="text"
                                    class="input"
                                    placeholder="Your name"
                                />
                                <span v-if="form.errors.name" class="text-sm text-red-400"
                                    >{{form.errors.name}}</span
                                >
                            </div>
                            <div>
                                <input
                                    v-model="form.email"
                                    type="text"
                                    class="input"
                                    placeholder="Your Email"
                                />
                                <span v-if="form.errors.email" class="text-sm text-red-400"
                                    >{{form.errors.email}}</span
                                >
                            </div>
                        </div>
                        <br>

                      
                    </div>
                    <div class=" w-full">
                        <textarea
                            v-model="form.body"
                            id="message"
                            rows="4"
                            cols="23"
                            class="lg:w-full lg:mr-12"
                            placeholder="Write your thoughts here..."
                        ></textarea>
                        <br>
                        <span v-if="form.errors.body" class="mt-2 text-sm text-red-400"
                                    >{{form.errors.body}}</span
                                >
                    </div>
                    <button @click="submit"  
    class="inline-flex items-center justify-center rounded-md  text-white font-medium hover:bg-indigo-900 border border-transparent bg-indigo-600 px-5 py-3" 
    >Send Message</button>

                    
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';
import { motionFadesUp } from '@/motions';

const form=useForm({
    name:'',
    email:"",
    body:"",
})

const showMessage=ref(false);

function setShowMessage(value){
    showMessage.value=value;
}

function cleanForm(){
  form.reset();
  setShowMessage(true);
  setTimeout(()=>setShowMessage(false),2000);
}

const submit=()=>{
    alert(form.body);
    form.post(route('contact'),{
        preserveScroll:true,
        onSuccess:()=>cleanForm(),
    })
}



</script>
