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
                axios.post('api/auth/login',this.form)
                    .then(res => console.log(res.data))
                    .catch(error => console.log(error.response.data))
            }
        }

    }
</script>
<style></style>
