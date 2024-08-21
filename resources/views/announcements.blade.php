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
        <div class="space-y-8 overflow-hidden sm:px-6 lg:px-8 bg-backgtt w-full">
            <div class="max-w-screen-xl px-4 mx-auto">


                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 justify-items-center mt-10">

                    <!--Card do anúncio-->
                    @if(isset($artigo))
                    @foreach($artigo as $artg)
                    @if(!auth()->check() || $artg->id_usuario_ofertante != auth()->user()->id)
                    <div class="group my-1 flex w-full max-w-[260px] flex-col overflow-hidden rounded-xl border border-graytt-light shadow-tt bg-white transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300">
                        <a href="/viewannounce/{{$artg->id}}">
                            <div class="relative mx-3 mt-3 flex h-48 overflow-hidden rounded-xl border-2 border-black">
                                @foreach($artg->imagens as $imagem)
                                @if($imagem->imagem_principal)
                                <img class="peer absolute top-0 right-0 h-full w-full object-cover" loading="lazy" src="{{ asset($imagem->endereco_imagem) }}">
                                @endif
                                @endforeach
                                @if(isset($artg->imagens[1]))
                                <img class="peer absolute top-0 -right-96 h-full w-full object-cover transition-all delay-100 duration-1000 hover:right-0 peer-hover:right-0" src="{{ asset($artg->imagens[1]->endereco_imagem) }}" alt="Imagem do Produto" />
                                @endif
                            </div>
                            <div class="mt-4 px-5 pb-5">
                                <p class="truncate lg:text-left lg:mt-2 text-black">{{$artg->nome_artigo}}</p>

                                <p class="truncate lg:text-left lg:mt-2 text-stone-400">{{$artg->categoria_artigo}}</p>

                                @if($artg->valor_sugerido_artigo)
                                <div class="mt-2 flex items-center">
                                    <p>
                                        <span class="truncate lg:text-left lg:mt-2 text-black">Valor Sugerido:
                                    </p>
                                    <span class="text-1xl md:text-1xl lg:text-lg ml-2 font-bold text-pinktt">R${{$artg->valor_sugerido_artigo}}</span>
                                    </p>
                                </div>
                                @endif
                            </div>
                        </a>
                    </div>
                    @endif
                    @endforeach

                    @else

                    <div class="mb-7 flex flex-col justify-center items-center lg:items-start space-y-4 max-w-3xl lg:mt-0 lg:order-1">
                        <h2 class="ml-5 mt-7 text-3xl  text-center lg:text-left text-black sm:text-4xl" style="font-family: 'Fredoka';">
                            Nenhum artigo encontrado.
                        </h2>
                    </div>

                    @endif
                </div>
            </div>
            @include('footer')
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