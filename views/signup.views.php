<div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-center mb-6">Inscription</h2>

        <form method="POST" class="space-y-4">
            <div>
                <label class="block text-sm font-medium">Nom :</label>
                <input type="text" name="l_name"required class="w-full mt-1 p-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Votre nom">
            </div>
            <div>
                <label class="block text-sm font-medium">prenom :</label>
                <input type="text" name="f_name"required class="w-full mt-1 p-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Votre prenom">
            </div>
            <div>
                <label class="block text-sm font-medium">nationalite :</label>
                <input type="text" name="nation"required class="w-full mt-1 p-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Votre nationalite">
            </div>
            <div>
                <label class="block text-sm font-medium">Email :</label>
                <input  type="email" name="email" required class="w-full mt-1 p-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="email@example.com">
            </div>

            <div>
                <label class="block text-sm font-medium">Mot de passe :</label>
                <input type="password" name="pass" required class="w-full mt-1 p-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Mots de pass">
            </div>

            <div>
                <label class="block text-sm font-medium">Confirmer le mot de passe :</label>
                 <input type="password" name="conf_pass" required class="w-full mt-1 p-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="confirmer">
            </div>

            <button type="submit" name="sub_sign" class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700 transition">S’inscrire</button>
        </form>
        <p class="text-sm text-center mt-4"> Déjà un compte ?<a href="login.html" class="text-blue-600 hover:underline">Se connecter</a></p>
</div>