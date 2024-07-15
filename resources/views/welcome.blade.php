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
        <div class="w-full fixed">
            <div class="bg-greentt-light ">
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

        </div>
        <div class="z-10 relative">
            <div class="mt-[375px] bg-repeat bg-[url('/public/image/triangulo-bege.svg')] rotate-180 w-full h-8 -mt-px bg-transparent"></div>
            <div class="space-y-8 overflow-hidden sm:px-6 lg:px-8 bg-backgtt w-full">
                <div class="max-w-screen-xl px-4 mx-auto">
                    <div class="lg:flex lg:justify-between lg:items-center flex flex-col-reverse lg:flex-row mb-5">
                        <div class="mb-7 flex flex-col justify-center items-center lg:items-start space-y-4 max-w-3xl lg:mt-0 lg:order-1">
                            <h2 class="mt-7 text-3xl  text-center lg:text-left text-black sm:text-4xl" style="font-family: 'Fredoka';">
                                Comece por aqui: Artigos infantis variados
                            </h2>
                        </div>
                    </div>


                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-16 sm:mt-10">
                        <!--Card do anúncio-->
                        <div class="group my-1 flex w-full max-w-[260px] flex-col overflow-hidden rounded-xl border border-graytt-light shadow-tt bg-white transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300">
                            <a class="relative mx-3 mt-3 flex h-48 overflow-hidden rounded-xl" href="#">
                                <img class="peer absolute top-0 right-0 h-full w-full object-cover" src="https://images.unsplash.com/flagged/photo-1556637640-2c80d3201be8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60?a=b" alt="product image" />
                                <img class="peer absolute top-0 -right-96 h-full w-full object-cover transition-all delay-100 duration-1000 hover:right-0 peer-hover:right-0" src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="product image" />
                            </a>
                            <div class="mt-4 px-5 pb-5">
                                <a href="#">
                                    <p class="truncate lg:text-left lg:mt-2 text-black">Bob Esponja Agiota Seminovo</p>
                                </a>
                                <a href="#">
                                    <p class="truncate lg:text-left lg:mt-2 text-stone-400">Brinquedo</p>
                                </a>
                                <div class="mt-2 flex items-center">
                                    <p>
                                    <span class="truncate lg:text-left lg:mt-2 text-black">Valor Sugerido:</p>
                                    <span class="text-2xl ml-2 font-bold text-pinktt">R$25,99</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!--Card do anúncio-->
                        <div class="group my-1 flex w-full max-w-[260px] flex-col overflow-hidden rounded-xl border border-graytt-light shadow-tt bg-white transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300">
                            <a class="relative mx-3 mt-3 flex h-48 overflow-hidden rounded-xl" href="#">
                                <img class="peer absolute top-0 right-0 h-full w-full object-cover" src="https://images.unsplash.com/flagged/photo-1556637640-2c80d3201be8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60?a=b" alt="product image" />
                                <img class="peer absolute top-0 -right-96 h-full w-full object-cover transition-all delay-100 duration-1000 hover:right-0 peer-hover:right-0" src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="product image" />
                            </a>
                            <div class="mt-4 px-5 pb-5">
                                <a href="#">
                                    <p class="truncate lg:text-left lg:mt-2 text-black">Bob Esponja Agiota Seminovo</p>
                                </a>
                                <a href="#">
                                    <p class="truncate lg:text-left lg:mt-2 text-stone-400">Brinquedo</p>
                                </a>
                                <div class="mt-2 flex items-center">
                                    <p>
                                    <span class="truncate lg:text-left lg:mt-2 text-black">Valor Sugerido:</p>
                                    <span class="text-2xl ml-2 font-bold text-pinktt">R$25,99</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!--Card do anúncio-->
                        <div class="group my-1 flex w-full max-w-[260px] flex-col overflow-hidden rounded-xl border border-graytt-light shadow-tt bg-white transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300">
                            <a class="relative mx-3 mt-3 flex h-48 overflow-hidden rounded-xl" href="#">
                                <img class="peer absolute top-0 right-0 h-full w-full object-cover" src="https://images.unsplash.com/flagged/photo-1556637640-2c80d3201be8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60?a=b" alt="product image" />
                                <img class="peer absolute top-0 -right-96 h-full w-full object-cover transition-all delay-100 duration-1000 hover:right-0 peer-hover:right-0" src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="product image" />
                            </a>
                            <div class="mt-4 px-5 pb-5">
                                <a href="#">
                                    <p class="truncate lg:text-left lg:mt-2 text-black">Bob Esponja Agiota Seminovo</p>
                                </a>
                                <a href="#">
                                    <p class="truncate lg:text-left lg:mt-2 text-stone-400">Brinquedo</p>
                                </a>
                                <div class="mt-2 flex items-center">
                                    <p>
                                    <span class="truncate lg:text-left lg:mt-2 text-black">Valor Sugerido:</p>
                                    <span class="text-2xl ml-2 font-bold text-pinktt">R$25,99</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!--Card do anúncio-->
                        <div class="group my-1 flex w-full max-w-[260px] flex-col overflow-hidden rounded-xl border border-graytt-light shadow-tt bg-white transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300">
                            <a class="relative mx-3 mt-3 flex h-48 overflow-hidden rounded-xl" href="#">
                                <img class="peer absolute top-0 right-0 h-full w-full object-cover" src="https://images.unsplash.com/flagged/photo-1556637640-2c80d3201be8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60?a=b" alt="product image" />
                                <img class="peer absolute top-0 -right-96 h-full w-full object-cover transition-all delay-100 duration-1000 hover:right-0 peer-hover:right-0" src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c25lYWtlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="product image" />
                            </a>
                            <div class="mt-4 px-5 pb-5">
                                <a href="#">
                                    <p class="truncate lg:text-left lg:mt-2 text-black">Bob Esponja Agiota Seminovo</p>
                                </a>
                                <a href="#">
                                    <p class="truncate lg:text-left lg:mt-2 text-stone-400">Brinquedo</p>
                                </a>
                                <div class="mt-2 flex items-center">
                                    <p>
                                    <span class="truncate lg:text-left lg:mt-2 text-black">Valor Sugerido:</p>
                                    <span class="text-2xl ml-2 font-bold text-pinktt">R$25,99</span>
                                    </p>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
                @include('footer')
            </div>
        </div>
</body>

</html>