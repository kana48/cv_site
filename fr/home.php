<section class="home-hero animate text-bg-img">
 <h1 class="heroSkills">Bonjour,</h1>
  <h1 class="hero">Je m'appelle Kana.</h1>
  <h1 class="heroSkills">Spécialités <br class="pc_hid"><span id="skills">Web Design</span></h1>
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
    .typeString('Motion Design')
    .pauseFor(2500)
    .deleteAll()
    .typeString('UX Design')
    .pauseFor(2500)
    .start()
</script>

<section class="profile animate slide-from-left bg_blue">
<img src="img/profile_image.png" alt="Kana YAMADA Profile image" class="p-img">
  <div> 
  <h2>Profil</h2>
  <div class="intro">
    <p>Kana YAMADA</p>
    <p>Web designer/developer</p>
  </div>
  <p class=home-text>Etudiante M2 en <strong><a href="https://mastercaweb.u-strasbg.fr/">#Master CAWEB</a></strong> Communication web multilingue & apprentie dans le département marketing chez <strong><a href="https://www.dalim.com/fr/home">#DALIM software</a></strong>. Née à Tokyo, Japon. Après avoir travaillé pour une grande entreprise japonaise spécialisée dans l’imprimerie <strong><a href="https://www.dnp.co.jp/eng/index.html">#Dai Nippon Printing</a></strong>, puis comme rédactrice de guides touristiques sur la France, je me suis installée en France. En 2020 j’ai intégré le Master CAWEB Communication web multilingue à l'Université de Strasbourg. J'étudie le marketing digital, la localisation et la conception de sites web. J'adore voyager et cuisiner. 
  </p>
  <a href="?page=profile" class="readMore ver">En savoir plus</a>
  </div>
</section>




<section class="travaux animate slide-from-right">
  <h2>Travaux</h2>

  <a class="work">
    <div class="work_image">
    <span>Motion design</span>
    <img src="img/work_sample.png" alt="">
    </div>

  <div class="work_text">
    <p>Tilte</p>
    <p>Type</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec elementum eros a eros egestas, in finibus ante mollis. Morbi hendrerit tortor ex, at convallis dui volutpat eget. Nullam imperdiet sit amet magna ut tempor. </p>
  </div>
  </a>

  <!-- <div class="body-slider">
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
  </div> -->
  <a href="?page=travaux" class="seeMore ver">Voir plus</a>
  <!-- <ul class="sort">
    <li><a href="?page=web">#WEB</a></li>
    <li><a href="?page=traduction">#Localisation</a></li>
  </ul> -->
</section>

<?php 
  include "footer.php"; 
  ?>