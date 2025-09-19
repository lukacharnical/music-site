<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Format des données
    $data = "Nom: $nom\nEmail: $email\nMessage: $message\n---\n";

    // Sauvegarde dans un fichier texte
    file_put_contents("donnees.txt", $data, FILE_APPEND | LOCK_EX);

    echo "Merci, vos données ont été enregistrées !";
} else {
    echo "Méthode non autorisée.";
}
?>
