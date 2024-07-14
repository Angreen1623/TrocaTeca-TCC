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
        <div class="bg-greentt-light">
            <div class="max-w-screen-xl px-4 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
                <div class="lg:flex lg:justify-between lg:items-center flex flex-col-reverse lg:flex-row mb-5">
                    <nav class="mb-7 flex flex-col justify-center items-center lg:items-start space-y-4 max-w-3xl lg:mt-0 lg:order-1">
                        <h2 class="text-3xl drop-shadow-tt text-center lg:text-left text-white sm:text-6xl" style="font-family: 'Fredoka';">
                            Bem vindo ao TrocaTeca
                        </h2>
                        <p class="text-black text-center lg:text-left lg:mt-2">Infância com sustentabilidade e reusabilidade</p>
                        <button class="w-36 text-center items-center px-4 py-2 shadow-tt bg-pinktt hover:bg-pinktt-dark text-white text-sm font-medium rounded-2xl mt-4 lg:mt-0 transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300">
                            <a href="/about">Quem somos</a>
                        </button>
                    </nav>

                    <div class="flex justify-center lg:justify-end lg:order-2 mb-4 lg:mb-0">
                        <img src="{{ asset('image/logo-full.png') }}" alt="Logo do TrocaTeca" width="550" class="py-10 lg:py-24 transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-repeat bg-[url('/public/image/triangulo.svg')] w-full h-8 -mt-px bg-backgtt"></div>

        @include('footer')
    </div>
</body>

</html>