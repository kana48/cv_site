<section class="home-hero animate text-bg-img">
  <h1 class="hero">My name is Kana.</h1>
  <h1 class="heroSkills">I'm interested in <br class="pc_hid"><span id="skills">Web Design</span></h1>
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
    .typeString('Localization')
    .pauseFor(2500)
    .deleteAll()
    .typeString('Development')
    .pauseFor(2500)
    .start()
</script>

<section class="profile animate slide-from-left">
  <h2>Profile</h2>
  <div class="intro">
    <p>Kana YAMADA</p>
    <p>Web designer,<br class="pc_hid">Web developer</p>
  </div>
  <p class=home-text>I’m a student of <strong><a href="https://mastercaweb.u-strasbg.fr/">#CAWEB Master </a></strong> & an apprentice in the marketing department at<strong><a href="https://www.dalim.com/fr/home">#DALIM SoftWare</a></strong>.Born in Tokyo, Japan. After working for a major general printing company and as an editor of a guidebook of French tourism, I moved to France. 2020: Enrolled in MasterCAWEB at the University of Strasbourg. I am studying Multilingual Web Design, Development, Localization and Translation.I love cooking and traveling. I'm also a specialist in Traditional Chinese medicine.

  </p>
  <a href="?page=profile" class="readMore ver">Read more</a>
</section>

<section>
  <img src="../img/profile.jpg" alt="" class="p-img gray-only">
</section>


<section class="travaux animate slide-from-right">
  <h2>Works</h2>
  <div class="body-slider">
    <div class="slider">
      <div class="slide-track">
        <a class="slide" href="?page=dalimsustainability">
          <img src="../img/dalim-sust1.jpg" height="200" width="300" alt="" class="gray" />
       </a>
        <a class="slide" href="?page=kakekomigyoza">
          <img src="../img/p2.jpg" height="200" width="300" alt="" class="gray" />
        </a>
        <a class="slide" href="?page=sunnyphotostory">
          <img src="../img/p4.jpg" height="200" width="300" alt="" class="gray" />
        </a>
        <a class="slide" href="?page=hackmybody">
          <img src="../img/hkm1.png" height="200" width="300" alt="" class="gray" />
        </a>
        <a class="slide" href="?page=dalimsustainability">
          <img src="../img/dalim-sust1.jpg" height="200" width="300" alt="" class="gray" />
       </a>
        <a class="slide" href="?page=kakekomigyoza">
          <img src="../img/p2.jpg" height="200" width="300" alt="" class="gray" />
        </a>
        <a class="slide" href="?page=sunnyphotostory">
          <img src="../img/p4.jpg" height="200" width="300" alt="" class="gray" />
        </a>
        <a class="slide" href="?page=hackmybody">
          <img src="../img/hkm1.png" height="200" width="300" alt="" class="gray" />
        </a>
      </div>
    </div>
  </div>
  <a href="?page=travaux" class="seeMore ver">See more</a>
  <ul class="sort">
    <li><a href="?page=web">#WEB</a></li>
    <!-- <li><a href="">#PAO</a></li> -->
    <li><a href="?page=traduction">#L10n</a></li>
  </ul>
</section>

<?php 
  include "footer.php"; 
  ?>