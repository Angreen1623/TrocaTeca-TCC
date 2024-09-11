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

    @if(isset($denuncias))
        @foreach($denuncias as $denun)

            <div class="flex flex-col ml-2 w-32">
                <div class="flex">
                @if($denun->denuncia_usuario)
                    denunciado: {{ $denun->denuncia_usuario->user->name }}
                    <br>
                    <img src="{{ asset($denun->denuncia_usuario->endereco_img_denun) }}" alt="">
                    <br>
                @endif

                @if($denun->denuncia_artigo)
                    Artigo: {{ $denun->denuncia_artigo->artigo->nome_artigo }}
                    <br>
                @endif

                {{ $denun->mensagem_denun }}

                </div>

                <div class="flex">
                    <a href="{{ route('ignore', ['id' => $denun->id]) }}">Ignorar</a>
                    @if($denun->denuncia_artigo)
                    <a href="{{ route('exclude', ['id' => $denun->id]) }}">Excluir anuncio</a>
                    @endif
                    @if($denun->denuncia_usuario)
                    <a href="{{ route('inactivate', ['id' => $denun->id]) }}">Inativar</a>
                    <a href="{{ route('advert', ['id' => $denun->id]) }}">Adverter trocador</a>
                    @endif
                </div>
            </div>

        @endforeach
    @endif
    
</body>
</html>
