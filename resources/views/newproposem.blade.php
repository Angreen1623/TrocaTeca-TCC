@vite('resources/css/app.css')

<!--Modal de nova proposta-->
<div class="fixed inset-0 flex items-center justify-center p-4 sm:p-8">
  <div class="w-full max-w-2xl rounded-3xl bg-bluett p-6 sm:p-8 shadow-2xl">
    <h1 class="text-2xl sm:text-4xl font-bold text-center text-white font-fredokatt drop-shadow-tt">Enviar proposta</h1> <!--Título de aviso-->

    <!--c-->
    <div class="items-center place-content-center">
      <div>
        <p class="block text-sm font-semibold leading-6 text-white mt-6">Foto do Artigo:</p>
        <label for="screenshot">
          <div class="bg-white h-48 w-48 mt-2 rounded-lg border border-graytt-light shadow-tt flex flex-col flex-wrap justify-center items-center">
            <img src="{{asset('image/mais.svg')}}" alt="" width="100">
            <p class="text-graytt text-xs text-center mt-2">(Captura de Tela Obrigatória)</p>
          </div>
        </label>
        <input type="file" name="capdenun" id="screenshot" class="hidden">
      </div>

      <!--Nome do artigo-->
      <label for="nome_art" class="block text-sm font-semibold leading-6 text-white mt-4">Nome do Artigo:</label>
      <div class="mt-2.5">
        <input type="text" name="nome_art" id="nome_art" autocomplete="organization" class=" shadow-tt block w-full rounded-md border-0 px-3.5 py-2 shadow-sm ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6">
      </div>

      <!--Categoria-->
      <label for="catepropo" class="block text-sm font-semibold leading-6 text-white mt-4">Categoria:</label>
      <div class="relative mt-2.5">
        <div class="inset-y-0 left-0 flex items-center">
          <select id="catepropo" name="catepropo" class="shadow-tt block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <option value="nenhum foi selecionado">Selecionar</option>
            <option value="Brinquedo">Brinquedo</option>
            <option value="Mobilidade">Mobilidade</option>
            <option value="Movel">Móvel</option>
            <option value="Roupa">Roupa</option>
            <option value="Outro">Outro</option>
          </select>
        </div>
      </div>

      <!--Condição-->
      <label for="condpropo" class="block text-sm font-semibold leading-6 text-white mt-4">Condição:</label>
      <div class="relative mt-2.5">
        <div class="inset-y-0 left-0 flex items-center">
          <select id="condpropo" name="condpropo" class="shadow-tt block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <option value="nenhum foi selecionado">Selecionar</option>
            <option value="Novo">Novo</option>
            <option value="Seminovo">Seminovo</option>
            <option value="Usado">Usado</option>
          </select>
        </div>
      </div>

      <!--Tempo de uso-->
      <label for="uso_art" class="block text-sm font-semibold leading-6 text-white mt-4">Tempo de Uso:</label>
      <div class="mt-2.5">
        <input type="text" name="uso_art" id="uso_art" autocomplete="organization" class="shadow-tt block w-full rounded-md border-0 px-3.5 py-2 shadow-sm ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6">
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