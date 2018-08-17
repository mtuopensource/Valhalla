<template>
  <Section id="intro" background="bg-grey-lighter">
    <div class="text-center">
      <p class="text-lg leading-normal mb-6">
        <strong>The Open Source Club at Michigan Tech</strong> serves to contribute to, create, and critique Open Source Software projects. <span class="hidden lg:inline">Open Source Software empowers users by allowing them to run, copy, distribute, study, change, and improve the code behind a product. Members will create and contribute to Open Source Software projects, opening them up to programming communities worldwide. </span>
      </p>
      <ActionButton href="#">Join the Club</ActionButton>
    </div>
  </Section>
</template>

<script>
  import ActionButton from './ActionButton.vue'
  import Section from './Section.vue'
  export default {
    name: "IntroContent",
    components: {
      Section, ActionButton
    }
  };
</script>
