<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="thanks.php" method="POST">
  <label for="prenom">Prénom :</label>
  <input type="text" id="prenom" name="user-name" required><br>

  <label for="nom">Nom :</label>
  <input type="text" id="prenom" name="nom" required><br>

  <label for="email">E-mail :</label>
  <input type="email" id="email" name="email" required><br>

  <label for="telephone">Téléphone :</label>
  <input type="tel" id="telephone" name="telephone" required><br>

  <label for="sujet">Sujet :</label>
  <select id="sujet" name="sujet" required>
    <option value="Demande d'information">Demande d'information</option>
    <option value="Support technique">Support technique</option>
    <option value="Suggestions">Suggestions</option>
  </select><br>

  <label for="message">Message :</label>
  <textarea id="message" name="message" required></textarea><br>

  <button type="submit">Envoyer</button>
</form>

</body>
</html>