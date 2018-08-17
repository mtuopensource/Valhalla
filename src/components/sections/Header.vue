<template>
  <div class="bg-grey-darkest border-b-2 border-yellow-dark sticky pin-t z-10">
    <header class="container mx-auto px-4">
      <div class="flex items-center py-4 lg:justify-between">

                    <div class="lg:hidden mr-8 flex items-center">
                        <svg class="h-8 w-8 fill-current text-white" version="1.1" id="Menu" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                            <path d="M16.4,9H3.6C3.048,9,3,9.447,3,10c0,0.553,0.048,1,0.6,1h12.8c0.552,0,0.6-0.447,0.6-1S16.952,9,16.4,9z
                                                    M16.4,13H3.6C3.048,13,3,13.447,3,14c0,0.553,0.048,1,0.6,1h12.8c0.552,0,0.6-0.447,0.6-1S16.952,13,16.4,13z M3.6,7h12.8
                                                   C16.952,7,17,6.553,17,6s-0.048-1-0.6-1H3.6C3.048,5,3,5.447,3,6S3.048,7,3.6,7z"></path>
                        </svg>
                    </div>

                    <div class="w-2/3 lg:w-auto flex items-center text-yellow-dark text-2xl justify-center">
                      Open Source Club <span class="hidden lg:inline">&nbsp;at MTU</span>
                    </div>
                    <div class="w-1/4 lg:w-auto hidden lg:block text-right lg:flex lg:items-center font-semibold">
                        <a v-bind:key="item.ID" v-for="item in menu_items" class="text-white hover:text-blue-dark text-lg no-underline mr-6" href="#">
                          {{ item.title }}
                        </a>
                    </div>

                </div>



            </header>
        </div>
</template>

<script>
  export default {
    name: "Header",
    data: function() {
      return {
        menu_items: [],
        wp_page: undefined
      };
    },
    created: function() {
      this.wp_page = wp_page;
      jQuery.getJSON(
        wp_site_url.concat("/wp-json/wp-menus/v1/menus/primary-menu"),
        data => {
          this.menu_items = data;
        }
      );
    }
  };
</script>
