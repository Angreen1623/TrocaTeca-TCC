<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem Somos</title>
    <link rel="shortcut icon" href="{{ asset('image/t.png') }}">
    @vite('resources/css/app.css')
</head>

<body class="bg-backgtt">
    <div class="h-full min-h-screen relative">

        @include('navbar')
        <div>
            <!--O q é tt-->

            <div class="bg-yellowtt-light">
                <div class="w-full px-4 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
                    <div class="lg:flex lg:justify-between lg:items-center flex flex-col-reverse lg:flex-row">
                        <nav class="mb-10 lg:mb-12 flex flex-col justify-center space-y-4 max-w-3xl lg:mt-8 lg:order-1">
                            <h2 class="text-3xl drop-shadow-tt text-left text-white sm:text-6xl" style="font-family: 'Fredoka'; white-space: nowrap;">
                                O que é o TrocaTeca?
                            </h2>
                            <p class="leading-relaxed text-black text-left lg:mt-4 lg:mb-6">O TrocaTeca é um ambiente que visa a intermediação entre alguém que precisa se desfazer de um artigo infantil usado e alguém que precisa obter um artigo infantil. Afinal, o que não serve mais para você, pode servir para alguém, e o que não serve mais para alguém, pode servir para você!</p>
                        </nav>
                        <div class="flex justify-center lg:justify-end lg:order-2 mb-10 lg:mb-12 lg:mt-8">
                            <img src="{{ asset('image/logo.png') }}" alt="Logo do TrocaTeca" width="425" class="animate-rotate-left-right">
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-repeat bg-[url('/public/image/triangulo-verde.svg')] w-full h-8 -mt-px rotate-180 bg-yellowtt-light"></div>

            <!--Como funciona-->
            <div class="bg-greentt">
                <div class="max-w-screen-xl px-4 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
                    <div class="lg:flex lg:justify-between lg:items-center flex flex-col lg:flex-row-reverse">
                        <div class="flex justify-center lg:justify-start lg:order-2 mb-10 lg:mb-12 lg:mt-8">
                            <img src="{{ asset('image/setas.png') }}" alt="Como funciona" width="300" class="animate-rotate-360 mt-6">
                        </div>
                        <nav class="mb-10 lg:mb-12 flex flex-col justify-center space-y-4 max-w-3xl lg:mt-8 lg:order-1">
                            <h2 class="text-3xl drop-shadow-tt text-left text-white sm:text-6xl" style="font-family: 'Fredoka'; white-space: nowrap;">
                                Como funciona?
                            </h2>
                            <p class="leading-relaxed text-black text-left lg:mt-4 lg:mb-6">Qualquer usuário maior de idade, a partir do momento que tenha um cadastro, pode ver e anunciar os artigos infantis que se tornaram inservíveis para o uso, seja porque a criança cresceu, ou porque simplesmente enjoou. A ideia é encontrar interessados nesses artigos que estejam dispostos a trocar algum outro item que ele tenha pelo artigo anunciado, gerando um ciclo de reusabilidade e promovendo um consumo sustentável desses itens.</p>
                        </nav>
                    </div>
                </div>
            </div>
            </div>
            <div class="bg-repeat bg-[url('/public/image/triangulo-rosa.svg')] w-full h-8 -mt-px rotate-180 bg-greentt"></div>
            

            <!--posso comprar?-->
            <div class="bg-pinktt">
                <div class="max-w-screen-xl px-4 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
                    <div class="lg:flex lg:justify-between lg:items-center flex flex-col-reverse lg:flex-row">
                        <nav class="mb-10 lg:mb-12 flex flex-col justify-center space-y-4 max-w-3xl lg:mt-8 lg:order-1">
                            <h2 class="text-3xl drop-shadow-tt text-left text-white sm:text-6xl" style="font-family: 'Fredoka'; white-space: nowrap;">
                                Posso comprar os artigos?
                            </h2>
                            <p class="leading-relaxed text-black text-left lg:mt-4 lg:mb-6">O TrocaTeca é uma plataforma dedicada única e exclusivamente para trocas, então não é possível fazer qualquer tipo de compra ou transação monetária. No máximo, é permitido informar um valor sugerido de seu artigo ao anunciá-lo, para que outros usuários possam oferecer algo de valor aproximado para a troca.</p>
                        </nav>
                        <div class="flex justify-center lg:justify-end lg:order-2 mb-10 lg:mb-12 lg:mt-8">
                            <img src="{{ asset('image/cifrao.png') }}" alt="Logo do TrocaTeca" width="250" class="animate-rotate-left-right">
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-repeat bg-[url('/public/image/triangulo-bege.svg')] w-full h-8 -mt-px rotate-180 bg-pinktt"></div>
            <!--Negociação-->
            <div class="bg-backgtt">
                <div class="max-w-screen-xl px-4 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
                    <div class="lg:flex lg:justify-between lg:items-center flex flex-col lg:flex-row-reverse">
                        <div class="flex justify-center lg:justify-start lg:order-2 mb-10 lg:mb-12 lg:mt-8">
                            <img src="{{ asset('image/chat.png') }}" alt="Como funciona" width="300" class="animate-rotate-left-right mt-6">
                        </div>
                        <nav class="mb-10 lg:mb-12 flex flex-col justify-center space-y-4 max-w-3xl lg:mt-8 lg:order-1">
                            <h2 class="text-3xl drop-shadow-tt text-left text-black sm:text-6xl" style="font-family: 'Fredoka'; white-space: nowrap;">
                                Negociação
                            </h2>
                            <p class="leading-relaxed text-black text-left lg:mt-4 lg:mb-6">Toda a negociação é feita através de um chat em tempo real. Primeiro, você envia uma proposta para quem anunciou o artigo, e essa proposta chegará em forma de mensagem para essa pessoa. É a partir daí que ambas as partes vão negociar e combinar os detalhes da entrega dos itens, como local, data e hora. A confirmação e comprovação da troca se dá através da validação de ambas as partes que receberam os itens.</p>
                        </nav>
                    </div>
                </div>
            </div>
            @include('footer')
        </div>

</body>

</html>