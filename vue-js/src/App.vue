<template>
  <div id="app">
    <header class="bg_transparent p-3">
      <div class="navbar">
        <div class="logo">
          <img width="60" src="@/assets/img/logo-small.svg" />
        </div>
        <!-- /.logo -->
      </div>
      <!-- /.navbar -->
    </header>

    <main class="pt-5">
      <div class="container">
        <div class="row row-cols-5">
          <div class="col gy-3">
            <div
              class="card h-100 p-3 rounded-0 bg_transparent"
              style="width: 15rem"
            >
              <img :src="poster" class="card-img-top img-fluid" alt="titolo" />
              <div class="card-body text-dark text-center">
                <h2
                  class="card-title text_white text-uppercase fs-4 fw-bold mt-3"
                >
                  {{ titolo }}
                </h2>
                <p class="card-text text_light fs-5 mt-3 mb-0 fw-bolder">
                  {{ autore }}
                </p>
                <p class="card-text text_light fs-6 fw-bolder">{{ anno }}</p>
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
    </main>
  </div>
</template>

<script>
export default {
  name: "App",
  components: {},
};
</script>

<style lang="scss">
@import "@/assets/scss/style.scss";
</style>
