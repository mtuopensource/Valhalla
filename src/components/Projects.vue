<template>
  <Section id="projects" background="bg-white" title="Our Work">
    <div class="lg:flex">
      <Project name="Husky Chow" photo="http://via.placeholder.com/376x192" margin="yes" />
      <Project name="TechChat" photo="http://via.placeholder.com/376x192" margin="yes"/>
      <Project name="PiProjects" photo="http://via.placeholder.com/376x192" margin="yes" />
      <Project name="Algorithms" photo="http://via.placeholder.com/376x192" margin="" />   
    </div> 
  </Section>
</template>

<script>
  import Section from './Section.vue'
  import Project from './Project.vue'
  export default {
    name: "Projects",
    components: {
      Section, Project
    }
  };
</script>
