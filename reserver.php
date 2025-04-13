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

<!-- Barre de titre avec retour -->
<div class="flex items-center justify-between px-6 py-4 border-b">
  <div class="flex items-center gap-4">
    <button onclick="window.location.href='main.php'" class="text-xl font-bold hover:text-black transition">
      ←
    </button>
    <h1 class="text-xl font-semibold">Nouvelle réservation</h1>
  </div>
  <a href="index.php" class="text-sm text-black hover:underline">Retour à l’accueil</a>
</div>

<!-- Étapes en haut -->
<div class="w-full border-b p-6">
  <div class="max-w-5xl mx-auto flex items-center space-x-6">
    <div class="flex items-center space-x-2">
      <div id="stepIcon1" class="w-8 h-8 rounded-full bg-black text-white flex items-center justify-center">1</div>
      <span>Dates et invités</span>
    </div>
    <div class="flex items-center space-x-2">
      <div id="stepIcon2" class="w-8 h-8 rounded-full border border-gray-400 text-gray-600 flex items-center justify-center">2</div>
      <span>Hébergement</span>
    </div>
    <div class="flex items-center space-x-2">
      <div id="stepIcon3" class="w-8 h-8 rounded-full border border-gray-400 text-gray-600 flex items-center justify-center">3</div>
      <span>Services</span>
    </div>
    <div class="flex items-center space-x-2">
      <div id="stepIcon4" class="w-8 h-8 rounded-full border border-gray-400 text-gray-600 flex items-center justify-center">4</div>
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
        <option>6 personnes</option>
        <option>7 personnes</option>
        <option>8 personnes</option>
      </select>
    </div>
  </div>

  <div class="bg-gray-100 p-6 rounded-xl shadow-md">
    <h3 class="font-bold text-lg mb-4">Type d'hébergement souhaité:</h3>
    <div class="space-y-4">

        <label class="flex items-start space-x-3">
            <input type="radio" name="type">
            <div>
                <span class="font-semibold">Emplacement camping</span>
                <p class="text-sm text-gray-600">Emplacements pour tentes ou caravanes</p>
            </div>
        </label>

      <label class="flex items-start space-x-3">
        <input type="radio" name="type" checked>
        <div>
          <span class="font-semibold">Tente</span>
          <p class="text-sm text-gray-600">la préférée des campeurs </p>
        </div>
      </label>

      <label class="flex items-start space-x-3">
        <input type="radio" name="type">
        <div>
          <span class="font-semibold">Glamping</span>
          <p class="text-sm text-gray-600"> le charme d’un hébergement insolite </p>
        </div>
      </label>

      <label class="flex items-start space-x-3">
        <input type="radio" name="type">
        <div>
          <span class="font-semibold">Mobil-home</span>
          <p class="text-sm text-gray-600"> un confort comme à la maison</p>
        </div>
      </label>

      <label class="flex items-start space-x-3">
        <input type="radio" name="type">
        <div>
          <span class="font-semibold">Bungalow</span>
          <p class="text-sm text-gray-600">un espace fonctionnel pour les grandes familles</p>
        </div>
      </label>

      <label class="flex items-start space-x-3">
        <input type="radio" name="type">
        <div>
          <span class="font-semibold">chalet</span>
          <p class="text-sm text-gray-600">habitation de charme à la mer comme à la montagne</p>
        </div>
      </label>
    </div>
  </div>

  <div class="flex justify-end mt-8">
    <button onclick="goToStep(2)" class="border border-black text-black px-6 py-3 rounded-lg hover:bg-black hover:text-white transition">
      Continuer
    </button>
  </div>

  <!-- PIED : lien aide -->
  <div class="flex justify-between items-center pt-8 border-t mt-10">
    <div class="text-sm text-gray-600">
      Besoin d'aide ?
      <a href="https://www.facebook.com/thedreamerwildandfree" class="ml-1 text-black hover:underline">Contactez-nous</a>
    </div>
  </div>
</section>              

<!-- Étape 2 : Hébergement (placeholder) -->
<section id="step-2" class="hidden max-w-4xl mx-auto p-6 mt-10" data-aos="fade-left">
<h2 class="text-2xl font-bold mb-6">Choisissez votre hébergement</h2>

<!-- Hébergement 1 -->
<div class="bg-white p-6 rounded-xl shadow-md mb-6 flex justify-between items-start border">
  <div>
    <h3 class="text-xl font-semibold">Chalet Panorama</h3>
    <p class="text-sm text-gray-500">chalet</p>
    <p class="mt-2 text-gray-700">Chalet confortable avec vue panoramique sur la nature</p>
    <div class="mt-4 flex flex-wrap gap-2">
      <span class="bg-gray-100 text-gray-700 text-sm px-3 py-1 rounded-full">Capacité: 4 personnes</span>
      <span class="bg-gray-100 text-gray-700 text-sm px-3 py-1 rounded-full">Wi-Fi</span>
      <span class="bg-gray-100 text-gray-700 text-sm px-3 py-1 rounded-full">Climatisation</span>
      <span class="bg-gray-100 text-gray-700 text-sm px-3 py-1 rounded-full">Cuisine</span>
    </div>
  </div>
  <div class="text-right">
    <p class="text-sm text-gray-500">Prix pour 3 nuits</p>
    <p class="text-lg font-bold text-black">360€</p>
    <button onclick="selectHebergement('Chalet Panorama')" class="mt-4 border border-black text-black px-4 py-2 rounded-lg hover:bg-black hover:text-white transition">
      Sélectionner
    </button>
  </div>
</div>

<!-- Hébergement 2 -->
<div class="bg-white p-6 rounded-xl shadow-md mb-6 flex justify-between items-start border">
  <div>
    <h3 class="text-xl font-semibold">Mobil-home Familial</h3>
    <p class="text-sm text-gray-500">mobilehome</p>
    <p class="mt-2 text-gray-700">Mobil-home spacieux idéal pour les familles</p>
    <div class="mt-4 flex flex-wrap gap-2">
      <span class="bg-gray-100 text-gray-700 text-sm px-3 py-1 rounded-full">Capacité: 6 personnes</span>
      <span class="bg-gray-100 text-gray-700 text-sm px-3 py-1 rounded-full">Wi-Fi</span>
      <span class="bg-gray-100 text-gray-700 text-sm px-3 py-1 rounded-full">Cuisine</span>
    </div>
  </div>
  <div class="text-right">
    <p class="text-sm text-gray-500">Prix pour 3 nuits</p>
    <p class="text-lg font-bold text-black">270€</p>
    <button onclick="selectHebergement('Mobil-home Familial')" class="mt-4 border border-black text-black px-4 py-2 rounded-lg hover:bg-black hover:text-white transition">
      Sélectionner
    </button>
  </div>
</div>

<!-- Bouton Retour -->
<div class="flex justify-between mt-10">
    <button onclick="goToStep(1)" class="border border-black text-black px-6 py-3 rounded-lg hover:bg-black hover:text-white transition">
        Retour
    </button>
    <button onclick="goToStep(3)" class="border border-black text-black px-6 py-3 rounded-lg hover:bg-black hover:text-white transition">
        Continuer
    </button>
</div>

<!-- PIED : lien aide -->
<div class="flex justify-between items-center pt-8 border-t mt-10">
    <div class="text-sm text-gray-600">
      Besoin d'aide ?
      <a href="https://www.facebook.com/thedreamerwildandfree" class="ml-1 text-black hover:underline">Contactez-nous</a>
    </div>
  </div>

</section>

<!-- Étape 3: services -->
<section id="step-3" class="hidden max-w-4xl mx-auto p-6 mt-10" data-aos="fade-up">
  <h2 class="text-3xl font-bold mb-6 text-center">Services complémentaires</h2>
  <p class="mb-10 text-gray-600 text-center">Choisissez les options supplémentaires pour rendre votre séjour encore plus agréable.</p>

  <div class="space-y-8 max-w-3xl mx-auto">
    <!-- Service: Location de vélos -->
    <div class="bg-white rounded-2xl shadow-lg p-6 flex items-center justify-between">
      <div>
        <h3 class="text-xl font-semibold text-gray-800">Location de vélos</h3>
        <p class="text-sm text-gray-500">Location de vélos pour adultes, prix par jour</p>
        <p class="mt-1 text-green-600 font-bold">15€</p>
      </div>
      <div class="flex items-center space-x-3">
        <input type="checkbox" id="velo" class="h-5 w-5 text-green-600 accent-green-700" checked>
        <button class="px-3 py-1 bg-gray-200 rounded-full text-lg font-bold hover:bg-gray-300 transition" onclick="decrease('veloQty')">-</button>
        <span id="veloQty" class="w-6 text-center">1</span>
        <button class="px-3 py-1 bg-gray-200 rounded-full text-lg font-bold hover:bg-gray-300 transition" onclick="increase('veloQty')">+</button>
      </div>
    </div>

    <!-- Service: Randonnée guidée -->
    <div class="bg-white rounded-2xl shadow-lg p-6 flex items-center justify-between">
      <div>
        <h3 class="text-xl font-semibold text-gray-800">Randonnée guidée</h3>
        <p class="text-sm text-gray-500">Randonnée guidée d'une demi-journée</p>
        <p class="mt-1 text-green-600 font-bold">25€</p>
      </div>
      <div class="flex items-center space-x-3">
        <input type="checkbox" id="rando" class="h-5 w-5 text-green-600 accent-green-700" checked>
        <button class="px-3 py-1 bg-gray-200 rounded-full text-lg font-bold hover:bg-gray-300 transition" onclick="decrease('randoQty')">-</button>
        <span id="randoQty" class="w-6 text-center">2</span>
        <button class="px-3 py-1 bg-gray-200 rounded-full text-lg font-bold hover:bg-gray-300 transition" onclick="increase('randoQty')">+</button>
      </div>
    </div>

    <!-- Service: Petit-déjeuner -->
    <div class="bg-white rounded-2xl shadow-lg p-6 flex items-center justify-between">
      <div>
        <h3 class="text-xl font-semibold text-gray-800">Petit-déjeuner continental</h3>
        <p class="text-sm text-gray-500">Prix par personne</p>
        <p class="mt-1 text-green-600 font-bold">12€</p>
      </div>
      <div class="flex items-center space-x-3">
        <input type="checkbox" id="dej" class="h-5 w-5 text-green-600 accent-green-700" checked>
        <button class="px-3 py-1 bg-gray-200 rounded-full text-lg font-bold hover:bg-gray-300 transition" onclick="decrease('dejQty')">-</button>
        <span id="dejQty" class="w-6 text-center">2</span>
        <button class="px-3 py-1 bg-gray-200 rounded-full text-lg font-bold hover:bg-gray-300 transition" onclick="increase('dejQty')">+</button>
      </div>
    </div>
  </div>

  <!-- Navigation -->
  <div class="flex justify-between mt-10 max-w-3xl mx-auto">
    <button onclick="goToStep(2)" class="border border-black text-black px-6 py-3 rounded-lg hover:bg-black hover:text-white transition">
        Retour
    </button>
    <button onclick="goToStep(4)" class="border border-black text-black px-6 py-3 rounded-lg hover:bg-black hover:text-white transition">
        Continuer
    </button>
  </div>

  <!-- PIED : lien aide -->
  <div class="flex justify-between mt-10 max-w-3xl mx-auto">
    <div class="text-sm text-gray-600">
      Besoin d'aide ?
      <a href="https://www.facebook.com/thedreamerwildandfree" class="ml-1 text-black hover:underline">Contactez-nous</a>
    </div>
  </div>
</section>


</section>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();

  function goToStep(step) {
    // Cacher toutes les sections
    const allSections = document.querySelectorAll("section");
    allSections.forEach(s => s.classList.add("hidden"));

    // Afficher la section actuelle
    document.getElementById(`step-${step}`).classList.remove("hidden");

    // Mettre à jour les icônes en haut
    updateStepIndicator(step);
  }

  function updateStepIndicator(currentStep) {
    const totalSteps = 4;

    for (let i = 1; i <= totalSteps; i++) {
      const icon = document.getElementById(`stepIcon${i}`);

      if (i < currentStep) {
        icon.className = "w-8 h-8 rounded-full bg-black text-white flex items-center justify-center";
      } else if (i === currentStep) {
        icon.className = "w-8 h-8 rounded-full border-2 border-black text-black flex items-center justify-center";
      } else {
        icon.className = "w-8 h-8 rounded-full border border-gray-400 text-gray-600 flex items-center justify-center";
      }
    }
  }

  // Appeler cette fonction au chargement initial (étape 1 par défaut)
  document.addEventListener("DOMContentLoaded", () => {
    updateStepIndicator(1);
  });
</script>

<script>
  function increase(id) {
    const el = document.getElementById(id);
    let val = parseInt(el.textContent);
    el.textContent = val + 1;
  }

  function decrease(id) {
    const el = document.getElementById(id);
    let val = parseInt(el.textContent);
    if (val > 0) el.textContent = val - 1;
  }
</script>


</body>
</html>
