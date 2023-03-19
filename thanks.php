
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo  'Merci ' . $_POST['prenom'] . ' ' . $_POST['nom'] . ' de nous avoir contacter a propos de ' . $_POST['sujet'] . PHP_EOL;
        echo 'Un de nos conseillers vous contactera soit à l’adresse ' . $_POST['mail'] . ' ou par téléphone au ' . $_POST['tel'] . ' dans les plus brefs délais pour traiter votre demande : 
        ' . PHP_EOL . $_POST['message'];?> 
    </p>
</body>
</html>
