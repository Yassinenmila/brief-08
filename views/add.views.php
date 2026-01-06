<form method="POST" class="bg-white p-6 rounded-lg shadow-md w-full max-w-lg">
        <h2 class="text-2xl font-bold mb-6 text-center">
            Ajouter un article
        </h2>
        <div class="mb-4">
            <label class="block text-gray-700 mb-1">Titre</label>
            <input type="text" name="titre" placeholder="Titre de l'article" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 mb-1">Auteur</label>
            <input type="text" name="author_name" placeholder="Nom de l'auteur" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 mb-1">Date de publication</label>
            <input type="date" name="date_pub" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 mb-1">Description</label>
            <textarea name="descr" rows="4" placeholder="Description de l'article" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
        </div>
        <button name="sub_add" type="submit" class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition">
            Enregistrer
        </button>
    </form>