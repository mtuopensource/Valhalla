<template>
  <section class="p-8" :class="background" :id="id">
    <div class="container mx-auto">
      <div class="text-center mb-4" v-if="title || description">
        <h2 class="text-4xl font-semibold" v-if="title">
          {{ title }}
        </h2>
        <p class="text-xl" v-if="description">
          {{ description }}
        </p>
      </div>
      <slot></slot>
    </div>
  </section>
</template>

<script>
  export default {
    name: "Section",
    props: ['id', 'background', 'title', 'description']
  };
</script>
