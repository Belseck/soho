<template>
  <div v-if="projects.length > 0">
    <div class="w-row project padding-top-5 margin-0" v-bind:class="[ project.image !== null? 'w-sm-1 w-md-2': '', project.class !== null? project.class : '',  'project-'+project.id ]" v-for="project in projects" :key="project.id">
    <img v-if="project.image !== null" class="column img" :src="project.image" alt="">
    <div class="column description padding-3">
        <div class="">
            <div v-if="project.company_data.logo !== null" class="">
                <img :src="project.company_data.logo" alt="">
                <hr/>
            </div>
            <div class="">
                <h1 class="title bold" v-text="project.name"></h1>
                <p class="text-gray" v-text="project.description"></p>
                <p class="">
                    <ul>
                        <li><ion-icon name="pricetag"></ion-icon></li>
                        <li v-for="tag in project.tags_data" :key="tag.id"><a href="#" v-text="tag.name"></a></li>
                    </ul>
                </p>
            </div>
            <div class="">
                <button class="btn bg-white padding-x-3 padding-y-2 view" v-text="'VER DETALLES'"></button>
            </div>
        </div>
    </div>
  </div>
  </div>
  <div v-else class="w-row">
    <div class="column">
        <h1 class="text-green padding-y-5" v-text="'No hay proyectos disponibles'"></h1>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      projects: [],
    };
  },
  methods: {
    async list(){
      const res = await axios.get("/api");
      this.projects = res.data;
    }
  },
  created() {
    this.list();
  },
};
</script>