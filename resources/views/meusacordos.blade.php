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
                            <h2 class="mt-10 text-3xl text-center lg:text-left text-black sm:text-4xl" style="font-family: 'Fredoka';">
                                Meus acordos
                            </h2>

                        </div>
                    </div>
                    <hr class="h-px bg-black border-2 border-black">


                    <!--Card do acordo-->
                    <div class="grid grid-cols-1 gap-4 justify-items-center">
                        <div class="w-full mt-6 mb-9">
                            <a href="#">
                                <div class="flex gap-3 bg-white rounded-3xl overflow-hidden items-center justify-start border-2 border-graytt-light shadow-tt transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 duration-300">
                                    <div class="ml-3 mt-3 mb-3 overflow-hidden relative w-20 h-20 flex-shrink-0 border-2 border-graytt-light rounded-full ">
                                        <img class="rounded-full w-full h-full object-cover object-center transition duration-50" loading="lazy" src="">
                                    </div>
                                    <div class="max-w-36 flex flex-col gap-2 py-2 w-full">
                                        <p class="truncate text-black text-xs sm:text-lg md:text-xl lg:text-2xl xl:text-3xl">Angélica</p>
                                        <p class="truncate text-black text-xs sm:text-sm md:text-base lg:text-base xl:text-lg">Estado: SP</p>
                                        <p class="truncate text-black text-xs sm:text-sm md:text-base lg:text-base xl:text-lg">Cidade: Santos</p>
                                    </div>
                                    <div class="max-w-46 flex flex-col gap-2 py-2 w-full ml-20 pl-6 h-20 border-l border-black pl-24">
                                        <p class="mb-2 truncate text-black text-xs sm:text-sm md:text-base lg:text-base xl:text-lg">Anúncio: 5 carrinhos hot wheels</p>
                                        <p class="truncate text-black text-xs sm:text-sm md:text-base lg:text-base xl:text-lg">Proposta: Uma boneca Barbie</p>
                                    </div>
                                    <div class="truncate max-w-46 flex flex-col gap-2 py-2 w-full ml-20 pl-6 h-20 border-l border-black pl-24">
                                        <p class="mt-1 mb-5 truncate text-black text-black text-xs">Data de encontro: xx/xx/xxxx</p>
                                        <p class="truncate text-black text-black text-xs">Local de encontro: xxxxxxxxxxxx</p>
                                    </div>
                                    <div class="flex place-content-end w-full h-20 items-end mr-6">
                                        <p class="mr-2 mb-0.5 text-black text-xs">Proposta em andamento</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" zoomAndPan="magnify" viewBox="0 0 810 809.999993" height="20" preserveAspectRatio="xMidYMid meet" version="1.0">
                                            <path fill="#fff500" d="M 405 0 C 628.675781 0 810 181.324219 810 405 C 810 628.675781 628.675781 810 405 810 C 181.324219 810 0 628.675781 0 405 C 0 181.324219 181.324219 0 405 0 Z M 405 0 " fill-opacity="1" fill-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>


                        <!--Card do acordo finalizado-->

                        <div class="w-full mt-6 mb-9">
                            <a href="#">
                                <div class="flex gap-3 bg-white rounded-3xl overflow-hidden items-center justify-start border-2 border-graytt-light shadow-tt transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 duration-300">
                                    <div class="ml-3 mt-3 mb-3 overflow-hidden relative w-20 h-20 flex-shrink-0 border-2 border-graytt-light rounded-full ">
                                        <img class="rounded-full w-full h-full object-cover object-center transition duration-50" loading="lazy" src="">
                                    </div>
                                    <div class="max-w-36 flex flex-col gap-2 py-2 w-full">
                                        <p class="truncate text-black text-xs sm:text-lg md:text-xl lg:text-2xl xl:text-3xl">Angélica</p>
                                        <p class="truncate text-black text-xs sm:text-sm md:text-base lg:text-base xl:text-lg">Estado: SP</p>
                                        <p class="truncate text-black text-xs sm:text-sm md:text-base lg:text-base xl:text-lg">Cidade: Santos</p>
                                    </div>
                                    <div class="max-w-46 flex flex-col gap-2 py-2 w-full ml-20 pl-6 h-20 border-l border-black pl-24">
                                        <p class="mb-2 truncate text-black text-xs sm:text-sm md:text-base lg:text-base xl:text-lg">Anúncio: 5 carrinhos hot wheels</p>
                                        <p class="truncate text-black text-xs sm:text-sm md:text-base lg:text-base xl:text-lg">Proposta: Uma boneca Barbie</p>
                                    </div>
                                    <div class="truncate max-w-46 flex flex-col gap-2 py-2 w-full ml-20 pl-6 h-20 border-l border-black pl-24">
                                        <p class="mt-1 mb-5 truncate text-black text-black text-xs">Data de encontro: xx/xx/xxxx</p>
                                        <p class="truncate text-black text-black text-xs">Local de encontro: xxxxxxxxxxxx</p>
                                    </div>
                                    <div class="flex place-content-end w-full h-20 items-end mr-6">
                                        <p class="mr-2 mb-0.5 text-black text-xs">Proposta finalizada</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" zoomAndPan="magnify" viewBox="0 0 810 809.999993" height="20" preserveAspectRatio="xMidYMid meet" version="1.0">
                                            <path fill="#00BF63" d="M 405 0 C 628.675781 0 810 181.324219 810 405 C 810 628.675781 628.675781 810 405 810 C 181.324219 810 0 628.675781 0 405 C 0 181.324219 181.324219 0 405 0 Z M 405 0 " fill-opacity="1" fill-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>





                    </div>
                </div>
            </div>
            @include('footer')
        </div>
</body>

</html>