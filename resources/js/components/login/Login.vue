<template>
    <v-container>
    <form @submit.prevent="login">

        <v-text-field
                v-model="form.email"
                label="E-mail"
                required
                type="email"
        ></v-text-field>

        <v-text-field
                v-model="form.password"
                label="Password"
                required
                type="password"
        ></v-text-field>



        <v-btn type="submit" color="green">Login</v-btn>
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
        methods:{
            login(){
                User.login(this.form)
            }
        }

    }
</script>
<style></style>
