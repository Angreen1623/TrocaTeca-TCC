@vite('resources/css/app.css')

<!--Modal de desistencia da proposta-->
<div class="fixed inset-0 flex items-center justify-center p-4 sm:p-8">
  <div class="w-full max-w-md rounded-3xl bg-bluett p-6 sm:p-8 shadow-2xl">
    <h1 class="text-2xl sm:text-4xl font-bold text-center text-white font-fredokatt drop-shadow-tt">Desistir da Negociação</h1> <!--Título de aviso-->

    <!--informação de consentimento-->
    <p class="mt-6 text-sm sm:text-base text-black text-center">
    Ao desistir dessa negociação, essa conversa será fechada e você 
    não poderá mais conversar com este anunciante, a menos que envie
     uma nova proposta para ele.
    </p>

    <!--checkbox de confirmação de consentimento-->
    <div class="mt-4 flex items-center  gap-2">
      <input type="checkbox" id="confirm" name="confirm" class="mr-2">
      <label for="confirm" class="text-sm sm:text-base text-black">Estou ciente disso</label>
    </div>

    <!--botões de confirmação-->
    <div class="mt-4 flex gap-16 justify-center">
      <button class="inline-flex items-center px-4 py-2 bg-pinktt shadow-tt hover:bg-pinktt-dark text-white text-sm font-medium rounded-2xl">
        Cancelar
      </button>
      <button class="inline-flex items-center px-4 py-2 bg-greentt shadow-tt hover:bg-greentt-dark text-white text-sm font-medium rounded-2xl">
        Confirmar
      </button>
    </div>
  </div>
</div>