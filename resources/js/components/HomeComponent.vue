<template>
    <div class="text-center" id="skills">
      <h1 class="fw-bold" style="margin-bottom: 20px;">Hard Skills / Soft Skills</h1>
                <div class="row">
                  <div class="col-lg-6" style="margin-top: 15px;">
                      <i class="fa-brands fa-html5 fa-5x hardskills"></i>
                      <i class="fa-brands fa-css3-alt fa-5x hardskills"></i>
                      <i class="fa-brands fa-js-square fa-5x hardskills"></i>
                      <i class="fa-brands fa-php fa-5x hardskills"></i>
                      <i class="fa-brands fa-angular fa-5x hardskills"></i>
                      <i class="fa-brands fa-java fa-5x hardskills"></i>
                    </div>
                    
                    <div class="col-lg-3" v-for="softskill in softskills" :key="softskill.id"
                    style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 1px;">
                      <p> {{ softskill.skill1 }} </p>
                      <p> {{ softskill.skill2 }} </p>
                      <p> {{ softskill.skill3 }} </p>
                    </div>
                    <div class="col-lg-3" v-for="softskill in softskills" :key="softskill.id" style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 1px;">
                      <p>{{ softskill.skill4 }}</p>
                      <p>{{ softskill.skill5 }}</p>
                      <p>{{ softskill.skill6 }}</p>
                    </div>
                </div>

              <br>
              <br>

                <div class="row">
                  <div class="col-lg-6" style="margin-top: 15px;">
                    <i class="fa-brands fa-android fa-5x hardskills"></i>
                    <i class="fa-brands fa-linux fa-5x hardskills"></i>
                    <i class="fa-brands fa-windows fa-5x hardskills"></i>
                    <i class="fa-brands fa-laravel fa-5x hardskills"></i>
                    <i class="fa-brands fa-vuejs fa-5x hardskills"></i>
                    <i class="fa-brands fa-sass fa-5x"></i>
                  </div>

                  <div class="col-lg-3" v-for="softskill in softskills" :key="softskill.id" style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 1px;">
                      <p>{{ softskill.skill7 }}</p>
                      <p>{{ softskill.skill8 }}</p>
                      <p>{{ softskill.skill9 }}</p>
                  </div>
                  <div class="col-lg-3" v-for="softskill in softskills" :key="softskill.id" style="box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 1px;">
                      <p>{{ softskill.skill10 }}</p>  
                      <p>{{ softskill.skill11 }}</p>
                      <p>{{ softskill.skill12 }}</p>
                  </div>
                </div>
    </div>

</template>

<script>
// import axios from 'axios';
// import { response } from 'express';

    export default {
      data() {
        return {
          softskills: []
        }
      },
      created() {
        let me = this;
        axios
          .get('/homevue')
          .then(response => {
            me.softskills = response.data;
          })
          .catch(error => {
            console.log(error)
          })
          .finally(() => this.loading = false)
      },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
