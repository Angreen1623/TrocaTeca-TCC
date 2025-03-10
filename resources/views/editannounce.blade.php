<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrocaTeca</title>
    <link rel="shortcut icon" href="{{ asset('image/t.png') }}">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>

<body class="bg-backgtt">
    <div class="h-full min-h-screen relative">
        @include('navbar')
        <div class="flex flex-col h-full items-center">
            <h1 class=" text-3xl lg:text-4xl font-bold text-center text-white font-fredokatt drop-shadow-tt mt-5">Edite seu Artigo</h1> <!--Título-->
            <!--input de imagem-->
            <div class="flex flex-col lg:flex-row lg:items-center lg:place-content-center mb-5">
                    <div class="lg:mr-8">
                        <div class="mt-5 lg:mt-0 ">
                        <!--Início do formulário-->
                        <form id="edtann" action="/atualizar/{{$artigo->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="mt-5 lg:mt-0">
                                <!-- Input para a imagem principal -->
                                <label for="img_principal" class="flex flex-col items-center">
                                    <div class="add-img-p bg-white w-64 h-32 lg:h-80 lg:w-80 rounded-xl border border-graytt-light shadow-tt flex flex-col flex-wrap justify-center items-center overflow-hidden">
                                        @foreach($artigo->imagens as $imagem)
                                            @if($imagem->imagem_principal)
                                                <img id="principal_img" class="h-full object-cover" loading="lazy" src="{{ asset($imagem->endereco_imagem) }}">
                                            @endif
                                        @endforeach
                                    </div>
                                </label>
                                <input type="file" name="img_principal" id="img_principal" class="hidden border border-graytt-light" accept="image/*">

                                <!-- Input para imagens secundárias -->
                                <div class="flex lg:flex-row justify-between">

                                    @for ($i = 0; $i < 4; $i++)
                                        <div>
                                            <input type="file" name="img[{{$i}}]" id="imagem{{$i+1}}" class="hidden" accept="image/*">
                                            <label for="imagem{{$i+1}}">
                                                <div class="add-img{{ $i+1 }} mt-3 bg-white w-14 h-14 last:mr-0 sm:mr-3 rounded-xl border border-graytt-light shadow-tt flex flex-col justify-center items-center overflow-hidden">
                                                    @if(isset($artigo->imagens[$i+1]))
                                                        @if(!$artigo->imagens[$i+1]->imagem_principal)
                                                            <img id="img{{$i+1}}" class="h-full object-cover" loading="lazy" src="{{ asset($artigo->imagens[$i+1]->endereco_imagem) }}">
                                                        @endif
                                                    @else
                                                        <img src="" class="hidden object-cover h-full">
                                                        <div id="placeholder{{$i+1}}" class="placeholder-img flex flex-col justify-center items-center transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-[1.05] duration-300 m-3">
                                                            <img src="{{asset('image/mais.svg')}}" alt="" width="30">
                                                        </div>
                                                    @endif
                                                </div>
                                            </label>
                                        </div>
                                    @endfor
                                    
                                </div>
                            </div>

                        </div>
                            
                    </div>

                    <!--input de texto-->
                    <div class="max-w-xl">
                        <!--Nome do artigo-->
                        <div class="flex flex-col lg:flex-row mt-4 lg:mt-8">
                            <label for="nome_artigo" class="block text-lg lg:text-xl font-semibold lg:font-normal leading-6 text-black lg:mt-2 lg:mr-3 lg:text-nowrap">Nome do artigo*:</label>
                            <input type="text" name="nome_artigo" id="nome_artigo" value="{{$artigo->nome_artigo}}"  autocomplete="organization" class="w-full shadow-tt block placeholder:text-graytt rounded-xl border border-graytt-light px-3.5 py-2 shadow-lg ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset lg:text-lg lg:leading-6">
                        </div>
                        <div class="flex flex-col lg:flex-row mt-4 lg:mt-8">
                            <!--valor sugerido-->
                            <label for="valor_sugerido_artigo" class="block text-lg lg:text-xl font-semibold lg:font-normal leading-6 text-black lg:mt-2 lg:mr-3 lg:text-nowrap">Valor sugerido: R$</label>
                            <input type="text" name="valor_sugerido_artigo" id="valor_sugerido_artigo" value="{{$artigo->valor_sugerido_artigo}}" autocomplete="organization" class="shadow-tt block placeholder:text-graytt rounded-xl border border-graytt-light px-3.5 py-2 shadow-lg ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset lg:text-lg lg:leading-6">
                        </div>
                        <!--Item de Preferência-->
                        <div class="flex flex-col lg:flex-row mt-4 lg:mt-8">
                            <label for="preferencia_troca_artigo" class="block text-lg lg:text-xl font-semibold lg:font-normal leading-6 text-black lg:mt-2 lg:mr-3 lg:text-nowrap">Preferência de troca:</label>
                            <input type="text" name="preferencia_troca_artigo" id="preferencia_troca_artigo" value="{{$artigo->preferencia_troca_artigo}}" autocomplete="organization" class=" w-full shadow-tt block rounded-xl border border-graytt-light px-3.5 py-2 shadow-lg ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset lg:text-lg lg:leading-6">
                        </div>
                        <!--Categoria-->
                        <div class="flex flex-col lg:flex-row mt-4 lg:mt-8">
                            <label for="categoria_artigo" class="block text-lg lg:text-xl font-semibold lg:font-normal leading-6 text-black lg:mt-2 lg:mr-3">Categoria*:</label>
                            <div class="inset-y-0 left-0 flex items-center">
                                <select id="categoria_artigo" name="categoria_artigo" class="custom-select shadow-tt block w-52 rounded-xl border border-graytt-light px-3.5 py-2 text-graytt-dark shadow-lg ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 lg:text-lg lg:leading-6">
                                    <option value="" disabled selected>Selecionar</option>
                                    <option value="Brinquedo" {{ $artigo->categoria_artigo == 'Brinquedo' ? 'selected' : '' }}>Brinquedo</option>
                                    <option value="Mobilidade" {{ $artigo->categoria_artigo == 'Mobilidade' ? 'selected' : '' }}>Mobilidade</option>
                                    <option value="Movel" {{ $artigo->categoria_artigo == 'Movel' ? 'selected' : '' }}>Móvel</option>
                                    <option value="Roupa" {{ $artigo->categoria_artigo == 'Roupa' ? 'selected' : '' }}>Roupa</option>
                                    <option value="Outro" {{ $artigo->categoria_artigo == 'Outro' ? 'selected' : '' }}>Outro</option>
                                </select>
                            </div>
                        </div>
                        <!--Condição-->
                        <div class="flex flex-col lg:flex-row mt-4 lg:mt-8">
                            <label for="condicao_artigo" class="block text-lg lg:text-xl lg:font-normal font-semibold leading-6 text-black lg:mt-2 lg:mr-3">Condição*:</label>
                            <div class="inset-y-0 left-0 flex items-center">
                                <select id="condicao_artigo" name="condicao_artigo" value="{{$artigo->condicao_artigo}}" class="custom-select shadow-tt block w-52 rounded-xl border border-graytt-light px-3.5 py-2 text-graytt-dark shadow-lg ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 lg:text-lg lg:leading-6">
                                    <option value="" disabled selected>Selecionar</option>
                                    <option value="Novo" {{ $artigo->condicao_artigo == 'Novo' ? 'selected' : '' }}>Novo</option>
                                    <option value="Seminovo" {{ $artigo->condicao_artigo == 'Seminovo' ? 'selected' : '' }}>Seminovo</option>
                                    <option value="Usado" {{ $artigo->condicao_artigo == 'Usado' ? 'selected' : '' }}>Usado</option>
                                </select>
                            </div>
                        </div>

                        <!--Tempo de uso-->
                        <div class="flex flex-col lg:flex-row mt-4 lg:mt-8">
                            <label for="tempo_uso_artigo" class="block text-lg lg:text-xl lg:font-normal font-semibold leading-6 text-black lg:mt-2 lg:mr-3">Tempo de uso*:</label>
                            <div class="flex">
                                <input type="text" name="tempo_uso_artigo" id="tempo_uso_artigo"  maxlength="3" required value="{{floatval($artigo->tempo_uso_artigo)}}"  autocomplete="organization" class="shadow-tt block w-16 mr-3 rounded-xl border border-graytt-light px-3.5 py-2 shadow-lg ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset lg:text-lg lg:leading-6">
                                <select name="tempo_uso_artigo2" id="tempo_uso_artigo2" required class="shadow-tt block w-30 rounded-xl border border-graytt-light px-3.5 py-2 shadow-lg ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset lg:text-lg lg:leading-6">
                                    <option value="" disabled selected>Selecionar</option>
                                    <option value="ano(s)" {{ str_contains($artigo->tempo_uso_artigo, 'ano(s)') == TRUE ? 'selected' : '' }}>ano(s)</option>
                                    <option value="mês(es)" {{ str_contains($artigo->tempo_uso_artigo, 'mês(es)') == TRUE ? 'selected' : '' }}>mês(es)</option>
                                    <option value="dia(s)" {{ str_contains($artigo->tempo_uso_artigo, 'dia(s)') == TRUE ? 'selected' : '' }}>dia(s)</option>
                                </select>
                            </div>
                        </div>
                    </form>
                    
                    <!--botões de confirmação-->
                    <div class="flex flex-col lg:flex-row mt-4 sm:mr-0 mr-10 w-full justify-end">
                        <form action="/excluir/{{ $artigo->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                            <button class="mr-5 inline-flex flex flex-row md:mb-0 mb-4 items-center p-2 justify-center w-full lg:w-auto shadow-tt bg-redtt hover:bg-redtt-dark text-white text-lg font-medium rounded-2xl transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-110 duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                Excluir
                            </button></form>
                        <button form="edtann" 
                        @if($reported)
                            type="submit"
                        @else
                            type="button"
                            id="openNotificationButton"
                        @endif 
                        class="mb-0 sm:mr-3 inline-flex items-center p-2 justify-center w-full lg:w-auto shadow-tt bg-pinktt hover:bg-pinktt-dark text-white text-lg font-medium rounded-2xl transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-110 duration-300">
                            Confirmar alterações
                        </button>
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
        </div>
        @include('footer')
        </div>


    @include('notification', ['title' => "Não foi possível editar o anúncio", 'body' => "Por questão de segurança, não é possível editar o anúncio devido a uma denúncia em andamento."])

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

            for (let i = 1; i < 5; i++) {
                let paiimg = '.add-img' + i;
                let img = document.querySelector(paiimg+' img');
                let placeholder = document.querySelector(paiimg+' .placeholder-img');
                let inputArquivo = document.querySelector("#imagem" + i);

                // Verifica se o elemento foi encontrado antes de adicionar o evento
                if (img && inputArquivo) {
                    inputArquivo.onchange = function() {
                        if (inputArquivo.files.length > 0) {
                            img.src = URL.createObjectURL(inputArquivo.files[0]); // Cria uma URL temporária para o arquivo selecionado e atualiza a imagem.
                            img.classList.remove('hidden');

                            placeholder.classList.add('hidden');
                        }
                    };
                }
            }

            const open = document.getElementById('openNotificationButton');

            if (open) {
                open.addEventListener('click', function(e) {
                    e.preventDefault();
                    modal.classList.remove('hidden');
                    document.body.classList.add('overflow-hidden');
                });
            }

            let uso_art = document.querySelector('#tempo_uso_artigo');
            let value = document.querySelector('#valor_sugerido_artigo');

            uso_art.addEventListener('keypress', function(event) {
                onlyFloat(uso_art);
            });

            value.addEventListener('keypress', function(event) {
                onlyFloat(value);
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

</body>

</html>