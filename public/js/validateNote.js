document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('form[action="/notes/create"], form[action="/notes/edit"]');
    
    forms.forEach(form => {
        const allInputs = form.querySelectorAll('input, textarea');
        
        allInputs.forEach(input => {
            input.addEventListener('input', function() {
                this.style.borderColor = '';
            });
        });

        form.addEventListener('submit', function(event) {
            let isValid = true;
            let errorMessage = "Erreurs trouvées :\n\n";
            const notEmptyRegex = /^[\s\S]{1,}$/; 

            allInputs.forEach(input => {
                let val = input.value.trim();
                
                switch (input.name) {
                    case 'title':
                        if (!notEmptyRegex.test(val)) {
                            input.style.borderColor = 'red';
                            errorMessage += "- Le titre est obligatoire.\n";
                            isValid = false;
                        }
                        break;
                    case 'content':
                        if (!notEmptyRegex.test(val)) {
                            input.style.borderColor = 'red';
                            errorMessage += "- Le contenu est obligatoire.\n";
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
});
