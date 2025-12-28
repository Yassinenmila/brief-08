<div class="w-full mx-auto bg-white p-6 rounded shadow">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-xl font-bold">Dashboard Admin</h1>
            <a href="#" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">+ Ajouter</a>
        </div>
        <table class="w-full border">
            <thead class="bg-gray-200">
                <tr>
                    <th class="p-2 border">ID</th>
                    <th class="p-2 border">Titre</th>
                    <th class="p-2 border">Auteur</th>
                    <th class="p-2 border">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td class="p-2 border">1</td>
                    <td class="p-2 border">Livre A</td>
                    <td class="p-2 border">Auteur A</td>
                    <td class="p-2 border space-x-2">
                        <form method="POST">
                            <input type="hidden" name="id" >
                            <button type="button" name="update" class="bg-blue-500 text-white px-3 py-1 rounded text-sm hover:bg-blue-600">Modifier</button>
                            <button type="button" name="delete" class="bg-red-500 text-white px-3 py-1 rounded text-sm hover:bg-red-600">Supprimer</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>