<main class="p-6">
        
        <section class="mb-10 bg-white p-6 rounded shadow">
            <h2 class="text-xl font-bold mb-4">Informations personnelles</h2>
            <p><strong>Nom :</strong> <?= $_SESSION['user']['nom'] ?></p>
            <p><strong>Prénom :</strong><?= $_SESSION['user']['prenom'] ?></p>
            <p><strong>Nationalité :</strong><?= $_SESSION['user']['nationalite'] ?></p>
            <p><strong>Email :</strong><?= $_SESSION['user']['email'] ?></p>
        </section>

        
        <section class="bg-white p-6 rounded shadow">
            <h2 class="text-xl font-bold mb-4">Mes livres empruntés</h2>

           
            <table class="w-full border border-gray-300">
                <tr class="bg-gray-100 font-bold">
                    <td class="p-4">Titre</td>
                    <td class="p-4">Auteur</td>
                    <td class="p-4">Date publication</td>
                    <td class="p-4 text-center">Action</td>
                </tr>
               <?php foreach($books as $b): ?>
                <tr>
                    <td class="p-4"><?= $b['titre'] ?></td>
                    <td class="p-4"><?= $b['author_name'] ?></td>
                    <td class="p-4"><?= $b['date_pub'] ?></td>
                    <td class="p-4 text-center">
                        <form method="POST" action="">
                            <input type="hidden" name="book_id" value="<?= $b['id'] ?>">
                            <button type="submit" name="return" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">Return</button>
                        </form>
                    </td>
                </tr>
                 <?php endforeach; ?>
            </table>
        </section>
    </main>