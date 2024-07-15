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
        <div class="flex flex-col h-full items-center mb-5">
            <h1 class="text-3xl sm:text-4xl font-bold text-center text-white font-fredokatt drop-shadow-tt mt-5">Anuncie um Novo Artigo</h1> <!--Título-->
            <!--input de imagem-->
            <div class="mr-10 ml-10 flex flex-col sm:flex-row sm:items-center sm:place-content-center">
                <div class="mt-5 sm:mt-0">
                    <label for="screenshot">
                        <div class="bg-white w-full sm:h-80 sm:w-80 t-2 mr-8 rounded-xl border border-graytt-light shadow-tt flex flex-col flex-wrap justify-center items-center">
                            <div class="mt-2 mb-2 flex flex-col justify-center items-center transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-[1.05] duration-300">
                                <img src="{{asset('image/mais.svg')}}" alt="" width="100">
                                <p class="text-graytt text-xs text-center mt-2">Foto Principal do Artigo (Obrigatório)</p>
                            </div>
                        </div>
                    </label>
                    <input type="file" name="capdenun" id="screenshot" class="hidden">
            <!--input das imagem pequenas-->        

                <div class="flex sm:flex-row">
                    <label for="screenshot"><!--imagem pequena 1-->
                        <div class="mt-3 bg-white sm:h-16 sm:w-16 t-2 mr-5 rounded-xl border border-graytt-light shadow-tt flex flex-col flex-wrap justify-center items-center">
                            <div class="mt-2 mb-2 flex flex-col justify-center items-center transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-[1.05] duration-300">
                                <img src="{{asset('image/mais.svg')}}" alt="" width="30">
                            </div>
                        </div>
                    </label>
                    <input type="file" name="capdenun" id="screenshot" class="hidden">
                    <label for="screenshot"><!--imagem pequena 2-->
                    <div class="mt-3 bg-white sm:h-16 sm:w-16 t-2 mr-5 rounded-xl border border-graytt-light shadow-tt flex flex-col flex-wrap justify-center items-center">
                            <div class="mt-2 mb-2 flex flex-col justify-center items-center transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-[1.05] duration-300">
                                <img src="{{asset('image/mais.svg')}}" alt="" width="30">
                            </div>
                        </div>
                    </label>
                    <input type="file" name="capdenun" id="screenshot" class="hidden">
                    <label for="screenshot"><!--imagem pequena 3-->
                    <div class="mt-3 bg-white sm:h-16 sm:w-16 t-2 mr-5 rounded-xl border border-graytt-light shadow-tt flex flex-col flex-wrap justify-center items-center">
                            <div class="mt-2 mb-2 flex flex-col justify-center items-center transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-[1.05] duration-300">
                                <img src="{{asset('image/mais.svg')}}" alt="" width="30">
                            </div>
                        </div>
                    </label>
                    <input type="file" name="capdenun" id="screenshot" class="hidden">
                    <label for="screenshot"><!--imagem pequena 4-->
                    <div class="mt-3 bg-white sm:h-16 sm:w-16 t-2  rounded-xl border border-graytt-light shadow-tt flex flex-col flex-wrap justify-center items-center">
                            <div class="mt-2 mb-2 flex flex-col justify-center items-center transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-[1.05] duration-300">
                                <img src="{{asset('image/mais.svg')}}" alt="" width="30">
                            </div>
                        </div>
                    </label>
                    <input type="file" name="capdenun" id="screenshot" class="hidden">
                    </div>
                </div>

                <!--input de texto-->
                <div class="w-full">
                    <!--Nome do artigo-->
                    <div class="flex flex-col sm:flex-row mt-4 sm:mt-8">
                        <label for="nome_art" class="block text-sm sm:text-xl font-semibold sm:font-normal leading-6 text-black sm:mt-2 sm:mr-3 sm:text-nowrap">Nome do artigo:</label>
                        <input type="text" name="nome_art" id="nome_art" autocomplete="organization" class="w-full shadow-tt block placeholder:text-graytt rounded-xl border-0 px-3.5 py-2 shadow-sm ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6">
                    </div>
                    <div class="flex flex-col sm:flex-row mt-4 sm:mt-8">
                        <!--valor sugerido-->
                        <label for="nome_art" class="block text-sm sm:text-xl font-semibold sm:font-normal leading-6 text-black sm:mt-2 sm:mr-3 sm:text-nowrap">Valor sugerido (opcional):</label>
                        <input type="text" name="nome_art" id="nome_art" autocomplete="organization" class="shadow-tt block placeholder:text-graytt rounded-xl border-0 px-3.5 py-2 shadow-sm ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6">
                    </div>
                    <!--Item de Preferência-->
                    <div class="flex flex-col sm:flex-row mt-4 sm:mt-8">
                        <label for="nome_art" class="block text-sm sm:text-xl font-semibold sm:font-normal leading-6 text-black sm:mt-2 sm:mr-3 sm:text-nowrap">Preferência de troca:</label>
                        <input type="text" name="nome_art" id="nome_art" autocomplete="organization" class="shadow-tt block rounded-xl border-0 px-3.5 py-2 shadow-sm ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6">
                    </div>
                    <!--Categoria-->
                    <div class="flex flex-col sm:flex-row mt-4 sm:mt-8">
                        <label for="catepropo" class="block text-sm sm:text-xl font-semibold sm:font-normal leading-6 text-black sm:mt-2 sm:mr-3">Categoria:</label>
                        <div class="inset-y-0 left-0 flex items-center">
                            <select id="catepropo" name="catepropo" class="shadow-tt block w-52 rounded-xl border-0 px-3.5 py-2 text-graytt-dark shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
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
                    <div class="flex flex-col sm:flex-row mt-4 sm:mt-8">
                        <label for="condpropo" class="block text-sm sm:text-xl sm:font-normal font-semibold leading-6 text-black sm:mt-2 sm:mr-3">Condição:</label>
                        <div class="inset-y-0 left-0 flex items-center">
                            <select id="condpropo" name="condpropo" class="shadow-tt block w-52 rounded-xl border-0 px-3.5 py-2 text-graytt-dark shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <option value="nenhum foi selecionado">Selecionar</option>
                                <option value="Novo">Novo</option>
                                <option value="Seminovo">Seminovo</option>
                                <option value="Usado">Usado</option>
                            </select>
                        </div>
                    </div>

                    <!--Tempo de uso-->
                    <div class="flex flex-col sm:flex-row mt-4 sm:mt-8">
                        <label for="uso_art" class="block text-sm sm:text-xl sm:font-normal font-semibold leading-6 text-black sm:mt-2 sm:mr-3">Tempo de Uso:</label>
                        <input type="text" name="uso_art" id="uso_art" autocomplete="organization" class="shadow-tt block w-36 rounded-xl border-0 px-3.5 py-2 shadow-sm ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6">
                    </div>
                    <!--botões de confirmação-->
                    <div class="flex flex-col sm:flex-row mt-4 mr-10 ml-10 gap-3 w-full justify-end">
                        <button class="mr-3 inline-flex items-center px-4 py-2 justify-center w-full sm:w-auto shadow-tt bg-pinktt hover:bg-pinktt-dark text-white text-sm font-medium rounded-2xl transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-110 duration-300">
                            Criar anúncio do artigo
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @include('footer')
    </div>
</body>

</html>