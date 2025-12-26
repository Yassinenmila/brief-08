<div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-center mb-6">Se connecter</h2>

        <form method="POST" class="space-y-4">
            <div>
                <label class="block text-sm font-medium">Email :</label>
                <input  type="email" name="email" required class="w-full mt-1 p-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="email@example.com">
            </div>
            <div>
                <label class="block text-sm font-medium">Mot de passe :</label>
                <input type="password" name="pass" required class="w-full mt-1 p-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Mots de pass">
            </div>
            <button type="sub_log" name="sub_log" class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700 transition">Se connecter</button>
        </form>
        <p class="text-sm text-center mt-4"> tu n'a pas un compte ? <a href="/signup" class="text-blue-600 hover:underline">S'inscrire</a></p>
</div>