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

<body class="bg-backgtt" data-authenticated="{{ auth()->check() }}">
    <div class="h-full min-h-screen relative">
        @include('adm.navbar')

        <div class="flex place-content-center flex-col flex-wrap lg:flex-row my-16 mr-0 xl:mr-36">

            <div>
                <div class="mb-5 lg:mb-0 flex justify-center mx-10">
                    <div class="relative">
                        <div class="carousel w-full">
                            <div class="w-96 h-96 overflow-hidden rounded-lg border-2 border-black">
                                <div class="first:block h-full hidden duration-700 ease-in-out">
                                    <img src="{{ asset($denuncia->denuncia_usuario->endereco_img_denun) }}" class="h-full object-cover" alt="Imagem da print" width="500">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col">
                <div class="flex flex-col lg:flex-wrap lg:flex-row lg:justify-between lg:mx-0 mx-auto">
                    <div>
                        <div class="lg:ml-5 flex flex-col max-w-80 w-full mb-4 lg:mb-0">
                            <div class="lg:mb-0 mb-5">
                                <div class="border-b border-black text-4xl font-fredokatt overflow-hidden text-nowrap hover:overflow-x-auto" style="font-family: 'Fredoka';">
                                    Denúncia de: {{ $denuncia->denuncia_usuario->user->name }}
                                </div>
                                <div class="text-lg">
                                    <p class="text-graytt">Mensagem da Denúncia: <span class="text-black">{{ $denuncia->mensagem_denun }}</span></p>
                                </div>
                            </div>
                        </div>



                    </div>

                </div>
                <div class="flex items-end h-full gap-5">
                    <a href="{{ route('ignore', ['id' => $denuncia->id]) }}" class="inline-flex px-4 py-2 h-fit justify-center w-full lg:w-auto bg-white border-2 border-black text-sm font-medium rounded-2xl transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 duration-300">
                        Ignorar
                    </a>
                    <a href="{{ route('advert', ['id' => $denuncia->id]) }}" class="inline-flex px-4 py-2 h-fit justify-center w-full lg:w-auto bg-yellowtt-light border-2 border-black text-sm font-medium rounded-2xl transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 duration-300">
                        Adverter
                    </a>
                    <a href="{{ route('inactivate', ['id' => $denuncia->id]) }}" class="inline-flex px-4 py-2 h-fit justify-center w-full lg:w-auto bg-black border-2 border-black text-white text-sm font-medium rounded-2xl transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 duration-300">
                        Inativar usuário
                    </a>
                </div>

            </div>
        </div>

    </div>

    </div>

    <script>
        //inclusão do modal de denunciar
        document.addEventListener('DOMContentLoaded', function() {
            const isAuthenticated = document.body.getAttribute('data-authenticated') === '1';
        })
    </script>

</body>

</html>