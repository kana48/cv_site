<footer>
<a href="?page=contact"><button type="button">Contact</button></a>
  <a href="#" id="to_top"></a>
  <h2 class="footer-next">
    <?php
    switch ($page) {
      case 'home':
        echo "<a href='?page=profile'>Consultez <br class='pc_hid'>mon profil</a>";
        break;
      case 'profile':
        echo "<a href='?page=travaux'>Voir mes travaux</a>";
        break;
      case 'travaux':
        echo "<a href='?page=contact'>Me contacter</a>";
        break;
      default:
        echo "<a href='?page=travaux'>Revenir <br class='pc_hid'> à mes travaux</a>";
        break;
    }
    ?>
  </h2>
  <p class="copyright">copyright@kanayamada</p>
</footer>