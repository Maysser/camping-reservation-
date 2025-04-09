<?php
// Inclure les fichiers nécessaires de PHPMailer et la connexion à la base de données
require_once 'includes/PHPMailer/src/Exception.php';
require_once 'includes/PHPMailer/src/PHPMailer.php';
require_once 'includes/PHPMailer/src/SMTP.php';
require_once 'db.php';  // Connexion à la base de données

// Vérifier si le token est présent dans l'URL
if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Vérifier si le token existe dans la base de données et s'il n'a pas expiré
    $stmt = $conn->prepare("SELECT * FROM utilisateurs WHERE reset_token = ? AND reset_expire > NOW()");
    $stmt->execute([$token]);
    $user = $stmt->fetch();

    if ($user) {
        // Afficher le formulaire de réinitialisation du mot de passe
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $newPassword = $_POST['new_password'];
            $confirmPassword = $_POST['confirm_password'];

            // Vérifier que les mots de passe sont identiques
            if ($newPassword === $confirmPassword) {
                // Hacher le mot de passe avant de le sauvegarder dans la base de données
                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

                // Mettre à jour le mot de passe et supprimer le token
                $stmt = $conn->prepare("UPDATE utilisateurs SET password = ?, reset_token = NULL, reset_expire = NULL WHERE reset_token = ?");
                $stmt->execute([$hashedPassword, $token]);

                echo "Votre mot de passe a été réinitialisé avec succès. Vous pouvez maintenant vous connecter.<a href='login.php'>Connexion</a>";
            } else {
                echo "Les mots de passe ne correspondent pas.";
            }
        }
    } else {
        echo "Le lien de réinitialisation est invalide ou a expiré.";
    }
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Nouveau mot de passe</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
  <h2 class="text-xl font-bold mb-4 text-center">Réinitialiser votre mot de passe</h2>
  <form method="POST" class="bg-white p-8 rounded-xl shadow-md w-full max-w-md">
  
    <label class="block mb-2 text-sm font-medium">Nouveau mot de passe :</label>
    <input type="password" name="new_password" required class="w-full px-4 py-2 rounded bg-white text-black mb-4">
    
    <label class="block mb-2 text-sm font-medium">Confirmer le mot de passe :</label>
    <input type="password" name="confirm_password" required class="w-full px-4 py-2 rounded bg-white text-black mb-4">
    
    <button type="submit"><button type="submit" class="w-full py-3 bg-white text-black font-bold rounded-lg hover:scale-105 transform transition duration-300">
        Réinitialiser le mot de passe
    </button>

  </form>
</body>
</html>
