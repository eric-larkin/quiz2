<?php
if(isset($_POST['submitButton'])) {
  echo "submitted";
  $values = array (
    "fName" => $_POST['fName'],
    "lName" => $_POST['lName'],
    "email" => $_POST['email'],
    "bio" => $_POST['bio'],
    "degree" => $_POST['degree']
  );

  setcookie('submittedForm', json_encode($values), 0, '/');
}
else {
  echo "nothing";
}
?>
