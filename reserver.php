<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nouvelle réservation</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-white text-gray-900">

  <!-- Étapes en haut -->
  <div class="w-full border-b p-6">
    <div class="max-w-5xl mx-auto flex items-center space-x-6">
      <div class="flex items-center space-x-2">
        <div class="w-8 h-8 rounded-full bg-green-700 text-white flex items-center justify-center">1</div>
        <span>Dates et invités</span>
      </div>
      <div class="flex items-center space-x-2">
        <div class="w-8 h-8 rounded-full border border-gray-400 text-gray-600 flex items-center justify-center">2</div>
        <span>Hébergement</span>
      </div>
      <div class="flex items-center space-x-2">
        <div class="w-8 h-8 rounded-full border border-gray-400 text-gray-600 flex items-center justify-center">3</div>
        <span>Services</span>
      </div>
      <div class="flex items-center space-x-2">
        <div class="w-8 h-8 rounded-full border border-gray-400 text-gray-600 flex items-center justify-center">4</div>
        <span>Paiement</span>
      </div>
    </div>
  </div>

  <!-- Étape 1 : Dates et invités -->
  <section id="step-1" class="max-w-4xl mx-auto p-6 mt-10" data-aos="fade-up">
    <h2 class="text-2xl font-bold mb-6">Choisissez vos dates et le nombre d'invités</h2>

    <div class="bg-gray-100 p-6 rounded-xl shadow-md mb-8">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label class="block font-semibold mb-2">Date d'arrivée</label>
          <input type="date" class="w-full border px-4 py-2 rounded-lg">
        </div>
        <div>
          <label class="block font-semibold mb-2">Date de départ</label>
          <input type="date" class="w-full border px-4 py-2 rounded-lg">
        </div>
      </div>

      <div class="mt-6">
        <label class="block font-semibold mb-2">Nombre d'invités</label>
        <select class="w-full border px-4 py-2 rounded-lg">
          <option>1 personne</option>
          <option>2 personnes</option>
          <option>3 personnes</option>
          <option>4 personnes</option>
          <option>5 personnes</option>
        </select>
      </div>
    </div>

    <div class="bg-gray-100 p-6 rounded-xl shadow-md">
      <h3 class="font-bold text-lg mb-4">Type d'hébergement souhaité</h3>
      <div class="space-y-4">
        <label class="flex items-start space-x-3">
          <input type="radio" name="type" checked>
          <div>
            <span class="font-semibold">Tous les types d'hébergement</span>
            <p class="text-sm text-gray-600">Voir toutes les options disponibles</p>
          </div>
        </label>

        <label class="flex items-start space-x-3">
          <input type="radio" name="type">
          <div>
            <span class="font-semibold">Chalet / Mobil-home</span>
            <p class="text-sm text-gray-600">Hébergements fixes tout confort</p>
          </div>
        </label>

        <label class="flex items-start space-x-3">
          <input type="radio" name="type">
          <div>
            <span class="font-semibold">Emplacement camping</span>
            <p class="text-sm text-gray-600">Emplacements pour tentes ou caravanes</p>
          </div>
        </label>
      </div>
    </div>

    <div class="flex justify-end mt-8">
      <button onclick="goToStep(2)" class="bg-green-700 text-white px-6 py-3 rounded-lg hover:bg-green-800 transition">
        Continuer
      </button>
    </div>
  </section>

  <!-- Étape 2+ (placeholder) -->
  <section id="step-2" class="hidden max-w-4xl mx-auto p-6 mt-10" data-aos="fade-left">
    <h2 class="text-2xl font-bold mb-6">Choisissez votre hébergement</h2>
    <p>Ici s'affichera la liste des hébergements disponibles...</p>
    <div class="flex justify-end mt-8">
      <button onclick="goToStep(3)" class="bg-green-700 text-white px-6 py-3 rounded-lg hover:bg-green-800 transition">
        Continuer
      </button>
    </div>
  </section>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();

    function goToStep(step) {
      const allSections = document.querySelectorAll("section");
      allSections.forEach(s => s.classList.add("hidden"));

      document.getElementById(`step-${step}`).classList.remove("hidden");
    }
  </script>
</body>
</html>
