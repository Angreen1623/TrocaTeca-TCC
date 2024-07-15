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
            <h1 class=" text-3xl lg:text-4xl font-bold text-center text-white font-fredokatt drop-shadow-tt mt-5">Anuncie um Novo Artigo</h1> <!--Título-->
            <!--input de imagem-->
            <div class="flex flex-col lg:flex-row lg:items-center lg:place-content-center mb-5">
                <div class="lg:mr-8">
                    <div class="mt-5 lg:mt-0">
                        <label for="screenshot">
                            <div class="bg-white w-full lg:h-80 lg:w-80 rounded-xl border border-graytt-light shadow-tt flex flex-col flex-wrap justify-center items-center">
                                <div class="mt-2 mb-2 flex flex-col justify-center items-center transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-[1.05] duration-300">
                                    <img src="{{asset('image/mais.svg')}}" alt="" width="100">
                                    <p class="text-graytt text-xs text-center mt-2">Foto Principal do Artigo (Obrigatório)</p>
                                </div>
                            </div>
                        </label>
                        <input type="file" name="capdenun" id="screenshot" class="hidden">
                    <!--input das imagem pequenas-->        

                        <div class="flex lg:flex-row justify-between">

                            <div>
                                <input type="file" name="capdenun" id="screenshot" class="hidden">
                                <label for="screenshot">
                                <div class="mt-3 bg-white p-3 sm:mr-3 rounded-xl border border-graytt-light shadow-tt flex flex-col justify-center items-center">
                                    <div class="flex flex-col justify-center items-center transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-[1.05] duration-300">
                                        <img src="{{asset('image/mais.svg')}}" alt="" width="30">
                                    </div>
                                </div>
                                </label>
                            </div>      
                            <div>
                                <input type="file" name="capdenun" id="screenshot" class="hidden">
                                <label for="screenshot">
                                <div class="mt-3 bg-white p-3 sm:mr-3 rounded-xl border border-graytt-light shadow-tt flex flex-col justify-center items-center">
                                    <div class="flex flex-col justify-center items-center transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-[1.05] duration-300">
                                        <img src="{{asset('image/mais.svg')}}" alt="" width="30">
                                    </div>
                                </div>
                                </label>
                            </div>      
                            <div>
                                <input type="file" name="capdenun" id="screenshot" class="hidden">
                                <label for="screenshot">
                                <div class="mt-3 bg-white p-3 sm:mr-3 rounded-xl border border-graytt-light shadow-tt flex flex-col justify-center items-center">
                                    <div class="flex flex-col justify-center items-center transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-[1.05] duration-300">
                                        <img src="{{asset('image/mais.svg')}}" alt="" width="30">
                                    </div>
                                </div>
                                </label>
                            </div>      
                            <div>
                                <input type="file" name="capdenun" id="screenshot" class="hidden">
                                <label for="screenshot">
                                <div class="mt-3 bg-white p-3 rounded-xl border border-graytt-light shadow-tt flex flex-col justify-center items-center">
                                    <div class="flex flex-col justify-center items-center transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-[1.05] duration-300">
                                        <img src="{{asset('image/mais.svg')}}" alt="" width="30">
                                    </div>
                                </div>
                                </label>
                            </div>      
                            
                        </div>
                    </div>
                    </div>

                <!--input de texto-->
                <div class="max-w-xl">
                    <!--Nome do artigo-->
                    <div class="flex flex-col lg:flex-row mt-4 lg:mt-8">
                        <label for="nome_art" class="block text-lg lg:text-xl font-semibold lg:font-normal leading-6 text-black lg:mt-2 lg:mr-3 lg:text-nowrap">Nome do artigo:</label>
                        <input type="text" name="nome_art" id="nome_art" autocomplete="organization" class="w-full shadow-tt block placeholder:text-graytt rounded-xl border-0 px-3.5 py-2 shadow-lg ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset lg:text-lg lg:leading-6">
                    </div>
                    <div class="flex flex-col lg:flex-row mt-4 lg:mt-8">
                        <!--valor sugerido-->
                        <label for="val" class="block text-lg lg:text-xl font-semibold lg:font-normal leading-6 text-black lg:mt-2 lg:mr-3 lg:text-nowrap">Valor sugerido (opcional): R$</label>
                        <input type="text" name="val" id="val" autocomplete="organization" class="shadow-tt block placeholder:text-graytt rounded-xl border-0 px-3.5 py-2 shadow-lg ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset lg:text-lg lg:leading-6">
                    </div>
                    <!--Item de Preferência-->
                    <div class="flex flex-col lg:flex-row mt-4 lg:mt-8">
                        <label for="pref" class="block text-lg lg:text-xl font-semibold lg:font-normal leading-6 text-black lg:mt-2 lg:mr-3 lg:text-nowrap">Preferência de troca:</label>
                        <input type="text" name="pref" id="pref" autocomplete="organization" class=" w-full shadow-tt block rounded-xl border-0 px-3.5 py-2 shadow-lg ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset lg:text-lg lg:leading-6">
                    </div>
                    <!--Categoria-->
                    <div class="flex flex-col lg:flex-row mt-4 lg:mt-8">
                        <label for="catepropo" class="block text-lg lg:text-xl font-semibold lg:font-normal leading-6 text-black lg:mt-2 lg:mr-3">Categoria:</label>
                        <div class="inset-y-0 left-0 flex items-center">
                            <select id="catepropo" name="catepropo" class="shadow-tt block w-52 rounded-xl border-0 px-3.5 py-2 text-graytt-dark shadow-lg ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 lg:text-lg lg:leading-6">
                                <option value="" disabled selected>Selecionar</option>
                                <option value="Brinquedo">Brinquedo</option>
                                <option value="Mobilidade">Mobilidade</option>
                                <option value="Movel">Móvel</option>
                                <option value="Roupa">Roupa</option>
                                <option value="Outro">Outro</option>
                            </select>
                        </div>
                    </div>
                    <!--Condição-->
                    <div class="flex flex-col lg:flex-row mt-4 lg:mt-8">
                        <label for="condpropo" class="block text-lg lg:text-xl lg:font-normal font-semibold leading-6 text-black lg:mt-2 lg:mr-3">Condição:</label>
                        <div class="inset-y-0 left-0 flex items-center">
                            <select id="condpropo" name="condpropo" class="shadow-tt block w-52 rounded-xl border-0 px-3.5 py-2 text-graytt-dark shadow-lg ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 lg:text-lg lg:leading-6">
                                <option value="" disabled selected>Selecionar</option>
                                <option value="Novo">Novo</option>
                                <option value="Seminovo">Seminovo</option>
                                <option value="Usado">Usado</option>
                            </select>
                        </div>
                    </div>

                    <!--Tempo de uso-->
                    <div class="flex flex-col lg:flex-row mt-4 lg:mt-8">
                        <label for="uso_art" class="block text-lg lg:text-xl lg:font-normal font-semibold leading-6 text-black lg:mt-2 lg:mr-3">Tempo de Uso:</label>
                        <input type="text" name="uso_art" id="uso_art" autocomplete="organization" class="shadow-tt block w-36 rounded-xl border-0 px-3.5 py-2 shadow-lg ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset lg:text-lg lg:leading-6">
                    </div>
                    <!--botões de confirmação-->
                    <div class="flex flex-col lg:flex-row mt-4 sm:mr-0 mr-10 w-full justify-end">
                        <button class="mr-3 inline-flex items-center p-2 justify-center w-26 lg:w-auto shadow-tt bg-pinktt hover:bg-pinktt-dark text-white text-lg font-medium rounded-2xl transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-110 duration-300">
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