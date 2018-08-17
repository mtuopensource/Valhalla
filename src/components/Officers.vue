<template>
  <Section id="officers" title="Our Team" background="bg-white">
    <div class="lg:flex justify-center">
      <Officer name="Austin J. Walhof" photo="http://via.placeholder.com/192x192" email="ajwalhof@mtu.edu" position="President" />
      <Officer name="Aidan VanDrie" photo="http://via.placeholder.com/192x192" email="advandri@mtu.edu" position="Vice President" />
      <Officer name="Ryan Philipps" photo="http://via.placeholder.com/192x192" email="raphilip@mtu.edu" position="Treasurer" />
      <Officer name="Alec Rospierski" photo="http://via.placeholder.com/192x192" email="asrospie@mtu.edu" position="Secretary" />
    </div>
  </Section>
</template>

<script>
  import Section from './Section.vue'
  import Officer from './Officer.vue'
  export default {
    name: "Officers",
    components: {
      Section, Officer
    }
  };
</script>
