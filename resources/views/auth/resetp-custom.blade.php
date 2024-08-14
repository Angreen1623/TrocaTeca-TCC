<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logar-se</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #C0D3F7;
            /* Cor do quadrado */
            width: 100%;
            max-width: 600px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            border: 2px solid #ccc;
            /* Adiciona um contorno ao redor do conteúdo */
            border-radius: 10px;
            /* Opcional: adiciona bordas arredondadas ao quadrado */
        }

        header img {
            width: 150px;
            height: 50px;
        }

        header h1 {
            font-family: 'Fredoka', sans-serif;
            margin: 20px 0;
            color: white;
            /* Cor do título */
        }

        p {
            font-size: 16px;
            margin: 15px 0;
            color: black;
            /* Cor do texto */
        }

        a {
            display: inline-block;
            background-color: #D67D93;
            /* Nova cor do botão */
            color: white !important;
            /* Cor do texto do botão */
            padding: 10px 20px;
            border-radius: 20px;
            text-decoration: none;
            margin-top: 20px;
            font-weight: bold;
        }

        footer p {
            font-size: 14px;
            color: #777;
            /* Cor do texto do rodapé */
            margin: 10px 0;
        }

        .highlight {
            color: black;
            /* Cor do texto em negrito */
            font-weight: bold;
        }

        .logo {
            height: 150px;
            width: 300px;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <img src="https://i.im.ge/2024/07/21/VRpmGK.logo-full.png" class="logo">
            <h1>Redefinição de senha</h1>
        </header>

        <div class="content">
            <p>Clique no botão abaixo para prosseguir com a sua redefinição de senha</p>

            <a href="{{ $url }}">Redefinir minha senha</a>
            <p class="highlight">Por favor, ignore este e-mail caso não tenha solicitado uma redefinição de senha.</p>
        </div>

        <footer>
            <p>Infância com sustentabilidade e reusabilidade</p>
            <p>&copy; TrocaTeca {{ date('Y') }}</p>
        </footer>
    </div>
</body>

</html>