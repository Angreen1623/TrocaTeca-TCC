<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprovante</title>
    <style>
        
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #c0d3f7;
            color: #000000; 
            height: 100%;
            box-sizing: border-box;
            display: flex;
            flex-direction: column; 
            justify-content: center; 
            text-align: center;
        }

        
        .content {
            padding: 40px;
            width: 100%;
            max-width: 600px; 
            margin: auto; 
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); 
            flex-grow: 1; 
        }

      
        .title {
            font-size: 42px; 
            margin-bottom: 16px; 
            font-weight: bold; 
            color: white; 
        }

        .section-title {
            font-size: 32px; 
            margin-top: 20px;
            margin-bottom: 8px; 
            font-weight: bold; 
        }

        .warning {
            color: #ef4444; 
            font-size: 20px; 
            margin-top: 20px; 
            font-weight: bold;
        }

        
        .text {
            margin-top: 4px;
            font-size: 26px; 
            margin-bottom: 12px; 
        }

    
        .divider {
            margin: 16px 0;
            border: 1px solid #000; 
        }

        footer {
            text-align: center;
            font-size: 18px; 
            margin-top: -25px; 
        }

        footer p {
            color: #777;
        }

        .logo {
            height: 190px;
            width: 380px;
        }
    </style>
</head>

<body>

    <div class="content">
    <img src="{{ public_path('image/logo-full.png') }}" class="logo">
        <h1 class="title">Comprovante de Troca</h1>
        <hr class="divider">

        <h1 class="section-title">Nome dos envolvidos</h2>
        <p class="text">{{ $acordo->proposta->artigo->user->name }} {{ $acordo->proposta->artigo->user->sobrenome }}</p>
        <p class="text">{{ $acordo->proposta->user->name }} {{ $acordo->proposta->user->sobrenome }}</p>

        <h1 class="section-title">Artigos trocados</h2>
        <p class="text">{{ $acordo->proposta->artigo->nome_artigo }}</p>
        <p class="text">{{ $acordo->anuncio }}</p>

        <h1 class="section-title">Local e data de encontro</h2>
        <p class="text">{{ $acordo->local_encontro }}</p>
        <p class="text">{{ \Carbon\Carbon::parse($acordo->data_encontro)->format('d/m/Y') }}</p> 

        <h1 class="divider">
        <p class="text">O presente comprovante atesta que os itens descritos acima foram trocados entre os referidos usuários, sendo o processo validado por ambas as partes e decorrido com sucesso, sem maiores adversidades.</p>
        <h2 class="warning">Este comprovante não possui nenhum valor fiscal.</h2>
    </div>

    <footer>
        <p>Infância com sustentabilidade e reusabilidade</p>
        <p>&copy; TrocaTeca {{ date('Y') }}</p>
    </footer>

</body>
</html>
