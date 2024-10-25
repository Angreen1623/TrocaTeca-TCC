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
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 justify-items-center mt-20">
        @foreach($denuncias as $denun)
            <div class="group my-1 flex w-full max-w-[260px] h-full flex-col overflow-hidden rounded-xl border border-graytt-light shadow-tt bg-white transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300">
                <a href="{{ route('adm.chat', ['id' => $denun->id]) }}">
                    
                <div class="relative mx-3 mt-3 flex h-48 overflow-hidden rounded-xl border-2 border-black">
                                <img class="peer absolute top-0 right-0 h-full w-full object-cover" loading="lazy" src="{{ asset($denun->denuncia_usuario->endereco_img_denun) }}">
                            </div>
                            <div class="mt-4 px-5 pb-5">
                                <p class="truncate lg:text-left lg:mt-2 text-black">
                                    <span>Denunciado:</span>
                                    <span>{{ $denun->denuncia_usuario->user->name }}</span>
                                </p>
                                <p class="truncate lg:text-left lg:mt-2 text-black">
                                    <span>Denunciante:</span>
                                    <span>{{ $denun->user->name }}</span>
                                </p>
                                <div class="mt-2 flex items-center">
                                    <p class="truncate">
                                        <span class="lg:text-left lg:mt-2 text-black">Denunciado em:</span>
                                        <span class="text-1xl md:text-1xl lg:text-lg ml-2 font-bold text-pinktt">{{$denun->created_at}}</span>
                                    </p>
                                </div>
                            </div>

                </a>
            </div>
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