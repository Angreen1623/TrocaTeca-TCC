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
                                <div class="relative w-32 h-32 flex-shrink-0 border-2 border-graytt-light">
                                    <img class="absolute left-0 top-0 w-full h-full object-cover object-center transition duration-50" loading="lazy" src="data:image/webp;base64,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">
                                </div>
                                <div class="flex flex-col gap-2 py-2 px-4 w-full">
                                    <p class="truncate lg:text-left lg:mt-2 text-black text-2xl">Produto</p>
                                    <p class="truncate lg:text-left lg:mt-2 text-stone-400">Tipo</p>
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