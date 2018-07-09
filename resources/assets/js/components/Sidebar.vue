<template>
<div class="Sidebar">
    <ul class="uk-nav uk-nav-default" v-for="Link in Links" v-bind:key="Link.name" >
        <li>
            <a v-bind:href="Link.url" class=""> 
              <div v-bind:id="Link.id"></div>
            </a>
        </li>
    </ul>
</div>


        
</template>

<script>
var menuFunctions;

export default {
  data() {
    return {
      Link: {
        id: "",
        image: "",
        url: "",
        function: "",
        alt: "",
      },

      Links: [
        {
          id: "menu",
          image: "http://localhost/Assets/svg/icons/ar-glasses.svg",
          url:"",
          function: "",
          alt: "",
        },
        {
          id: "home",
          image: "http://localhost/Assets/svg/icons/ar-glasses.svg",
          url:"http://localhost/Home",
          function: "",
          alt: "",
        },
        {
          id: "admin",
          image: "http://localhost/Assets/svg/icons/cubes.svg",
          url:"http://localhost/Admin",
          function: "",
          alt: "",
        },

        {
          id: "bio",
          image: "http://localhost/Assets/svg/icons/bomb.svg",
          url:"http://localhost/Bio",
          function: "",
          alt: "",
        },

        {
          id: "blog",
          image: "http://localhost/Assets/svg/icons/game-console.svg",
          url:"http://localhost/Blog",
          function: "",
          alt: "",
        },
        {
          id: "portfolio",
          image: "http://localhost/Assets/svg/icons/database.svg",
          url:"http://localhost/Portfolio",
          function: "",
          alt: "",
        },
        {
          id: "playground",
          image: "http://localhost/Assets/svg/icons/database.svg",
          url:"http://localhost/Playground",
          function: "",
          alt: "",
        },
        {
          id: "contact",
          image: "http://localhost/Assets/svg/icons/css-3.svg",
          url:"http://localhost/Contact",
          function: "",
          alt: "",
        }
      ],
      baseShape: "",
    };
  },

  mounted: function() {
    var ref = this;
      for (let link of ref.Links) {
        ref.LoadSvg(link.image, link.id);
      }
    },


  methods: {
    LoadSvg(address, id) {
      var ref = this;
      
      axios.get(address)
      .then(function (response) {
        ref.DrawSvg(80, String(response.data), id);
      })
      .catch(function (error) {
      });
      
      },

    DrawSvg(IconSize, svgdata, id) {
      var draw = SVG(id).size(IconSize, IconSize);
    
      draw.svg(svgdata);
    }


  },
  
};
</script>

<style>
.Sidebar {  
  position: fixed;
  /* overflow: auto; */
  clear: both;
  float: left;

  background-color: #101015;


  padding: 0px;
  margin: 0px;
  width: 80px;
  height: 100%;
  
}
</style>
