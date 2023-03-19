<?php

echo  'Merci ' . $_GET['prénom'] . '' . $_GET['nom'] . 'de nous avoir contacter a propos de ' . $_GET['sujet'] . PHP_EOL;
echo 'Un de nos conseillers vous contactera soit à l’adresse ' . $_GET['mail'] . 'ou par téléphone au ' . $_GET['tel'] . 'dans les plus brefs délais pour traiter votre demande : 
' . PHP_EOL . $_GET['message'];