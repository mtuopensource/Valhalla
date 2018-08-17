<template>
  <div class="w-full lg:w-1/4 lg:mr-4 mb-4 lg:mb-0 lg:shadow-md bg-white">
    <div class="lg:max-w-sm bg-white overflow-hidden text-center px-6 py-4">
      <img style="object-fit:cover;" class="inline-block w-48 h-48 rounded-full" :src="photo" :alt="name">
      <div class="mt-4">
        <div class="font-bold text-xl mb-2">
          {{ name }}
        </div>
                <p class="text-grey-darker mb-2">
          {{ position }}
        </p>
        <a :href="'mailto:' + email" class="block mb-2 text-blue">
          {{ email }}
        </a>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    name: "Officer",
    props: ['name', 'photo', 'email', 'position']
  };
</script>
