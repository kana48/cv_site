<footer>
  <button type="button"><a href="?page=contact">Contact</a></button>
  <a href="#" id="to_top"></a>
  <h2>
    <?php
    switch ($page) {
      case 'home':
        echo "<a href='?page=profile'>Check <br class='pc_hid'> my profile</a>";
        break;
      case 'profile':
        echo "<a href='?page=travaux'>Check <br class='pc_hid'> my work</a>";
        break;
      case 'travaux':
        echo "<a href='?page=contact'>Conctact <br class='pc_hid'> me</a>";
        break;
      default:
        echo "<a href='?page=travaux'>Go back to <br class='pc_hid'> my work</a>";
        break;
    }
    ?>
  </h2>
  <a class="copyright">copyright@kanayamada</a>
</footer>