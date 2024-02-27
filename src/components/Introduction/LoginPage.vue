<template>
  <body class="page page-onboarding preload">
    <main>
      <router-link to="/lobby-one" class="button button-close" role="button"></router-link>

      <section class="row no-gutter reverse-order">
        <div class="col-one-half middle padding">
          <div class="max-width-s">
            <h5>Bienvenidos a Polinder!</h5>
            <p class="paragraph">Introduzca sus datos a continuación.</p>
            <form @submit="login">
              <div class="form-group">
                <label for="email">Email:</label>
                <input v-model="email" type="email" >
              </div>
              <div class="form-group">
                <label for="password">Contraseña:</label>
                <input v-model="password" type="password">
              </div>
              <div class="form-group">
                <input id="remember-me" type="checkbox" name="remember-me">
                <label for="remember-me" class="checkbox">Recuérdame</label>
              </div>
              <button type="submit" class="button button-primary full-width">Iniciar sesión</button>
            </form>
          </div>
          <div class="center max-width-s space-top">
            <span class="muted">¿No tienes una cuenta? </span><router-link to="/sign-up">Inscribirse</router-link>
          </div>
        </div>
        <div class="col-one-half bg-image-04 featured-image"></div>
        <!-- Agregar el contenedor del diálogo de error -->
        <div class="error-dialog" v-if="showErrorDialog">
                <p class="error-message">Error al iniciar sesión. Por favor, asegúrese de ingresar su correo y contraseña correctamente.</p>
              </div>
        
      </section>
    </main>
  </body>
</template>

<script>
import axios from "axios";

export default {
  name: "login-page",
  data() {
    return {
      email: "",
      password: "",
      showErrorDialog: false,
    };

    
  },
  methods: {
    login(event) {
      event.preventDefault();
      // Realizar la solicitud de inicio de sesión utilizando Axios
      var bodyFormData = new FormData();
      bodyFormData.append('email', this.email); 
      bodyFormData.append('password', this.password); 
      axios({
          method: "post",
          url: "http://localhost/BackEnd.php",
          data: bodyFormData,
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then(response => {
          window.localStorage.setItem("IdUsuario", response.data.id);
          // Aquí puedes manejar la respuesta del servidor después de iniciar sesión correctamente
          console.log(response.data);
          // Redirigir a otro componente usando Vue Router
          this.$router.push("/lobby-two");
        })
        .catch(error => {
          // Aquí puedes manejar los errores que ocurran durante el inicio de sesión
          // Por ejemplo, mostrar un mensaje de error al usuario
          console.error(error);
          this.showErrorDialog = true;
          //alert("Error al iniciar sesión. Por favor, Asegurece que poner su correo y contrasena correctamente.");
        });
    },
  },
};
</script>

<style scoped>
.error-dialog {
  position: fixed;
  top: 60%;
  left: 30%;
  transform: translate(-50%, -50%);
  background-color: #fff;
  border: 1px solid #ccc;
  padding: 20px;
  z-index: 9999;
}

.error-message {
  color: red;
  margin: 0;
}
</style>