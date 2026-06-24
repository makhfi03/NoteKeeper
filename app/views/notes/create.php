    <div id="addNoteModal" class="fixed inset-0 z-50 flex items-center justify-center opacity-0 pointer-events-none transition-opacity duration-300">
        <div class="absolute inset-0 bg-coffee-950/40 backdrop-blur-sm" onclick="closeModal()"></div>
        
        <div class="bg-cream-50 w-full max-w-xl rounded-[2rem] shadow-2xl relative z-10 transform scale-95 transition-transform duration-300 border border-cream-200 flex flex-col max-h-[90vh]" id="modalContent">
            <div class="px-8 py-6 border-b border-cream-200 flex items-center justify-between shrink-0">
                <h2 class="font-serif font-bold text-2xl text-coffee-900">Nouvelle note</h2>
                <button onclick="closeModal()" class="text-coffee-400 hover:text-coffee-800 transition-colors p-2 rounded-full hover:bg-cream-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" x2="6" y1="6" y2="18"/><line x1="6" x2="18" y1="6" y2="18"/></svg>
                </button>
            </div>

            <div class="p-8 overflow-y-auto">
                <form action="/notes/create" method="POST" class="space-y-6">
                    <div>
                        <label for="titre" class="block text-sm font-medium text-coffee-800 mb-2">Titre de la note</label>
                        <input type="text" id="titre" name="title" class="w-full px-5 py-3.5 rounded-xl bg-white border border-cream-300 focus:border-coffee-400 focus:ring-2 focus:ring-coffee-400/20 outline-none transition-all text-coffee-900 placeholder-coffee-300 shadow-sm" placeholder="Ex: Réunion d'équipe" required>
                    </div>

                    <div>
                        <label for="contenu" class="block text-sm font-medium text-coffee-800 mb-2">Contenu</label>
                        <textarea id="contenu" name="content" rows="8" class="w-full px-5 py-3.5 rounded-xl bg-white border border-cream-300 focus:border-coffee-400 focus:ring-2 focus:ring-coffee-400/20 outline-none transition-all text-coffee-900 placeholder-coffee-300 resize-none shadow-sm" placeholder="Commencez à écrire ici..." required></textarea>
                    </div>

                    <div class="flex flex-col sm:flex-row justify-end gap-3 pt-4">
                        <button type="button" onclick="closeModal()" class="px-8 py-3.5 text-sm font-semibold tracking-wide uppercase text-coffee-700 bg-transparent border-2 border-coffee-300 rounded-full hover:bg-cream-200 transition-colors">
                            Annuler
                        </button>
                        <button type="submit" class="btn-primary px-8 py-3.5 text-sm font-semibold tracking-wide uppercase text-cream-50 bg-coffee-700 rounded-full shadow-lg shadow-coffee-700/20 transition-all duration-300">
                            Enregistrer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
