<div class="w-full mx-auto bg-white p-6 rounded-lg shadow">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">Dashboard Admin</h1>
        <a href="add.php" class="bg-green-500 text-white px-4 py-2 rounded text-sm hover:bg-green-600">+ Ajouter</a>
    </div>
    <table class="w-full border border-gray-200 text-sm">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-3 border">ID</th>
                <th class="p-3 border text-left">Titre</th>
                <th class="p-3 border text-left">Auteur</th>
                <th class="p-3 border">Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($books as $b): ?>
            <tr class="hover:bg-gray-50 text-center">
                <td class="p-3 border"><?= $b['id'] ?></td>
                <td class="p-3 border text-left"><?= htmlspecialchars($b['titre']) ?></td>
                <td class="p-3 border text-left"><?= htmlspecialchars($b['author_name']) ?></td>
                <td class="p-3 border">
                    <div class="flex justify-center gap-2">
                        <a href="edit.php?id=<?= $b['id'] ?>" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Modifier</a>
                        <form method="POST" onsubmit="return confirm('Confirmer la suppression ?')">
                            <input type="hidden" name="id" value="<?= $b['id'] ?>">
                            <button type="submit" name="delete" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Supprimer</button>
                        </form>

                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>
