<template>
    <div>
        <h1>User Login</h1>
        <form @submit.prevent="login">
            <div>
                <label for="email">Email</label>
                <input type="email" v-model="form.email" required />
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" v-model="form.password" required />
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
            form.post(route('user.login.post'))
        }

        return { form, login }

</script>
