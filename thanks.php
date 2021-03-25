<?php
echo  'Merci ' . $_POST['user_firstname'] . ' ' . $_POST['user_lastname'] . ' de nous avoir contacté à propos de "' . $_POST['sujet'] . '”.';
echo '<br>';
echo 'Un de nos conseiller vous contactera soit à l’adresse ' . $_POST['courriel'] . ' ou par téléphone au ' . $_POST['phone'] . ' dans les plus brefs délais pour traiter votre demande :';
echo '<br>';
echo $_POST['message'];
?>
