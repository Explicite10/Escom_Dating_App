<template>
    <router-link to=""></router-link>
    <body class="page page-home preload">

<header class="header-main dark">
  <nav>
    <router-link to="/lobby-two" class="logo" rel="home"></router-link><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24"><path d="M7.335 1.023l2.462.434a1 1 0 0 1 .811 1.159L8.004 17.388a2 2 0 0 1-2.317 1.622l-3.94-.694a1 1 0 0 1-.81-1.159L3.28 3.862a3.5 3.5 0 0 1 4.054-2.839zm7.039 3.272l7.878 1.39a1 1 0 0 1 .812 1.158l-1.997 11.325a5.5 5.5 0 0 1-6.372 4.461l-4.431-.78a1 1 0 0 1-.812-1.16l2.605-14.771a2 2 0 0 1 2.317-1.623z" fill="currentColor"/></svg><span>Polinder</span>
    <div class="nav-toggle"></div>
    <ul class="inline">
      <li><router-link  to="/lobby-two"  class="active"></router-link></li>
      <li><router-link  to="/my-account"></router-link></li>
      <li><router-link  to="/help-page"></router-link></li>
      <li><router-link  to="/sign-up"></router-link></li>
    </ul>
    <ul class="inline right">
      <li><router-link to="/login-page">Iniciar sesión</router-link></li>
      <li><router-link to="/sign-up" class="button button-secondary button-m full-width-tablet" role="button"></router-link></li>
    </ul>
  </nav>
</header>

<main>

  <section class="bg-gradient-dark padding">
    <br>
    
      <h2 class="center hero">Terminos y condiciones</h2>
      <p class="center lead3">A continuación se mostraran nuestros términos y condiciones los cuales el usuario deberá de respetar y cumplir al pie de la letra.</p>
    
    
    <!--seccion 1-->
    <div class="center row margin-top max-width-l ">
      <div class="col-one-half card card-content">
        <h3 class="center hero">Propietario de la página web</h3>
      <p class="lead2">
        Esta página web es propiedad y está operado por Polinder. Estos Términos establecen los términos y condiciones bajo los cuales tu puedes usar nuestra página web y servicios ofrecidos por nosotros. Esta página web ofrece a los visitantes poder visualizar infromacion de otras personas para poder establecer comunicaion entre ellas. Al acceder o usar la página web de nuestro servicio, usted aprueba que haya leído, entendido y aceptado estar sujeto a estos Términos:
      </p>
      </div>
    </div>

          <!--seccion 2-->
    <div class="center row margin-top max-width-l ">
      <div class="col-one-half card card-content">
        <h3 class="center hero">Edad para poder utilizar nuestra página</h3>
      <p class="center lead2">
        Para usar nuestro página web y / o recibir nuestros servicios, debes tener al menos 17 años de edad, o la mayoría de edad legal en tu jurisdicción, y poseer la autoridad legal, el derecho y la libertad para participar en estos Términos como un acuerdo vinculante. No tienes permitido utilizar esta página web y / o recibir servicios si hacerlo está prohibido en tu país o en virtud de cualquier ley o regulación aplicable a tu caso.
      </p>
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
export default {
  name: "policy-page",
  data() {
    
  },
}
</script>