<?php

$title = 'Index';
$description = 'Page d accueil du site';
$keywords = 'home';
require ("header.php");
switch ($_SERVER['REQUEST_URI']) {
  case "/home":
    include "home.php";
    break;
  case "/contact":
    include "contact.php";
    break;
  default:
    echo "404 error";
    break;
}
;
?>

<main class="main">

  <section id="hero" class="hero section">

    <img src="iPortfolio/assets/img/1326366.png" alt="" data-aos="fade-in" class="">
    <div class="container">
      <h2>Bienvenue</h2>
      <p>Bienvenue sur mon site ! Vous retrouverez ici toutes les informations me concernant, ainsi qu'un formulaire de
        contact.<span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span
          class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
    </div>
    <div>

    </div>
  </section>
  <section id="about" class="about section">
    <p> <?php /*
$essai =1;
while ( $essai <=4 ) {
echo"Ceci est un test !";
$essai++;
};*/
    if ($id_session) {
      echo 'ID de session (récupéré via session_id()) : <br>'
        . $id_session . '<br>';
    }
    echo '<br><br>';
    if (isset($_COOKIE['PHPSESSID'])) {
      echo 'ID de session (récupéré via $_COOKIE) : <br>'
        . $_COOKIE['PHPSESSID'];
    }

    ?></p>
    <p><?php
    echo 'Bonjour' . $_SESSION["name"] . ',' . $_SESSION["last-name"] . '. Bon retour sur le site !' ?></p>
  </section>
  </mai>

  <?php include ("footer.php");
  ?>