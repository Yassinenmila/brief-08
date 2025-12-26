<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>bibliotheque</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body class="min-h-screen flex flex-col">
        <header>
            <nav class="bg-gray-800 p-4">
                <div class="flex justify-evenly items-center">
                    <h1 class="text-white text-xl font-bold ">E-book</h1>
                    <div class="space-x-6">
                        <a href="/home" class="text-white hover:text-yellow-400">Accueil</a>
                        <a href="/about" class="text-white hover:text-yellow-400">À propos</a>
                        <a href="/contact" class="text-white hover:text-yellow-400">Contact</a>
                    </div>
                    <?php if(isset($_SESSION['user']['id'])): ?>
                    <div>
                        <?php if($_SESSION['user']['role']=== "admin"): ?>
                            <a href="/admin" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition cursor-pointer">Web Setting</a>
                        <?php endif; ?>
                        <a href="/profil" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition cursor-pointer">profil</a>
                        <a href="/logout" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition cursor-pointer">Déconnection</a>
                    </div>
                    <?php else: ?>
                    <div>
                        
                        <a href="/login" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition cursor-pointer">Se connecter</a>
                        <a href="/signup" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition cursor-pointer">S'identifier</a>
                    </div>
                    <?php endif;?>
                </div>
            </nav>
        </header>
        <main class=" flex flex-col justify-center items-center">
    
   

  