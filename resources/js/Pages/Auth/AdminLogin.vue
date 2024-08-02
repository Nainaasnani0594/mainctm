<!-- resources/js/Pages/Auth/AdminLogin.vue -->

<template>
    <div>
        <h1>Admin Login</h1>
        <form @submit.prevent="login">
            <div>
                <label for="email">Email</label>
                <input type="email" v-model="form.email" placeholder="Email" required />
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" v-model="form.password" placeholder="Password"  required />
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</template>

<script setup>
import { ref } from 'vue'
import { useForm } from '@inertiajs/inertia-vue3'

        const form = useForm({
            email: '',
            password: '',
        })

        const login = () => {
            form.post(route('admin.login.post'))
        }

        return { form, login }


</script>
