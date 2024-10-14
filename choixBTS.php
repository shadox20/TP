<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix BTS et Langues</title>
</head>

<body>
    <h2>Formulaire de choix BTS et langues</h2>

    <form method="POST" action="traitement.php">
        <!-- Saisie du nom et prénom -->
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenomEtud" required><br><br>
        <!-- Choix unique pour la section BTS -->
        <label for="bts">Choisissez votre section BTS :</label>
        <select name="bts" id="bts" required>
            <option value="SIO">BTS SIO</option>
            <option value="CG">BTS Comptabilité et Gestion</option>
            <option value="MCO">BTS MCO</option>
        </select><br><br>

        <!-- Choix multiples pour les langues -->
        <label>Choisissez vos langues :</label><br>
        <input type="checkbox" name="langues[]" value="Anglais"> Anglais<br>
        <input type="checkbox" name="langues[]" value="Espagnol"> Espagnol<br>
        <input type="checkbox" name="langues[]" value="Allemand"> Allemand<br>
        <input type="checkbox" name="langues[]" value="Italien"> Italien<br><br>

        <!-- Bouton de soumission -->
        <input type="submit" value="Soumettre">
    </form>
</body>

</html>