<?php
// Vérification que la méthode POST a bien été utilisée
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération du choix de BTS
    $bts = $_POST['bts'];

    // Récupération du nom de l'étudiant

    $nomEtudiant = $_POST['nom'];
    $prenomEtudiant = $_POST['prenomEtud'];
    $langues = $_POST['langues'];
    
    echo "L'étudiant $prenomEtudiant $nomEtudiant a choisi le BTS $bts. <br>" ;
    echo "Langue(s) choisi(es) : " ;
    
    if (isset($_POST['langues']))
    {
    foreach ($langues as $langue ) {
        echo "<li> $langue <br>";
        
    }
    }
    else {
        echo "<br> Aucune langue sélectionné <br>";
    }
    
    if ($bts == "SIO") {
        echo "<a href=https://www.enc-bessieres.org/formations/bts-services-informatiques-aux-organisations/> En savoir plus </a>";

    }
    
    if ($bts == "CG") {
        echo "<a href=https://www.enc-bessieres.org/formations/bts-assurance/> En savoir plus </a>";

    }
    
    if ($bts == "MCO") {
        echo "<a href=https://www.enc-bessieres.org/formations/bts-commerce-international/> En savoir plus </a>";

    }
    
}
?>
