@vite('resources/css/app.css')

<!--Modal de inativação de conta-->
<div class="fixed inset-0 flex items-center justify-center p-4 sm:p-8">
  <div class="w-full max-w-md rounded-3xl bg-bluett p-6 sm:p-8 shadow-2xl">
    <h1 class="text-2xl sm:text-4xl font-bold text-center text-white">AVISO!</h1> <!--Título de aviso-->

    <!--informação de consentimento-->
    <p class="mt-2 text-sm sm:text-base text-black text-center">
      Ao confirmar a inativação da conta você perderá todo o seu acesso a ela.
      Todas as propostas realizadas, artigos publicados e outros registros estarão
      indisponíveis para visualização por qualquer outra pessoa.
    </p>

    <!--checkbox de confirmação de consentimento-->
    <div class="mt-4 flex items-center  gap-2">
      <input type="checkbox" id="confirm" name="confirm" class="mr-2">
      <label for="confirm" class="text-sm sm:text-base text-black">Estou ciente disso</label>
    </div>

    <!--botões de confirmação-->
    <div class="mt-4 flex gap-16 justify-center">
      <button class="inline-flex items-center px-4 py-2 bg-white hover:bg-graytt-light text-black text-sm font-medium rounded-2xl">
        Cancelar
      </button>
      <button class="inline-flex items-center px-4 py-2 bg-redtt hover:bg-redtt-dark text-white text-sm font-medium rounded-2xl">
        Inativar
      </button>
    </div>
  </div>
</div>