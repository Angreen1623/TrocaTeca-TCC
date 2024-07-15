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
        <div class="bg-yellowtt-light">
            <div class="max-w-screen-xl py-20 px-6 mx-auto overflow-hidden sm:px-8 lg:px-10 flex place-content-between">
                <div class="mb-5">
                    <div class="mb-16 flex flex-col justify-center items-center lg:items-start max-w-3xl lg:mt-0 lg:order-1">
                        <h2 class="text-3xl drop-shadow-tt text-center lg:text-left text-white sm:text-6xl mb-3" style="font-family: 'Fredoka';">
                            Minha Conta
                        </h2>
                        <p class="text-black text-lg text-center lg:text-left mb-1.5">Descrição de interesses:</p>
                        <p class="text-graytt mb-1">Estou interessado em carrinhos de bebê para um bebê de 5 meses; Brinquedos. </p>
                        <p class="underline cursor-pointer">Editar</p>
                    </div>
                    <div class="flex flex-col justify-center items-center lg:items-start max-w-3xl lg:mt-0 lg:order-1">
                        <p>Trocando desde: 2024</p>
                        <p>Nº de trocas bem-sucedidas: **</p>
                    </div>
                </div>

                <div>
                    <label for="perfil" class="bg-white p-10 rounded-full w-fit flex border border-black">
                        <img src="{{ asset('image/mais.svg') }}" width="120" height="120" alt="">
                    </label>

                    <input id="perfil" type="file" accept="image/*" class="hidden">
                </div>
            </div>
        </div>
        <div class="bg-repeat bg-[url('/public/image/triangulo-amarelo.svg')] w-full h-8 -mt-px bg-backgtt mb-10"></div>

        <div>

            <h3 class="text-3xl text-center lg:text-left sm:text-6xl mb-10 ml-8" style="font-family: 'Fredoka';">Informações da conta</h3>

            <div class="flex w-full content-evenly flex-wrap mb-14">
                <div class="md:border-r-4 border-black px-24 md:w-1/2">

                    <label for="nome" class="">Nome:</label>
                    <input type="text" name="nome" id="nome" class="shadow-tt mt-3 block w-full rounded-xl border-0 px-3.5 py-2 shadow-sm ring-1 border-2 border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 mb-5">

                    <label for="sobrenome" class="">Sobrenome:</label>
                    <input type="text" name="sobrenome" id="sobrenome" class="shadow-tt mt-3 block w-full rounded-xl border-0 px-3.5 py-2 shadow-sm ring-1 border-2 border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 mb-5">

                    <label for="email" class="">Email:</label>
                    <input type="text" name="email" id="email" class="shadow-tt mt-3 block w-full rounded-xl border-0 px-3.5 py-2 shadow-sm ring-1 border-2 border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 mb-5">

                    <label for="nasc" class="">Data de nascimento:</label>
                    <input type="date" name="nasc" id="nasc" class="shadow-tt mt-3 block w-full max-w-40 rounded-xl border-0 px-3.5 py-2 shadow-sm ring-1 border-2 border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 mb-5">
                </div>
                <div class="px-24 md:w-1/2">

                    <label for="estado" class="">Estado:</label>
                    <select id="estado" name="estado" class="shadow-tt mt-3 block w-36 rounded-xl border-0 px-3.5 py-2 shadow-sm ring-1 border-2 border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 mb-5">
                        <option value="" disabled selected>Selecionar</option>
                        <option value="SP">SP</option>
                    </select>

                    <label for="cidade" class="">Cidade:</label>
                    <input type="text" name="cidade" id="cidade" class="shadow-tt mt-3 block w-full rounded-xl border-0 px-3.5 py-2 shadow-sm ring-1 border-2 border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 mb-5">

                    <label for="senha" class="">Alterar senha:</label>
                    <input type="text" name="senha" id="senha" class="shadow-tt mt-3 block w-full rounded-xl border-0 px-3.5 py-2 shadow-sm ring-1 border-2 border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 mb-5">

                    <label for="senha_c" class="">Confirmar senha:</label>
                    <input type="text" name="senha_c" id="senha_c" class="shadow-tt mt-3 block w-full rounded-xl border-0 px-3.5 py-2 shadow-sm ring-1 border-2 border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 mb-5">

                </div>
            </div>
            <div class="flex w-full content-evenly flex-wrap mb-24 px-24 justify-end">
                <button class="inline-flex items-center px-4 py-3 justify-center w-full sm:w-auto bg-pinktt shadow-tt hover:bg-pinktt-dark text-white text-sm font-medium rounded-2xl transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-110 duration-300">
                    Salvar alterações
                </button>
            </div>
    

        </div>

        @include('footer')
    </div>
</body>

</html>
