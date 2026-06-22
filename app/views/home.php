<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="NoteKeeper — Organisez vos idées, structurez vos pensées. Une application de notes élégante et intuitive.">
    <title>NoteKeeper — Organisez vos idées</title>

    <!-- Tailwind CSS CDN -->
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

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Outfit:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-cream-100 font-sans antialiased min-h-screen flex flex-col">

    <!-- ==================== HERO SECTION ==================== -->
    <section id="hero" class="min-h-[calc(100vh-140px)] flex flex-col items-center justify-center relative overflow-hidden px-6 py-20">

        <!-- Subtle background texture -->
        <div class="hero-grain absolute inset-0"></div>
        <div class="absolute top-[-20%] right-[-10%] w-[500px] h-[500px] bg-cream-300/40 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-[-15%] left-[-10%] w-[400px] h-[400px] bg-cream-400/20 rounded-full blur-[100px]"></div>

        <!-- Logo (top-left) -->
        <div class="hero-fade hero-fade-1 absolute top-8 left-8 flex items-center gap-3 z-20">
            <div class="w-12 h-12 rounded-2xl bg-coffee-700 flex items-center justify-center shadow-lg shadow-coffee-700/20">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-cream-200"><path d="M13.4 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-7.4"/><path d="M2 6h4"/><path d="M2 10h4"/><path d="M2 14h4"/><path d="M2 18h4"/><path d="m21.378 5.626a1 1 0 1 0-3.004-3.004l-5.01 5.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z"/></svg>
            </div>
            <span class="font-display font-bold text-2xl tracking-tight text-coffee-800">
                Note<span class="text-coffee-400">Keeper</span>
            </span>
        </div>

        <!-- Content -->
        <div class="relative z-10 max-w-3xl mx-auto text-center">

            <!-- Main Heading -->
            <h1 class="hero-fade hero-fade-2 font-serif font-bold text-5xl sm:text-6xl md:text-7xl lg:text-[5.5rem] leading-[1.05] tracking-tight text-coffee-900 mb-14">
                Vos idées,
                <br>
                <span class="italic text-coffee-500">organisées.</span>
            </h1>

            <!-- CTA Buttons -->
            <div class="hero-fade hero-fade-3 flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="index.php?page=register" id="btn-register" class="btn-primary w-full sm:w-auto px-10 py-4 text-sm font-semibold tracking-wide uppercase text-cream-50 bg-coffee-700 rounded-full shadow-xl shadow-coffee-700/20 transition-all duration-500 flex items-center justify-center gap-2.5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" x2="19" y1="8" y2="14"/><line x1="22" x2="16" y1="11" y2="11"/></svg>
                    S'inscrire
                </a>

                <a href="index.php?page=login" id="btn-login" class="btn-secondary w-full sm:w-auto px-10 py-4 text-sm font-semibold tracking-wide uppercase text-coffee-600 border-2 border-coffee-300 rounded-full transition-all duration-500 flex items-center justify-center gap-2.5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"/><polyline points="10 17 15 12 10 7"/><line x1="15" x2="3" y1="12" y2="12"/></svg>
                    Se connecter
                </a>
            </div>
        </div>

        <!-- Decorative line -->
        <div class="absolute bottom-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-coffee-300/50 to-transparent"></div>
    </section>

    <!-- ==================== FOOTER ==================== -->
    <footer class="bg-coffee-900 py-12 px-6">
        <div class="max-w-7xl mx-auto">
            <!-- Footer Logo -->
            <div class="flex items-center gap-3 mb-3">
                <div class="w-9 h-9 rounded-xl bg-coffee-700 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-cream-300"><path d="M13.4 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-7.4"/><path d="M2 6h4"/><path d="M2 10h4"/><path d="M2 14h4"/><path d="M2 18h4"/><path d="m21.378 5.626a1 1 0 1 0-3.004-3.004l-5.01 5.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z"/></svg>
                </div>
                <span class="font-display font-bold text-xl text-cream-200">
                    Note<span class="text-cream-500">Keeper</span>
                </span>
            </div>

            <!-- Tagline -->
            <p class="text-sm text-coffee-400 mb-6 font-light">
                Capturez vos pensées, simplement.
            </p>

            <!-- Copyright -->
            <p class="text-xs text-coffee-500 tracking-wide text-center">
                &copy; <?= date('Y') ?> NoteKeeper. Tous droits réservés.
            </p>
        </div>
    </footer>

</body>
</html>
