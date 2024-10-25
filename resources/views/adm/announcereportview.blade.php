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
        @include('adm.navbar')

        <div class="w-full">

            @if(isset($denuncias))
            <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 gap-4 justify-items-center items-center mt-20">
                @foreach($denuncias as $denun)
                @if($denun->denuncia_artigo)
                <div class="group my-1 flex w-full max-w-[260px] h-full flex-col rounded-xl border border-graytt-light shadow-tt bg-white transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300">
                    <div class="relative z-10">
                        <div class="absolute flex items-center justify-center bg-redtt w-9 h-9 rounded-full -left-[25px] -top-[25px] transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-110 duration-300">
                            <span class="text-white font-medium text-lg text-report">
                                {{$denun->total_denuncias}}
                            </span>
                        </div>
                    </div>

                    <a href="/viewannounce/{{$denun->denuncia_artigo->artigo->id}}/{{$denun->id}}">

                        <div class="relative mx-3 mt-3 flex h-48 overflow-hidden rounded-xl border-2 border-black">
                            @foreach($denun->denuncia_artigo->artigo->imagens as $imagem)
                            @if($imagem->imagem_principal)
                            <img class="peer absolute top-0 right-0 h-full w-full object-cover" loading="lazy" src="{{ asset($imagem->endereco_imagem) }}">
                            @endif
                            @endforeach
                            @if(isset($denun->denuncia_artigo->artigo->imagens[1]))
                            <img class="peer absolute top-0 -right-96 h-full w-full object-cover transition-all delay-100 duration-1000 hover:right-0 peer-hover:right-0" src="{{ asset($denun->denuncia_artigo->artigo->imagens[1]->endereco_imagem) }}" alt="Imagem do Produto" />
                            @endif
                        </div>
                        <div class="mt-4 px-5 pb-5">
                            <p class="truncate lg:text-left lg:mt-2 text-black">{{$denun->denuncia_artigo->artigo->nome_artigo}}</p>
                            <p class="truncate lg:text-left lg:mt-2 text-stone-400">{{$denun->denuncia_artigo->artigo->categoria_artigo}}</p>
                            @if($denun->denuncia_artigo->artigo->valor_sugerido_artigo)
                            <div class="mt-2 flex items-center">
                                <p>
                                    <span class="truncate lg:text-left lg:mt-2 text-black">Valor Sugerido:</span>
                                    <span class="truncate text-1xl md:text-1xl lg:text-lg ml-2 font-bold text-pinktt">R${{$denun->denuncia_artigo->artigo->valor_sugerido_artigo}}</span>
                                </p>
                            </div>
                            @endif
                        </div>

                    </a>
                </div>
                @endif
                @endforeach
            </div>

            <div class="flex gap-5 justify-center mt-8">
                {{ $denuncias->links() }}
            </div>
            @else
            <div class="mb-7 mt-10 flex flex-col justify-center items-center space-y-4 max-w-3xl w-full mx-auto">
                <h3 class="mt-7 text-2xl text-center text-black sm:text-4xl" style="font-family: 'Fredoka';">
                    OPS! Nenhuma denúncia foi feita
                </h3>
            </div>
            @endif

        </div>

    </div>

</body>

</html>