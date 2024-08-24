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
                        <h2 class="text-xl drop-shadow-tt text-left text-white sm:text-5xl md:text-5xl" style="font-family: 'Fredoka'; white-space: nowrap;">
                            Posso comprar os artigos?
                        </h2>
                        <p class="leading-relaxed text-black text-left lg:mt-4 lg:mb-6">O TrocaTeca é uma plataforma dedicada única e exclusivamente para trocas, então não é possível fazer qualquer tipo de compra ou transação monetária. No máximo, é permitido informar um valor sugerido de seu artigo ao anunciá-lo, para que outros usuários possam oferecer algo de valor aproximado para a troca.</p>
                    </nav>
                    <div class="flex justify-center lg:justify-end lg:order-2 mb-10 lg:mb-12 mt-8">
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
                        <p class="leading-relaxed text-black text-left lg:mt-4 lg:mb-6">Toda a negociação é feita através de um chat em tempo real. Primeiro, você envia uma proposta para quem anunciou o artigo, e essa proposta chegará em forma de mensagem para essa pessoa. É a partir daí que ambas as partes vão negociar e combinar os detalhes da entrega dos itens, como local, data e hora, e com todas os detalhes acordados, basta encerrar a negociação para gerar o devido acordo. A confirmação e comprovação da troca se dá através da validação do acordo por ambas as partes que receberam os itens.</p>
                    </nav>
                </div>
                <hr class="h-px bg-black border-2 border-black">
                <!--perguntas-->
                <div class="container flex flex-col justify-center px-4 py-8 mx-auto md:p-8">
                    <h2 class="text-xl drop-shadow-tt text-left text-black sm:text-5xl md:text-5xl mb-6" style="font-family: 'Fredoka'; white-space: nowrap;">Mais perguntas frequentes</h2>
                    <div class="space-y-4">
                        <details class="cursor-pointer bg-white w-full rounded-xl border-2 border-graytt-light shadow-tt transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 duration-300">
                            <summary class="px-4 py-6">Desisti da troca após gerar o acordo, e agora?</summary>
                            <p class="px-4 py-6 pt-0 ml-4 -mt-4 dark:text-gray-600">Basta não validar a troca e avisar a outra parte envolvida. O acordo será automaticamente dado como improcedente se nenhuma das partes o validar até o dia e hora combinados. </p>
                        </details>
                        <details class="cursor-pointer bg-white w-full rounded-xl border-2 border-graytt-light shadow-tt transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 duration-300">
                            <summary class="px-4 py-6 focus:outline-none focus-visible:dark:ring-violet-600">Posso negociar a troca através de um contato pessoal?</summary>
                            <p class="px-4 py-6 pt-0 ml-4 -mt-4 dark:text-gray-600">Para manter a integridade do processo de troca e pela segurança de todos, não recomendamos nenhuma forma de comunicação entre os usuários que não seja através do nosso chat próprio.</p>
                        </details>
                        <details class="cursor-pointer bg-white w-full rounded-xl border-2 border-graytt-light shadow-tt transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 duration-300">
                            <summary class="px-4 py-6 focus:outline-none focus-visible:dark:ring-violet-600">Só posso trocar se me encontrar com o trocador?</summary>
                            <p class="px-4 py-6 pt-0 ml-4 -mt-4 dark:text-gray-600">Só podemos ter controle sobre trocas que sejam feitas em encontros físicos entre os dois trocadores, e portanto, não recomendamos outras formas, como o Correios. </p>
                        </details>
                        <details class="cursor-pointer bg-white w-full rounded-xl border-2 border-graytt-light shadow-tt transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 duration-300">
                            <summary class="px-4 py-6 focus:outline-none focus-visible:dark:ring-violet-600">Como o TrocaTeca garante minha segurança nos encontros de trocas?</summary>
                            <p class="px-4 py-6 pt-0 ml-4 -mt-4 dark:text-gray-600">Como constante nos  <a class="underline-animation text-base font-bold text-black hover:text-graytt-900 focus:outline-none focus:ring-0 visited:text-black" href="/termos" target="_blank" rel="noopener noreferrer">Termos de Uso</a>, recomendamos que o trocador sempre combine as trocas em locais públicos e em horários adequados. Evite compartilhar informações pessoais, como endereço residencial, e reforçamos que o uso do chat da plataforma para toda a comunicação é crucial para a segurança de todos os usuários.</p>
                        </details>
                        <details class="cursor-pointer bg-white w-full rounded-xl border-2 border-graytt-light shadow-tt transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 duration-300">
                            <summary class="px-4 py-6 focus:outline-none focus-visible:dark:ring-violet-600">O trocador não apareceu no local combinado. O que faço?</summary>
                            <p class="px-4 py-6 pt-0 ml-4 -mt-4 dark:text-gray-600">Se o trocador não cumprir algo do que foi combinado no acordo, sem dar satisfações, por favor não hesite em denunciar este usuário para que as devidas providências sejam tomadas. </p>
                        </details>
                        <details class="cursor-pointer bg-white w-full rounded-xl border-2 border-graytt-light shadow-tt transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 duration-300">
                            <summary class="px-4 py-6 focus:outline-none focus-visible:dark:ring-violet-600">E se o trocador me oferecer dinhero pelo meu anúncio?</summary>
                            <p class="px-4 py-6 pt-0 ml-4 -mt-4 dark:text-gray-600">Não podemos ter esse controle. Recomendamos a todos os usuários que respeitem os termos estabelecidos e o propósito do TrocaTeca, e que denunciem uma ocorrência que vá contra isso. </p>
                        </details>
                        <details class="cursor-pointer bg-white w-full rounded-xl border-2 border-graytt-light shadow-tt transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 duration-300">
                            <summary class="px-4 py-6 focus:outline-none focus-visible:dark:ring-violet-600">Posso anunciar artigos que não sejam infantis?</summary>
                            <p class="px-4 py-6 pt-0 ml-4 -mt-4 dark:text-gray-600">Recomendamos que anúncios que fujam do propósito do sistema sejam denunciados, já que estão passíveis à punição. No entanto, é completamente aceitável oferecer um item que não seja infantil em troca do que está anunciado.</p>
                        </details>
                        <details class="cursor-pointer bg-white w-full rounded-xl border-2 border-graytt-light shadow-tt transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 duration-300">
                            <summary class="px-4 py-6 focus:outline-none focus-visible:dark:ring-violet-600">Posso negociar mais de um artigo com um mesmo trocador?</summary>
                            <p class="px-4 py-6 pt-0 ml-4 -mt-4 dark:text-gray-600">Sim, dois trocadores podem negociar mais de um item por vez, mas no sistema serão tratados como duas negociações diferentes.</p>
                        </details>
                        <details class="cursor-pointer bg-white w-full rounded-xl border-2 border-graytt-light shadow-tt transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 duration-300">
                            <summary class="px-4 py-6 focus:outline-none focus-visible:dark:ring-violet-600">O que fazer se o artigo que recebi está danificado ou não condiz com a descrição?</summary>
                            <p class="px-4 py-6 pt-0 ml-4 -mt-4 dark:text-gray-600">Recomendamos o encontro físico entre os usuários para que ambos realizem a conferência dos artigos no ato da troca, mas se algo assim ainda ocorrer, por favor entre em contato conosco imediatamente ou realize uma denúncia de usuário através do chat. </p>
                        </details>
                        <details class="cursor-pointer bg-white w-full rounded-xl border-2 border-graytt-light shadow-tt transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 duration-300">
                            <summary class="px-4 py-6 focus:outline-none focus-visible:dark:ring-violet-600">Como posso entrar em contato com a equipe do TrocaTeca?</summary>
                            <p class="px-4 py-6 pt-0 ml-4 -mt-4 dark:text-gray-600">Os usuários podem entrar em contato diretamente com a equipe do TrocaTeca através das redes sociais - @TrocaTeca - ou através do Email - trocatecaltda@gmail.com </p>
                        </details>
                        <details class="cursor-pointer bg-white w-full rounded-xl border-2 border-graytt-light shadow-tt transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-105 duration-300">
                            <summary class="px-4 py-6 focus:outline-none focus-visible:dark:ring-violet-600">Ainda tenho dúvidas sobre o TrocaTeca</summary>
                            <p class="px-4 py-6 pt-0 ml-4 -mt-4 dark:text-gray-600">Sua dúvida pode já ter sido respondida nos  <a class="underline-animation text-base font-bold text-black hover:text-graytt-900 focus:outline-none focus:ring-0 visited:text-black" href="/termos" target="_blank" rel="noopener noreferrer">Termos de Uso</a>. Se ainda assim persistirem as dúvidas, entre em contato.  </p>
                        </details>
                    </div>
                </div>

            </div>
        </div>
        @include('footer')
    </div>

</body>

</html>