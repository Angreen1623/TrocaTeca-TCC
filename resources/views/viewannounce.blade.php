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

        <div class="flex flex-col flex-wrap lg:flex-row place-content-center my-16">

            <div class="mb-5 lg:mb-0 flex justify-center mx-10">
                <div class="relative">
                    <div class="absolute bg-redtt w-fit h-fit p-2 rounded-full -left-[25px] -top-[25px]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" viewBox="0 0 16 16">
                            <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z"/>
                            <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"/>
                        </svg>
                    </div>
                    <img src="{{ asset('image/img-placeholder.png') }}" alt="Imagem do produto" width="300" class="rounded-lg border-2 border-black">
                </div>

            </div>
            <div class="ml-5 flex flex-col justify-between max-w-96 w-full">
                <div class="lg:mb-0 mb-5">
                    <div class="border-b border-black text-4xl" style="font-family: 'Fredoka';">
                        <p>Bob Esponja Agiota</p>
                    </div>
                    <div class="text-lg">
                        <p class="text-graytt">Valor sugerido: <span class="text-pinktt">R$25,00</span></p>
                        <p class="text-graytt">Artigo publicado por: <span class="text-black underline">Reginaldo Ferreira</span></p>
                    </div>
                </div>
                <div class="max-w-72 lg:mb-0 mb-5">
                    <p><span class="text-graytt"> Preferência de troca: </span> Troco por isso isso ou aquilo ou aquilo outro.</p>
                </div>
                <div class="flex flex-col sm:flex-row">
                    <div class="min-w-fit">
                        <p> <span class="text-graytt"> Categoria: </span> Brinquedo  </p>
                        <p> <span class="text-graytt"> Condição: </span> Usado  </p>
                        <p> <span class="text-graytt"> Tempo de uso: </span> 2 anos </p>
                    </div>
                    <div class="flex w-full sm:justify-end sm:items-end">
                        <button class="inline-flex px-4 py-2 h-fit justify-center w-full sm:w-auto shadow-tt bg-pinktt hover:bg-pinktt-dark text-white text-sm font-medium rounded-2xl transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-110 duration-300">
                            Enviar Proposta
                        </button>
                    </div>
                </div>
            </div>

        </div>

        @include('footer')
    </div>
</body>

</html>