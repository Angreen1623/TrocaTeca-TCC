<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <nav class="border-b boder-2"> <a href="{{ route('adm') }}">Gerenciar denúncias</a> <a href="{{ route('adm.announces') }}" class="ml-3">Ver anúncios</a></nav>

    @if(count($artigo) > 0)
    <div class="max-w-screen-xl px-4 mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 justify-items-center mt-14">

            @php

            $maxpage = ceil(count($artigo)/4);
            $show_number = 4 * $page;
            $i = $show_number-4;

            @endphp

            @for($i; $i < $show_number; $i++)

                @if(isset($artigo[$i]))

                <div class="group my-1 flex w-full max-w-[260px] flex-col overflow-hidden rounded-xl border border-graytt-light shadow-tt bg-white transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300">
                <a href="/viewannounce/{{$artigo[$i]->id}}">
                    <div class="relative mx-3 mt-3 flex h-48 overflow-hidden rounded-xl border-2 border-black">
                        @foreach($artigo[$i]->imagens as $imagem)
                        @if($imagem->imagem_principal)
                        <img class="peer absolute top-0 right-0 w-full object-cover" loading="lazy" src="{{ asset($imagem->endereco_imagem) }}">
                        @endif
                        @endforeach
                    </div>
                    <div class="mt-4 px-5 pb-5">
                        <p class="truncate lg:text-left lg:mt-2 text-black">{{$artigo[$i]->nome_artigo}}</p>

                        <p class="truncate lg:text-left lg:mt-2 text-stone-400">{{$artigo[$i]->categoria_artigo}}</p>

                        @if($artigo[$i]->valor_sugerido_artigo)
                        <div class="mt-2 flex items-center">
                            <p>
                                <span class="truncate lg:text-left lg:mt-2 text-black">Valor Sugerido:
                            </p>
                            <span class="truncate text-1xl md:text-1xl lg:text-lg ml-2 font-bold text-pinktt">R${{$artigo[$i]->valor_sugerido_artigo}}</span>
                            </p>
                        </div>
                        @endif
                    </div>
                </a>
                </div>

                @endif
            @endfor

        </div>

        <div class="flex gap-5 justify-center mt-8">
            @for($i = 1; $i <= $maxpage; $i++)

                <a href="{{ route('adm.announces', ['page' => $i]) }}">{{ $i }}</a>

            @endfor
        </div>

    </div>
    @endif

</body>

</html>