<div class="w-full px-6 mt-10">
    <h2 class="text-2xl font-bold mb-6">Liste des livres</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php if(!empty($books)): ?>
            <?php foreach($books as $b): ?>
                <div class="bg-white shadow-md rounded-lg p-5 flex flex-col justify-between">
                    <div>
                        <h3 class="text-xl font-semibold mb-2"><?= htmlspecialchars($b['titre']) ?></h3>
                        <p class="text-gray-700 mb-1"><strong>Auteur :</strong> <?= htmlspecialchars($b['author_name']) ?></p>
                        <p class="text-gray-700 mb-3"><strong>Date :</strong> <?= htmlspecialchars($b['date_pub']) ?></p>
                        <p class="text-gray-600 text-sm"><?= htmlspecialchars($b['descr']) ?></p>
                    </div>
                    <form method="post" class="mt-4">
                        <input type="hidden" name="book_id" value="<?= $b['id'] ?>">
                        <button type="submit" name="borrow" class="w-full px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition-colors"> Borrow </button>
                    </form>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-gray-700">Aucun livre disponible pour le moment.</p>
        <?php endif; ?>
    </div>
</div>
