<section class="home-hero animate text-bg-img">

  <div class="home-hero_visual">
    <video muted playsinline autoplay width="1080" height="1080">
      <source src="video/logo_anim.mp4" type="video/mp4" />
    </video>
    <img src="img/hand.png" alt="" class="home_hero_img">
  </div>

  <div class="home-hero_text">
   <h1 class="heroSkills">Bonjour,</h1>
    <h1 class="hero">Je m'appelle Kana.</h1>
    <h1 class="heroSkills">Spécialités <br class="pc_hid"><span id="skills">Web Design</span></h1>
  </div>
  <div class="h-right">
    <ul class="liens pc">
    <!-- Linkdin -->
      <li><a href="https://www.linkedin.com/in/kana-y-8b78a3188/" ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" stroke-width="3" stroke="#646464000" fill="none" class="duration-300 transform transition-all" style="width: 48px; height: 48px;"><path d="M34.34 24.1h-8.69v31.43h9v-14.4c0-3.82.72-7.49 5.43-7.49s4.72 4.34 4.72 7.73v14.16h9V39.46c0-7.76-1.65-14.92-10.81-14.92-3.38-.13-6.65.49-8.47 3.25a.11.11 0 01-.21-.06zM10.92 24.1H20v31.43h-9.08zM15.44 8.47a5.27 5.27 0 105.25 5.29v0a5.25 5.25 0 00-5.25-5.29z" stroke-linecap="round"></path></svg></a></li>
    
    <!-- facebbok -->
      <li><a href="https://www.facebook.com/kana.yamada.739" ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" stroke-width="3" stroke="#646464000" fill="none" class="duration-300 transform transition-all" style="width: 48px; height: 48px;"><path d="M37.49 19.86c0-.07.36-.3 1.51-.3h3.76A2.21 2.21 0 0045 17.34h0v-6.56a2.22 2.22 0 00-2.19-2.26h-5.6a11.47 11.47 0 00-8.43 3.28 12 12 0 00-3.19 8.64v5.95h-4.35A2.23 2.23 0 0019 28.61v7.07a2.21 2.21 0 002.21 2.21h4.28v15.35a2.22 2.22 0 002.18 2.25h7.35a2.21 2.21 0 002.21-2.22h0V37.94h5.23a2.23 2.23 0 002.22-2.22v-7.08a2.21 2.21 0 00-2.22-2.21h-5.2v-5.21a2.44 2.44 0 01.23-1.36z" stroke-linecap="round"></path></svg></a></li>
      </li>
    </ul>
</div>
</section>

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
  <!-- <h2>Profil</h2> -->
  <div class="intro">
    <p>Kana YAMADA</p>
    <p>Web/Motion designer</p>
  </div>
  <p class=home-text>Je suis spécialiste en Web design et en Motion design. Avant d'intégrer la MJM, j’ai étudié le digital marketing, la Communication multilingue et la rédaction technique au Master CAWEB à l'Université de Strasbourg. 
Depuis l'année dernière, j'ai étudié le motion design et le web design à la MJM en alternance dans l'équipe de support client chez Alcatel-lucent enterprise.
  </p>
  </div>
  <a href="?page=profile">
    <button type="button">
      <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script><dotlottie-player src="https://lottie.host/b5a80eb3-e9ff-44b3-a779-191ddcb7453a/bt1oAoElVC.json" background="transparent" speed="1" style="width: 150px; height: 150px" direction="1" playMode="normal" loop autoplay hover></dotlottie-player>
    </button>
    <span class="eye_text">Voir mon profile</span>
  </a>

</section>



<div class="travaux-title">
  <h2>Travaux</h2>

  <a href="?page=travaux">
    <button type="button">
      <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script><dotlottie-player src="https://lottie.host/b5a80eb3-e9ff-44b3-a779-191ddcb7453a/bt1oAoElVC.json" background="transparent" speed="1" style="width: 150px; height: 150px" direction="1" playMode="normal" loop autoplay hover></dotlottie-player>
    </button>
    <span class="eye_text">Voir mes travaux</span>
  </a>
  </div>



<section class="travaux animate slide-from-right">
  <a class="work"  href="?page=quisuisje">
    <div class="work_image">
    <span class="motion">Motion design</span>
    <img src="img/qui_suis_je/22.jpg" alt="">
    </div>
  <div class="work_text">
    <p>Les trésors cachés de Strasbourg</p>
    <p>
    J'ai développé l'épisode pilote d'une série web sur l'architecture, nommée « Un endroit à Strasbourg », sous forme de quiz où les indices révèlent le nom d'un bâtiment ou monument. Pour une touche mystérieuse et élégante, j'ai intégré des fleurs dans mes photocollages. Ce projet m'a permis de combiner différentes techniques de motion design et de perfectionner mon storytelling, visant à maintenir un thème et un message cohérents..</p>
  </div>
  </a>
</section>

<!-- Ademe -->
<section class="travaux animate slide-from-left bg_blue">
  <a class="work"  href="?page=ademe">
  <div class="work_text">
    <p>ADEME</p>
    <p>L'Agence de l'environnement et de la maîtrise de l'énergie (ADEME) souhaite développer une application mobile pour sensibiliser le public aux problématiques liées à l'empreinte carbone des produits du quotidien. Cette initiative vise à encourager une consommation plus responsable pour faire face au réchauffement climatique. </p>
  </div>
  <div class="work_image">
    <span class="web">Web</span>
    <img src="img/ademe/mockup_1.png" alt="">
    </div>
  </a>
</section>

<!-- Rainbow -->
<section class="travaux animate slide-from-right">
  <a class="work"  href="?page=rainbowservicenotif">
    <div class="work_image">
      <span class="web">Web</span>
      <img src="img/rainbow/6.jpg" alt="">
    </div>
  <div class="work_text">
    <p>Rainbow Service Notifications</p>
    <p>Rainbow est une application de télécommunication pour entreprises, intégrant des fonctions téléphoniques avancées, signature d'Alcatel-Lucent. Vendue sous licence, elle est régulièrement mise à jour, pouvant entraîner des interruptions de service. Pour améliorer la communication, j'ai conçu une interface dans le panneau d'administration permettant aux partenaires de recevoir des notifications critiques et de les personnaliser selon leurs besoins.</p>
  </div>
  </a>
</section>
<?php 
  include "footer.php"; 
  ?>