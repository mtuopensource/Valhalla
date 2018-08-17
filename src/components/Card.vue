<template>
<div class="w-full lg:w-1/3 lg:pr-4 h-48 mb-4">
              <div :class="color" class="flex items-center h-full justify-center">
                  <h2 class="text-center text-white">
                    {{ title }}
                  </h2>
              </div>
            </div>
</template>

<script>
  export default {
    name: "Card",
    props: ['title', 'color', 'href'],
  };
</script>
