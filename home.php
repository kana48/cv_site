<section class="home-hero animate text-bg-img">
  <h1 class="hero">Je m'appelle Kana.</h1>
  <h1 class="heroSkills">Mes spécialités <br class="pc_hid"><span id="skills">Web Design</span></h1>
</section>

<!-- Script to handle the typing effect : credit - https://github.com/mattboldt/typed.js/ -->
<script>
  let typewritterSpan = document.getElementById("skills");

  let typewriter = new Typewriter(typewritterSpan, {
    loop: true
  });

  typewriter.typeString('Web Design')
    .pauseFor(2500)
    .deleteAll()
    .typeString('Motion design')
    .pauseFor(2500)
    .deleteAll()
    .typeString('UX design')
    .pauseFor(2500)
    .start()
</script>

<section class="profile animate slide-from-left">
  <h2>Profile</h2>
  <div class="intro">
    <p>Kana YAMADA</p>
    <p>Web designer/developer</p>
  </div>
  <p class=home-text>Etudiante M2 en <strong><a href="https://mastercaweb.u-strasbg.fr/">#Master CAWEB</a></strong> & Apprentie dans le département marketing chez <strong><a href="https://www.dalim.com/fr/home">#DALIM SoftWare</a></strong>. Née à
    Tokyo, Japon. Après avoir travaillé pour une grande entreprise japonaise spécialisée dans l’imprimerie Dai Nippon
    Printing, puis comme rédactrice de guides touristiques sur la France, je me suis installée en France. En 2020 j’ai
    intégré le Master CAWEB à l'Université de Strasbourg. J'étudie le marketing digital, la localisation et la
    conception de sites web. J'adore voyager et cuisiner. 

  </p>
  <a href="?page=profile" class="readMore ver">En savoir plus</a>
</section>

<section>
  <img src="img/profile.jpg" alt="" class="p-img gray-only">
</section>


<section class="travaux animate slide-from-right">
  <h2>Travaux</h2>
  <div class="body-slider">
    <div class="slider">
      <div class="slide-track">
        <a class="slide" href="?page=dalimsustainability">
          <img src="img/dalim-sust1.jpg" height="200" width="300" alt="" class="gray" />
       </a>
        <a class="slide" href="?page=kakekomigyoza">
          <img src="img/p2.jpg" height="200" width="300" alt="" class="gray" />
        </a>
        <a class="slide" href="?page=sunnyphotostory">
          <img src="img/p4.jpg" height="200" width="300" alt="" class="gray" />
        </a>
        <a class="slide" href="?page=hackmybody">
          <img src="img/hkm1.png" height="200" width="300" alt="" class="gray" />
        </a>
        <a class="slide" href="?page=dalimdevportal">
          <img src="img/dalim-devportal1.jpg" height="200" width="300" alt="" class="gray" />
       </a>
        <a class="slide" href="?page=kakekomigyoza">
          <img src="img/p2.jpg" height="200" width="300" alt="" class="gray" />
        </a>
        <a class="slide" href="?page=deadlybroadcast">
          <img src="img/deadlybroadcast.jpg" height="200" width="300" alt="" class="gray" />
        </a>
        <a class="slide" href="?page=hackmybody">
          <img src="img/hkm1.png" height="200" width="300" alt="" class="gray" />
        </a>
      </div>
    </div>
  </div>
  <a href="?page=travaux" class="seeMore ver">Voir plus</a>
  <ul class="sort">
    <li><a href="?page=web">#WEB</a></li>
    <!-- <li><a href="">#PAO</a></li> -->
    <li><a href="?page=traduction">#Localisation</a></li>
  </ul>
</section>

<?php 
  include "footer.php"; 
  ?>