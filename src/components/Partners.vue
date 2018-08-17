<template>
<section id="partnerships" class="bg-grey-lighter py-8 px-4">
            <div class="container mx-auto mb-8">
                <div class="text-center mb-8">
                    <span class="font-semibold text-4xl leading-loose">Partnerships</span>
                    <br>
                    <span class="text-xl">The Open Source Club at Michigan Tech collaborates with the following organizations.</span>
                </div>
                <div class="lg:flex items-center justify-center">
                    <div v-for="n in 4" class="w-full lg:w-1/4 text-center mb-8">

                            <img class="" src="../assets/oshe.jpg" alt="">

                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <div class="w-8 h-1 bg-green-lighter mr-2 inline-block"></div>
                    <div class="w-8 h-1 bg-grey-dark mr-2 inline-block"></div>
                    <div class="w-8 h-1 bg-grey-dark mr-2 inline-block"></div>
                </div>
            </div>
        </section>
</template>

<script>
  export default {
    name: "Partners"
  };
</script>
