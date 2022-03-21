<footer>
  <button type="button"><a href="?page=contact">Contact</a></button>
  <a href="#" id="to_top"></a>
  <h2>
    <?php
    switch ($page) {
      case 'home':
        echo "<a href='?page=profile'>Consultez <br class='pc_hid'>mon profile</a>";
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
  <a class="copyright">copyright@kanayamada</a>
</footer>