<!--Modal de nova proposta-->
<div id="modalNewProposal" class="fixed z-[60] w-screen h-screen left-0 top-0 hidden bg-shadowtt">
    <div class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-8">
        <div class="w-full max-w-4xl rounded-3xl bg-bluett p-6 sm:p-8 shadow-2xl">
            <form action="/propose/create" method="POST" enctype="multipart/form-data">
                @csrf
                <h1 class="text-2xl sm:text-4xl font-bold text-center text-white font-fredokatt drop-shadow-tt">Enviar proposta</h1>

                <div class="flex flex-col sm:flex-row sm:items-center sm:place-content-center">
                    <div>
                        <p class="block text-sm font-semibold leading-6 text-white mt-6">Foto do Artigo:</p>
                        <label for="img_principal">
                            <div class="add-img-p bg-white w-full h-36 sm:h-72 sm:w-72 t-2 mr-8 rounded-xl border border-graytt-light shadow-tt flex flex-col flex-wrap justify-center items-center overflow-hidden">
                                <img src="" class="hidden h-full object-cover">
                                <div class="placeholder-img mt-2 mb-2 flex flex-col justify-center items-center transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-[1.05] duration-300">
                                    <img src="{{asset('image/mais.svg')}}" alt="" width="100">
                                    <p class="text-graytt text-xs text-center mt-2">Foto do artigo (Obrigatório)</p>
                                </div>
                            </div>
                        </label>
                        <input type="file" name="img_principal" id="img_principal" class="hidden" accept="image/*" required>
                    </div>
                    <div class="w-full">
                        <input type="hidden" name="id_artigo" value="{{ $artigo->id }}">
                        <label for="nome_art" class="block text-sm font-semibold leading-6 text-white mt-4">Nome do Artigo:</label>
                        <input type="text" name="nome_art" id="nome_art" autocomplete="organization" required class="shadow-tt block w-full rounded-xl border border-graytt-light px-3.5 py-2 shadow-sm ring-1 ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6">

                        <label for="catepropo" class="block text-sm font-semibold leading-6 text-white mt-4">Categoria:</label>
                        <div class="inset-y-0 left-0 flex items-center">
                            <select id="catepropo" name="catepropo" required class="custom-select shadow-tt block w-52 rounded-xl border text-graytt-dark  border-graytt-light px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <option value="" disabled selected>Selecionar</option>
                                <option value="Brinquedo">Brinquedo</option>
                                <option value="Mobilidade">Mobilidade</option>
                                <option value="Móvel">Móvel</option>
                                <option value="Roupa">Roupa</option>
                                <option value="Outro">Outro</option>
                            </select>
                        </div>

                        <label for="condpropo" class="block text-sm font-semibold leading-6 text-white mt-4">Condição:</label>
                        <div class="inset-y-0 left-0 flex items-center">
                            <select id="condpropo" name="condpropo" required class="custom-select shadow-tt block w-52 rounded-xl border border-graytt-light px-3.5 py-2 text-graytt-dark shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <option value="nenhum foi selecionado" disabled selecte>Selecionar</option>
                                <option value="Novo">Novo</option>
                                <option value="Seminovo">Seminovo</option>
                                <option value="Usado">Usado</option>
                            </select>
                        </div>

                        <label for="uso_art" class="block text-sm font-semibold leading-6 text-white mt-4">Tempo de Uso:</label>
                        <div class="flex">
                            <input type="text" name="uso_art" id="uso_art" maxlength="3" autocomplete="organization" required class="shadow-tt block w-16 mr-3 rounded-xl border border-graytt-light px-3.5 py-2 shadow-sm ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6">
                            <select id="uso_art2" name="uso_art2" required class="custom-select shadow-tt block w-30 rounded-xl border border-graytt-light px-3.5 py-2 text-graytt-dark shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <option value="nenhum foi selecionado" disabled selected>Selecionar</option>
                                <option value="ano(s)">ano(s)</option>
                                <option value="mes(es)">mes(es)</option>
                                <option value="dia(s)">dia(s)</option>
                            </select>
                        </div>
                    </div>
                </div>

                @if ($errors->any())
                <div class="mt-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li class="text-red-500">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <!-- Botões de confirmação -->
                <div class="mt-4 flex gap-3 justify-end">
                    <button type="button" id="cancelNewProposal" class="inline-flex items-center px-4 py-2 justify-center w-full sm:w-auto shadow-tt bg-pinktt hover:bg-pinktt-dark text-white text-sm font-medium rounded-2xl mr-5 transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300">
                        Cancelar
                    </button>
                    <button type="submit" class="mr-3 inline-flex items-center px-4 py-2 justify-center w-full sm:w-auto shadow-tt bg-greentt hover:bg-greentt-dark text-white text-sm font-medium rounded-2xl transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300">
                        Confirmar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>    

<script>
    let paiimg = '.add-img-p';
    let img = document.querySelector(paiimg+' img');
    let placeholder = document.querySelector(paiimg+' .placeholder-img');
    let inputArquivo = document.querySelector("#img_principal");

    inputArquivo.onchange = function () { //Função para atualizar a interface do usuário quando um arquivo é selecionado.

    if (inputArquivo.files.length > 0) {  //Verifica se há um arquivo selecionado.
        img.src = URL.createObjectURL(inputArquivo.files[0]); // Cria uma URL temporária para o arquivo selecionado e atualiza a imagem.
        img.classList.remove('hidden');
        placeholder.classList.add('hidden');
    }

    };

    let uso_art = document.querySelector('#uso_art');

    uso_art.addEventListener('keypress', function(event) {
        onlyFloat(uso_art);
    });

    function onlyFloat(element){
        if (!event.key.match(/[\d.,]/)) {
            event.preventDefault();
        }

        if (element.value.includes('.') || element.value.includes(',')) {
            if (event.key === ',' || event.key === '.') {
                event.preventDefault();
            }
        }
    }

</script>