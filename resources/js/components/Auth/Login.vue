<template>
    <v-container>
    <form @submit.prevent="login">

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



        <v-btn type="submit" color="green">Login</v-btn>
        <v-btn flat><router-link to="/signup">SignUp</router-link></v-btn>
    </form>
    </v-container>
</template>
<script>
    export default {
        data(){
            return {
                form :{
                    email:null,
                    password:null
                }
            }
        },
        created(){
            if(User.loggedIn()){
                this.$router.push({name:'forum'})
            }
        },
        methods:{
            login(){
                User.login(this.form)
            }
        }

    }
</script>
<style></style>
