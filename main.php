<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- AOS CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    @keyframes fade-in {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .animate-fade-in {
        animation: fade-in 1s ease-out;
}

  </style>
</head>
<body class="bg-gray-100 text-gray-900">
  <!-- Barre de navigation modernisée -->
  <nav class="bg-white shadow-md py-4 px-6 flex items-center justify-between">
    <div class="flex items-center space-x-4">
      <img src="assets/image1.png" alt="Logo" class="w-10 h-10">
      <span class="text-xl font-semibold">The Dreamer Wild and Free</span>
    </div>
    <div class="flex items-center space-x-8">
      <a href="index.php" class="hover:text-blue-600 font-medium transition">Accueil</a>
      <a href="hebergement.php" class="hover:text-blue-600 font-medium transition">Hébergement</a>
      <a href="emplacement.php" class="hover:text-blue-600 font-medium transition">Emplacement</a>
      <a href="#contact" class="hover:text-blue-600 font-medium transition">Contact</a>

      <!-- Menu de profil -->
      <div class="relative group">
        <button class="flex items-center space-x-2 font-medium hover:text-blue-600">
          <span>nana dada</span>
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>
        <div class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg hidden group-hover:block z-50">
          <a href="profil.php" class="block px-4 py-2 hover:bg-gray-100">Mon profil</a>
          <a href="reservation.php" class="block px-4 py-2 hover:bg-gray-100">Mes réservations</a>
          <a href="logout.php" class="block px-4 py-2 text-red-600 hover:bg-gray-100">Se déconnecter</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Section principale avec image de fond -->
  <section class="relative h-screen bg-cover bg-center" style="background-image: url('assets/image2.jpg')">
  <div class="absolute inset-0 bg-black/10"></div>
  <!-- Contenu centré -->
  <div class="relative z-10 flex items-center justify-center h-full px-4">
    <div class="text-center max-w-2xl mx-auto text-white">
      <h1 class="text-4xl md:text-5xl font-extrabold mb-6 leading-tight drop-shadow-lg">
        Bienvenue dans notre monde
      </h1>
      <p class="text-lg md:text-xl drop-shadow-md">
        Réservez des hébergements inoubliables et découvrez les merveilles de la nature tunisienne
      </p>
    </div>
  </div>
</section>

<!-- SECTION : Vos réservations à venir -->
<section class="w-full py-16 bg-white bg-opacity-90 text-gray-900" data-aos="fade-up">
  <div class="max-w-5xl mx-auto px-4">
    <div class="flex justify-between items-center mb-6">
      <h2 class="text-2xl font-bold">Vos réservations à venir</h2>
      <a href="reservation.php" class="text-black hover:underline text-sm font-medium">Voir toutes →</a>
    </div>

    <div class="bg-white p-8 rounded-2xl shadow-lg text-center">
      <div class="mb-4 flex justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
        </svg>
      </div>
      <h3 class="text-lg font-semibold mb-1">Aucune réservation à venir</h3>
      <p class="text-gray-600 mb-4">Vous n'avez pas encore effectué de réservation.</p>
      <a href="reserver.php" class="inline-flex items-center gap-2 px-6 py-2 bg-black text-white font-medium rounded-lg transform transition duration-300 hover:-translate-y-1 hover:scale-105 hover:bg-gray-800 animate-pulse hover:animate-none">
        <i class="fas fa-calendar-check"></i> Réserver maintenant
      </a>
    </div>
  </div>
</section>

<!-- SECTION : Offres spéciales -->
<section class="py-16 bg-white text-gray-900">
  <div class="max-w-7xl mx-auto px-4">
    <div class="flex justify-between items-center mb-8">
      <h2 class="text-2xl font-bold">Offres des hébergement spéciales</h2>
      <a href="hebergement.php" class="text-black hover:underline text-sm font-medium">Voir les autres →</a>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
      
      <!-- Offre 1 -->
      <div class="bg-white rounded-xl overflow-hidden shadow-md">
        <div class="relative">
          <img src="assets/mobilhome.jpg" alt="Mobil-home" class="w-full h-48 object-cover">
          <span class="absolute top-4 left-4 bg-white bg-opacity-90 text-sm font-semibold px-3 py-1 rounded-full">-20% ce mois-ci</span>
        </div>
        <div class="p-4">
          <h3 class="text-lg font-bold">Semaine en Mobil-home</h3>
          <p class="text-sm text-gray-600">Profitez d'une semaine en famille dans nos mobil-homes tout confort avec terrasse privée.</p>
          <div class="mt-3 flex items-center justify-between">
            <div>
              <span class="line-through text-gray-400 text-sm">560€</span>
              <span class="text-green-600 font-bold ml-2">448€</span>
            </div>
            <a href="#" class="text-green-700 hover:underline text-sm font-medium">Voir l'offre</a>
          </div>
        </div>
      </div>

      <!-- Offre 2 -->
      <div class="bg-white rounded-xl overflow-hidden shadow-md">
        <div class="relative">
          <img src="assets/weekend.jpg" alt="Weekend romantique" class="w-full h-48 object-cover">
          <span class="absolute top-4 left-4 bg-white bg-opacity-90 text-sm font-semibold px-3 py-1 rounded-full">Offre spéciale couples</span>
        </div>
        <div class="p-4">
          <h3 class="text-lg font-bold">Weekend Romantique</h3>
          <p class="text-sm text-gray-600">Un weekend en chalet avec jacuzzi privé et petit-déjeuner inclus pour 2 personnes.</p>
          <div class="mt-3 flex items-center justify-between">
            <span class="text-green-600 font-bold">199€<span class="text-sm text-gray-500"> /weekend</span></span>
            <a href="#" class="text-green-700 hover:underline text-sm font-medium">Voir l'offre</a>
          </div>
        </div>
      </div>

      <!-- Offre 3 -->
      <div class="bg-white rounded-xl overflow-hidden shadow-md">
        <div class="relative">
          <img src="assets/aventure.jpg" alt="Séjour aventure" class="w-full h-48 object-cover">
          <span class="absolute top-4 left-4 bg-white bg-opacity-90 text-sm font-semibold px-3 py-1 rounded-full">Pack aventure</span>
        </div>
        <div class="p-4">
          <h3 class="text-lg font-bold">Séjour Aventure</h3>
          <p class="text-sm text-gray-600">Emplacement tente + 3 activités outdoor au choix (canoë, randonnée, VTT).</p>
          <div class="mt-3 flex items-center justify-between">
            <span class="text-green-600 font-bold">145€<span class="text-sm text-gray-500"> /personne</span></span>
            <a href="#" class="text-green-700 hover:underline text-sm font-medium">Voir l'offre</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- SECTION : Emplacements -->
<section class="py-16 bg-white text-gray-900">
  <div class="max-w-7xl mx-auto px-4">
    <div class="flex justify-between items-center mb-8">
      <h2 class="text-2xl font-bold">Nos Emplacements</h2>
      <a href="emplacement.php" class="text-black hover:underline text-sm font-medium">Voir les autres →</a>
    </div>

    <div class="grid md:grid-cols-3 gap-6">

      <!-- Emplacement 1 -->
      <div class="bg-white rounded-xl overflow-hidden shadow-md">
        <div class="relative">
          <img src="assets/emplacement1.jpg" alt="Emplacement Nature" class="w-full h-48 object-cover">
          <span class="absolute top-4 left-4 bg-white bg-opacity-90 text-sm font-semibold px-3 py-1 rounded-full">Vue panoramique</span>
        </div>
        <div class="p-4">
          <h3 class="text-lg font-bold">Emplacement Nature</h3>
          <p class="text-sm text-gray-600">Un coin calme en pleine nature pour planter votre tente et profiter du calme environnant.</p>
          <div class="mt-3 flex items-center justify-between">
            <span class="text-green-600 font-bold">30€<span class="text-sm text-gray-500"> /nuit</span></span>
            <a href="#" class="text-green-700 hover:underline text-sm font-medium">Voir l'offre</a>
          </div>
        </div>
      </div>

      <!-- Emplacement 2 -->
      <div class="bg-white rounded-xl overflow-hidden shadow-md">
        <div class="relative">
          <img src="assets/emplacement2.jpg" alt="Emplacement Famille" class="w-full h-48 object-cover">
          <span class="absolute top-4 left-4 bg-white bg-opacity-90 text-sm font-semibold px-3 py-1 rounded-full">Spécial familles</span>
        </div>
        <div class="p-4">
          <h3 class="text-lg font-bold">Emplacement Famille</h3>
          <p class="text-sm text-gray-600">Emplacement spacieux idéal pour les familles avec enfants, proche des aires de jeux.</p>
          <div class="mt-3 flex items-center justify-between">
            <span class="text-green-600 font-bold">40€<span class="text-sm text-gray-500"> /nuit</span></span>
            <a href="#" class="text-green-700 hover:underline text-sm font-medium">Voir l'offre</a>
          </div>
        </div>
      </div>

      <!-- Emplacement 3 -->
      <div class="bg-white rounded-xl overflow-hidden shadow-md">
        <div class="relative">
          <img src="assets/emplacement3.jpg" alt="Emplacement avec électricité" class="w-full h-48 object-cover">
          <span class="absolute top-4 left-4 bg-white bg-opacity-90 text-sm font-semibold px-3 py-1 rounded-full">Électricité incluse</span>
        </div>
        <div class="p-4">
          <h3 class="text-lg font-bold">Emplacement avec Électricité</h3>
          <p class="text-sm text-gray-600">Pour camping-car, caravane ou tente avec raccordement électrique à disposition.</p>
          <div class="mt-3 flex items-center justify-between">
            <span class="text-green-600 font-bold">45€<span class="text-sm text-gray-500"> /nuit</span></span>
            <a href="#" class="text-green-700 hover:underline text-sm font-medium">Voir l'offre</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- Section contact -->
<footer id="contact" class="bg-gradient-to-br from-white to-gray-100 border-t mt-12 py-12" data-aos="fade-up">
    <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-8 items-center">
      <div class="space-y-4 text-gray-700" data-aos="fade-right">
        <h2 class="text-3xl font-bold text-gray-800">Contactez-nous</h2>
        <p><strong>Email :</strong> rabiibenbrahim@gmail.com</p>
        <p><strong>Réseaux sociaux :</strong> @thedreamerwildandfree</p>
        <p><strong>Localisation :</strong> Tunis, Tunisie</p>
        <div class="flex space-x-4 pt-2 text-2xl text-gray-500">
          <a href="https://www.facebook.com/thedreamerwildandfree" target="_blank" class="hover:text-blue-600 transition"><i class="fab fa-facebook"></i></a>
          <a href="https://www.instagram.com/thedreamerwildandfree" target="_blank" class="hover:text-pink-500 transition"><i class="fab fa-instagram"></i></a>
          <a href="https://www.youtube.com/@thedreamerwildandfree" target="_blank" class="hover:text-red-600 transition"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
      <div class="rounded-xl overflow-hidden shadow-lg w-full h-full" data-aos="flip-left">
        <div class="relative pb-[56.25%] h-0">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102239.41060509716!2d10.060876000792609!3d36.79499200037431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd337f5e7ef543%3A0xd671924e714a0275!2sTunis!5e0!3m2!1sfr!2stn!4v1744481021428!5m2!1sfr!2stn"
            class="absolute top-0 left-0 w-full h-full border-0"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
  </footer>

  <!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000, // Durée de l'animation (ms)
    once: true      // L’animation ne se fait qu’une seule fois
  });
</script>


</body>
</html>
