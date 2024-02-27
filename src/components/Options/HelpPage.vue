<template>
  <router-link to=""></router-link>
  <body class="page page-home preload">

<header class="header-main dark">
<nav>
  <a href="/lobby-two" class="logo" rel="home"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24"><path d="M7.335 1.023l2.462.434a1 1 0 0 1 .811 1.159L8.004 17.388a2 2 0 0 1-2.317 1.622l-3.94-.694a1 1 0 0 1-.81-1.159L3.28 3.862a3.5 3.5 0 0 1 4.054-2.839zm7.039 3.272l7.878 1.39a1 1 0 0 1 .812 1.158l-1.997 11.325a5.5 5.5 0 0 1-6.372 4.461l-4.431-.78a1 1 0 0 1-.812-1.16l2.605-14.771a2 2 0 0 1 2.317-1.623z" fill="currentColor"/></svg><span>Polinder</span></a>
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
      <img class="avatar__image" :src="require(`../../media/${usuarios.imagen}`)" />
      </div>
    </li>
  
  </ul>
</nav>
</header>

<main>

<section class="bg-gradient-dark padding">
  <br>
  
    <h2 class="center hero">Ayuda</h2>
    <p class="center lead3">En esta sección tiene como propósito apoyar a los estudiantes para tener una idea sobre como inicializar una plática o mantener una conversación.</p>
  
  
  <!--seccion 1-->
  <div class="center row margin-top max-width-l ">
    <div class="col-one-half card card-content">
      <h3 class="center hero">Tecnicas para iniciar y mantener una conversación</h3>
    <p class="lead2">1. Regala una sonrisa<br>
      Claudia recomienda iniciar siempre con un semblante agradable, regalar una sonrisa que también incluya la mirada: sonreír con boca y ojos, además de hacer contacto visual.
      
       <br><br>
      
      2. Busca un tema a tus alrededores<br>
      Si ya se conoce a la persona, y hay confianza, no habrá muchas dificultades para sacar tema, pues se puede comenzar con algún tema que previamente ya sepan que tienen en común.
      <br>
      Cuando no se conoce a la persona con la que se quiere conversar, es adecuado presentarse pero también se puede iniciar haciendo algún comentario referente al contexto que los rodea; por ejemplo, en un evento deportivo, uno artístico, o comentar brevemente nuestra opinión sobre un artista o la obra expuesta, recomienda Claudia.
      
       <br><br>
      
      3. Muestra interés por el otro<br>
      “Después de recibir alguna respuesta favorable, hay que tener la cortesía de mostrar interés por el otro, preguntando algo trivial sobre él o ella, algo que no intimide y que haga que la otra persona se sienta cómoda”, expresó Claudia.
      <br>
      Además, resaltó que se puede seguir conversando sobre lo que se comentó al crear el contacto inicial, pero también se puede preguntar sobre su nombre, a qué se dedica o sus ocupaciones en su tiempo libre. 
      <br>
      “Cuando ya conocemos a nuestro receptor, preguntar cómo se siente después de saludarlo, generalmente da inicio a una conversación”, agregó.
      
       <br><br>
      
      4. No olvides hablar sobre ti mismo<br>
      Habla un poco sobre ti, cuidando de no mencionar aspectos íntimos que pudieran inhibir a la otra persona. 
      <br>
      “Puedes hablar sobre algo en general que te guste que vaya acorde al contexto, puede ser sobre deportes, pasatiempos, trabajo, libros, películas, comida, amigos o familiares, cuidando de no mencionar detalles sobre terceros.” mencionó la experta.
      <br>
      “Es muy importante siempre respetar la privacidad de quienes mencionas y la tuya propia”, aclaró.
      
      <br><br>
      
      5. Haz que la conversación fluya<br>
      La conversación va a fluir en la medida que las personas se sientan cómodas y no invadidas. 
      <br>
      Según la experta, si no conoces a la persona con quien se está entablando conversación, no se debe invadir su espacio, guardando una distancia que demuestre respeto y a la vez interés y será una plática muy amena..</p>
    </div>
  </div>

        <!--seccion 2-->
  <div class="center row margin-top max-width-l ">
    <div class="col-one-half card card-content">
      <h3 class="center hero">10 ideas para empezar una conversación entretenida</h3>
    <p class="center lead2">1. Empieza por lo fácil
      Hay fórmulas que son como la Coca-Cola, funcionan seguro. Preguntas como “¿Qué tal?” “¿Cómo va el día?” o “Buenas, ¿cómo estás?” aseguran una respuesta tipo: “bien, ¿y tú?”. Esa es la respuesta que buscas. Este estudio demostró que al responder “bien” esa persona estará más dispuesta a entablar una conversación y adoptar una conducta sociable.
      
      Si alguien te responde: “la verdad es que estoy bastante mal”, corre insensato.
      
       
      <br><br>
       
      
      2. Aprende a escuchar
      9 de cada 10 personas no escuchan, sino que esperan su turno para poder hablar.
      
      Nuestro instinto nos lleva a revisar experiencias propias similares a las que cuenta nuestro interlocutor.
      Cuando alguien nos dice: “El otro día estuve buceando en las Islas…” inmediatamente pensamos si nosotros lo hemos hecho, dónde y cuándo. Y entonces esperamos que acabe de contarlo -sin escuchar demasiado- para poder contar lo nuestro.
      
      Si quieres ser un buen conversador deberás apaciguar ese instinto y escuchar atentamente lo que te cuentan. No pienses en lo que puedes aportar tú, céntrate en escuchar y saber más sobre esa persona.
      
      Esa es la base de todo lo que viene a continuación.
      
       
      <br><br>
       
      
      3. No necesitas temas de conversación interesantes, ellos te los darán.
      Una de las preguntas más frecuentes a la hora de entablar una conversación es: “¿De qué hablo? ¡No conozco temas interesantes o divertidos!”
      
      Es una mala pregunta.
      
      Lo que te deberías preguntar es: “¿Cómo puedo hacer que hablen de ellos mismos?”
      
      Varios estudios han demostrado que una de las estrategias más efectivas para agradar a la gente es escucharles y pedirles que te cuenten más.
      
      Según la neurocientífica Diana Tamir y su compañero de Harvard, Jason Mitchell, hablar de nosotros mismos nos proporciona tanto placer como la comida o el dinero. A juzgar por cómo se comporta la gente en Twitter o Facebook diría que incluso más.
      
      ¿Cómo lo conseguimos?
      
      Mi frase preferida es: “¿ah, sí?”. Usar esta pregunta después de una afirmación de tu interlocutor asegura que siga hablando para añadir más detalles.
      También puedes usar otras como: “cuéntame más” o usar preguntas clásicas como: dónde, cuándo, con quién hiciste eso, etc.
      
       
      <br><br>
       
      
      4. No quieras parecer interesante. No funciona.
      Una vez le oí decir a alguien que no hay nada menos sexi que alguien intentando ser sexi.
      Lo mismo se puede aplicar para parecer interesante. Estudios demuestran que, al intentarlo, solo lograrás parecer más estúpido.
      
      Un técnica que a menudo se usa para parecer interesante es relacionarte con personajes conocidos. No lo hagas. Este estudio encontró que usar el clásico “Yo conozco a Fernando Alonso” no te ayudará a hacer amigos sino todo lo contrario.
      
      La paradoja es que sueles parecer más interesante cuando te interesas por los demás.
      
      Despierta ese genuino interés que tienes dentro por saber más sobre ellos. Haz preguntas sin miedo pero con cuidado.
      
      ¿Cuáles son las mejores? Ahora te cuento más.
      
       
      <br><br>
       
      
      5. Las preguntas son la chispa que hace arder la gasolina
      Siempre que hagas una pregunta intenta que sea abierta y no se pueda responder con un sí o un no, de lo contrario te arriesgas a que suceda eso mismo y se cree un ambiente incómodo.
      
      Las preguntas que más me gustan para sacar temas de conversación son las relacionadas con los problemas.
      Todo el mundo tiene problemas y nos encanta hablar de ellos. Es una manera de darnos la importancia que todos buscamos.
      
      ¿Qué problema estáis intentando solucionar en el trabajo? ¿Qué problema te han dado esta semana tus hijos? ¿Cuál es el vecino que da más problemas? ¿Cuál es el mayor problema de vivir aquí?
      
      Las respuestas a estas preguntas suelen ser quejas que, a menudo, pueden ser compartidas. Y cuando compartes algo… se pone en marcha el principio de similitud que es uno de los que más conexión con las personas genera.
      
       
      <br><br>
       
      
      6. Busca y señala las similitudes
      Hay decenas de estudios que demuestran lo potente que es la similitud. Nos gustan más los nombres que se parecen a los nuestros, la gente que apoya a nuestro equipo, o los que viven en nuestra misma ciudad.
      
      La similitud es tan potente que es una de las bases de la persuasión.
      
      Cuando encuentres una fuente de similiud ahonda en ella. Enlazándolo con el ejemplo de antes.
      
      -¿Qué problema te han dado esta semana tus hijos?
      -Pues mira, al pequeño le ha dado por pintar y nos ha garabateado toda la pared del salón con el boli.
      -jeje, también me pasó a mí. Aún me acuerdo cómo me enfadé. Oye, ¿y qué has hecho? 
      -Pues mira…
      
      Una manera de generar similitud es haciendo sentir a tu interlocutor que formáis parte del mismo grupo. Puede que los dos nacieseis en la misma ciudad, fueseis al mismo colegio o que ambos sigáis a la misma persona en Instagram. Si lo descubres, pronto generarás simpatía lo que ayudará a mantener una conversación agradable.
      
       
      <br><br>
       
      
      7. Elogia con estilo: pide consejo
      Mi vecino Fer es un chaval simpático. Cada vez que te ve elogia algo: Qué bici tan chula, que gorra tan guay, esa barba te queda genial… ¡y sólo tiene 9 años! Si eres de elogio fácil como Fer, enhorabuena. Los elogios han demostrado consistentemente su efecto en la motivación, productividad y buena disposición de las personas.
      
      Pero la buena noticia es que si no lo eres…. también puedes forzar los elogios porque, aunque no sean sinceros… ¡funcionan!
      Una de las maneras más indirectas y elegantes de elogiar a alguien consiste en pedirle consejo. 
      
      Cuando le pedimos consejo a alguien estamos asumiendo implícitamente que lo percibimos como un experto del que deseamos aprender.
      Y la gente está deseosa de sentirse como un experto. Si lo dudas, date una vuelta por los perfiles de Linkedin.
      
      Cuando alguien hable sobre un tema que conozca, no lo dudes, pídele consejo. Puedes preguntar cuál es la mejor planta para maceta en exterior, qué aceite es el mejor para el coche o dónde ofrecen las mejores hipotecas.
      
       
      <br><br>
       
      
      8. Sonríe mientras hablas
      La triste realidad de nuestra era es que algunos equiparan profesionalidad a seriedad. Un profesional debe ser y mostrarse serio. Ergo, alguien divertido y sonriente no debe ser un buen profesional.
      
      Mentira.
      
      Tu sonrisa es el elemento que tienes más a mano para parecer más atractivo y todos queremos hablar con las personas atractivas. No tengas miedo, sonríe al decir ese hola, ese qué tal o al compartir una anécdota. La sonrisa es más importante que el mejor de los temas de conversación.
      
       
      <br><br>
       
      
      9. Cuidado con ser tú mismo 
      No te invitaré a mostrar ser alguien que no eres pero no te limites a ser tú.
      Si has llegado hasta aquí es porque te cuesta mantener conversaciones interesantes de manera natural. Para cambiar eso vas a necesitar hacer algo diferente. Si sigues haciendo lo mismo…nada va a cambiar.
      
      Si quieres mantener buenas conversaciones debes de poner un poco de esfuerzo en mostrarte como alguien agradable y abierto. El simple hecho de mostrar interés por el otro hará que le gustes más.
      
      Y si no te apetece esforzarte, siempre puedes hablar con Sheldon.
      
       
      <br><br>
       
      
      10. No toques temas controvertidos
      Si te digo la verdad, a mi me encantan pero no son la mejor elección para una primera conversación con un desconocido.
      
      Venir a Barcelona y preguntar en un bar qué pasa con eso de la independencia, preguntarle a mi vecina ultra católica que qué es eso de prohibir el aborto o charlar sobre cómo la energía que desprendemos abre portales interdimensionales que pueden sanar a las personas a distancia puede que no sean las mejores elecciones. Pisa terreno más seguro.
      
      En su libro Quirkology: How We Discover the Big Truths in Small Things, Richard Wiseman habla de cómo sus experimentaciones demostraron que hablar de viajes fue el tema que más segundas citas provocó en los participantes de sus dinámicas sociales. La mayoría de personas hablaron sobre vacaciones y destinos paradisíacos y, claro, eso hace que te sientas bien y contento. Y las personas alegres y contentas son más atractivas para los demás. Y, como te decía, siempre apetece charlar más con los atractivos.
      
      No te preocupes si no has viajado mucho. Seguro que hay muchos sitios a los que te gustaría ir ¿no? Habla de cómo te los imaginas y lo que harías allí. Seguro que los conviertes en una gran fuente de conversación.</p>
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
    usuarios: {
      nombre: "",
      imagen: ""
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