<footer>
  <button type="button"><a href="?page=contact">Contact</a></button>

  <a href="#" id="to_top"></a>
  <h2 class="footer-next">
    <?php
    switch ($page) {
      case 'home':
        echo "<a href='?page=profile'>Check my profile</a>";
        break;
      case 'profile':
        echo "<a href='?page=travaux'>Check my work</a>";
        break;
      case 'travaux':
        echo "<a href='?page=contact'>Conctact me</a>";
        break;
      default:
        echo "<a href='?page=travaux'>Go back to <br class='pc_hid'> my work</a>";
        break;
    }
    ?>
  </h2>
  <p class="copyright">copyright@kanayamada</p>
</footer>