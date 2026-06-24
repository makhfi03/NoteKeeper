<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - NoteKeeper</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                        display: ['Outfit', 'system-ui', 'sans-serif'],
                        serif: ['Playfair Display', 'Georgia', 'serif'],
                    },
                    colors: {
                        cream: {
                            50:  '#FEFDFB',
                            100: '#FDF8F0',
                            200: '#F9EDDB',
                            300: '#F3DEC1',
                            400: '#E8C99B',
                            500: '#D4A96A',
                        },
                        coffee: {
                            300: '#A68B6B',
                            400: '#8B7355',
                            500: '#6F5B3E',
                            600: '#5A4A32',
                            700: '#453828',
                            800: '#362D20',
                            900: '#2A2219',
                            950: '#1E1810',
                        },
                    }
                }
            }
        }
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Outfit:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-cream-100 font-sans antialiased min-h-screen flex items-center justify-center relative overflow-hidden">
    <div class="hero-grain absolute inset-0"></div>
    <div class="absolute top-[-20%] right-[-10%] w-[500px] h-[500px] bg-cream-300/40 rounded-full blur-[120px]"></div>
    <div class="absolute bottom-[-15%] left-[-10%] w-[400px] h-[400px] bg-cream-400/20 rounded-full blur-[100px]"></div>

    <a href="/home" class="absolute top-8 left-8 flex items-center gap-2 text-coffee-600 hover:text-coffee-900 transition-colors z-20 font-medium">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
        Retour
    </a>

    <div class="relative z-10 w-full max-w-md px-6">
        <div class="flex flex-col items-center justify-center mb-8 hero-fade hero-fade-1">
            <div class="w-12 h-12 rounded-2xl bg-coffee-700 flex items-center justify-center shadow-lg shadow-coffee-700/20 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-cream-200"><path d="M13.4 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-7.4"/><path d="M2 6h4"/><path d="M2 10h4"/><path d="M2 14h4"/><path d="M2 18h4"/><path d="m21.378 5.626a1 1 0 1 0-3.004-3.004l-5.01 5.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z"/></svg>
            </div>
            <h1 class="font-serif font-bold text-3xl text-coffee-900">Bon retour</h1>
            <p class="text-coffee-500 text-sm mt-2">Connectez-vous pour accéder à vos notes.</p>
        </div>

        <div class="bg-cream-50 p-8 rounded-3xl shadow-xl shadow-coffee-900/5 border border-cream-200 hero-fade hero-fade-2">
            <form action="/login" method="POST" class="space-y-6">
                <div>
                    <label for="email" class="block text-sm font-medium text-coffee-800 mb-2">Adresse email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-xl bg-white border border-cream-300 focus:border-coffee-400 focus:ring-2 focus:ring-coffee-400/20 outline-none transition-all text-coffee-900 placeholder-coffee-300" placeholder="vous@exemple.com" required>
                </div>
                
                <div>
                    <div class="flex items-center justify-between mb-2">
                        <label for="password" class="block text-sm font-medium text-coffee-800">Mot de passe</label>
                        <a href="#" class="text-xs text-coffee-500 hover:text-coffee-800 transition-colors">Mot de passe oublié ?</a>
                    </div>
                    <input type="password" id="password" name="password" class="w-full px-4 py-3 rounded-xl bg-white border border-cream-300 focus:border-coffee-400 focus:ring-2 focus:ring-coffee-400/20 outline-none transition-all text-coffee-900 placeholder-coffee-300" placeholder="••••••••" required>
                </div>

                <button type="submit" class="btn-primary w-full py-3.5 text-sm font-semibold tracking-wide uppercase text-cream-50 bg-coffee-700 rounded-xl shadow-lg shadow-coffee-700/20 transition-all duration-300 mt-4">
                    Se connecter
                </button>
            </form>

            <p class="text-center text-sm text-coffee-500 mt-6">
                    Pas encore de compte ? <a href="/register" class="font-medium text-coffee-700 hover:text-coffee-900 underline underline-offset-4 transition-colors">S'inscrire</a>
            </p>
        </div>
    </div>
    <script src="/js/validateLogin.js"></script>
</body>
</html>
