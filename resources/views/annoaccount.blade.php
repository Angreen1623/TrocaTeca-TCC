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
            <div id="paralax" class="bg-yellowtt-light">
                <div class="max-w-screen-xl py-20 px-6 mx-auto overflow-hidden sm:px-8 md:px-10 items-center flex flex-col md:flex-row place-content-between">
                    <h2 class="text-3xl drop-shadow-tt text-center md:text-left text-white sm:text-6xl mb-3 md:hidden" style="font-family: 'Fredoka';">
                    {{ $user->name }} {{ $user->sobrenome }}
                    </h2>
                    <div class="mb-5 order-2 md:order-1">
                        <div class="mb-16 flex flex-col justify-center items-center md:items-start max-w-3xl md:mt-0">
                            <h2 class="text-3xl drop-shadow-tt text-center md:text-left text-white sm:text-6xl mb-3 hidden md:block" style="font-family: 'Fredoka';">
                            {{ $user->name }} {{ $user->sobrenome }}
                            </h2>
                            <p class="text-black text-md text-center md:text-left mb-1.5">Descrição de interesses:</p>
                            <p class="text-graytt mb-1">Estou interessado em carrinhos de bebê para um bebê de 5 meses; Brinquedos. </p>
                        </div>
                        <div class="flex flex-col justify-center items-center md:items-start max-w-3xl md:mt-0">
                            <p>Trocando desde: {{ $user->created_at->format('Y') }}</p>
                            <p>Nº de trocas bem-sucedidas: **</p>
                        </div>
                    </div>

                    <div class="order-1 md:order-2 flex place-content-center h-fit mb-6 md:mb-0">
                        <label for="perfil" class="rounded-full w-44 h-44 flex border border-black overflow-hidden">
                            <img src="{{ asset('image/reginaldo.jpg') }}" alt="">
                        </label>
                    </div>
                </div>
            </div>
            <div class="bg-repeat bg-[url('/public/image/triangulo-amarelo.svg')] w-full h-8 -mt-px bg-backgtt mb-10"></div>
        </div>
        <!--aqui começa a parte dos anúncios do anunciante-->
        <div class="z-10 relative">
            <div id="mt-paralax" class="bg-repeat bg-[url('/public/image/triangulo-bege.svg')] rotate-180 w-full h-8 -mt-px bg-transparent"></div>
            <div class="space-y-8 overflow-hidden sm:px-6 lg:px-8 bg-backgtt w-full">
                <div class="max-w-screen-xl px-4 mx-auto">
                    <div class="lg:flex lg:justify-between lg:items-center flex flex-col-reverse lg:flex-row mb-5">
                        <div class="mb-7 flex flex-col justify-center items-center lg:items-start space-y-4 max-w-3xl lg:mt-0 lg:order-1">
                            <h2 class="ml-5 mt-7 text-3xl text-center lg:text-left text-black sm:text-4xl" style="font-family: 'Fredoka';">
                                Artigos publicados
                            </h2>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 justify-items-center">
                        @foreach($artigos as $artg)
                        <div class="group my-1 flex w-full max-w-[260px] flex-col overflow-hidden rounded-xl border border-graytt-light shadow-tt bg-white transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300">
                            <a href="/viewannounce/{{$artg->id}}">
                                <div class="relative mx-3 mt-3 flex h-48 overflow-hidden rounded-xl border-2 border-black">
                                    @foreach($artg->imagens as $imagem)
                                    @if($imagem->imagem_principal)
                                    <img class="peer absolute top-0 right-0 h-full w-full object-cover" src="{{ asset($imagem->endereco_imagem) }}" alt="{{ $artg->nome_artigo }}">
                                    @endif
                                    @endforeach
                                </div>
                                <div class="mt-4 px-5 pb-5">
                                    <p class="truncate lg:text-left lg:mt-2 text-black">{{$artg->nome_artigo}}</p>
                                    <p class="truncate lg:text-left lg:mt-2 text-stone-400">{{$artg->categoria_artigo}}</p>
                                    @if($artg->valor_sugerido_artigo)
                                    <div class="mt-2 flex items-center">
                                        <p>
                                            <span class="truncate lg:text-left lg:mt-2 text-black">Valor Sugerido:</span>
                                            <span class="text-1xl md:text-1xl lg:text-lg ml-2 font-bold text-pinktt">R${{$artg->valor_sugerido_artigo}}</span>
                                        </p>
                                    </div>
                                    @endif
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                @include('footer')
            </div>
        </div>
    </div>

    <script>
        var mt_paralax = document.getElementById("mt-paralax");
        var paralax = document.getElementById('paralax');

        mt_paralax.style.marginTop = paralax.offsetHeight - 32 + "px";

        window.addEventListener('resize', screenResize);

        function screenResize() {
            mt_paralax.style.marginTop = paralax.offsetHeight - 32 + "px";
        }
    </script>
</body>

</html>