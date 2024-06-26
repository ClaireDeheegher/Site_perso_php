<formcheck.php>

<?php
session_start();
$postData = $_POST;
if (
  !isset($postData['email'])
  || !filter_var($postData['email'], FILTER_VALIDATE_EMAIL)
  || empty($postData['message'])
  || trim($postData['message']) ===''
) { echo 'Erreur';
  return;
}
else (
 exit
);

$data = array (
  'civilité'=> $postData['civilite'],
  'nom' => $postData['last-name'],
  'prénom'=> $postData['name'],
  'email'=> $postData['email'],
  'sujet'=> $postData['subject'],
  'message'=> $postData['message'],
);
$file = 'test.txt';

set_include_path(".:/exercices/phpBases");
file_put_contents(
    $file,
    $data,
    FILE_USE_INCLUDE_PATH | FILE_APPEND,  
) ;

$errorLog = array();

$_SESSION["civilite"] = $postData["civilite"];
$_SESSION["email"] = $postData["email"];
$_SESSION["last-name"] = $postData["last-name"];
$_SESSION["message"] = $postData["message"];
$_SESSION["name"] = $postData["name"];
$_SESSION["title"] = "Hello world";

 ?>

