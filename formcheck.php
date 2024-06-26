<formcheck.php>

<?php
$postData = $_POST;

if (
  !isset($postData['email'])
  || !filter_var($postData['email'], FILTER_VALIDATE_EMAIL)
  || empty($postData['message'])
  || trim($postData['message']) ===''
) {
  echo ('Les champs message et/ou email ne sont pas valide. Merci de bien vouloir les modifier afin de soumettre le formulaire.');
  return;
};

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
);
 


echo "Bonjour. Nous avons bien reçu votre formulaire et vous recontacterons dès que possible" ;

 ?>

