@vite('resources/css/app.css')

<!-- Modal de desistencia da proposta -->
<div id="modalContainer" class="fixed z-[60] w-screen h-screen left-0 top-0 hidden bg-shadowtt">
  <div class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-8">
    <div class="w-full max-w-2xl rounded-3xl bg-bluett p-6 sm:p-8 shadow-2xl">
      <h1 class="text-2xl sm:text-4xl font-bold text-center text-white font-fredokatt drop-shadow-tt">Desistir da Negociação</h1> <!--Título de aviso-->

      <!-- Informação de consentimento -->
      <p class="mt-6 text-sm sm:text-base text-black text-center">
        Ao desistir dessa negociação, essa conversa será fechada e você não poderá mais conversar com este anunciante, a menos que envie uma nova proposta para ele.
      </p>

      <!-- Checkbox de confirmação de consentimento -->
      <div class="mt-4 flex items-center gap-2">
        <input type="checkbox" id="confirm" class="peer" name="confirm" />
        <label for="confirm" class="text-sm sm:text-base text-black">Estou ciente disso</label>
      </div>

      <!-- Botões de confirmação -->
      <div class="mt-4 flex flex-col sm:flex-row gap-4 sm:gap-8 justify-center">
        <button class="inline-flex items-center px-4 py-2 justify-center w-full sm:w-auto bg-pinktt shadow-tt hover:bg-pinktt-dark text-white text-sm font-medium rounded-2xl transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300">
          Cancelar
        </button>
        <button id="confirmButton" disabled class="opacity-50 cursor-not-allowed inline-flex items-center px-4 py-2 justify-center w-full sm:w-auto bg-greentt shadow-tt text-white text-sm font-medium rounded-2xl transition ease-in-out delay-100 duration-300">
          Confirmar
        </button>
      </div>
    </div>
  </div>
</div>  

  <!--esse script se diz respeito a o botão eu concordo estar precionado ou não-->
  <script>
    const checkbox = document.getElementById('confirm');
    const confirmButton = document.getElementById('confirmButton');

    checkbox.addEventListener('change', function() {
      if (checkbox.checked) {
        confirmButton.disabled = false;
        confirmButton.classList.remove('opacity-50', 'cursor-not-allowed');
        confirmButton.classList.add('hover:bg-greentt-dark', 'transition', 'ease-in-out', 'delay-100', 'hover:-translate-y-1', 'hover:scale-110', 'duration-300');
      } else {
        confirmButton.disabled = true;
        confirmButton.classList.remove('hover:bg-greentt-dark', 'transition', 'ease-in-out', 'delay-100', 'hover:-translate-y-1', 'hover:scale-110', 'duration-300');
        confirmButton.classList.add('opacity-50', 'cursor-not-allowed');
      }
    });
  </script>