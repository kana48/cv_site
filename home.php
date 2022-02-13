<section class="home-hero">
  <h1 class="hero">Je m'appelle Kana.</h1>
  <h1 class="heroSkills">Mes spécialités <span id="skills">Web Design</span></h1>
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
    .typeString('Localisation')
    .pauseFor(2500)
    .deleteAll()
    .typeString('PAO')
    .pauseFor(2500)
    .start()
</script>

<section class="profile animate slide-from-left">
  <h2>Profile</h2>
  <div class="intro">
    <p>Kana YAMADA</p>
    <p>Web designer,Web developer</p>
  </div>
  <p class=home-text>Etudiante M2 en Master CAWEB & Apprentie dans le département marketing chez DALIM SoftWare. Née à
    Tokyo, Japon. Après avoir travaillé pour une grande entreprise japonaise spécialisée dans l’imprimerie Dai Nippon
    Printing, puis comme rédactrice de guides touristiques sur la France, je me suis installée en France. En 2020 j’ai
    intégré le Master CAWEB à l'Université de Strasbourg. J'étudie le marketing digital, la localisation et la
    conception de sites web. J'adore voyager et cuisiner. 

  </p>
  <a href="?page=profile" class="readMore ver">read more</a>
</section>

<section>
  <img src="img/profile.jpg" alt="" class="p-img gray">
</section>


<section class="travaux animate slide-from-right">



  <h2>Travaux</h2>
  <div class="body-slider">
    <div class="slider">
      <div class="slide-track">
        <div class="slide">
          <img src="img/p1.png" height="200" width="300" alt="" class="gray" />
        </div>
        <div class="slide">
          <img src="img/p1.png" height="200" width="300" alt="" class="gray" />
        </div>
        <div class="slide">
          <img src="img/p2.jpg" height="200" width="300" alt="" class="gray" />
        </div>
        <div class="slide">
          <img src="img/p3.jpg" height="200" width="300" alt="" class="gray" />
        </div>
        <div class="slide">
          <img src="img/p1.png" height="200" width="300" alt="" class="gray" />
        </div>
        <div class="slide">
          <img src="img/p1.png" height="200" width="300" alt="" class="gray" />
        </div>
        <div class="slide">
          <img src="img/p1.png" height="200" width="300" alt="" class="gray" />
        </div>
        <div class="slide">
          <img src="img/p1.png" height="200" width="300" alt="" class="gray" />
        </div>
        <div class="slide">
          <img src="img/p1.png" height="200" width="300" alt="" class="gray" />
        </div>
        <div class="slide">
          <img src="img/p1.png" height="200" width="300" alt="" class="gray" />
        </div>
      </div>
    </div>
  </div>
  <a href="?page=travaux" class="seeMore ver">see more</a>
  <ul class="sort">
    <li><a href="">#WEB</a></li>
    <li><a href="">#PAO</a></li>
    <li><a href="">#Traducion</a></li>
  </ul>
</section>

<?php 
  include "footer.php"; 
  ?>