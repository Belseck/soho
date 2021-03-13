<template>
  <div class="menu">
    <button @click="toggleMenu" class="btn btn-green navbar-toggler"><ion-icon name="menu"></ion-icon></button>
    <ul v-bind:class="{ show: showMenu }">
      <li v-for="link in links" :key="link.text" v-bind:class="[ link.active == active? 'active': '' ]">
        <a :href="link.url"><span class="underline"  v-text="link.text"></span>
        </a>
      </li>
    </ul>
  </div>
</template>
<script>
export default {
  name: 'nav-menu',
  props: {
    active: '',
  },
  data() {
    return {
      showMenu: false,
      links: [
        {
          text: "inicio",
          url: "",
          active: "inicio",
        },
        {
          text: "nosotros",
          url: "#",
          active: "nosotros",
        },
        {
          text: "servicios",
          url: "#",
          active: "servicios",
        },
        {
          text: "casos de éxito",
          url: "#",
          active: "casos-de-exito",
        },
        {
          text: "únete a nosotros",
          url: "#",
          active: "unete-a-nosotros",
        },
        {
          text: "contacto",
          url: "#",
          active: "contacto",
        },
      ],
    };
  },
  methods: {
    toggleMenu() {
      this.showMenu = !this.showMenu;
    },
  },
};
</script>
