<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Mot de passe oublié</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
  <form action="send_reset_email.php" method="POST" class="bg-white p-8 rounded-xl shadow-md w-full max-w-md">
    <h2 class="text-2xl font-bold mb-4 text-center">Mot de passe oublié</h2>
    <p class="mb-4 text-gray-600 text-sm text-center">Entrez votre adresse e-mail pour recevoir un lien de réinitialisation.</p>
    
    <input type="email" name="email" placeholder="Votre email" required
      class="w-full px-4 py-2 mb-4 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300">
    
    <button type="submit"
      class="w-full bg-black text-white font-semibold py-2 rounded-lg hover:bg-gray-800 transition">
      Envoyer le lien
    </button>
  </form>
</body>
</html>
