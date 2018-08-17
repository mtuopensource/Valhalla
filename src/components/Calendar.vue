<template>
  <section id="calendar">
    <div class="flex items-center justify-between">
      <h2>Dates to Remember</h2>
      <ActionButton href="#">All Events</ActionButton>
    </div>
    <hr class="bg-black h-px">
    <div v-for="event in calendar" :key="event.id" class="flex items-center justify-between mb-4">
      <div class="w-24 h-24 flex-no-shrink bg-blue mr-4 text-center flex flex-col items-center justify-center">
        <span class="text-white font-bold text-4xl leading-none">
          {{ event.day }}
        </span>
        <br>
        <span class="text-white font-light text-2xl leading-none">
          {{ event.monthName }}
        </span>
      </div>
      <div class="block bg-white flex-grow h-24 p-4">
          <span class="font-semibold text-xl">
            {{ event.name }}
          </span>
          <br>
          <span class="font-light text-lg">
            {{ event.location }}, {{ event.startTime }} - {{ event.endTime }}
          </span>
      </div>
    </div>
  </section>
</template>


<script>
import Section from "./Section.vue";
import ActionButton from "./ActionButton.vue";
var moment = require('moment');

export default {
  name: "Calendar",
  props: ["id", "token"],
  components: {
    Section,
    ActionButton
  },
  data: function() {
    return {
      calendar: []
    };
  },
  created: function() {
    jQuery.getJSON(
      "https://www.googleapis.com/calendar/v3/calendars/" +
        this.$props.id +
        "/events?key=" +
        this.$props.token +
        "&singleEvents=true&orderBy=startTime&maxResults=4&timeMin=" +
        new Date().toISOString() +
        "&callback=?",
      data => {
        let temp = []
        data.items.forEach((event, i) => {
          let startTime = moment(event.start.dateTime)
          let endTime = moment(event.end.dateTime)
          temp[i] = {
            'id': event.id,
            'name': event.summary,
            'day': startTime.date(),
            'monthName': startTime.format('MMM'),
            'location': event.location,
            'startTime': startTime.format('ha'),
            'endTime': endTime.format('ha')
          };
        });
        this.calendar = temp
      }
    );
  }
};
</script>