<footer>
<a href="?page=contact"><button type="button">Contact</button></a>
  <a href="#" id="to_top"></a>
  <h2 class="footer-next">
    <?php
    switch ($page) {
      case 'home':
        echo "<a href='?page=profile'>Check my profile</a>";
        break;
      case 'profile':
        echo "<a href='?page=travaux'>Check my works</a>";
        break;
      case 'travaux':
        echo "<a href='?page=contact'>Conctact me</a>";
        break;
      case 'mentions-legales':
          echo "<a href='?page=contact'>Conctact me</a>";
          break;
      default:
        echo "<a href='?page=travaux'>Go back to <br class='pc_hid'> my works</a>";
        break;
    }
    ?>
  </h2>
  <p class="copyright">@2022 kanayamada</p>
  <a class="mentions-legales" href="?page=mentions-legales">Legal notices</a>
</footer>