<template>
  <button :href="href" :class="'text-center text-lg bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent no-underline ' + display">
    <slot></slot>
  </button>
</template>

<script>
  export default {
    name: "ActionButton",
    props: ['href', 'display']
  };
</script>
