
<div class="pc-menu">
      <nav class="menu" id="fixed-header">
      <?php
    echo '<a href="index.php?page=home&title=Bonjour">
    <img src="img/logo.svg" alt="" class="logo">
         </a>';
  ?>    
        <ul>
          <!-- <li class="<?php echo($page == 'home')? 'active':'';?>"><a href="?page=home?lang=<?php echo $page_lang?>">Bonjour</a></li> -->
          <li class="<?php echo($page == 'profile')? 'active':'';?>"><a href="?page=profile">Profil</a></li>
          <li class="<?php echo($page == 'travaux')? 'active':'';?>"><a href="?page=travaux">Travaux</a></li>
          <!-- <li class="<?php echo($page == 'contact')? 'active':'';?>"><a href="?page=contact">Contact</a></li> -->
        </ul>
      </nav>
    </div>

<div class="sp-menu">
      <span class="material-icons" id="open">menu</span>
</div>

<div class="overlay">
    <span class="material-icons" id="close">close</span>
    <nav>
      <ul>
        <!-- <li ><a href="?page=home">Bonjour</a></li> -->
        <li ><a href="?page=profile">Profil</a></li>
        <li ><a href="?page=travaux">Travaux</a></li>
        <!-- <li ><a href="?page=contact">Contact</a></li> -->
      </ul>
    </nav>
  </div>
  
