<template>
  <div id="app">
    <header class="bg_transparent p-3">
      <div class="navbar d-flex justify-content-bewtween">
        <div class="logo">
          <img width="60" src="@/assets/img/logo-small.svg" />
        </div>
        <!-- /.logo -->
        <div class="selection">
          <select
            name="select_album"
            v-model="selectGenre"
            class="form-select form-select-lg mb-3 w-auto me-2"
          >
            <option value="" selected>Tutti i generi</option>
            <option value="rock">Rock</option>
            <option value="pop">Pop</option>
            <option value="metal">Metal</option>
            <option value="jazz">Jazz</option>
          </select>
        </div>
        <!-- /.selection -->
      </div>
      <!-- /.navbar -->
    </header>

    <main class="pt-5">
      <div class="container" v-if="!loading">
        <div class="row row-cols-5">
          <div
            class="col gy-3"
            v-for="(album, index) in filterGenre"
            :key="index"
          >
            <div
              class="card h-100 p-3 rounded-0 bg_transparent"
              style="width: 15rem"
            >
              <img
                :src="album.poster"
                class="card-img-top img-fluid"
                alt="titolo"
              />
              <div class="card-body text-dark text-center">
                <h2
                  class="card-title text_white text-uppercase fs-4 fw-bold mt-3"
                >
                  {{ album.title }}
                </h2>
                <p class="card-text text_light fs-5 mt-3 mb-0 fw-bolder">
                  {{ album.author }}
                </p>
                <p class="card-text text_light fs-6 fw-bolder">
                  {{ album.year }}
                </p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row row-cols-5 -->
      </div>
      <!-- /.container -->
      <div class="container" v-else>
        <div class="loading d-flex justify-content-center align-items-center">
          <h1 class="text-dark">Loading...</h1>
        </div>
        <!-- /.loading -->
      </div>
      <!-- /.container loading -->
    </main>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "App",
  components: {},
  data() {
    return {
      API_URL: "http://localhost:8080/PHP/php-ajax-dischi/php/api.php",
      response: null,
      musicList: null,
      disco: null,
      selectGenre: '',
      loading: true,
    };
  },
  methods: {
    callApi() {
      axios
        .get(this.API_URL)
        .then((response) => {
          //   console.log(response);
          this.musicList = response.data.response;
          // console.log(this.musicList);
          this.loading = false;
        })
        .catch((error) => {
          console.log(error);
          this.error = `  OPS! ${error.message}`;
        });
    },
  },
  mounted() {
    this.callApi();
  },
  computed: {
    filterGenre() {
      return this.musicList.filter(disco => {
        return disco.genre.toLowerCase().includes(this.selectGenre.toLowerCase());
      });
    },
  },
};
</script>

<style lang="scss">
@import "@/assets/scss/style.scss";
</style>
