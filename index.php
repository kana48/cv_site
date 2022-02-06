<?php
$page = (!isset($_REQUEST['page'])) ? 'home' : $_REQUEST['page'];

switch ($page) {
  case 'contact':
    $page="contact";
    $title="Contact";
    // $cta="Envoyer";
    break;
  case 'profile':
    $page="profile";
    $title="Profile";
    // $cta="Contact";
    break;
  case 'travaux':
    $page="travaux";
    $title="Travaux";
    // $cta="Contact";
    break;
  case 'travaux-item':
    $page="travaux-item";
    $title="Travail";
    // $cta="Contact";
    break;
  default:
    $page="home";
    $title="Bonjour,";
    // $cta="Contact";
    break;
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title;?></title>
  <link rel="stylesheet" href="normalize.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta charset="UTF-8">
  <script src="script.js" defer></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link
    href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@200;500&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/style.min.css" type="text/css">
</head>

<body>
<?php 
  include "header.php";
  ?>
  <main>
  <?php 
  include "navig.php";
  include $page.".php"; 
  ?>
  </main>

  <script src="js/main.js"></script>
</body>

</html>