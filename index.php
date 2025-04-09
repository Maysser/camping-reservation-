<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Accueil - The Dreamer Wild and Free</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

  <!-- Vidéo de fond -->
  <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-[-1]">
    <source src="assets/Tunisia,Likeyouneverseenbefore.mp4" type="video/mp4">
    Votre navigateur ne prend pas en charge la vidéo.
  </video>

  <!-- Logo en haut à gauche -->
  <div class="absolute top-4 left-6 flex items-center space-x-2 z-10">
    <img src="assets/image1.png" alt="Logo" class="w-12 h-12">
    <span class="text-2xl font-bold">The Dreamer Wild and Free</span>
  </div>

  <!-- Contenu principal centré -->
  <div class="flex flex-col items-center justify-center h-screen text-center z-10 px-4">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">Welcome to the dreamer world</h1>
    <p class="text-lg mb-6">Escape the hustle and unwind under the stars. Book your perfect camping spot today and reconnect with the great outdoors</p>

    <!-- Bouton En savoir plus-->
    <a href="login.php"
       class="mt-6 inline-block px-8 py-3 rounded-full bg-gradient-to-r from-white to-gray-300 text-black font-bold text-lg shadow-lg hover:scale-105 transform transition duration-300">
      En savoir plus 
    </a>
  </div>

</body>
</html>
