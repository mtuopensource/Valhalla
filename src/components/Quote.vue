<template>
<section id="quote" class="bg-black relative">
            <div class="bg-center bg-cover h-128 opacity-25" style="background-image: url(https://images.pexels.com/photos/303383/pexels-photo-303383.jpeg);">
            </div>

            <div class="absolute w-full h-full" style="left:0;top:0;">
                <div class="container h-full mx-auto flex items-center justify-center text-white">


                    <blockquote class="max-w-lg w-full text-xl px-4">
                        <em class="text-3xl">“In real open source, you have the right to control your own destiny.”
                        </em>
                        <br>


                        <span class="block text-right">—Linus Torvalds, Fellow of the Linux Foundation</span>
                    </blockquote>

                </div>
            </div>
        </section>
</template>

<script>
  export default {
    name: "Quote"
  };
</script>
