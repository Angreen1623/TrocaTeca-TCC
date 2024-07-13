@vite('resources/css/app.css')

<!--Modal de denunciar anúncio-->
<div class="fixed inset-0 flex items-center justify-center p-4 sm:p-8">
  <div class="w-full max-w-2xl rounded-3xl bg-bluett p-6 sm:p-8 shadow-2xl">
    <h1 class="text-2xl sm:text-4xl font-bold text-center text-white font-fredokatt drop-shadow-tt">Denunciar Conversa</h1> <!--Título de aviso-->

    <!--caiax de texto do motivo da denúncio-->
        <div class="flex items-center place-content-center">
     <div class="">      
        <label for="motivochat" class="block text-sm font-semibold leading-6 text-white mt-6 ">Motivo da Denúncia:</label>
        <div class="mt-2.5">
          <textarea name="motivochat" id="motivochat" rows="6" class="resize-none block w-full rounded-lg border-0 px-3.5 py-2 
          shadow-sm ring-1 ring-inset ring-graytt-light placeholder:text-graytt focus:ring-1 focus:ring-inset sm:text-sm 
          sm:leading-6 shadow-tt"placeholder="Descreva o motivo da denúncia..."></textarea>
        </div>
    </div> 
    <div>
            <label for="screenshot"><div class="bg-white"><img src="" alt=""><p>andré oliveira pain</p></div></label>
            <input type="file" name="capdenun" id="screenshot" class="hidden">
   </div>        
      </div>

    <!--botões de confirmação-->
    <div class="mt-4 flex gap-16 justify-center">
      <button class="inline-flex items-center px-4 py-2 shadow-tt bg-pinktt hover:bg-pinktt-dark text-white text-sm font-medium rounded-2xl mr-5">
        Cancelar
      </button>
      <button class="inline-flex items-center px-4 py-2 shadow-tt bg-greentt hover:bg-greentt-dark text-white text-sm font-medium rounded-2xl">
        Confirmar
      </button>
    </div>
  </div>
</div>