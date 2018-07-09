<template>
<div class="uk-text-center uk-flex-center" uk-grid>
  <div v-for="card in Gallery" v-bind:key="card.id">
    
    <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-width-medium uk-height-medium uk-cover-container" >
        <img v-bind:src="card.image" alt="" uk-cover>
    </div>
  
  </div>
</div>
</template>

<script>
  export default {
    data() {
      return {
        Content: {
          id: "",
          text: "",
          image: "",
          function: "",
          alt: "",
        },

        Gallery: [
            {id: "1", text: "item 1", image: "http://localhost/Assets/images/neon.jpg"},
            {id: "2", text: "item 2", image: ""},
            {id: "3", text: "item 3", image: ""},
            {id: "4", text: "item 4", image: ""},
            {id: "5", text: "item 5", image: ""},
            {id: "6", text: "item 6", image: ""},
            {id: "7", text: "item 7", image: ""},
            {id: "8", text: "item 6", image: ""},
            {id: "9", text: "item 7", image: ""},
            {id: "10", text: "item 6", image: ""},
            {id: "11", text: "item 7", image: ""},
            {id: "12", text: "item 6", image: ""},
            {id: "13", text: "item 7", image: ""},
            {id: "14", text: "item 6", image: ""},
            {id: "15", text: "item 7", image: ""},
            {id: "16", text: "item 6", image: ""},
            {id: "17", text: "item 7", image: ""},
            {id: "18", text: "item 6", image: ""},
            {id: "19", text: "item 7", image: ""},
            {id: "20", text: "item 8", image: ""},
            {id: "21", text: "item 8", image: ""},
            {id: "22", text: "item 8", image: ""},
            {id: "23", text: "item 8", image: ""}
        ],
      }
    },
   
    mounted() {
      console.log('Component mounted.')
    }
  }

</script>

<style>





</style>

.GalleryCard {
}