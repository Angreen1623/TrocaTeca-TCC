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

                    <!-- Card do acordo finalizado -->
                    <div class="grid grid-cols-1 gap-4 justify-items-center">
                        <div class="w-full max-w-48 mt-6 mb-9 sm:max-w-none">
                            <a href="#">
                                <div class="flex flex-col sm:flex-row gap-3 bg-white rounded-3xl overflow-hidden items-center justify-start border-2 border-graytt-light shadow-tt transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 duration-300">
                                    <div class="flex justify-center w-full sm:w-auto">
                                        <div class="ml-3 mt-3 mb-3 overflow-hidden relative w-20 h-20 flex-shrink-0 border-2 border-graytt-light rounded-full">
                                            <img class="rounded-full w-full h-full object-cover object-center transition duration-50" loading="lazy" src="">
                                        </div>
                                    </div>
                                    <div class="max-w-46 sm:flex sm:flex-col sm:gap-2 sm:py-2 sm:pl-4 sm:flex-1">
                                        <p class="text-center sm:text-left mb-2  text-black text-xs sm:text-sm md:text-xs lg:text-base xl:text-lg text-nowrap">Anúncio: 5 carrinhos hot wheels</p>
                                        <p class=" text-center sm:text-left text-black text-xs sm:text-sm md:text-xs lg:text-base xl:text-lg text-nowrap ">Proposta: Uma boneca Barbie</p>
                                    </div>
                                    <div class="max-w-46 sm:flex sm:flex-col sm:gap-2 sm:py-2 sm:border-l sm:border-black sm:pl-4 sm:flex-1">
                                        <p class="text-center sm:text-left mb-2 text-black text-xs sm:text-sm md:text-xs lg:text-base xl:text-lg text-nowrap ">Encontro: xx/xx/xxxx</p>
                                        <p class="sm:truncate text-center sm:text-left text-black text-xs sm:text-sm md:text-xs lg:text-base xl:text-lg">Av. de algum lugar</p>
                                    </div>
                                    <div class="flex place-content-end w-full sm:w-auto sm:h-20 items-end mr-6">
                                        <p class="mr-2 mb-0.5 text-black text-xs hidden lg:block">Proposta em andamento</p>
                                        <svg class="mb-3 sm:mb-0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" zoomAndPan="magnify" viewBox="0 0 810 809.999993" height="20" preserveAspectRatio="xMidYMid meet" version="1.0">
                                            <path fill="#fff500" d="M 405 0 C 628.675781 0 810 181.324219 810 405 C 810 628.675781 628.675781 810 405 810 C 181.324219 810 0 628.675781 0 405 C 0 181.324219 181.324219 0 405 0 Z M 405 0 " fill-opacity="1" fill-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                        <!-- Card do acordo finalizado -->
                        <div class="grid grid-cols-1 gap-4 justify-items-center">
                        <div class="w-full max-w-48 mt-6 mb-9 sm:max-w-none">
                            <a href="#">
                                <div class="flex flex-col sm:flex-row gap-3 bg-white rounded-3xl overflow-hidden items-center justify-start border-2 border-graytt-light shadow-tt transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 duration-300">
                                    <div class="flex justify-center w-full sm:w-auto">
                                        <div class="ml-3 mt-3 mb-3 overflow-hidden relative w-20 h-20 flex-shrink-0 border-2 border-graytt-light rounded-full">
                                            <img class="rounded-full w-full h-full object-cover object-center transition duration-50" loading="lazy" src="">
                                        </div>
                                    </div>
                                    <div class="max-w-46 sm:flex sm:flex-col sm:gap-2 sm:py-2 sm:pl-4 sm:flex-1 sm:truncate">
                                        <p class="text-center sm:text-left mb-2 sm:truncate text-black text-xs sm:text-sm md:text-xs lg:text-base xl:text-lg">Anúncio: 5 carrinhos hot wheels</p>
                                        <p class="sm:truncate text-center sm:text-left text-black text-xs sm:text-sm md:text-xs lg:text-base xl:text-lg">Proposta: Uma boneca Barbie</p>
                                    </div>
                                    <div class="max-w-46 sm:flex sm:flex-col sm:gap-2 sm:py-2 sm:border-l sm:border-black sm:pl-4 sm:flex-1 sm:truncate">
                                        <p class="text-center sm:text-left mb-2 sm:truncate text-black text-xs sm:text-sm md:text-xs lg:text-base xl:text-lg">Encontro: xx/xx/xxxx</p>
                                        <p class="sm:truncate text-center sm:text-left text-black text-xs sm:text-sm md:text-xs lg:text-base xl:text-lg">Av. de algum lugar</p>
                                    </div>
                                    <div class="flex place-content-end w-full sm:w-auto sm:h-20 items-end mr-6">
                                        <p class="mr-2 mb-0.5 text-black text-xs hidden sm:block">Proposta em andamento</p>
                                        <svg class="mb-3 sm:mb-0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" zoomAndPan="magnify" viewBox="0 0 810 809.999993" height="20" preserveAspectRatio="xMidYMid meet" version="1.0">
                                            <path fill="#00BF63" d="M 405 0 C 628.675781 0 810 181.324219 810 405 C 810 628.675781 628.675781 810 405 810 C 181.324219 810 0 628.675781 0 405 C 0 181.324219 181.324219 0 405 0 Z M 405 0 " fill-opacity="1" fill-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>



                </div>
            </div>
        </div>
        @include('footer')
    </div>
</body>

</html>