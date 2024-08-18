<template>
  <div class="login-container">
    <a-form
        class="login-form"
        @finish="onFinish"
        :layout="'vertical'"
    >
      <a-form-item
          name="username"
          rules="[ { required: true, message: 'Please input your username!' } ]"
      >
        <a-input v-model:value="form.username" placeholder="Username" />
      </a-form-item>
      <a-form-item
          name="password"
          rules="[ { required: true, message: 'Please input your password!' } ]"
      >
        <a-input-password v-model:value="form.password" placeholder="Password" />
      </a-form-item>
      <a-form-item>
        <a-button type="primary" html-type="submit" class="login-form-button">
          Log in
        </a-button>
      </a-form-item>
    </a-form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        username: '',
        password: ''
      }
    };
  },
  methods: {
    onFinish() {
      console.log('Login successful with:', this.form);
    }
  }
};
</script>

<style scoped>
.login-container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: radial-gradient(circle, rgba(36, 36, 62, 1) 0%, rgba(29, 29, 42, 1) 100%);
}

.login-form {
  max-width: 300px;
  width: 100%;
  padding: 40px;
  border-radius: 10px;
  background-color: #1c1c3a;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
}

.login-form-button {
  width: 100%;
  background-color: #4f9dff;
  border-color: #4f9dff;
}

.login-form-button:hover {
  background-color: #407ac6;
  border-color: #407ac6;
}

a-input, a-input-password {
  background-color: #2b2b52;
  border-color: #4f9dff;
  color: #ffffff;
}

a-input::placeholder, a-input-password::placeholder {
  color: #757575;
}

a-input:hover, a-input-password:hover {
  border-color: #4f9dff;
}
</style>
