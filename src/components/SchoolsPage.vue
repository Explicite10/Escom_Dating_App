<template>
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
        <img class="avatar__image" :src="require(`../media/${usuarios.imagen}`)" />
        </div>
      </li>
    
    </ul>
  </nav>
</header>

<main>

  <section class="center bg-gradient-dark padding">
    <br>
    <div>
      <h2 class="hero">Escuelas</h2>
      <p style="color: white; font-size: 150%;">A continuacion se mostraran las escuelas.</p>
    </div>
    
    <!--Seccion de escuelas 1-->
    <div class="row margin-top max-width-l ">
      <div class="col-one-fourth card card-content">
        <!-- <a href="/cics-milpa-alta"> -->
        <router-link to="/cics-milpa-alta">
          <h4>CICS  MILPA ALTA</h4>
          <p class="muted">Centro Interdisciplinario de Ciencias de la Salud Unidad Milpa Alta.</p>
          <p class="paragraph"><img src="../media/escuelas/cicsuma.png"></p><!--</a> -->
        </router-link>
      </div>

      <div class="col-one-fourth card card-content">
        <router-link to="/cics-santo-tomas">
          <h4>CICS SANTO TOMAS</h4>
          <p class="muted">Centro Interdisciplinario de Ciencias de la Salud Unidad Santo Tomás.</p>
          <p class="paragraph"><img src="../media/escuelas/cicsust.png"></p>
        </router-link>
      </div>

      <div class="col-one-fourth card card-content">
        <router-link to="/enba-school">
          <h4>ENBA</h4>
          <p class="muted">Escuela Nacional de Biblioteconomía y Archivonomía.</p>
          <p class="paragraph"><img src="../media/escuelas/enba.png"></p>
        </router-link>
      </div>

      <div class="col-one-fourth card card-content">
        <router-link to="/encb-school">
          <h4>ENCB</h4>
          <p class="muted">Escuela Nacional de Ciencias Biológicas.</p>
          <p class="paragraph"><img src="../media/escuelas/encb2.jpg"></p>
        </router-link>
      </div>

    </div>

    <!--Seccion de escuelas 2-->
    <div class="row margin-top max-width-l ">
      <div class="col-one-fourth card card-content">
        <router-link to="/enmh-school">
          <h4>ENMH</h4>
          <p class="muted">Escuela Nacional de Medicina y Homeopatía.</p>
          <p class="paragraph"><img src="../media/escuelas/enmh.png"></p>
        </router-link>
      </div>

      <div class="col-one-fourth card card-content">
        <router-link to="/esm-school">
          <h4>ESM</h4>
          <p class="muted">Escuela Superior de Medicina.</p>
          <p class="paragraph"><img src="../media/escuelas/esm.png"></p>
        </router-link>
      </div>

      <div class="col-one-fourth card card-content">
        <router-link to="/eseo-school">
        <h4>ESEO</h4>
          <p class="muted">Escuela Superior de Enfermería y Obstetricia.</p>
          <p class="paragraph"><img src="../media/escuelas/eseo.jpg"></p>
        </router-link>
      </div>

      <div class="col-one-fourth card card-content">
        <router-link to="/esca-tepepan">
          <h4>ESCA TEPEPAN</h4>
          <p class="muted">Escuela Superior de Comercio y Administración Unidad Tepepan.</p>
          <p class="paragraph"><img src="../media/escuelas/esca.jpg"></p>
        </router-link>
      </div>

    </div>

    <!--Seccion de escuelas 3-->
    <div class="row margin-top max-width-l ">
      <div class="col-one-fourth card card-content">
        <router-link to="/esca-santo-tomas">
          <h4>ESCA SANTO TOMAS</h4>
          <p class="muted">Escuela Superior de Comercio y Administración Unidad Santo Tomás.</p>
          <p class="paragraph"><img src="../media/escuelas/esca.jpg"></p>
        </router-link>
      </div>

      <div class="col-one-fourth card card-content">
        <router-link to="/ese-school">
          <h4>ESE</h4>
          <p class="muted">Escuela Superior de Economía.</p>
          <p class="paragraph"><img src="../media/escuelas/ese.jpg"></p>
        </router-link>
      </div>

      <div class="col-one-fourth card card-content">
        <router-link to="/est-school">
          <h4>EST</h4>
          <p class="muted">Escuela Superior de Turismo.</p>
          <p class="paragraph"><img src="../media/escuelas/est.jpg"></p>
        </router-link>
      </div>

      <div class="col-one-fourth card card-content">
        <router-link to="/esime-azcapo">
          <h4>ESIME AZCAPOTZALCO</h4>
          <p class="muted">Escuela Superior de Ingeniería Mecánica y Eléctrica Unidad Azcapotzalco.</p>
          <p class="paragraph"><img src="../media/escuelas/esimeuz.jpg"></p>
        </router-link>
      </div>

    </div>

    <!--Seccion de escuelas 4-->
    <div class="row margin-top max-width-l ">
      <div class="col-one-fourth card card-content">
        <router-link to="/esime-culhuacan">
          <h4>ESIME CULHUACAN</h4>
          <p class="muted">Escuela Superior de Ingeniería Mecánica y Eléctrica Unidad Culhuacán.</p>
          <p class="paragraph"><img src="../media/escuelas/esimeuc.jpg"></p>
        </router-link>
      </div>

      <div class="col-one-fourth card card-content">
        <router-link to="/esime-ticoman">
          <h4>ESIME TICOMAN</h4>
          <p class="muted">Escuela Superior de Ingeniería Mecánica y Eléctrica Unidad Ticomán.</p>
          <p class="paragraph"><img src="../media/escuelas/esime.jpg"></p>
        </router-link>
      </div>

      <div class="col-one-fourth card card-content">
        <router-link to="/esime-zacatenco">
          <h4>ESIME ZACATENCO</h4>
          <p class="muted">Escuela Superior de Ingeniería Mecánica y Eléctrica Unidad Zacatenco.</p>
          <p class="paragraph"><img src="../media/escuelas/esimez.jpg"></p>
        </router-link>
      </div>

      <div class="col-one-fourth card card-content">
        <router-link to="/esia-tecamachalco">
          <h4>ESIA TECAMACHALCO</h4>
          <p class="muted">Escuela Superior de Ingeniería y Arquitectura Unidad Tecamachalco.</p>
          <p class="paragraph"><img src="../media/escuelas/esiaut.jpg"></p>
        </router-link>
      </div>

    </div>
    <!--Seccion de escuelas 5-->
    <div class="row margin-top max-width-l ">
      <div class="col-one-fourth card card-content">
        <router-link to="/esia-ticoman">
          <h4>ESIA TICOMAN</h4>
          <p class="muted">Escuela Superior de Ingeniería y Arquitectura Unidad Ticomán.</p>
          <p class="paragraph"><img src="../media/escuelas/esiaut.png"></p>
        </router-link>
      </div>

      <div class="col-one-fourth card card-content">
        <router-link to="/esia-zacatenco">
          <h4>ESIA ZACATENCO</h4>
          <p class="muted">Escuela Superior de Ingeniería y Arquitectura Unidad Zacatenco.</p>
          <p class="paragraph"><img src="../media/escuelas/esiauz.jpg"></p>
        </router-link>
      </div>

      <div class="col-one-fourth card card-content">
        <router-link to="/esiqie-school">
          <h4>ESIQIE</h4>
          <p class="muted">Escuela Superior de Ingeniería Química e Industrias Extractivas.</p>
          <p class="paragraph"><img src="../media/escuelas/ESIQIE.jpg"></p>
       </router-link>
      </div>

      <div class="col-one-fourth card card-content">
        <router-link to="/esit-school">
          <h4>ESIT</h4>
          <p class="muted">Escuela Superior de Ingeniería Textil.</p>
          <p class="paragraph"><img src="../media/escuelas/esit.jpg"></p>
        </router-link>
      </div>

    </div>
    <!--Seccion de escuelas 6-->
    <div class="row margin-top max-width-l ">
      <div class="col-one-fourth card card-content">
        <router-link to="/esfm-school">
          <h4>ESFM</h4>
          <p class="muted">Escuela Superior de Física y Matemáticas.</p>
          <p class="paragraph"><img src="../media/escuelas/esfm.png"></p>
        </router-link>
      </div>

      <div class="col-one-fourth card card-content">
        <router-link to="/escom-school">
          <h4>ESCOM</h4>
          <p class="muted">Escuela Superior de Cómputo.</p>
          <p class="paragraph"><img src="../media/escuelas/escom.png"></p>
        </router-link>
      </div>

    </div>

  </section>



</main>

<footer class="footer-main bg-gradient-primary dark overlay-shape-06">
  <div class="padding">
    
    <div class="row center-desktop max-width-l">
      <div class="col-two-fifths">
        <h6>Opalin ®</h6>
        <p>We're a completely remote company, working across twenty countries with over 20,000 customers.</p>
      </div>
      <div class="col-one-fifth">
        <h6>Info</h6>
        <ul class="blank">
          <li><a href="#">Getting Started</a></li>
          <li><a href="#">Resources</a></li>
          <li><a href="#">Design</a></li>
          <li><a href="#">Tutorials</a></li>
          <li><a href="#">Pricing</a></li>
        </ul>
      </div>
      <div class="col-one-fifth">
        <h6>Support</h6>
        <ul class="blank">
          <li><a href="#">Documentation</a></li>
          <li><a href="#">Requirements</a></li>
          <li><a href="#">License</a></li>
          <li><a href="#">Updates</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
      <div class="col-one-fifth">
        <h6>Connect</h6>
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
      usuarios: {
        nombre: "",
        imagen: "",
      },
    };
  },
  methods: {

  },
  created() {
    // Realiza la solicitud POST para obtener los datos del usuario
    var bodyFormData = new FormData();
    bodyFormData.append('id', window.localStorage.getItem("IdUsuario")); 

    axios.post('http://localhost/BackEnd.php', bodyFormData)
    .then(response => {
      // Asigna los datos del usuario a las variables del componente
      this.usuarios.nombre = response.data.nombre;
      this.usuarios.imagen = response.data.imagen;
    })
    .catch(error => {
      console.error(error);
    });
  }
}
</script>