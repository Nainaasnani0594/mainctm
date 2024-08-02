<template>
    <div>
        <h1>Admin Register</h1>
        <form @submit.prevent="register">
            <div>
                <label for="name">Name</label>
                <input type="text" v-model="form.name" required />
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" v-model="form.email" required />
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" v-model="form.password" required />
            </div>
            <div>
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" v-model="form.password_confirmation" required />
            </div>
            <input type="hidden" v-model="form.role" value="admin" />
            <button type="submit">Register</button>
        </form>
    </div>
</template>

<script setup>
import { ref } from 'vue'
import { useForm } from '@inertiajs/inertia-vue3'

        const form = useForm({
            name: '',
            email: '',
            password: '',
            password_confirmation: '',
            role: 'admin',
        })

        const register = () => {
            form.post(route('admin.register.post'))
        }

        return { form, register }
</script>
