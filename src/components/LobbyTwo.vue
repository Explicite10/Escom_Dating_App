<template>
    <router-link to=""></router-link>
<body class="page page-home preload">

<header class="header-main dark">
  <nav>
    <a href="/lobby-one" class="logo" rel="home"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24"><path d="M7.335 1.023l2.462.434a1 1 0 0 1 .811 1.159L8.004 17.388a2 2 0 0 1-2.317 1.622l-3.94-.694a1 1 0 0 1-.81-1.159L3.28 3.862a3.5 3.5 0 0 1 4.054-2.839zm7.039 3.272l7.878 1.39a1 1 0 0 1 .812 1.158l-1.997 11.325a5.5 5.5 0 0 1-6.372 4.461l-4.431-.78a1 1 0 0 1-.812-1.16l2.605-14.771a2 2 0 0 1 2.317-1.623z" fill="currentColor"/></svg><span>Polinder</span></a>
      <div class="nav-toggle"></div>
      <ul class="inline">
        <li><a href="/lobby-two" class="active">Inicio</a></li>
        <li><a href="/my-account">Mi cuenta</a></li>
        <li><a href="/help-page">Ayuda</a></li>
        <li><a href="/login-page">Cerrar sesión</a></li>
    </ul>
    <ul class="inline right">
      <li>{{ usuarios.nombre }}</li>
      <li><div class="avatar"> 
        <!-- Avatar image -->
        <img class="avatar__image"  :src="require(`../media/${usuarios.imagen}`)"/>
        </div>
      </li>
    </ul>
  </nav>
</header>
<main>
  <section class="bg-image-hero center-tablet dark overlay-hero">
    <div class="full-screen -margin-bottom middle padding padding-top-tablet">
      <div class="row max-width-l">
        <div class="col-one-half middle">
          <div>
            <h1 class="hero">Polinder</h1>
            <p class="lead">Un pagina donde seguro encuentras con quien socializar dentro de tu ambiente educativo.</p>
            <router-link to="/schools-page" class="button button-primary space-top" role="button">Explorar Escuelas</router-link>
          </div>
        </div>
        <div class="col-one-half middle">
          <img src="../media/content/hero-illustration.png" alt="Hero Illustration">
        </div>
      </div>
    </div>
    <div class="container">
  <div class="post-form">
    <p class="primerParrafoPost">Publicaciones de los usuarios</p>
    <label for="post">¿Qué es lo que piensas?</label>
    <textarea id="description" type="text-area" v-model="enteredPost"></textarea>
    <button @click="pushPost">Publicar</button>
  </div>

  <div>
    <ul v-for="(result, index) in results" :key="result.id" :nombre="result.name" :usuario="result.usuario" class="post">
      <p class="usuario">Usuario: <span class="usuario-negrita">{{ result.usuario }}</span></p>
      {{ result.post }}
      <button class="delete-button" @click="borrarPost(index)">Borrar</button>
    </ul>
  </div>
</div>

    <div class="padding">
      <div class="row margin-bottom max-width-l">
        <div class="col-one-half middle">
          <h3>Conoce gente nueva</h3>
          <p class="paragraph">Date la oportunidad de conocer a nuevas personas con gustos similares a los tuyos.</p>
        </div>
        <div class="col-one-half">
          <img class="rounded shadow-l" src="../media/content/editor.png" alt="Editor">
        </div>
      </div>
      <div class="row max-width-l reverse-order">
        <div class="col-one-half">
          <img class="rounded shadow-l" src="../media/content/dos.jpg" alt="Sketch">
        </div>
        <div class="col-one-half middle">
          <h3>Para socializar o incluzo algo mas...</h3>
          <p class="paragraph">Polinder cuenta con 3 tipos de plan acorde a lo que buscas.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="center bg-gradient-light padding">
    <div class="center max-width-l">
      <h3>Creadores</h3>
      <p class="paragraph">A continuacion se mostraran los creadores de la pagina web.</p>
    </div>
    
    <div class="row margin-top max-width-l ">
      <div class="col-one-fourth card card-content dark">
        <p class="muted">Lider del proyecto</p>
        <h4>Gomez Basurto Etienne</h4>
        <p class="paragraph"><img src="../media/etienne.jpg"></p>
      </div>
      <div class="col-one-fourth card card-content dark">
        <p class="muted">Programador FullStack</p>
        <h4>Juarez Jaimes Alexis Eduardo</h4>
        <p class="paragraph"><img src="../media/alex.jpg"></p>
      </div>
    </div>
    <div class="row margin-top max-width-l">
      <div class="col-one-fourth card card-content dark">
        <p class="muted">Analista programador</p>
        <h4>Almanza Rios Jael</h4>
        <p class="paragraph"><img src="../media/yael.jpg"></p>
      </div>
      <div class="col-one-fourth card card-content dark">
        <p class="muted">Disenador Grafico</p>
        <h4>Campos Duran Fabrizio</h4>
        <p class="paragraph"><img src="../media/fabri.jpg"></p>
      </div>
      <div class="col-one-fourth card card-content dark">
        <p class="muted">Tester</p>
        <h4>Lopez Perez Alberto Andrei</h4>
        <p class="paragraph"><img src="../media/andrei.jpg"></p>
      </div>
    </div>
  </section>

</main>

<footer class="footer-main bg-gradient-primary dark overlay-shape-06">
  <div class="padding">

    
    <div class="row center-desktop max-width-l">
      <div class="col-two-fifths">
        <h6>Polinder ®</h6>
        <p>Somos una empresa completamente remota que trabaja en veinte países con más de 20 000 clientes.</p>
      </div>
      <div class="col-one-fifth">
        <h6>Informacion</h6>
        <ul class="blank">
          <li><a href="#">Empezando</a></li>
          <li><a href="#">Recursos</a></li>
          <li><a href="#">Diseno</a></li>
          <li><a href="#">Tutoriales</a></li>
          <li><a href="#">Precios</a></li>
        </ul>
      </div>
      <div class="col-one-fifth">
        <h6>Soporte</h6>
        <ul class="blank">
          <li><a href="#">Documentación</a></li>
          <li><a href="#">Requisitos</a></li>
          <li><a href="#">Licencia</a></li>
          <li><a href="#">Actualizaciones</a></li>
          <li><a href="#">Contacto</a></li>
        </ul>
      </div>
      <div class="col-one-fifth">
        <h6>Contactos</h6>
        <ul class="blank">
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Instagram</a></li>
          <li><a href="#">Medium</a></li>
        </ul>
      </div>
    </div>
  </div>
  <p class="copyright"><span>HTML Template by </span><a href="https://uiuxassets.com/" target="_blank">UI/UX Assets</a><span> - © 2018, all rights reserved.</span></p>
</footer>

</body>
</template>

<script>
import axios from 'axios'; // Importa Axios

export default {
  name: 'LobbyTwo',
  data() {
    return {
      results:[],
      enteredPost: '',
      saveNamePost: '',
      usuarios: {
        email: "",
        password: "",
        nombre: "",
        apellido: "",
        boleta: "",
        telefono: "",
        escuela: "",
        planRelacion: "",
        descripcion: "",
        imagen: ""
      },
      
    };
  },
  methods: {
    borrarPost(index) {
    const postId = this.results[index].id;
    
    // Eliminar el elemento del arreglo local
    this.results.splice(index, 1);

    // Realizar la solicitud DELETE a la base de datos
    axios.delete(`https://vue-http-demo-c68cf-default-rtdb.firebaseio.com/surveys/${postId}.json`)
      .then(response => {
        console.log("Dato de la base de datos");
        console.log(response.data);
      })
      .catch(error => {
        console.log(error);
        // Si ocurre un error al eliminar en la base de datos, puedes considerar agregar el elemento nuevamente al arreglo local
        this.results.splice(index, 0, this.results[index]);
      });
  },
    pushPost() {
      this.results.push(this.enteredPost);
      console.log(this.saveNamePost);
      console.log(this.results);
      axios.post('https://vue-http-demo-c68cf-default-rtdb.firebaseio.com/surveys.json', {
        post: this.enteredPost,
        usuario: this.usuarios.nombre
        
      })
      .then(response => {
        console.log(response.data);
        this.enteredPost = '';
        this.cargarPubliaciones();
      })
      .catch((error) => {
        console.log(error);
        this.error = error.message;
      });
    },
    cargarPubliaciones() {
      axios.get('https://vue-http-demo-c68cf-default-rtdb.firebaseio.com/surveys.json')
      .then((response) => {
        if (response.status === 200) {
          return response.data;
        }
      })
      .then((data) => {
        const results = [];
        for (const id in data) {
          results.push({
            id: id,
            post: data[id].post,
            usuario: data[id].usuario
          });
        }
        this.results = results;
      })
      .catch((error) => {
        console.log(error);
        this.error = "Falla en recuperar los datos - Por favor inténtalo más tarde";
      });
    }
  },
  created() {
    this.cargarPubliaciones();
    // Realiza la solicitud POST para obtener los datos del usuario
    var bodyFormData = new FormData();
    bodyFormData.append('id', window.localStorage.getItem("IdUsuario")); 
    

    axios.post('http://localhost/BackEnd.php', bodyFormData)
    .then(response => {
      // Asigna los datos del usuario a las variables del componente
      this.usuarios.email = response.data.email;
      this.usuarios.password = response.data.password;
      this.usuarios.nombre = response.data.nombre;
      this.usuarios.apellido = response.data.apellidos;
      this.usuarios.boleta = response.data.boleta;
      this.usuarios.telefono = response.data.telefono;
      this.usuarios.escuela = response.data.escuela;
      this.usuarios.planRelacion = response.data.plan_relacion;
      this.usuarios.descripcion = response.data.descripcion;
      this.usuarios.imagen = response.data.imagen;

      console.log(response.data.imagen);
       
    })
    .catch(error => {
      console.error(error);
    });
  },

}
</script>

<style scoped>
  /* Estilo para el contenedor principal */
  .container {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
  }

  /* Estilo para los elementos de la publicación */
  .post {
    background-color: #eec4c4;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 10px;
  }

  .post p {
    margin: 0;
    color: black; /* Letras de color negro */
  }

  .post .delete-button {
    float: right;
    background-color: red; /* Botón de color rojo */
    color: white; /* Letras de color blanco */
    border: none;
    border-radius: 20px; /* Botón más redondo */
    padding: 5px 10px;
    cursor: pointer;
  }

  /* Estilo para el formulario de publicación */
  .post-form {
    text-align: center;
    margin-bottom: 20px;
  }

  .post-form label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
  }

  .post-form textarea {
    width: 100%;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    resize: vertical;
  }

  .post-form button {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    margin-top: 10px;
    border-radius: 5px;
    cursor: pointer;
  }

  /* Nuevos estilos */
  .usuario {
    color: black;
    font-weight: bold;
  }

  .usuario-negrita {
    font-weight: bold;
  }

  .primerParrafoPost {
    margin-bottom: 10%;
    margin-top: 15%;
    font-size: 40px;
  }
</style>
