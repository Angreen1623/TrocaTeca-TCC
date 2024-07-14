@vite('resources/css/app.css')

<!--Modal de inativação de conta-->
<div class="bg-black opacity-35 w-screen h-screen z-[45] absolute left-0 top-0"> </div>
<div class="fixed z-50 inset-0 flex items-center justify-center p-4 sm:p-8">
  <div class="w-full max-w-sm sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl rounded-3xl bg-bluett p-4 sm:p-6 md:p-8 shadow-2xl">
    <h1 class="text-xl sm:text-2xl md:text-3xl font-bold text-center text-white font-fredokatt drop-shadow-tt">AVISO!</h1> <!--Título de aviso-->
    <!--informação de consentimento-->
    <p class="mt-2 text-sm sm:text-base text-black text-center">
      Ao confirmar a inativação da conta você perderá todo o seu acesso a ela.
      Todas as propostas realizadas, artigos publicados e outros registros estarão
      indisponíveis para visualização por qualquer outra pessoa.
    </p>
    <!--checkbox de confirmação de consentimento-->
    <div class="mt-4 flex items-center gap-2">
      <input type="checkbox" id="confirm" name="confirm" class="mr-2">
      <label for="confirm" class="text-sm sm:text-base text-black">Estou ciente disso</label>
    </div>
    <!--botões de confirmação-->
    <div class="mt-4 flex flex-col sm:flex-row gap-4 sm:gap-8 justify-center">
      <button class="inline-flex items-center justify-center w-full sm:w-auto px-4 py-2 bg-white shadow-tt hover:bg-graytt-dark text-black text-sm font-medium rounded-2xl">
        Cancelar
      </button>
      <button class="inline-flex items-center justify-center w-full sm:w-auto px-4 py-2 bg-redtt shadow-tt hover:bg-redtt-dark text-white text-sm font-medium rounded-2xl">
        Inativar
      </button>
    </div>
  </div>
</div>