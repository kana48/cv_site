<?php
// start a new session
session_start();
$page = (!isset($_REQUEST['page'])) ? 'home' : $_REQUEST['page'];

if (!isset($_SESSION['lang'])) {
  $_SESSION['lang'] = "fr";
}

if (isset($_SESSION['lang'])) {
  $page_lang = $_SESSION['lang'];
} elseif (isset($_GET['lang']) && !empty($_GET['lang'])) {
  $page_lang = $_GET['lang'] ;
} else {
  $page_lang = "fr" ;
}

if($page_lang == "fr") {
  switch ($page) {
    case 'contact':
      $page="contact";
      $title="Contact ";
      break;
    case 'profile':
      $page="profile";
      $title="Profil  ";
      break;
    case 'travaux':
      $page="travaux";
      $title="Travaux ";
      break;
    case 'dalimdevportal':
      $page="dalimdevportal";
      $title="Travail ";
      break;
    case 'dalimsustainability':
      $page="dalimsustainability";
      $title="Travail ";
      break;
    case 'kakekomigyoza':
      $page="kakekomigyoza";
      $title="Travail ";
      break;
    case 'sunnyphotostory':
        $page="sunnyphotostory";
        $title="Travail ";
        break;
    case 'hackmybody':
          $page="hackmybody";
          $title="Travail ";
          break;
    case 'web':
          $page="web";
          $title="#WEB    ";
          break;
    case 'traduction':
          $page="traduction";
          $title="#L10n   ";
          break;
    case 'deadlybroadcast':
          $page="deadlybroadcast";
          $title="Travail ";
          break;
    case 'mentions-legales':
            $page="mentions-legales";
            $title="";
            break;
    default:
      $page="home";
      $title="Bonjour,";
      break;
  }
} else if ($page_lang == "en") {
  switch ($page) {
    case 'contact':
      $page="contact";
      $title="Contact ";
      break;
    case 'profile':
      $page="profile";
      $title="Profile ";
      break;
    case 'travaux':
      $page="travaux";
      $title="Works   ";
      break;
    case 'dalimdevportal':
        $page="dalimdevportal";
        $title="Travail ";
        break;
    case 'dalimsustainability':
        $page="dalimsustainability";
        $title="Work    ";
        break;
    case 'kakekomigyoza':
      $page="kakekomigyoza";
      $title="Work    ";
      break;
    case 'sunnyphotostory':
        $page="sunnyphotostory";
        $title="Work    ";
        break;
    case 'hackmybody':
          $page="hackmybody";
          $title="Work    ";
          break;
    case 'web':
          $page="web";
          $title="#WEB    ";
          break;
    case 'traduction':
          $page="traduction";
          $title="#L10n   ";
          break;
    case 'deadlybroadcast':
          $page="deadlybroadcast";
          $title="Travail ";
          break;
    case 'mentions-legales':
            $page="mentions-legales";
            $title="";
            break;
    default:
      $page="home";
      $title="Hello.   ";
      break;
  }
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Tarte citron -->
    <script src="tarteaucitron/tarteaucitron.js"></script>

<script type="text/javascript">
tarteaucitron.init({
"privacyUrl": "", /* Privacy policy url */
  "bodyPosition": "bottom", /* or top to bring it as first element for accessibility */

"hashtag": "#tarteaucitron", /* Open the panel with this hashtag */
"cookieName": "tarteaucitron", /* Cookie name */

"orientation": "middle", /* Banner position (top - bottom) */

  "groupServices": false, /* Group services by category */
  "serviceDefaultState": "wait", /* Default state (true - wait - false) */
                   
"showAlertSmall": false, /* Show the small banner on bottom right */
"cookieslist": false, /* Show the cookie list */
                   
  "closePopup": false, /* Show a close X on the banner */

  "showIcon": true, /* Show cookie icon to manage cookies */
  //"iconSrc": "", /* Optionnal: URL or base64 encoded image */
  "iconPosition": "BottomRight", /* BottomRight, BottomLeft, TopRight and TopLeft */

"adblocker": false, /* Show a Warning if an adblocker is detected */
                   
  "DenyAllCta" : true, /* Show the deny all button */
  "AcceptAllCta" : true, /* Show the accept all button when highPrivacy on */
  "highPrivacy": true, /* HIGHLY RECOMMANDED Disable auto consent */
                   
"handleBrowserDNTRequest": false, /* If Do Not Track == 1, disallow all */

"removeCredit": false, /* Remove credit link */
"moreInfoLink": true, /* Show more info link */

  "useExternalCss": false, /* If false, the tarteaucitron.css file will be loaded */
  "useExternalJs": false, /* If false, the tarteaucitron.js file will be loaded */

//"cookieDomain": ".my-multisite-domaine.fr", /* Shared cookie for multisite */
                  
  "readmoreLink": "", /* Change the default readmore link */

  "mandatory": true, /* Show a message about mandatory cookies */
  "mandatoryCta": true /* Show the disabled accept button when mandatory on */
});
</script>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kana YAMADA <?php echo $page;?></title>
  <link rel="icon" href="img/favicon.ico" id="favicon">
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon-180x180.png">
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

  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
  <meta property="og:url" content="https://kanayamada.website/?page=home">
  <meta property="og:type" content="website">
  <meta property="og:image" content="img/OGP.png">
  <meta property="og:title" content="Kana YAMADA Portfolio Site home">
  <meta property="og:description" content="Le site de Kana, étudiante au CAWEB Communication web multilingue et apprentie chez DALIM software">
</head>

<body>
  <div id="cursor"></div>
  <div id="stalker"></div>
<?php 
  if($page_lang == "en") {
    include "./en/header.php";
  } else {
    include "./fr/header.php";
  }
  ?>
  <main>
  <div id="target">
  <?php 
  include ($page_lang.'/navig.php');
  include ($page_lang.'/'.$page.".php"); 
  ?>
  </div>
  </main>
  <script type="text/javascript">
        (tarteaucitron.job = tarteaucitron.job || []).push('gforms');
  </script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>