<template>
  <div>
    <body class="page page-onboarding preload">
      <main>
        <router-link to="/lobby-one" class="button button-close" role="button"></router-link>

        <section class="row no-gutter reverse-order">
          <div class="col-one-half middle padding">
            <div class="max-width-s">
              <h5>Bienvenidos a Polinder!</h5>
              <p class="paragraph">Introduce tus datos para crear una cuenta.</p>

              <form @submit.prevent="register" enctype="multipart/form-data">
        
              <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input id="nombre" type="text" v-model="nombre" required>
              </div>
              <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input id="apellido" type="text" v-model="apellido" required>
              </div>
              <div class="form-group">
                <label for="boleta">Boleta:</label>
                <input id="boleta" type="text" v-model="boleta" required>
              </div>
              <div class="form-group">
                <label for="correo">Correo:</label>
                <input id="email" type="email" v-model="email" required>
              </div>
              <div class="form-group">
                <label for="contrasena">Contraseña:</label>
                <input id="password" type="password" v-model="password" required>
              </div>
              <div class="form-group">
              <label for="escuelas" class="form-label">Escuelas</label>
              <select id="escuelas" class="form-select" v-model="escuela" required>
                <option  selected disabled="selected">Elegir...</option>
                <option>CICS Unidad Milpa Alta</option>
                <option>CICS Unidad Santo Tomás</option>
                <option>Escuela Nacional de Biblioteconomía y Archivonomía</option>
                <option>Escuela Nacional de Ciencias Biológicas</option>
                <option>Escuela Nacional de Medicina y Homeopatía</option>
                <option>Escuela Superior de Medicina</option>
                <option>Escuela Superior de Enfermería y Obstetricia</option>
                <option>Escuela Superior de Comercio y Administración Unidad Tepepan</option>
                <option>ESCA Unidad Santo Tomás</option>
                <option>Escuela Superior de Economía</option>
                <option>Escuela Superior de Turismo</option>
                <option>Escuela Superior de Ingeniería Mecánica y Eléctrica Unidad Azcapotzalco</option>
                <option>ESIME Unidad Culhuacán</option>
                <option>ESIME Unidad Ticomán</option>
                <option>ESIME Unidad Zacatenco</option>
                <option>Escuela Superior de Ingeniería y Arquitectura Unidad Tecamachalco</option>
                <option>ESIA Unidad Ticomán</option>
                <option>ESIA Unidad Zacatenco</option>
                <option>Escuela Superior de Ingeniería Química e Industrias Extractivas</option>
                <option>Escuela Superior de Ingeniería Textil</option>
                <option>Escuela Superior de Física y Matemáticas</option>
                <option>Escuela Superior de Cómputo</option>
              </select>
            </div>
              <div class="form-group">
                <label for="telefono">Telefono:</label>
                <input id="telefono" type="text" v-model="telefono" required>
              </div>
              <div class="form-group">
                <label for="planRelacion">Plan de relacion:</label>
                <input id="planRelacion" type="text" v-model="planRelacion" required>
              </div>
              <div class="form-group">
                <label for="descripcion">Descripcion:</label>
                <textarea id="description" type="text-area" v-model="descripcion" required> </textarea>
              </div>
              <div class="form-group">
                <label for="imagen">Selecciona tu foto:</label>
                <input type="file" id="imagen" name="imagen" ref="fileInput">
              </div>
              <button type="submit" class="button button-primary full-width space-top">Crear una cuenta</button>
            </form>

            </div>
            <div class="center max-width-s space-top">
              <span class="muted">Al crear una cuenta, acepta nuestros </span><a href="terminos.html">Términos</a><span class="muted">.</span>
            </div>
            <div class="center max-width-s">
              <span class="muted">¿Ya tienes una cuenta? </span><router-link to="/login-page">Iniciar sesión</router-link>
            </div>
          </div>
          <div class="error-dialog" v-if="showErrorEmail">
            <p class="error-message">Error al crear la cuenta. Por favor, asegúrese de ingresar su correo institucional.</p>
          </div>
          <div class="col-one-half bg-image-05 featured-image"></div>
        </section>
      </main>
    </body>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: "SignUp",
  data() {
    return {
      showErrorEmail: false,
      imagen: null,
      nombre: "",
      password: "",
      boleta: "",
      escuela: "",
      telefono: "",
      planRelacion: "",
      descripcion: "",
      email: "",
     
    };
  },
  methods: {


    
    register() {
      const fileInput = this.$refs.fileInput;
      const file = fileInput.files[0];

      const maxSize = 5 * 1024 * 1024; // 5 MB
      if (file.size > maxSize) {
        console.error("El tamaño del archivo excede el límite permitido");
        return;
      }
      var bodyFormData = new FormData();
      bodyFormData.append('email', this.email);
      bodyFormData.append('password', this.password);
      bodyFormData.append('nombre', this.nombre);
      bodyFormData.append('apellido', this.apellido);
      bodyFormData.append('boleta', this.boleta);
      bodyFormData.append('telefono', this.telefono);
      bodyFormData.append('escuela', this.escuela);
      bodyFormData.append('planRelacion', this.planRelacion);
      bodyFormData.append('descripcion', this.descripcion);
      bodyFormData.append('imagen', file);

      // Validar el correo electrónico
      if (!this.email.endsWith("@ipn.mx")) {
        // Mostrar mensaje de error o tomar la acción correspondiente
        this.showErrorEmail = true;
        console.error("El correo electrónico debe tener la terminación '@ipn.mx'");
        return;
      }

      // Realizar la solicitud HTTP utilizando Axios
      axios({
        method: "post",
        url: "http://localhost/registro.php",
        data: bodyFormData,
        headers: { "Content-Type": "multipart/form-data" },
      })
      .then(response => {
        console.log(response.data);
        // Redireccionar a "/login=page"
        this.$router.push("/login-page");
    })
        .catch(error => {
          this.showErrorEmail = false;
          console.log(error);
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