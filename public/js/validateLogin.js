document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    if (!form) return;

    const allInputs = document.querySelectorAll('input');
    allInputs.forEach(input => {
        input.addEventListener('input', function() {
            this.style.borderColor = '';
        });
    });

    form.addEventListener('submit', function(event) {
        let isValid = true;
        let errorMessage = "Veuillez corriger les erreurs suivantes :\n\n";

        const nameRegex = /^[a-zA-ZÀ-ÿ\s]{2,}$/;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const passRegex = /^.{8,}$/;

        allInputs.forEach(input => {
            let val = input.value.trim();
            
            switch (input.name) {
                case 'firstname':
                case 'lastname':
                    if (!nameRegex.test(val)) {
                        input.style.borderColor = 'red';
                        errorMessage += "- Le " + (input.name === 'firstname' ? 'prénom' : 'nom') + " est invalide (minimum 2 lettres).\n";
                        isValid = false;
                    }
                    break;
                case 'email':
                    if (!emailRegex.test(val)) {
                        input.style.borderColor = 'red';
                        errorMessage += "- L'adresse email n'est pas valide.\n";
                        isValid = false;
                    }
                    break;
                case 'password':
                    if (!passRegex.test(val)) {
                        input.style.borderColor = 'red';
                        errorMessage += "- Le mot de passe doit contenir au moins 8 caractères.\n";
                        isValid = false;
                    }
                    break;
            }
        });

        if (!isValid) {
            event.preventDefault();
            alert(errorMessage);
        }
    });
});
