<?php

$firstname = $_POST['user_firstname'];
$lastname = $_POST['user_lastname'];
$email = $_POST['user_email'];
$phone = $_POST['user_phone'];
$theme = $_POST['user_theme'];
$message = $_POST['user_message'];

?>

Merci <?php echo $firstname . ' ' . $lastname ?> de nous avoir contacté à propos de <?php echo $theme ?> .<br>

<br>

Un de nos conseiller vous contactera soit à l'adresse <?php echo $email ?> ou par téléphone au <?php echo $phone ?> dans les plus brefs délais pour traiter votre demande :<br>

<br>

<?php echo $message;
