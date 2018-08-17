<template>
  <div v-bind:class="{ 'mr-6': margin }" class="w-full lg:w-1/4 text-center mb-8 lg:mb-0">
    <div class="bg-black mb-3 shadow-md">
      <div class="h-48 bg-center bg-cover" :style="'background-image: url(' + photo + ');'"></div>
    </div>
    <span class="text-2xl">
      {{ name }}
    </span>
  </div>
</template>

<script>
  export default {
    name: "Project",
    props: ['name', 'photo', 'href', 'margin']
  };
</script>
