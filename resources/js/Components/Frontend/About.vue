
   <template>
	<section id="about" class="p-4 lg:p-8 dark:bg-gray-800 dark:text-gray-100">
		<div v-motion="motionFadesUp" class="container mx-auto space-y-12">
			<div class="flex flex-col overflow-hidden rounded-md shadow-sm lg:flex-row">
				<img src="https://source.unsplash.com/640x480/?1" alt="" class="h-80 dark:bg-gray-500 aspect-video">
				<div class="flex flex-col justify-center flex-1 p-6 dark:bg-gray-900">
                    <h2 class="text-3xl lg:text-4xl font-medium lg:font-extrabol">About Me</h2>
                    <p class="mb-4 text-accent">Freelance frontend Web developer</p>
                    

					<p class="my-2 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor aliquam possimus quas, error esse quos.</p>
                    <p class="my-2 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor aliquam possimus quas, error esse quos.</p>

					<a href="#contact" class="self-start bg-indigo-600 px-5 py-3 rounded-md font-medium text-white">Contact Me</a>

				</div>
			</div>
			
		</div>
	</section>
</template>


<script setup>
  import { motionFadesUp } from '@/motions'; 
</script>

