<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>

<body class="bg-backgtt">
    <div class="h-full relative">
        @include('navbar')

        <div class="bg-greentt-light">
            <div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
                <div class="md:flex md:justify-between">
                    <nav class="flex flex-col justify-center space-y-4 max-w-3xl">
                        <h2 class="text-4xl drop-shadow-tt text-left text-white sm:text-5xl" style="font-family: 'Fredoka'; white-space: nowrap;">
                            Bem vindo ao TrocaTeca
                        </h2>
                        <p class="mt-2 text-black text-left">Infância com sustentabilidade e reusabilidade</p>
                    </nav>

                    <div class="w-full flex justify-end mt-4">
                        <img src="{{ asset('image/setas.png') }}" alt="Logo do TrocaTeca" width="350" class="animate-rotate-360">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-repeat bg-[url('/public/image/triangulo.svg')] w-full h-8 -mt-px  bg-backgtt"></div>


        @include('footer')
    </div>
</body>

</html>