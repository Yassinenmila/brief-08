<form method="POST" class="bg-white p-6 rounded-lg shadow-md w-full max-w-lg">
         <input type="hidden" name="id" value="<?= $book['id'] ?>">
        <h2 class="text-2xl font-bold mb-6 text-center">
            modifier un article book 
        </h2>
        <div class="mb-4">
            <label class="block text-gray-700 mb-1">Titre</label>
            <input type="text" name="titre" placeholder="Titre de l'article" value="<?= $book['titre'] ?>" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 mb-1">Auteur</label>
            <input type="text" name="author_name" placeholder="Nom de l'auteur" value="<?= $book['author_name'] ?>" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 mb-1">Date de publication</label>
            <input type="date" name="date_pub" value="<?= $book['date_pub'] ?>" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="mb-6">
            <label class="block text-gray-700 mb-1">Description</label>
            <textarea name="descr" rows="4" placeholder="Description de l'article" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"><?= $book['descr'] ?></textarea>
        </div>
        <button name="sub_mod" type="submit" class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition">
            Enregistrer
        </button>
    </form>