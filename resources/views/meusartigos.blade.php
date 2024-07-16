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
        <div class="z-10">
            <div class="space-y-8 overflow-hidden sm:px-6 lg:px-8 bg-backgtt w-full">
                <div class="max-w-screen-xl px-4 mx-auto">
                    <div class="lg:flex lg:justify-between lg:items-center flex flex-col-reverse lg:flex-row">
                        <div class="mb-3 flex flex-col justify-center items-center lg:items-start space-y-4 max-w-3xl lg:mt-0 lg:order-1">
                            <h2 class="mt-7 text-3xl text-center lg:text-left text-black sm:text-4xl" style="font-family: 'Fredoka';">
                                Meus Artigos
                            </h2>

                        </div>
                    </div>
                    <hr class="h-px bg-black border-2 border-black">
                    <div class="grid grid-cols-1 gap-4 justify-items-center">
                        <!--Card do anúncio-->

                        <div class="w-full mt-6 mb-9">
                            <div class="flex gap-3 bg-white rounded-3xl overflow-hidden items-center justify-start border-2 border-graytt-light shadow-tt transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 duration-300">
                                <div class="relative w-32 h-32 flex-shrink-0">
                                    <img class="absolute left-0 top-0 w-full h-full object-cover object-center transition duration-50" loading="lazy" src="https://via.placeholder.com/150">
                                </div>
                                <div class="flex flex-col gap-2 py-2 px-4 w-full">
                                    <p class="truncate lg:text-left lg:mt-2 text-black text-2xl">Produto</p>
                                    <p class="truncate lg:text-left lg:mt-2 text-stone-400">Tipo</p>
                                    <span class="flex items-center justify-start text-gray-500">
                                        <svg class="w-4 h-4 mr-1 mt-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">

                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>








                </div>
            </div>
        </div>
        @include('footer')
    </div>
</body>

</html>