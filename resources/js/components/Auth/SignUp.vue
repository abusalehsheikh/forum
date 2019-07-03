<template>
    <v-container>
        <form @submit.prevent="signup">
            <v-text-field
                    v-model="form.name"
                    label="Name"

                    type="text"
            ></v-text-field>
            <span class="red--text" v-if="errors.name">{{errors.name[0]}}</span>

            <v-text-field
                    v-model="form.email"
                    label="E-mail"

                    type="email"
            ></v-text-field>

            <v-text-field
                    v-model="form.password"
                    label="Password"

                    type="password"
            ></v-text-field>
            <v-text-field
                    v-model="form.password_confirmation"
                    label="Password"

                    type="password"
            ></v-text-field>

            <v-btn type="submit" color="green">SignUp</v-btn>
            <v-btn flat><router-link to="/login">Login</router-link></v-btn>
        </form>
    </v-container>
</template>

<script>
    export default {
        data(){
            return{
                form :{
                    name:null,
                    email:null,
                    password:null,
                    password_confirmation:null
                },
                errors:{}
            }
        },
        created(){
          if(User.loggedIn()){
              this.$router.push({name:'forum'})
          }
        },
        methods:{
            signup(){
                axios.post('/api/auth/signup',this.form)
                    .then(res => {
                        User.responseAfterLogin(res)
                        this.$router.push({name:'forum'})
                    })
                    .catch(error => this.errors = error.response.data.error)
            }
        }
    }
</script>

<style scoped>

</style>
