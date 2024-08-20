<template>
    <div class="login-container">
        <div class="login-box">
            <h1 class="title">Login</h1>
            <input v-model="username" type="text" placeholder="Username" class="input" />
            <input v-model="password" type="password" placeholder="Password" class="input" />
            <button @click="handleLogin" class="login-button">Log in</button>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import '@/assets/css/login.css';

const username = ref('');
const password = ref('');

const handleLogin = () => {
    console.log('Login attempted with', username.value, password.value);
};
</script>