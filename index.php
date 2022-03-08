<?php
$page = (!isset($_REQUEST['page'])) ? 'home' : $_REQUEST['page'];

switch ($page) {
  case 'contact':
    $page="contact";
    $title="Contact";
    break;
  case 'contact-en':
      $page="contact-en";
      $title="Contact";
      break;
  case 'profile':
    $page="profile";
    $title="Profile";
    break;
  case 'profile-en':
    $page="profile-en";
    $title="Profile";
    break;
  case 'travaux':
    $page="travaux";
    $title="Travaux";
    break;
  case 'dalimsustainability':
      $page="dalimsustainability";
      $title="Travail";
      break;
  case 'kakekomigyoza':
    $page="kakekomigyoza";
    $title="Travail";
    break;
  case 'sunnyphotostory':
      $page="sunnyphotostory";
      $title="Travail";
      break;
  case 'hackmybody':
        $page="hackmybody";
        $title="Travail";
        break;
  case 'web':
        $page="web";
        $title="#WEB";
        break;
  case 'traduction':
        $page="traduction";
        $title="#L10n";
        break;
  case 'home-en':
        $page="home-en";
        $title="Hello.";
        break;
  default:
    $page="home";
    $title="Bonjour,";
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
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <!-- CDN to handle the typing effect : credit - https://github.com/mattboldt/typed.js/ --> 
  <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link
    href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:wght@200;500&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/style.min.css" type="text/css">
</head>

<body>
  <div id="cursor"></div>
  <div id="stalker"></div>
<?php 
  include "header.php";
  ?>
  <main>
  <div id="target">
  <?php 
  include "navig.php";
  include $page.".php"; 
  ?>
  </div>
  </main>

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>