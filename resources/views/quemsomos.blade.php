@vite('resources/css/app.css')
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem Somos</title>
</head>

<body class="bg-backgtt">
    @include('navbar')
    <!--O q é tt-->
    
    
        <div class="bg-yellowtt-light bg-fixed">
            <div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
                <div class="md:flex">
                    <nav class="flex flex-wrap -my-2 max-w-xl content-center">

                        <h2 class="text-4xl drop-shadow-tt mb-2 text-left text-white sm:text-6xl font-fredokatt">O que é o TrocaTeca?</h2>
                        <p class="mt-2 text-black text-left">O TrocaTeca é um ambiente que visa a intermediação entre alguém que precisa se desfazer de um artigo infantil usado e alguém que precisa obter um artigo infantil. Afinal, o que não serve mais para você, pode servir para alguém, e o que não serve mais para alguém, pode servir para você!</p>
                    </nav>

                    <div class="w-full flex justify-end mt-4">
                        <img src="{{ asset('image/logo.png') }}" alt="Logo do TrocaTeca" width="400" class="animate-rotate-left-right">
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-repeat bg-[url('/public/image/triangulo-verde.svg')] w-full h-8 -mt-px rotate-180 bg-yellowtt-light"></div>
 
    <!--Como funciona-->
    <div class="bg-greentt">
        <div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
            <div class="md:flex">
                <div class="w-full flex justify-start mt-4">
                    <img src="{{ asset('image/logo.png') }}" alt="Logo do TrocaTeca" width="400">
                </div>
                <nav class="flex flex-wrap -my-2 max-w-xl content-center">
                    <h2 class="text-4xl drop-shadow-tt mb-2 text-right text-white sm:text-6xl" style="font-family: 'Fredoka'">Como funciona?</h2>
                    <p class="mt-2 text-black text-left">Qualquer usuário, a partir do momento que tenha um cadastro, pode ver e anunciar os artigos infantis que se tornaram inservíveis para o uso, seja porque a criança cresceu, ou porque simplesmente enjoou. A ideia é encontrar interessados nesses artigos que estejam dispostos a trocar algum outro item que ele tenha pelo artigo anunciado.</p>
                </nav>
            </div>
        </div>
    </div>

    <div class="bg-repeat bg-[url('/public/image/triangulo-rosa.svg')] w-full h-8 -mt-px rotate-180 bg-greentt"></div>
    <!--Como funciona2-->
    <div class="bg-pinktt">
        <div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
            <div class="md:flex">
                <nav class="flex flex-wrap -my-2 max-w-3xl content-center">
                    <h2 class="text-4xl drop-shadow-tt mb-2 text-left text-white sm:text-6xl" style="font-family: 'Fredoka'">Posso comprar os artigos?</h2>
                    <p class="mt-2 text-bacl text-left">O TrocaTeca é uma plataforma dedicada única e exclusivamente para trocas, então não é possível fazer qualquer tipo de compra ou transação monetária. No máximo, é permitido informar um valor sugerido de seu artigo ao anunciá-lo, para que outros usuários possam oferecer algo de valor aproximado para a troca.</p>
                </nav>

                <div class="w-full flex justify-end mt-4">
                    <img src="{{ asset('image/cifrao.png') }}" alt="Logo do TrocaTeca" width="250" class="animate-rotate-left-right">
                </div>

            </div>
        </div>
    </div>

    <div class="bg-repeat bg-[url('/public/image/triangulo-bege.svg')] w-full h-8 -mt-px rotate-180 bg-pinktt"></div>
    <!--Como funciona-->
    <div class="bg-backgtt">
        <div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
            <div class="md:flex">
                <div class="w-full flex justify-start mt-4">
                    <img src="{{ asset('image/chat.png') }}" alt="Logo do TrocaTeca" width="300" class="animate-rotate-left-right">
                </div>
                <nav class="flex flex-wrap -my-2 max-w-xl content-center">
                    <h2 class="text-4xl drop-shadow-tt mb-2 text-right text-black sm:text-6xl" style="font-family: 'Fredoka'">Negociação</h2>
                    <p class="mt-2 text-black text-left">Toda a negociação é feita através de um chat em tempo real. Primeiro, você envia uma proposta para quem anunciou o artigo, e essa proposta chegará em forma de mensagem para essa pessoa. É a partir daí que ambas as partes vão negociar e combinar os detalhes da entrega dos itens, como local, data e hora. A confirmação e comprovação da troca se dá através da validação de ambas as partes que receberam os itens.</p>
                </nav>
            </div>
        </div>
    </div>

</body>

</html>