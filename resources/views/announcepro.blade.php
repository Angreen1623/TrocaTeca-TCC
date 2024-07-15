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
        <h1 class="text-2xl sm:text-4xl font-bold text-center text-white font-fredokatt drop-shadow-tt">Anuncie um Novo Artigo</h1> <!--Título-->
        <!--c-->
        <div class="mr-10 ml-10 flex flex-col sm:flex-row sm:items-center sm:place-content-center">
            <div class="mt-5">
                <label for="screenshot">
                    <div class="bg-white w-full sm:h-72 sm:w-72 t-2 mr-8 rounded-xl border border-graytt-light shadow-tt flex flex-col flex-wrap justify-center items-center">
                        <div class="mt-2 mb-2 flex flex-col justify-center items-center transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-[1.05] duration-300">
                            <img src="{{asset('image/mais.svg')}}" alt="" width="100">
                            <p class="text-graytt text-xs text-center mt-2">Foto Principal do Artigo (Obrigatório)</p>
                        </div>
                    </div>
                </label>
                <input type="file" name="capdenun" id="screenshot" class="hidden">
            </div>
            <div class="w-full">
                <!--Nome do artigo-->
                <label for="nome_art" class="block text-sm font-semibold leading-6 text-black mt-4">Nome do Artigo:</label>
                <input type="text" name="nome_art" id="nome_art" placeholder="Informe o nome do artigo" autocomplete="organization" class="shadow-tt block w-full placeholder:text-graytt rounded-xl border-0 px-3.5 py-2 shadow-sm ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6">

                <!--valor sugerido-->
                <label for="nome_art" class="block text-sm font-semibold leading-6 text-black mt-4">Valor Sugerido (opicional):</label>
                <input type="text" name="nome_art" id="nome_art" placeholder="Informe um valor sugerido" autocomplete="organization" class="shadow-tt block placeholder:text-graytt rounded-xl border-0 px-3.5 py-2 shadow-sm ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6">

                <!--Item de Preferência-->
                <label for="nome_art" class="block text-sm font-semibold leading-6 text-black mt-4">Preferência de Troca:</label>
                <input type="text" name="nome_art" id="nome_art" placeholder="Informe um artigo de interesse para a troca" autocomplete="organization" class="shadow-tt block rounded-xl border-0 px-3.5 py-2 shadow-sm ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6">

                <!--Categoria-->
                <label for="catepropo" class="block text-sm font-semibold leading-6 text-black mt-4">Categoria:</label>
                <div class="inset-y-0 left-0 flex items-center">
                    <select id="catepropo" name="catepropo" class="shadow-tt block w-52 rounded-xl border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <option value="" disabled selected>Selecionar</option>
                        <option value="Brinquedo">Brinquedo</option>
                        <option value="Mobilidade">Mobilidade</option>
                        <option value="Movel">Móvel</option>
                        <option value="Roupa">Roupa</option>
                        <option value="Outro">Outro</option>
                    </select>
                </div>

                <!--Condição-->
                <label for="condpropo" class="block text-sm font-semibold leading-6 text-black mt-4">Condição:</label>
                <div class="inset-y-0 left-0 flex items-center">
                    <select id="condpropo" name="condpropo" class="shadow-tt block w-52 rounded-xl border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <option value="nenhum foi selecionado">Selecionar</option>
                        <option value="Novo">Novo</option>
                        <option value="Seminovo">Seminovo</option>
                        <option value="Usado">Usado</option>
                    </select>
                </div>

                <!--Tempo de uso-->
                <label for="uso_art" class="block text-sm font-semibold leading-6 text-black mt-4">Tempo de Uso:</label>
                <input type="text" name="uso_art" id="uso_art" placeholder="Informe o tempo de uso do artigo" autocomplete="organization" class="shadow-tt block w-36 rounded-xl border-0 px-3.5 py-2 shadow-sm ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6">
            </div>
        </div>

        <!--botões de confirmação-->
        <div class="mt-4 mr-10 ml-10 flex gap-3 justify-end">
            <button class="inline-flex items-center px-4 py-2 justify-center w-full sm:w-auto shadow-tt bg-pinktt hover:bg-pinktt-dark text-white text-sm font-medium rounded-2xl mr-5 transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-110 duration-300">
                Cancelar
            </button>
            <button class="mr-3 inline-flex items-center px-4 py-2 justify-center w-full sm:w-auto shadow-tt bg-greentt hover:bg-greentt-dark text-white text-sm font-medium rounded-2xl transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-110 duration-300">
                Confirmar
            </button>
        </div>
        <p>aaaaaaaaaa</p>
        <p>aaaaaaaaaa</p>
        <p>aaaaaaaaaa</p>
        <p>aaaaaaaaaa</p>
        <p>aaaaaaaaaa</p>
        <p>aaaaaaaaaa</p>
        <p>aaaaaaaaaa</p>
        <p>aaaaaaaaaa</p>
        <p>aaaaaaaaaa</p>
        <p>aaaaaaaaaa</p>
        <p>aaaaaaaaaa</p>
        <p>aaaaaaaaaa</p>
        <p>aaaaaaaaaa</p>
        <p>aaaaaaaaaa</p>
        <p>aaaaaaaaaa</p>
        <p>aaaaaaaaaa</p>
        <p>aaaaaaaaaa</p>
        <p>aaaaaaaaaa</p>
        <p>aaaaaaaaaa</p>
        <p>aaaaaaaaaa</p>
        <p>aaaaaaaaaa</p>
        <p>aaaaaaaaaa</p>
        <p>aaaaaaaaaa</p>
        <p>aaaaaaaaaa</p>
        <p>aaaaaaaaaa</p>
        <p>aaaaaaaaaa</p>
        <p>aaaaaaaaaa</p>

        @include('footer')
    </div>
</body>

</html>