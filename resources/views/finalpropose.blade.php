@vite('resources/css/app.css')

<!--Modal de nova proposta-->
<div id="modalContainer" class="fixed z-[60] w-screen h-screen left-0 top-0 hidden bg-shadowtt">
  <div class="fixed inset-0 flex items-center justify-center p-4 sm:p-8">
    <div class="w-full max-w-4xl rounded-3xl bg-bluett p-6 sm:p-8 shadow-2xl">
      <h1 class="text-2xl sm:text-4xl font-bold text-center text-white font-fredokatt drop-shadow-tt">Proposta Final</h1> <!--Título de aviso-->

      <!--Foto do Artigo-->
      <div class="flex flex-col sm:flex-row sm:items-center sm:place-content-center">
        <div>
          <p class="block text-sm font-semibold leading-6 text-white mt-6">Foto do Artigo:</p>
          <label for="screenshot">
            <div class="bg-white w-full sm:h-72 sm:w-72 t-2 mr-8 rounded-xl border border-graytt-light shadow-tt flex flex-col flex-wrap justify-center items-center">
              <div class="mt-2 mb-2 flex flex-col justify-center items-center transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-[1.05] duration-300">
                <img src="{{asset('image/mais.svg')}}" alt="" width="100">
                <p class="text-graytt text-xs text-center mt-2">Foto do artigo (Obrigatório)</p>
              </div>
            </div>
          </label>
          <input type="file" name="capdenun" id="screenshot" class="hidden">
        </div>

        <div class="w-full">
          <!--Nome do artigo-->
          <label for="nome_art_fi" class="block text-sm font-semibold leading-6 text-white mt-4">Nome do Artigo:</label>
          <input type="text" name="nome_art_fi" id="nome_art_fi" autocomplete="organization" class="shadow-tt block w-full rounded-xl border border-graytt-light px-3.5 py-2 shadow-sm ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6">


          <!--Categoria-->
          <label for="catepropo_fi" class="block text-sm font-semibold leading-6 text-white mt-4">Categoria:</label>
          <div class="inset-y-0 left-0 flex items-center">
            <select id="catepropo_fi" name="catepropo_fi" class="custom-select shadow-tt block w-48 rounded-xl border border-graytt-light px-3.5 py-2 text-graytt-dark  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              <option value="" disabled selected>Selecionar</option>
              <option value="Brinquedo">Brinquedo</option>
              <option value="Mobilidade">Mobilidade</option>
              <option value="Movel">Móvel</option>
              <option value="Roupa">Roupa</option>
              <option value="Outro">Outro</option>
            </select>
          </div>

          <!--data de recebimento-->
          <label for="datae_fi" class="block text-sm font-semibold leading-6 text-white mt-4">Data de Recebimento:</label>
          <input type="date" name="datae_fi" id="datae_fi" autocomplete="organization" class="shadow-tt block w-48 rounded-xl border text-graytt-dark  border-graytt-light px-3.5 py-2 shadow-sm ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6">


          <!--Ponto de encontro-->
          <label for="pontoe_fi" class="block text-sm font-semibold leading-6 text-white mt-4">Ponto de Encontro:</label>
          <input type="text" name="pontoe_fi" id="pontoe_fi" autocomplete="organization" class="shadow-tt block w-full md:w-80 rounded-xl border border-graytt-light px-3.5 py-2 shadow-sm ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6">
        </div>
      </div>

      <!--botões de confirmação-->
      <div class="mt-4 flex gap-3 justify-end">
        <button class="inline-flex items-center px-4 py-2 justify-center w-full sm:w-auto shadow-tt bg-pinktt hover:bg-pinktt-dark text-white text-sm font-medium rounded-2xl mr-5 transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-110 duration-300">
          Cancelar
        </button>
        <button class="mr-3 inline-flex items-center px-4 py-2 justify-center w-full sm:w-auto shadow-tt bg-greentt hover:bg-greentt-dark text-white text-sm font-medium rounded-2xl transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-110 duration-300">
          Confirmar
        </button>
      </div>
    </div>
  </div>
</div>  