<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Mes Réservations - CampEase</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    html, body {
      height: 100%;
      scroll-behavior: smooth;
    }

    .rotate-hover:hover {
      transform: rotate(360deg);
      transition: transform 0.8s ease-in-out;
    }

    body {
      display: flex;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    footer {
      flex-shrink: 0;
    }
  </style>
</head>
<body class="bg-gray-50 font-sans">

  <!-- Header -->
  <header class="flex justify-between items-center p-6 bg-white shadow-md sticky top-0 z-50">
    <div class="flex items-center gap-3">
      <img src="assets/image1.png" alt="Logo The dreamer" class="w-10 h-10 object-contain rotate-hover"> 
      <h1 class="text-xl font-semibold">The dreamer wild and free</h1>
    </div>
    
    <!-- Menu profil -->
    <div class="relative group">
      <button class="flex items-center space-x-2 font-medium hover:text-blue-600">
        <span>nana dada</span>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
        </svg>
      </button>
      <div class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg hidden group-hover:block z-50">
        <a href="profil.php" class="block px-4 py-2 hover:bg-gray-100">Mon profil</a>
        <a href="reservation.php" class="block px-4 py-2 hover:bg-gray-100">Mes réservations</a>
        <a href="logout.php" class="block px-4 py-2 text-red-600 hover:bg-gray-100">Se déconnecter</a>
      </div>
    </div>
  </header>

  <!-- Main -->
  <main class="flex-grow">
    <section class="p-6 max-w-7xl mx-auto">

      <!-- Titre + bouton -->
      <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Mes réservations</h2>
        <a href="main.php" class="inline-flex items-center gap-2 px-6 py-2 bg-black text-white font-medium rounded-lg transform transition duration-300 hover:-translate-y-1 hover:scale-105 hover:bg-gray-800 animate-pulse hover:animate-none">
        <i class="fas fa-calendar-check"></i> Accueil
      </a>
      </div>

      <!-- Onglets -->
      <div class="flex gap-4 mb-6 border rounded-lg overflow-hidden">
        <button class="tab-btn flex-1 py-2 text-center bg-green-100 font-medium" data-tab="upcoming">À venir</button>
        <button class="tab-btn flex-1 py-2 text-center hover:bg-gray-100" data-tab="past">Passées</button>
        <button class="tab-btn flex-1 py-2 text-center hover:bg-gray-100" data-tab="cancelled">Annulées</button>
      </div>

      <!-- Contenu dynamique -->
      <div id="reservation-content" class="bg-white border rounded-xl p-10 text-center shadow-sm">
        <div id="empty-upcoming">
          <div class="flex justify-center mb-4">
            <div class="bg-gray-100 w-14 h-14 rounded-full flex items-center justify-center text-2xl text-gray-400">+</div>
          </div>
          <h2 class="text-lg font-semibold mb-2">Aucune réservation à venir</h2>
          <p class="text-gray-500 mb-4">Vous n'avez aucune réservation prévue pour le moment.</p>
          <a href="reserver.php" class="inline-flex items-center gap-2 px-6 py-2 bg-black text-white font-medium rounded-lg transform transition duration-300 hover:-translate-y-1 hover:scale-105 hover:bg-gray-800 animate-pulse hover:animate-none">
        <i class="fas fa-calendar-check"></i> Réserver maintenant
      </a>
        </div>

        <div id="empty-past" class="hidden">
          <h2 class="text-lg font-semibold mb-2">Aucune réservation passée</h2>
          <p class="text-gray-500">Vous n'avez encore effectué aucune réservation.</p>
        </div>

        <div id="empty-cancelled" class="hidden">
          <h2 class="text-lg font-semibold mb-2">Aucune réservation annulée</h2>
          <p class="text-gray-500">Aucune réservation n'a été annulée.</p>
        </div>
      </div>
    </section>
  </main>

  <!-- pied de la page  -->
  <footer class="bg-white text-center py-4 text-sm text-gray-500 border-t">
    <p>© 2025 Thedreamerwildandfree. Tous droits réservés.</p>
    <div class="flex justify-center gap-4 mt-2">
      <a href="#" class="hover:underline">Conditions d'utilisation</a>
      <a href="#" class="hover:underline">Confidentialité</a>
      <a href="#" class="hover:underline">Aide</a>
      <a href="main.php/#contact" class="hover:underline">Contact</a>
    </div>
  </footer>

  <!-- JS Tabs -->
  <script>
    const tabButtons = document.querySelectorAll(".tab-btn");
    const contents = {
      upcoming: document.getElementById("empty-upcoming"),
      past: document.getElementById("empty-past"),
      cancelled: document.getElementById("empty-cancelled")
    };

    tabButtons.forEach(btn => {
      btn.addEventListener("click", () => {
        tabButtons.forEach(b => b.classList.remove("bg-green-100", "font-medium"));
        btn.classList.add("bg-green-100", "font-medium");

        Object.values(contents).forEach(c => c.classList.add("hidden"));
        contents[btn.dataset.tab].classList.remove("hidden");
      });
    });
  </script>
</body>
</html>
