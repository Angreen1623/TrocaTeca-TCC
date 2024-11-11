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
                                Mensagens e Propostas
                            </h2>

                        </div>
                    </div>
                    <hr class="h-px bg-black border-2 border-black">

                    @if(count($propostas) > 0)
                    @foreach($propostas as $proposta)

                    <div class="grid grid-cols-1 gap-4 justify-items-center">

                        <div class="w-full max-w-48 mt-6 mb-9 sm:max-w-none">
                            
                            <a 
                            @if($proposta->user->id == Auth()->user()->id && $proposta->status_proposta == 0)
                            class="pointer-events-none cursor-default"
                            @else
                            href="/chat/{{ $proposta->id }}"
                            @endif
                            >

                            <div class="flex flex-col sm:flex-row gap-3 bg-white rounded-3xl overflow-hidden items-center justify-start border-2 border-graytt-light shadow-tt transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 duration-300">
                                @if($proposta->user->id == Auth()->user()->id)

                                    <div class="flex justify-center w-full sm:w-auto">

                                        @if($proposta->artigo->user->imagem_usuario)
                                        <div class="ml-3 mt-3 mb-3 overflow-hidden relative w-20 h-20 flex-shrink-0 border-2 border-graytt-light rounded-full">
                                            <img class="rounded-full w-full h-full object-cover object-center transition duration-50" loading="lazy" src="{{ asset($proposta->artigo->user->imagem_usuario) }}">
                                        </div>
                                        
                                        @else
                                        <div class="ml-3 mt-3 mb-3 overflow-hidden relative w-20 h-20 flex-shrink-0 rounded-full">
                                            <svg class="rounded-full w-full h-full object-cover object-center transition duration-50" fill="#000000" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M 27.9999 51.9063 C 41.0546 51.9063 51.9063 41.0781 51.9063 28 C 51.9063 14.9453 41.0312 4.0937 27.9765 4.0937 C 14.8983 4.0937 4.0937 14.9453 4.0937 28 C 4.0937 41.0781 14.9218 51.9063 27.9999 51.9063 Z M 27.9999 35.9922 C 20.9452 35.9922 15.5077 38.5 13.1405 41.3125 C 9.9999 37.7968 8.1014 33.1328 8.1014 28 C 8.1014 16.9609 16.9140 8.0781 27.9765 8.0781 C 39.0155 8.0781 47.8983 16.9609 47.9219 28 C 47.9219 33.1563 46.0234 37.8203 42.8593 41.3359 C 40.4921 38.5234 35.0546 35.9922 27.9999 35.9922 Z M 27.9999 32.0078 C 32.4999 32.0547 36.0390 28.2109 36.0390 23.1719 C 36.0390 18.4375 32.4765 14.5 27.9999 14.5 C 23.4999 14.5 19.9140 18.4375 19.9609 23.1719 C 19.9843 28.2109 23.4765 31.9609 27.9999 32.0078 Z"></path></g></svg>
                                        </div>
                                        @endif
                                            
                                    </div>

                                    <div class="max-w-56 flex flex-col gap-2 py-2 w-full text-center sm:text-left sm:flex-1">
                                        <p class="truncate text-black text-xs sm:text-lg md:text-xl lg:text-2xl xl:text-3xl">{{ $proposta->artigo->user->name }}</p>
                                        <p class="truncate text-black text-xs sm:text-sm md:text-base lg:text-base xl:text-lg">Estado: {{$proposta->artigo->user->estado}}</p>
                                        <p class="truncate text-black text-xs sm:text-sm md:text-base lg:text-base xl:text-lg">Cidade: {{$proposta->artigo->user->cidade}}</p>
                                    </div>

                                @else

                                    <div class="flex justify-center w-full sm:w-auto">
                                        @if($proposta->user->imagem_usuario)
                                        <div class="ml-3 mt-3 mb-3 overflow-hidden relative w-20 h-20 flex-shrink-0 border-2 border-graytt-light rounded-full">
                                            <img class="rounded-full w-full h-full object-cover object-center transition duration-50" loading="lazy" src="{{ asset($proposta->user->imagem_usuario) }}">
                                        </div>
                                        
                                        @else
                                        <div class="ml-3 mt-3 mb-3 overflow-hidden relative w-20 h-20 flex-shrink-0 rounded-full">
                                            <svg class="rounded-full w-full h-full object-cover object-center transition duration-50" fill="#000000" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M 27.9999 51.9063 C 41.0546 51.9063 51.9063 41.0781 51.9063 28 C 51.9063 14.9453 41.0312 4.0937 27.9765 4.0937 C 14.8983 4.0937 4.0937 14.9453 4.0937 28 C 4.0937 41.0781 14.9218 51.9063 27.9999 51.9063 Z M 27.9999 35.9922 C 20.9452 35.9922 15.5077 38.5 13.1405 41.3125 C 9.9999 37.7968 8.1014 33.1328 8.1014 28 C 8.1014 16.9609 16.9140 8.0781 27.9765 8.0781 C 39.0155 8.0781 47.8983 16.9609 47.9219 28 C 47.9219 33.1563 46.0234 37.8203 42.8593 41.3359 C 40.4921 38.5234 35.0546 35.9922 27.9999 35.9922 Z M 27.9999 32.0078 C 32.4999 32.0547 36.0390 28.2109 36.0390 23.1719 C 36.0390 18.4375 32.4765 14.5 27.9999 14.5 C 23.4999 14.5 19.9140 18.4375 19.9609 23.1719 C 19.9843 28.2109 23.4765 31.9609 27.9999 32.0078 Z"></path></g></svg>
                                        </div>
                                        @endif
                                    </div>

                                    <div class="max-w-56 flex flex-col gap-2 py-2 w-full text-center sm:text-left sm:flex-1">
                                        <p class="truncate text-black text-xs sm:text-lg md:text-xl lg:text-2xl xl:text-3xl">{{ $proposta->user->name }}</p>
                                        <p class="truncate text-black text-xs sm:text-sm md:text-base lg:text-base xl:text-lg">Estado: {{$proposta->user->estado}}</p>
                                        <p class="truncate text-black text-xs sm:text-sm md:text-base lg:text-base xl:text-lg">Cidade: {{$proposta->user->cidade}}</p>
                                    </div>

                                @endif

                                    <div class="max-w-46 sm:flex sm:flex-col sm:gap-2 sm:py-2 sm:border-l sm:border-black sm:pl-4 sm:flex-1 sm:truncate">
                                        <p class="text-center sm:text-left mb-2 sm:truncate text-black text-xs sm:text-sm md:text-base lg:text-base xl:text-lg">Anúncio: {{ $proposta->artigo->nome_artigo }}</p>
                                        <p class="sm:truncate text-center sm:text-left text-black text-xs sm:text-sm md:text-base lg:text-base xl:text-lg">Proposta: {{ $proposta->nome_proposta }}</p>
                                    </div>
                                    @if($proposta->status_proposta == 0)
                                    <div class="flex place-content-end w-full sm:w-auto sm:h-20 items-end mr-6">
                                        <p class="mr-2 mb-0.5 text-black text-xs hidden lg:block">Proposta pendente</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                                        </svg>
                                    </div>
                                    @elseif($proposta->status_proposta == 1)
                                    <div class="flex place-content-end w-full sm:w-auto sm:h-20 items-end mr-6">
                                        <p class="mr-2 mb-0.5 text-black text-xs hidden lg:block">Proposta em andamento</p>
                                        <svg class="mb-3 sm:mb-0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" zoomAndPan="magnify" viewBox="0 0 810 809.999993" height="20" preserveAspectRatio="xMidYMid meet" version="1.0">
                                            <path fill="#fff500" d="M 405 0 C 628.675781 0 810 181.324219 810 405 C 810 628.675781 628.675781 810 405 810 C 181.324219 810 0 628.675781 0 405 C 0 181.324219 181.324219 0 405 0 Z M 405 0 " fill-opacity="1" fill-rule="evenodd" />
                                        </svg>
                                    </div>
                                    @elseif($proposta->status_proposta == 2)
                                    <div class="flex place-content-end w-full sm:w-auto sm:h-20 items-end mr-6">
                                        <p class="mr-2 mb-0.5 text-black text-xs hidden lg:block">Proposta finalizada</p>
                                        <svg class="mb-3 sm:mb-0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" zoomAndPan="magnify" viewBox="0 0 810 809.999993" height="20" preserveAspectRatio="xMidYMid meet" version="1.0">
                                            <path fill="#00BF63" d="M 405 0 C 628.675781 0 810 181.324219 810 405 C 810 628.675781 628.675781 810 405 810 C 181.324219 810 0 628.675781 0 405 C 0 181.324219 181.324219 0 405 0 Z M 405 0 " fill-opacity="1" fill-rule="evenodd" />
                                        </svg>
                                    </div>
                                    @elseif($proposta->status_proposta == 3)
                                    <div class="flex place-content-end w-full sm:w-auto sm:h-20 items-end mr-6">
                                        <p class="mr-2 mb-0.5 text-black text-xs hidden lg:block">Proposta Cancelada</p>
                                        <svg class="mb-3 sm:mb-0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" zoomAndPan="magnify" viewBox="0 0 810 809.999993" height="20" preserveAspectRatio="xMidYMid meet" version="1.0">
                                            <path fill="#ff3131" d="M 405 0 C 628.675781 0 810 181.324219 810 405 C 810 628.675781 628.675781 810 405 810 C 181.324219 810 0 628.675781 0 405 C 0 181.324219 181.324219 0 405 0 Z M 405 0 " fill-opacity="1" fill-rule="evenodd" />
                                        </svg>
                                    </div>
                                    @endif
                                </div>
                            </a>
                        </div>
                    </div>

                    @endforeach
                    @else
                    <div class="mb-7 mt-10 flex flex-col justify-center items-center space-y-4 max-w-3xl w-full mx-auto">
                        <h3 class="mt-7 text-2xl text-center text-black sm:text-4xl" style="font-family: 'Fredoka';">
                            OPS! Nenhuma proposta encontrada
                        </h3>
                        <p class="text-center whitespace-pre-line">
                            Comece uma conversa enviando ou recebendo uma proposta.
                        </p>
                    </div>
                    @endif

                    <div class="flex gap-5 justify-center my-5">
                        {{ $propostas->links() }}
                    </div>
                </div>
            </div>
        </div>
        @include('footer')
    </div>


</body>

</html>
