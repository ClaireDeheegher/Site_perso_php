<controller.php>

<?php

switch ($_SERVER['REQUEST_URI']) {
  case "/home":
    include "home.php";
    break;
  case "/contact":
    include "contact.php";
    break;
  default :
    echo "404 error";
    break;
}
?>