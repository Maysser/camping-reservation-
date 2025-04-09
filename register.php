<?php
require 'includes/db.php';

$error = '';
$success = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Vérification que les mots de passe correspondent
    if ($password !== $confirm_password) {
        $error = "Les mots de passe ne correspondent pas.⚠️";
    } else {
        // Hashage du mot de passe
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Vérification si l'email existe déjà
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            $error = "Cet email est déjà utilisé.⚠️";
        } else {
            // Insérer l'utilisateur dans la base de données
            $stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email, password) VALUES (?, ?, ?, ?)");
            $stmt->execute([$firstname, $lastname, $email, $hashed_password]);

            // Message de succès
            $success=  "Votre compte a été créé avec succès ! Bienvenue $firstname.✅ ";
            // Redirection vers la page de connexion
            header("Location: main.php");
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Inscription - The Dreamer Wild and Free</title>
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
  <video autoplay muted loop playsinline 
       class="absolute top-0 left-0 w-full h-full object-cover z-[-1]">
       class="absolute top-0 left-0 w-full h-full object-cover scale-[0.9] md:scale-[0.85] transform origin-top z-[-1]">
    <source src="assets/Tunisia,Likeyouneverseenbefore.mp4" type="video/mp4">
    Votre navigateur ne prend pas en charge la vidéo.
  </video>

  <!--  Logo en haut à gauche -->
  <div class="absolute top-4 left-6 flex items-center space-x-2 z-10">
    <img src="assets/image1.png" alt="Logo" class="w-12 h-12">
    <span class="text-2xl font-bold">The Dreamer Wild and Free</span>
  </div>

  <!-- Bouton "Accueil" pour redirection vers la page d'accueil -->
  <div class="absolute top-4 left-1/2 transform -translate-x-1/2 z-10">
    <a href="index.php"
       class="inline-block px-6 py-2 bg-black text-white rounded-full text-sm font-bold hover:bg-gray-800 transition duration-300">
       Accueil
    </a>
  </div>
  


  <!-- Formulaire d'inscription -->
  <div class="flex items-center justify-center w-full h-full z-10">
    <div class="bg-black bg-opacity-60 p-6 rounded-2xl shadow-xl w-full max-w-sm mx-4 mt-12"> <!-- Réduction de mt-20 à mt-12 ici -->
      <h3 class="text-2xl font-bold text-center mb-0">Créer un compte</h3>

      <!-- Erreur -->
      <?php if ($error): ?>
        <div id="flash-message" class="bg-red-500 text-white p-3 mb-4 rounded"><?= $error ?></div>
      <?php endif; ?>

      <!-- Succès -->
      <?php if ($success): ?>
        <div id="flash-message" class="bg-green-100 text-green-800 p-4 rounded-xl shadow-md mt-6 text-center"><?= $success ?></div>
      <?php endif; ?>

      <form method="POST">
        <label class="block mb-1 text-sm font-medium">Prénom</label>
        <input type="text" name="firstname" required class="w-full px-4 py-2 rounded bg-white text-black mb-1">

        <label class="block mb-2 text-sm font-medium">Nom</label>
        <input type="text" name="lastname" required class="w-full px-4 py-2 rounded bg-white text-black mb-1">

        <label class="block mb-2 text-sm font-medium">Email</label>
        <input type="email" name="email" required class="w-full px-4 py-2 rounded bg-white text-black mb-1">

        <label class="block mb-2 text-sm font-medium">Numéro de téléphone</label>
        <input type="text" name="phone"  required class="w-full px-4 py-2 rounded bg-white text-black mb-1" />
        
        <label class="block mb-2 text-sm font-medium">Mot de passe</label>
        <input type="password" name="password" required class="w-full px-4 py-2 rounded bg-white text-black mb-1">

        <label class="block mb-2 text-sm font-medium">Confirmer le mot de passe</label>
        <input type="password" name="confirm_password" required class="w-full px-4 py-2 rounded bg-white text-black mb-1">

        <div class="mb-3">
          <label class="inline-flex items-center">
            <input type="checkbox" name="terms" required class="form-checkbox text-indigo-600">
            <span class="ml-1 text-sm">
                J'accepte les <a href="conditions.html" class="text-blue-600 hover:underline">conditions d'utilisation</a> et la
                <a href="privacy.html" class="text-blue-600 hover:underline">politique de confidentialité</a>.
            </span>
          </label>
        </div>


        <button type="submit" class="w-full py-3 bg-white text-black font-bold rounded-lg hover:scale-105 transform transition duration-300">
          Créer un compte
        </button>
      </form>
    <p class="text-sm mt-4 text-center">Déjà un compte ? <a href="login.php" class="underline hover:text-gray-300">Se connecter</a></p>
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
