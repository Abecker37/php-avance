
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
            <?php


            $erreur = false;
        $messages_erreur = array();

        // Vérification du champ "nom"
        if (empty($_POST['nom'])) {
            $erreur = true;
            $messages_erreur['nom'] = "Le champ 'Nom' est obligatoire";
        } elseif (!preg_match("/^[a-zA-ZÀ-ÿ]+$/", $_POST['nom'])) {
            $erreur = true;
            $messages_erreur['nom'] = "Le champ 'Nom' ne doit contenir que des lettres";
        }

        // Vérification du champ "prénom"
        if (empty($_POST['prenom'])) {
            $erreur = true;
            $messages_erreur['prenom'] = "Le champ 'Prénom' est obligatoire";
        } elseif (!preg_match("/^[a-zA-ZÀ-ÿ]+$/", $_POST['prenom'])) {
            $erreur = true;
            $messages_erreur['prenom'] = "Le champ 'Prénom' ne doit contenir que des lettres";
        }

        // Vérification du champ "email"
        if (empty($_POST['mail'])) {
            $erreur = true;
            $messages_erreur['mail'] = "Le champ 'Adresse e-mail' est obligatoire";
        } elseif (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $erreur = true;
            $messages_erreur['mail'] = "L'adresse e-mail n'est pas valide";
        }

        // Vérification du champ "téléphone"
        if (empty($_POST['tel'])) {
            $erreur = true;
            $messages_erreur['tel'] = "Le champ 'Numéro de téléphone' est obligatoire";
        } elseif (!preg_match("/^[0-9]{10}$/", $_POST['tel'])) {
            $erreur = true;
            $messages_erreur['tel'] = "Le numéro de téléphone doit contenir 10 chiffres";
        }

        // Vérification du champ "sujet"
        if (empty($_POST['sujet'])) {
            $erreur = true;
            $messages_erreur['sujet'] = "Le champ 'Sujet' est obligatoire";
        }

        // Vérification du champ "message"
        if (empty($_POST['message'])) {
            $erreur = true;
            $messages_erreur['message'] = "Le champ 'Message' est obligatoire";
        }

        // Si aucune erreur n'est détectée, envoyer l'e-mail
        if (!$erreur) {
            echo  'Merci ' . $_POST['prenom'] . ' ' . $_POST['nom'] . ' de nous avoir contacter a propos de ' . $_POST['sujet'] . PHP_EOL;
                echo 'Un de nos conseillers vous contactera soit à l’adresse ' . $_POST['mail'] . ' ou par téléphone au ' . $_POST['tel'] . ' dans les plus brefs délais pour traiter votre demande : 
                ' . PHP_EOL . $_POST['message'];
        } else {
            foreach ($messages_erreur as $champ => $message) {
                echo "Erreur dans le champ '{$champ}': {$message}";
            }
        }
        ?>

    </p>
</body>
</html>
