@vite('resources/css/app.css')

<!--Modal de denunciar chat de comunicação-->
<div class="fixed inset-0 flex items-center justify-center p-4 sm:p-8">
  <div class="w-full max-w-2xl rounded-3xl bg-bluett p-6 sm:p-8 shadow-2xl">
    <h1 class="text-2xl sm:text-4xl font-bold text-center text-white font-fredokatt drop-shadow-tt">Denunciar Conversa</h1> <!--Título de aviso-->

    <!--caixa de texto do motivo da denúncio-->
      <div class="flex flex-col sm:flex-row sm:items-center sm:place-content-center">
        <div class="sm:mr-7">      
          <label for="motivochat" class="block text-sm font-semibold leading-6 text-white mt-6 ">Motivo da Denúncia:</label>
          <div class="mt-2.5">
            <textarea name="motivochat" id="motivochat" rows="6" class="resize-none w-full sm:h-48 sm:w-80  block rounded-lg border border-graytt-light px-3.5 py-2 
            shadow-sm ring-1 ring-inset ring-graytt-light border border-graytt-light placeholder:text-graytt focus:ring-1 focus:ring-inset sm:text-sm 
            sm:leading-6 shadow-tt"placeholder="Descreva o motivo da denúncia..."></textarea>
          </div>
        </div>
        <!--botão de colocar a captura de tela--> 
        <div>
          <p class="block text-sm font-semibold leading-6 text-white mt-6">Captura de Tela:</p>
          <label for="screenshot">
            <div class="bg-white w-full sm:h-48 sm:w-48 mt-2 rounded-lg border border-graytt-light shadow-tt flex flex-col flex-wrap justify-center items-center">
            <div class="mt-2 mb-2 flex flex-col justify-center items-center transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-[1.05] duration-300">
               <img src="{{asset('image/mais.svg')}}" alt="" width="100">
               <p class="text-graytt text-xs text-center mt-2">Captura de Tela (Obrigatória)</p>
            </div>
            </div>
          </label>
          <input type="file" name="capdenun" id="screenshot" class="hidden" accept="image/*">
        </div>        
      </div>

    <!--botões de confirmação-->
    <div class="mt-4 flex flex-col sm:flex-row gap-4 sm:gap-8 justify-center">
      <button class="inline-flex items-center px-4 py-2 shadow-tt justify-center w-full sm:w-auto bg-pinktt hover:bg-pinktt-dark text-white text-sm font-medium rounded-2xl mr-5 transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-110 duration-300">
        Cancelar
      </button>
      <button class="inline-flex items-center px-4 py-2 shadow-tt justify-center w-full sm:w-auto bg-greentt hover:bg-greentt-dark text-white text-sm font-medium rounded-2xl transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-110 duration-300">
        Confirmar
      </button>
    </div>
  </div>
</div>