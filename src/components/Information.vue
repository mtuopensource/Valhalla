<template>
  <Section id="information" background="bg-grey-lighter">
    <div class="container mx-auto lg:flex">
      <div class="w-full lg:w-2/5 lg:mr-8">
        <Calendar id="mtu.edu_09qi6pfnktib7heh2grshjvqo4@group.calendar.google.com" token="AIzaSyAXkNM93xxatwdet9DPqGfOfA4JXKMXRKg" />
      </div>
      <div class="w-full lg:w-3/5">
        <Ad name="Are you interested in open source software, programming, or anything code related?" description="If this sounds like you, you might be a perfect member for the Open Source Club at Michigan Tech!" cta="Join the Club" href="#" photo="https://images.pexels.com/photos/167682/pexels-photo-167682.jpeg?auto=compress&amp;cs=tinysrgb&amp;h=750&amp;w=1260" />
      </div>
    </div>
  </Section>
</template>

<script>
  import Section from './Section.vue'
  import Ad from './Ad.vue'
  import Calendar from './Calendar.vue'
  export default {
    name: "Information",
    components: {
      Section, Ad, Calendar
    }
  };
</script>
