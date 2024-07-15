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
        <div class="w-full fixed z-[-1]">
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
       <div>
        <div class=" mt-[375px] bg-repeat bg-[url('/public/image/triangulo-bege.svg')] rotate-180 w-full h-8 -mt-px bg-transparent"></div>
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
                    <!-- Card -->
                    <div class="h-200 w-200">
                        <div class="relative bg-blue-300 shadow-lg rounded-lg shadow-lg p-5 overflow-hidden">
                            <!-- Card content -->
                            <div class="relative pt-[1.5rem] pb-14">
                                <h3 class="text-2xl font-extrabold text-indigo-50 leading-snug mb-2 truncate">Paciente:</h3>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Consulta: </div>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Nascimento: </div>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Médico: </div>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Data da Consulta: </div>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Hora da Consulta: </div>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2 truncate">Observação: </div>
                            </div>
                        </div>

                    </div>
                    <div class="h-200 w-200">
                        <div class="relative bg-blue-300 shadow-lg rounded-lg shadow-lg p-5 overflow-hidden">
                            <!-- Card content -->
                            <div class="relative pt-[1.5rem] pb-14">
                                <h3 class="text-2xl font-extrabold text-indigo-50 leading-snug mb-2 truncate">Paciente:</h3>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Consulta: </div>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Nascimento: </div>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Médico: </div>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Data da Consulta: </div>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Hora da Consulta: </div>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2 truncate">Observação: </div>
                            </div>
                        </div>

                    </div>
                    <div class="h-200 w-200">
                        <div class="relative bg-blue-300 shadow-lg rounded-lg shadow-lg p-5 overflow-hidden">
                            <!-- Card content -->
                            <div class="relative pt-[1.5rem] pb-14">
                                <h3 class="text-2xl font-extrabold text-indigo-50 leading-snug mb-2 truncate">Paciente:</h3>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Consulta: </div>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Nascimento: </div>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Médico: </div>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Data da Consulta: </div>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Hora da Consulta: </div>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2 truncate">Observação: </div>
                            </div>
                        </div>

                    </div>
                    <div class="h-200 w-200">
                        <div class="relative bg-blue-300 shadow-lg rounded-lg shadow-lg p-5 overflow-hidden">
                            <!-- Card content -->
                            <div class="relative pt-[1.5rem] pb-14">
                                <h3 class="text-2xl font-extrabold text-indigo-50 leading-snug mb-2 truncate">Paciente:</h3>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Consulta: </div>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Nascimento: </div>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Médico: </div>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Data da Consulta: </div>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Hora da Consulta: </div>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2 truncate">Observação: </div>
                            </div>
                        </div>

                    </div>
                    <div class="h-200 w-200">
                        <div class="relative bg-blue-300 shadow-lg rounded-lg shadow-lg p-5 overflow-hidden">
                            <!-- Card content -->
                            <div class="relative pt-[1.5rem] pb-14">
                                <h3 class="text-2xl font-extrabold text-indigo-50 leading-snug mb-2 truncate">Paciente:</h3>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Consulta: </div>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Nascimento: </div>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Médico: </div>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Data da Consulta: </div>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Hora da Consulta: </div>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2 truncate">Observação: </div>
                            </div>
                        </div>
                    </div>
                    <div class="h-200 w-200">
                        <div class="relative bg-blue-300 shadow-lg rounded-lg shadow-lg p-5 overflow-hidden">
                            <!-- Card content -->
                            <div class="relative pt-[1.5rem] pb-14">
                                <h3 class="text-2xl font-extrabold text-indigo-50 leading-snug mb-2 truncate">Paciente:</h3>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Consulta: </div>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Nascimento: </div>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Médico: </div>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Data da Consulta: </div>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2">Hora da Consulta: </div>
                                <div class="text-xs font-bold uppercase text-blue-900 tracking-widest mb-2 truncate">Observação: </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @include('footer')
        </div></div>
</body>

</html>