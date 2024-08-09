import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Incluir o modal de inativar conta (utilizado na pag do myaccount)
document.addEventListener('DOMContentLoaded', function () {
    const openwarningButton = document.getElementById('openwarningButton');
    const modalWarning = document.getElementById('modalWarning');

    openwarningButton.addEventListener('click', function (e) {
        e.preventDefault();
        modalWarning.classList.remove('hidden');
    });

    document.getElementById('cancelInative').addEventListener('click', function () {
        modalWarning.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
    });
});

document.getElementById('openwarningButton').addEventListener('click', function () {
    document.body.classList.add('overflow-hidden');
    document.getElementById('modalWarning').classList.remove('hidden');
});


//esse script (modal de inativar conta) se diz respeito ao botão eu concordo estar precionado ou não
const checkbox = document.getElementById('confirm');
const inativarButton = document.getElementById('inativarButton');

checkbox.addEventListener('change', function () {
    if (checkbox.checked) {
        inativarButton.disabled = false;
        inativarButton.classList.remove('opacity-50', 'cursor-not-allowed');
        inativarButton.classList.add('hover:bg-redtt-dark', 'transition', 'ease-in-out', 'delay-100', 'hover:-translate-y-1', 'hover:scale-110', 'duration-300');
    } else {
        inativarButton.disabled = true;
        inativarButton.classList.remove('hover:bg-redtt-dark', 'transition', 'ease-in-out', 'delay-100', 'hover:-translate-y-1', 'hover:scale-110', 'duration-300');
        inativarButton.classList.add('opacity-50', 'cursor-not-allowed');
    }
});