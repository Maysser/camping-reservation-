<?php
require 'includes/db.php';

$error = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']);

    // Vérification de l'utilisateur dans la base de données
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // Si le mot de passe est correct, on démarre la session et redirige
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['success'] = "👋 Bonjour " . $user['firstname'] . ", vous êtes connecté ! ✅";
         
        // Se souvenir de l'utilisateur
         if ($remember) {
          setcookie('user_email', $email, time() + (86400 * 30), "/"); // rester 30 jours
        } else {
          setcookie('user_email', '', time() - 3600, "/"); // pour supprimer les cookies 
        }
        
        header("Location: main.php"); 
        exit();
    } else {
        $error = "Email ou mot de passe incorrect.⚠️";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Connexion - The Dreamer Wild and Free</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    html, body {
      margin: 0;
      padding: 0;
      height: 100%;
      overflow: hidden;
    }
  </style>
</head>
<body class="relative text-white">

  <!--  Vidéo de fond -->
  <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-[-1]">
    <source src="assets/Tunisia,Likeyouneverseenbefore.mp4" type="video/mp4">
    Votre navigateur ne prend pas en charge la vidéo.
  </video>

  <!--  Logo en haut à gauche -->
  <div class="absolute top-4 left-6 flex items-center space-x-2 z-10">
    <img src="assets/image1.png" alt="Logo" class="w-12 h-12">
    <span class="text-2xl font-bold">The Dreamer Wild and Free</span>
  </div>

  <!--  Bouton "Accueil " pour redirection vers la page d'accueil -->
<div class="absolute top-4 left-1/2 transform -translate-x-1/2 z-10">
    <a href="index.php"
       class="inline-block px-6 py-2 bg-black text-white rounded-full text-sm font-bold hover:bg-gray-800 transition duration-300">
       Accueil
    </a>
</div>
 
  <!--  Formulaire de connexion -->
  <div class="bg-black bg-opacity-60 p-10 rounded-2xl shadow-xl w-full max-w-md z-10 mx-auto mt-24">
    <h2 class="text-2xl font-bold text-center mb-6">Connexion</h2>

    <!-- Erreur -->
    <?php if ($error): ?>
      <div id="flash-message" class="bg-red-500 text-white p-3 mb-4 rounded"><?= $error ?></div>
    <?php endif; ?>

    <form method="POST">
        <!-- Email -->
      <label class="block mb-2 text-sm font-medium">Email</label>
      <input type="email" name="email" value="<?= isset($_COOKIE['user_email']) ? $_COOKIE['user_email'] : '' ?>"
        required class="w-full px-4 py-2 rounded bg-white text-black mb-4">

         <!-- Mot de passe -->
      <label class="block mb-2 text-sm font-medium">Mot de passe</label>
      <input type="password" name="password" required class="w-full px-4 py-2 rounded bg-white text-black mb-6">

         <!-- Se souvenir de moi et mot de passe oubliée -->
      <div class="flex items-center justify-between text-white mb-4">
        <label class="flex items-center">
          <input type="checkbox" name="remember" class="mr-2"> Se souvenir de moi
        </label>
        <a href="includes/forgot_password.php" class="text-sm text-blue-300 hover:underline">Mot de passe oublié ?</a>
      </div>

         <!-- Bouton de connexion -->
      <button type="submit" class="w-full py-3 bg-white text-black font-bold rounded-lg hover:scale-105 transform transition duration-300">
        Se connecter
      </button>
    </form>

       <!-- Créer un compte -->
    <p class="text-sm mt-4 text-center">Pas encore de compte ? <a href="register.php" class="underline hover:text-gray-300">Créer un compte</a></p>
  </div>

  <script>
  // Cacher le message après qulque seconde
  setTimeout(() => {
    const flash = document.getElementById('flash-message');
    if (flash) {
      flash.classList.add('fade-out');
      setTimeout(() => flash.remove(), 1000); // Supprime le div après animation
    }
  }, 2000);
</script>

</body>
</html>
