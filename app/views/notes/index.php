<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - NoteKeeper</title>
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
<body class="bg-cream-100 font-sans antialiased h-screen flex flex-row overflow-hidden">
    
    <aside class="w-64 bg-cream-50 border-r border-cream-200 flex flex-col relative z-20 shadow-[4px_0_24px_rgba(42,34,25,0.02)]">
        <div class="h-20 flex items-center gap-3 px-6 border-b border-cream-200 shrink-0">
            <div class="w-8 h-8 rounded-lg bg-coffee-700 flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-cream-200"><path d="M13.4 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-7.4"/><path d="M2 6h4"/><path d="M2 10h4"/><path d="M2 14h4"/><path d="M2 18h4"/><path d="m21.378 5.626a1 1 0 1 0-3.004-3.004l-5.01 5.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z"/></svg>
            </div>
            <span class="font-display font-bold text-lg text-coffee-800">
                Note<span class="text-coffee-400">Keeper</span>
            </span>
        </div>

        <nav class="flex-1 overflow-y-auto py-4 px-3">
            <details class="group" open>
                <summary class="flex items-center gap-3 px-3 py-2.5 rounded-xl cursor-pointer text-coffee-800 hover:bg-cream-200 transition-colors list-none select-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20"/></svg>
                    <span class="font-medium flex-1">Mes Notes</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transition-transform group-open:rotate-180 text-coffee-400"><path d="m6 9 6 6 6-6"/></svg>
                </summary>
                
                <div class="mt-1 ml-4 pl-3 border-l-2 border-cream-200 space-y-1">
                    <button onclick="openModal()" class="w-full flex items-center gap-2 px-3 py-2 text-sm font-medium text-coffee-600 hover:text-coffee-900 hover:bg-cream-200 rounded-lg transition-colors text-left group/btn">
                        <div class="w-5 h-5 rounded flex items-center justify-center bg-cream-200 group-hover/btn:bg-coffee-700 group-hover/btn:text-cream-50 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="12" x2="12" y1="5" y2="19"/><line x1="5" x2="19" y1="12" y2="12"/></svg>
                        </div>
                        Ajouter une note
                    </button>

                    <div class="pt-2 space-y-1">
                        <?php if (empty($notes)): ?>
                            <p class="px-3 py-2 text-sm text-coffee-500">Aucune note pour le moment.</p>
                        <?php else: ?>
                            <?php foreach($notes as $index => $n): ?>
                                <?php 
                                $isActive = (isset($_GET['note_id']) && $_GET['note_id'] == $n['id']) || (!isset($_GET['note_id']) && $index === 0);
                                $activeClasses = "font-medium text-coffee-900 bg-cream-200 before:bg-coffee-700";
                                $inactiveClasses = "text-coffee-600 hover:text-coffee-900 hover:bg-cream-200 before:bg-cream-300 hover:before:bg-coffee-400";
                                ?>
                                <a href="/dashboard?note_id=<?= $n['id'] ?>" class="block px-3 py-2 text-sm <?= $isActive ? $activeClasses : $inactiveClasses ?> rounded-lg transition-colors relative before:absolute before:left-[-13px] before:top-1/2 before:-translate-y-1/2 before:w-1.5 before:h-1.5 before:rounded-full">
                                    <?= htmlspecialchars($n['titre']) ?>
                                </a>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </details>
        </nav>

        <div class="p-4 border-t border-cream-200 shrink-0">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-coffee-300 flex items-center justify-center text-cream-50 font-medium uppercase">
                    <?= $_SESSION['user']['firstname'][0] . $_SESSION['user']['lastname'][0] ?>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-coffee-900 truncate">
                        <?= $_SESSION['user']['firstname'] . ' ' . $_SESSION['user']['lastname'] ?>
                    </p>
                    <a href="/logout" class="text-xs text-coffee-500 hover:text-coffee-800 transition-colors">Déconnexion</a>
                </div>
            </div>
        </div>
    </aside>

    <main class="flex-1 relative overflow-y-auto bg-cream-100">
        <div class="hero-grain absolute inset-0 z-0 opacity-50"></div>
        
        <div class="relative z-10 p-10 max-w-4xl mx-auto mt-8">
            <?php 
            $activeNote = null;
            if(!empty($notes)) {
                $activeNote = $notes[0];
                if(isset($_GET['note_id'])) {
                    foreach($notes as $n) {
                        if($n['id'] == $_GET['note_id']) {
                            $activeNote = $n;
                            break;
                        }
                    }
                }
            }
            ?>
            
            <?php if($activeNote): ?>
            <div class="mb-8 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <h1 class="font-serif font-bold text-4xl text-coffee-900"><?= htmlspecialchars($activeNote['titre']) ?></h1>
                <div class="flex gap-2 shrink-0">
                    <button onclick="openEditModal()" class="p-2.5 text-coffee-600 bg-white border border-cream-200 hover:text-coffee-900 hover:border-coffee-300 shadow-sm rounded-xl transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/><path d="m15 5 4 4"/></svg>
                    </button>
                    <form action="/notes/delete" method="POST">
                        <input type="hidden" name="id" value="<?= $activeNote['id'] ?>">
                        <button onclick="return confirm('Voulez vous vraiment supprimer cette note ?')" class="p-2.5 text-red-500 bg-white border border-cream-200 hover:text-red-700 hover:border-red-200 hover:bg-red-50 shadow-sm rounded-xl transition-all">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/><line x1="10" x2="10" y1="11" y2="17"/><line x1="14" x2="14" y1="11" y2="17"/></svg>
                        </button>
                    </form>
                </div>
            </div>

            <div class="bg-cream-50 p-8 rounded-3xl shadow-sm border border-cream-200 min-h-[500px]">
                <div class="prose prose-coffee max-w-none text-coffee-800 leading-relaxed whitespace-pre-wrap"><?= htmlspecialchars($activeNote['contenu']) ?></div>
            </div>
            <?php else: ?>
            <div class="text-center py-20">
                <h2 class="text-2xl font-serif text-coffee-900">Bienvenue sur NoteKeeper</h2>
                <p class="text-coffee-500 mt-2">Créez votre première note pour commencer.</p>
            </div>
            <?php endif; ?>
        </div>
    </main>

    <?php require_once __DIR__ . '/create.php'; ?>

    <?php require_once __DIR__ . '/edit.php'; ?>

    <style>
        details > summary { list-style: none; }
        details > summary::-webkit-details-marker { display: none; }
    </style>

    <script>
        const activeNote = <?= $activeNote ? json_encode($activeNote) : 'null' ?>;

        const modal = document.getElementById('addNoteModal');
        const modalContent = document.getElementById('modalContent');

        function openModal() {
            modal.classList.remove('opacity-0', 'pointer-events-none');
            modalContent.classList.remove('scale-95');
            modalContent.classList.add('scale-100');
        }

        function closeModal() {
            modal.classList.add('opacity-0', 'pointer-events-none');
            modalContent.classList.remove('scale-100');
            modalContent.classList.add('scale-95');
        }

        const editModal = document.getElementById('editNoteModal');
        const editModalContent = document.getElementById('editModalContent');

        function openEditModal() {
            if(activeNote) {
                document.getElementById('edit_id').value = activeNote.id;
                document.getElementById('edit_titre').value = activeNote.titre;
                document.getElementById('edit_contenu').value = activeNote.contenu;
            }
            editModal.classList.remove('opacity-0', 'pointer-events-none');
            editModalContent.classList.remove('scale-95');
            editModalContent.classList.add('scale-100');
        }

        function closeEditModal() {
            editModal.classList.add('opacity-0', 'pointer-events-none');
            editModalContent.classList.remove('scale-100');
            editModalContent.classList.add('scale-95');
        }
    </script>
    <script src="/js/validateNote.js"></script>
</body>
</html>
