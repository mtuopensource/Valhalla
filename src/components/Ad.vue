<template>


  <div class="w-full lg:flex mb-8">
  <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover text-center overflow-hidden" :style="'background-image: url(' + photo + ');'"></div>




                        <div class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white p-4 flex flex-col justify-between leading-normal">
                            <div class="mb-8">
                                <div class="text-black font-bold text-xl mb-2">
                                  {{ name }}
                                </div>
                                <p class="text-grey-darker">
                                  {{ description }}
                                </p>
                            </div>


                            <ActionButton :href="href">
                              {{ cta }}
                            </ActionButton>
                        </div>
                    </div>
</template>

<script>
  import ActionButton from './ActionButton.vue'
  export default {
    name: "Ad",
    props: ['name', 'description', 'photo', 'cta', 'href'],
    components: {
      ActionButton
    }
  };
</script>
