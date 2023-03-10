<template>
    <Head title="Edit Skill" />

<AuthenticatedLayout>
   <template #header>
       <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit  Skills</h2>
   </template>

   <div class="py-12">
       <div class="max-w-md mx-auto sm:px-6 lg:px-8 bg-white">
         
            <form class="p-4" @submit.prevent="submit">
            <div>
                <InputLabel for="name" value="Name" />

                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>


            <div class="mt-5">
                <InputLabel for="image" value="Image" />

                <TextInput
                    id="image"
                    type="file"
                    class="mt-1 block w-full"
                    @input="form.image = $event.target.files[0]"
                  
                />

                <InputError class="mt-2" :message="form.errors.image" />
                <img :src="form.image" :alt="form.name" class="w-12 h-12 rounded-full">
            </div>

            <div class="flex items-center justify-end mt-4">
               

                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Store
                </PrimaryButton>
            </div>
        </form>
       
       </div>
   </div>
</AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head,Link,useForm } from '@inertiajs/vue3';


import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

const props=defineProps({
    skill:Object,
});

const form = useForm({
    name: props.skill?.name,
    image:props.skill?.image,
});

const submit = () => {
    form.post(route('skills.store'));
};

</script>

