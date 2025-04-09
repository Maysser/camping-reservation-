<?php
require 'db.php';
require_once 'includes/PHPMailer/src/Exception.php';
require_once 'includes/PHPMailer/src/PHPMailer.php';
require_once 'includes/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $token = bin2hex(random_bytes(32));
    $expire = date("Y-m-d H:i:s", strtotime("+30 minutes"));

    // Vérifier si l'email existe
    $stmt = $conn->prepare("SELECT * FROM utilisateurs WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user) {
        // Sauvegarder le token dans la BD
        $stmt = $conn->prepare("UPDATE utilisateurs SET reset_token = ?, reset_expire = ? WHERE email = ?");
        $stmt->execute([$token, $expire, $email]);

        // Envoyer l'email via Gmail avec PHPMailer
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'The Dreamermail@gmail.com'; // à remplacer
        $mail->Password = 'mot_de_passe_app';    // à remplacer
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('The Dreamermail@gmail.com', 'The Dreamer');
        $mail->addAddress($email);
        $mail->isHTML(true);

        $resetLink = "http://localhost/reset_password.php?token=$token";
        $mail->Subject = 'Réinitialisation de mot de passe';
        $mail->Body = "Cliquez sur ce lien pour réinitialiser votre mot de passe : <a href='$resetLink'>$resetLink</a>";

        if ($mail->send()) {
            echo "L'email de réinitialisation a été envoyé à votre adresse.";
        } else {
            echo "Erreur lors de l'envoi du mail.";
        }
    } else {
        echo "L'email n'est pas trouvé.";
    }
}
?>
