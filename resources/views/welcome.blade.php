<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>GameCommunity World</title>
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        

        <!-- Styles -->
                    <style>
                /* Réinitialisation des styles CSS et définition de box-sizing */
                *,
                ::after,
                ::before {
                    box-sizing: border-box;
                    border-width: 0;
                    border-style: solid;
                    border-color: #e5e7eb;
                }

                /* Définition des styles par défaut pour les éléments HTML */
                ::after,
                ::before {
                    --tw-content: '';
                }
                html {
                    line-height: 1.5;
                    -webkit-text-size-adjust: 100%;
                    -moz-tab-size: 4;
                    tab-size: 4;
                    font-family: Figtree, sans-serif;
                    font-feature-settings: normal;
                }
                body {
                    margin: 0;
                    line-height: inherit;
                }
                hr {
                    height: 0;
                    color: inherit;
                    border-top-width: 1px;
                }
                abbr:where([title]) {
                    -webkit-text-decoration: underline dotted;
                    text-decoration: underline dotted;
                }

                /* Définition des styles pour les en-têtes (h1, h2, h3, h4, h5, h6) et les liens (a) */
                h1, h2, h3, h4, h5, h6 {
                    font-size: 28px;
                    font-weight: inherit;
                }
                a {
                    color: inherit;
                    text-decoration: inherit;
                    font-size: 18px
                }
                p{
                    font-size: 16px

                }

                /* Définition des styles pour la mise en forme du texte */
                b, strong {
                    font-weight: bolder;
                }
                code, kbd, pre, samp {
                    font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
                    font-size: 1em;
                }
                small {
                    font-size: 80%;
                }

                /* Définition des styles pour les éléments sub et sup */
                sub, sup {
                    font-size: 75%;
                    line-height: 0;
                    position: relative;
                    vertical-align: baseline;
                }
                sub {
                    bottom: -0.25em;
                }
                sup {
                    top: -0.5em;
                }

                /* Définition des styles pour les tableaux */
                table {
                    text-indent: 0;
                    border-color: inherit;
                    border-collapse: collapse;
                }

                /* Réinitialisation des styles pour les éléments de formulaire (button, input, optgroup, select, textarea) */
                button, input, optgroup, select, textarea {
                    font-family: inherit;
                    font-size: 100%;
                    font-weight: inherit;
                    line-height: inherit;
                    color: inherit;
                    margin: 0;
                    padding: 0;
                }
                button, select {
                    text-transform: none;
                }

                /* Définition des styles pour les boutons (type=button) */
                [type=button], [type=reset], [type=submit], button {
                    -webkit-appearance: button;
                    --tw-backdrop-saturate: ;
                    --tw-backdrop-sepia: ;
                }

                /* Définition des styles pour la mise en page et le positionnement */
                .relative {
                    position: relative;
                }
                .mx-auto {
                    margin-left: auto;
                    margin-right: auto;
                }
                .mx-6 {
                    margin-left: 1.5rem;
                    margin-right: 1.5rem;
                }
                .ml-4 {
                    margin-left: 1rem;
                }
                .mt-16 {
                    margin-top: 4rem;
                }
                .mt-6 {
                    margin-top: 1.5rem;
                }
                .mt-4 {
                    margin-top: 1rem;
                }
                .-mt-px {
                    margin-top: -1px;
                }
                .mr-1 {
                    margin-right: 0.25rem;
                }
                .flex {
                    display: flex;
                }
                .inline-flex {
                    display: inline-flex;
                }
                .grid {
                    display: grid;
                }

                /* Définition des styles pour les dimensions des éléments */
                .h-16 {
                    height: 4rem;
                }
                .h-7 {
                    height: 1.75rem;
                }
                .h-6 {
                    height: 1.5rem;
                }
                .h-5 {
                    height: 1.25rem;
                }
                .min-h-screen {
                    min-height: 100vh;
                }
                .w-auto {
                    width: auto;
                }
                .w-16 {
                    width: 4rem;
                }
                .w-7 {
                    width: 1.75rem;
                }
                .w-6 {
                    width: 1.5rem;
                }
                .w-5 {
                    width: 1.25rem;
                }
                .max-w-7xl {
                    max-width: 80rem;
                }
                .shrink-0 {
                    flex-shrink: 0;
                }
                .scale-100 {
                    --tw-scale-x: 1;
                    --tw-scale-y: 1;
                    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
                }

                /* Définition des styles pour les colonnes de grille */
                .grid-cols-1 {
                    grid-template-columns: repeat(1, minmax(0, 1fr));
                }

                /* Définition des styles pour l'alignement */
                .items-center {
                    align-items: center;
                }
                .justify-center {
                    justify-content: center;
                }

                /* Définition des styles pour l'espacement */
                .gap-6 {
                    gap: 1.5rem;
                }
                .gap-4 {
                    gap: 1rem;
                }
                .self-center {
                    align-self: center;
                }

                /* Définition des styles pour le rayon de bordure */
                .rounded-lg {
                    border-radius: 0.5rem;
                }
                .rounded-full {
                    border-radius: 9999px;
                }

                /* Définition des styles pour la couleur de fond */
                .bg-gray-100 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(243 244 246 / var(--tw-bg-opacity));
                }

                /* Définition des styles pour les dégradés de fond */
                {--tw-gradient-to: rgb(0 0 0 / 0); --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)}
                .bg-center {
                    background-position: center;
                }

                /* Définition des styles pour la couleur de trait */
                .stroke-red-500 {
                    stroke: #ef4444;
                }
                .stroke-gray-400 {
                    stroke: #9ca3af;
                }

                /* Définition des styles pour la marge intérieure */
                .p-6 {
                    padding: 1.5rem;
                }
                .px-6 {
                    padding-left: 1.5rem;
                    padding-right: 1.5rem;
                }

                /* Définition des styles pour l'alignement du texte */
                .text-center {
                    text-align: center;
                }
                .text-right {
                    text-align: right;
                }

                /* Définition des styles pour la taille du texte */
                .text-xl {
                    font-size: 1.25rem;
                    line-height: 1.75rem;
                }
                .text-sm {
                    font-size: 0.875rem;
                    line-height: 1.25rem;
                }

                /* Définition des styles pour l'épaisseur de police */
                .font-semibold {
                    font-weight: 600;
                }

                /* Définition des styles pour la hauteur de ligne */
                .leading-relaxed {
                    line-height: 1.625;
                }

                /* Définition des styles pour la couleur du texte */
                .text-gray-600 {
                    --tw-text-opacity: 1;
                    0;
                    box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
                }

                /* Styles pour le mode sombre */
                .dark\:ring-1 {
                    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
                }
                .dark\:ring-inset {
                    --tw-ring-inset: inset;
                }
                .dark\:ring-white\/5 {
                    --tw-ring-color: rgb(255 255 255 / 0.05);
                }
                .dark\:hover\:text-white:hover {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity));
                }
                .group:hover .dark\:group-hover\:stroke-gray-400 {
                    stroke: #9ca3af;
                }

                /* Styles spécifiques à la page d'accueil */
        body {
            background-image: url('background.jpg'); /* Remplacez 'background.jpg' par le chemin de votre image de fond */
            background-position: center;
            background-size: cover;
        }

        .header {
            background-color: #1a1a1a;
            padding: 20px;
            text-align: center;
        }

        .header h1 {
            font-family: 'figtree', sans-serif;
            font-size: 42px;
            font-weight: 600;
            color: #ffffff;
        }

        .header p {
            font-size: 24px;
            color: #ffffff;
        }

        .join-button {
            margin-top: 20px;
        }

        .join-button a {
            background-color: #ff4d4d; /* Couleur de fond du bouton */
            color: #ffffff; /* Couleur du texte du bouton */
            font-size: 18px;
            font-weight: 600;
            padding: 12px 24px;
            border-radius: 50px; /* Bordure arrondie */
            text-decoration: none;
            transition: background-color 0.3s; /* Transition de couleur de fond */
        }

        .join-button a:hover {
            background-color: #ff3333; /* Couleur de fond du bouton au survol */
        }
        @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');

        .geek-font {
            font-family: 'Press Start 2P', cursive;
        }
            </style>

    </head>
    <body class="bg-gray-100 dark:bg-gray-900">

<!-- En-tête avec navigation -->
<header class="bg-gray-800 text-white p-4">
    <div class="container mx-auto flex justify-between items-center flex-wrap">
    <a href="{{ url('') }}" class="text-xl sm:text-2xl md:text-xl font-bold bg-blue-600 border-black text-white hover:text-black bg-contain bg-opacity-30 geek-font">GameCommunity World</a>
        <nav class="w-full md:w-auto">
            <div class="md:hidden">
                <button class="mobile-menu-button">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                </button>
            </div>
            <div class="hidden mobile-menu">
                <a href="{{ url('/forum') }}" class="block hover:underline">Forum</a>
                <a href="{{ url('/news') }}" class="block hover:underline">Nouveautés</a>
                <a href="{{ url('/community') }}" class="block hover:underline">Communauté</a>
                <!-- ... Autres liens ... -->
            </div>
            <div class="hidden md:flex space-x-4">
                <a href="{{ url('/forum') }}" class="hover:underline">Forum</a>
                <a href="{{ url('/news') }}" class="hover:underline">Nouveautés</a>
                <a href="{{ url('/community') }}" class="hover:underline">Communauté</a>
                <!-- ... Autres liens ... -->
            </div>
        </nav>
        <!-- Authentification et inscription -->
        @if (Route::has('login'))
          <div class="space-x-2">
            @auth
              <a href="{{ url('/dashboard') }}" class="hover:underline">Tableau de bord</a>
            @else
              <a href="{{ route('login') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Se connecter</a>
              @if (Route::has('register'))
                <a href="{{ route('register') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">S'inscrire</a>
              @endif
            @endauth
          </div>
        @endif
      </nav>
    </div>
  </header>

      <!-- Contenu principal -->
      <div class="flex justify-center items-center h-screen p-4">
        <div class="text-center">
            <h1 class="text 4xl sm:text-5xl md:text-6xl text-gray-800 dark:text-white mb-4">Bienvenue sur GameCommunity World</h1>
            <p class="text-md sm:text-lg md:text-xl text-gray-600 dark:text-gray-300 mb-8">Le forum où les joueurs se réunissent pour discuter de leurs jeux préférés.</p>
            <a href="{{ route('register') }}" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 sm:py-3 sm:px-6 rounded-full shadow-lg transition duration-300">Rejoignez la communauté</a>
        </div>
    </div>

   <!-- Pied de page -->
   <footer class="bg-gray-800 text-white text-center p-4">
        <p>&copy; {{ date('Y') }} GameCommunity World. Tous droits réservés.</p>
    </footer>

    <script>
        // Toggle mobile menu
        document.addEventListener('DOMContentLoaded', () => {
            const menuButton = document.querySelector('.mobile-menu-button');
            const mobileMenu = document.querySelector('.mobile-menu');

            menuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        });
    </script>
</body>
</html>
