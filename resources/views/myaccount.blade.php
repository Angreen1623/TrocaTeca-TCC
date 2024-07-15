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
    <div class="h-full relative">
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

        <h3 class="text-3xl text-center lg:text-left sm:text-6xl mb-3" style="font-family: 'Fredoka';">Informações da conta</h3>

        @include('footer')
    </div>
</body>

</html>
