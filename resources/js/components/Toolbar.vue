<template>
    <v-toolbar>
<!--        <v-toolbar-side-icon></v-toolbar-side-icon>-->
        <v-toolbar-title>
            <v-btn to="/">Home</v-btn>
        </v-toolbar-title>
        <v-spacer></v-spacer>
        <v-toolbar-items class="hidden-sm-and-down">

            <v-btn flat>Forum</v-btn>
            <v-btn flat>Ask Question</v-btn>
            <v-btn flat>Category</v-btn>
            <v-btn flat>
                <router-link to="/login">Login</router-link>
            </v-btn>

        </v-toolbar-items>
    </v-toolbar>
</template>
<script>
    export default {

    }
</script>
<style></style>
