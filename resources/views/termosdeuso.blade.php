<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Termos de Uso</title>
    <link rel="shortcut icon" href="{{ asset('image/t.png') }}">
    @vite('resources/css/app.css')
</head>

<body class="bg-backgtt">
    <div class="h-full min-h-screen relative">
        <div class="text-black">
            <div class="container mx-auto px-4">
                <div class="flex justify-center lg:order-2 ">
                    <img src="{{ asset('image/logo-full2.png') }}" alt="Logo do TrocaTeca" width="550" class="py-10 lg:py-18">
                </div>
                <div class='w-full'>
                    <h1 class="text-3xl sm:text-5xl font-bold mb-4 text-black text-center" style="font-family: 'Fredoka'">Termos de Uso TrocaTeca</h1>
                </div>
                <p class="text-center mb-3">
                    {{ date('Y') }}
                </p>

                <p class="mb-6 text-base">
                    Bem vindo ao TrocaTeca. Agradecemos por se cadastrar, mas não podemos deixar de combinar algumas coisas antes: Abaixo, estão os Termos de Uso
                    do TrocaTeca, e para garantir que todos tenham uma boa experiência ao usufruir do nosso sistema, pedimos que leia
                    cautelosamente o conteúdo da página. Asssim, você pode sanar possíveis dúvidas e saber o que deve ou não fazer. Lembre-se de que os Termos de Uso
                    são um mecanismo de segurança para os usuários do TrocaTeca e conhecê-los é essencial para uma navegação livre de adversidades.
                </p>

                <hr class="h-px bg-black border-2 border-black">

                <h2 class='mt-6 font-bold text-black text-xl'>I. Sobre o TrocaTeca</h2>
                <p class="mb-4 text-base">
                    O TrocaTeca é uma plataforma intermediadora designada para o reuso de artigo infantis. O nosso papel quanto intermediadores é
                    conectar usuários, os quais nos referimos como trocadores, que desejam se desfazer de seus artigos infantis ou que desejam obter
                    artigos infantis de uma nova forma: Através das trocas. A aplicação permite que os usuários que possuam artigos infantis (como roupas, brinquedos,
                    móveis, equipamentos para mobilidade) que acabaram se tornando inservíveis para a criança, muita das vezes pelo crescimento da mesma, possam anunciar esses
                    itens para se desfazer dele de maneira sustentável. A ideia é que o seu objeto, não mais usado pela sua criança, chegue em outro trocador, para que ele
                    possa oferecer algo que ele tenha em troca daquilo que a criança dele precisa e que a sua, não. O propósito do Trocateca é gerar um ciclo de reuso para amenizar os efeitos negativos
                    gerados pela indústria infantil, tanto no que diz respeito ao meio ambiente quanto ao incentivo de práticas consumistas desde a infância. <a class="font-bold">Ao concordar com
                        os termos de uso, você assume que conhece e compreende o propósito do TrocaTeca como um valor fundamental na experiência de usuário e que concorda em respeitá-lo em sua totalidade durante todo
                        o período que navegar e usar da plataforma.
                    </a>
                </p>

                <h2 class='mt-12 font-bold text-black text-xl'>II. Sobre o cadastro de usuário</h2>
                <p class="text-base">
                    O cadastro de contas é unificado, não havendo diferença entre anunciantes e interessados, e ao se cadastrar na plataforma, solicitamos que o usuário informe alguns de seus dados pessoais, como nome, sobrenome, data de nascimento, endereço de e-mail, estado e cidade em que reside:
                </p>
                <ul>

                    <li class='list-disc'>
                        <p class="text-base">
                            Ao se cadastrar, o usuário irá adquirir um login próprio, com e-mail e senha, garantindo-lhe acesso as funcionalidades bases do TrocaTeca, como anunciar um artigo e enviar propostas;
                        </p>
                    </li>
                    <li class='list-disc'>
                        <p class="text-base">
                            Para se cadastrar no sistema, exigimos que o usuário seja maior de idade, e que tenha um endereço de e-mail único e válido;
                        </p>
                    </li>

                    <li class='list-disc'>
                        <p class="text-base">
                            Somente solicitamos que o e-mail informado seja verificado para o cadastro, mas não realizamos nenhum tipo de validação da legitimidade dos demais dados informados;
                        </p>
                    </li>

                    <li class='list-disc'>
                        <p class="text-base">
                            Os dados cadastrais informados são de responsabilidade total e irrestrita do usuário, principalmente em relação à informação da sua idade;
                        </p>
                    </li>

                    <li class='list-disc'>
                        <p class="text-base">
                            O TrocaTeca pode intervir e alterar dados cadastrais na conta do usuário ao aplicar punições ou emitir advertências em relação a dados que vão contra o bom senso ou que sejam ofensivos em qualquer nível que seja;
                        </p>
                    </li>

                    <li class='list-disc'>
                        <p class="text-base font-bold">
                            Ao concordar com os termos de uso, você assume concordar com os itens descritos acima, assumindo também a completa responsabilidade quanto à legitimidade, veracidade e transparência dos dados cadastrais informados, admitindo conhecer
                            e responder pelas consequências civis e criminais ocasionadas pela falta de exatidão nos dados informados.
                        </p>
                    </li>
                </ul>

                <h2 class='mt-12 font-bold text-black text-xl'>III. Sobre a realização de anúncios e propostas</h2>
                <p class="text-base">
                    Na plataforma os trocadores poderão realizar anúncios de seus artigos infantis usados, bem como poderão enviar propostas de troca para anúncios de outros trocadores:
                </p>
                <ul>
                    <li class='list-disc'>
                        <p class="text-base">
                            Para realizar um anúncio, o trocador deverá informar o que está sendo anunciado, o que procura em troca, a condição do item e o tempo de uso. Também é possível informar um valor sugerido do item, ou seja, um preço simbólico para aquele anúncio. Dessa forma, os demais trocadores poderão ter dimensão sobre o que oferecer em troca, sendo essa informação do preço um critério do anunciante. O anúncio deve seguir o propósito do TrocaTeca, passível a denúncias em caso contrário;
                        </p>
                    </li>

                    <li class='list-disc'>
                        <p class="text-base">
                            Para realizar uma proposta, o trocador deverá acessar o anúncio de interesse e informar o que ele deseja oferecer em troca daquele item. Diferente do anúncio, aqui o trocador pode oferecer algo que esteja fora do escopo infantil, sendo o item ofertado um critério do trocador. Entretanto as mesmas regras quanto à legitimidade das informações são aplicadas ao envio de proposta;
                        </p>
                    </li>

                    <li class='list-disc'>
                        <p class="text-base">
                            O TrocaTeca não possui nenhuma responsabilidade sobre o que será anunciado ou ofertado por você na plataforma. É de extrema importância que sejam inseridas informações completamente verídicas em relação ao item anunciado e à proposta realizada, prezando assim pela segurança e confiabilidade de todos. Não se esqueça que seus anúncios podem ser denunciados por outros usuários se alguma informação ferir os termos de uso;
                        </p>
                    </li>

                    <li class='list-disc'>
                        <p class="text-base">
                            O TrocaTeca pode intervir e alterar as informações de anúncios ou retirá-los do sistema ao aplicar punições ou emitir advertências em relação a anúncios que vão contra o bom senso ou que sejam ofensivos em qualquer nível que seja;
                        </p>
                    </li>

                    <li class='list-disc'>
                        <p class="text-base font-bold">
                            Ao concordar com os termos de uso, você assume concordar com os itens descritos acima, assumindo também que possui a completa responsabilidade sobre
                            o que irá anunciar no site. Assume também que compreende o papel do TrocaTeca como um intermediador e que reconhece a importância da veracidade na descrição de informações ao realizar um anúncio.
                        </p>
                    </li>
                </ul>

                <h2 class='mt-12 font-bold text-black text-xl'>IV. Sobre a negociação e a comunicação entre trocadores</h2>
                <p class="text-base">
                    Ao enviar ou receber uma proposta de troca, os trocadores envolvidos terão acesso a um chat particular onde poderão negociar a troca dos itens.
                </p>
                <ul>
                    <li class='list-disc'>
                        <p class="text-base">
                            O trocador anunciante tem consigo o critério de iniciar ou não a negociação. O processo pode ser considerado como iniciado no momento em que o trocador anunciante responder a proposta enviada, mas não possui a obrigação de responder caso não tenha se interessado inicialmente.
                        </p>
                    </li>

                    <li class='list-disc'>
                        <p class="text-base">
                            O processo de negociação pode terminar de dois jeitos diferentes. Na primeira hipótese, as partes envolvidas chegaram num acordo e pretendem prosseguir com a troca dos itens. Neste cenário, ambos os trocadores terão que definir a negociação como encerrada ao escolher a devida opção "Encerrar Negociação", o que vai prosseguir com a geração do acordo. Na segunda hipótese, um dos trocadores desistiu de continuar negociando e escolheu a opção "Desisitir da Negociação". Diferente do caso anterior, se somente uma das partes desistir, essa negociação automaticamente é definida como cancelada.
                        </p>
                    </li>

                    <li class='list-disc'>
                        <p class="text-base">
                            A proposta também será dada como cancelada se uma das partes denunciar o trocador na conversa, cenário que acarreta em desistência automática;
                        </p>
                    </li>

                    <li class='list-disc'>
                        <p class="text-base">
                            O trocador anunciante não deverá, em hipótese alguma, tratar o TrocaTeca como uma plataforma de venda. Essa prática é passível a denúncia e, consequentemente, a punições mais graves. Da mesma forma e sob as mesmas consequências, é proibido oferecer dinheiro pelos itens anunciados;
                        </p>
                    </li>

                    <li class='list-disc'>
                        <p class="text-base">
                            É de extrema importância que todo o processo da negociação seja feito no chat da plataforma TrocaTeca. Somente assim poderemos ter controle sobre as trocas, sendo que é vedada a comunicação por quaisquer que sejam os outros meios. Usar o chat da plataforma é a única forma que temos de garantir a lisura e a transparência das trocas realizadas, além de garantir maior segurança aos nossos usuários.
                        </p>
                    </li>

                    <li class='list-disc'>
                        <p class="text-base">
                            Os trocadores que utilizarem do nosso chat devem estar atentos quanto a sua conduta e comportamento, já que podem ser denunciados através da conversa. Práticas que vão contra o bom senso, o caráter, que firam a honra, que ofendam de qualquer jeito, que difame ou que insulte o usuário no chat não serão toleradas, podendo levar a consequências como a perca parcial ou total do acesso à plataforma. O papel do TrocaTeca como intermediador é de aplicar punições em relação à conduta dos usuários caso denunciados, mas não se responsabiliza pelo que é dito entre eles no chat da plataforma;
                        </p>
                    </li>

                    <li class='list-disc'>
                        <p class="text-base">
                            <a class="font-bold">É expressamente não recomendado compartilhar no chat informações pessoais como endereço residencial, telefones, dados bancários ou qualquer outro tipo de informação pessoal.</a> Os trocadores devem realizar os encontros em locais públicos, como praças, shoppings, estações de metrô e entre outros. Também recomendamos que sejam combinados horários adequados para a realização das trocas, evitando veementemente horários noturnos.
                        </p>
                    </li>

                    <li class='list-disc'>
                        <p class="text-base font-bold">
                            Ao concordar com os termos de uso, você assume concordar com os itens descritos acima ao compreender o processo da negociação, reconhecer que somente o chat da plataforma deve ser usado durante o processo, declara conhecer as recomendações feitas quanto ao encontro e ao compartilhamento de dados pessoais, tendo ciência da gravidade das consequências do não cumprimento das mesmas, além de aceitar que a plataforma TrocaTeca não se responsabiliza se a conduta do usuário durante as negociações ferirem as condições e recomendações presentes nesse termo.
                        </p>
                    </li>
                </ul>

                <h2 class='mt-12 font-bold text-black text-xl'>V. Sobre as denúncias, aplicação de advertências e de punições</h2>
                <p class="text-base">
                    Durante o seu uso na plataforma, os usuários podem reportar adversidades que observarem no site.
                </p>
                <ul>
                    <li class='list-disc'>
                        <p class="text-base">
                            O critério de realização das denúncias é do usuário. Se o mesmo detectar que algum anúncio está fora do propósito da plataforma, ou se de alguma maneira se sentir ofendido durante as conversas, ele poderá realizar uma denúncia;
                        </p>
                    </li>

                    <li class='list-disc'>
                        <p class="text-base">
                            O critério para acatar as denúncias realizadas na plataforma é do próprio TrocaTeca, representado pelo seu corpo de administradores. Cada denúncia será analisada dentro do possível, podendo ser acatada ou não;
                        </p>
                    </li>

                    <li class='list-disc'>
                        <p class="text-base">
                            Acatar uma denúncia significa que o TrocaTeca irá averiguar o ocorrido e aplicar uma advertência ao usuário denunciado em casos leves, ou inibir imediatamente por completo o acesso do denunciado em casos graves;
                        </p>
                    </li>

                    <li class='list-disc'>
                        <p class="text-base">
                            O trocador que acumular um total de 3 advertências em sua conta terá seu acesso à plataforma perdido;
                        </p>
                    </li>

                    <li class='list-disc'>
                        <p class="text-base">
                            O presente termo de uso é a base para o TrocaTeca averiguar se deve ou não intervir, acatar a denúncia e aplicar as punições, sendo que se for avaliado que houve ferimento de qualquer tópico concordado por todos os usuários cadastrados, isso será feito;
                        </p>
                    </li>

                    <li class='list-disc'>
                        <p class="text-base font-bold">
                            Ao concordar com os termos de uso, você assume concordar com os itens descritos acima, ao compreender o sistema de denúncias, aceitar e concordar com o critério do TrocaTeca nesses casos, além de compreender e aceitar também as consequências de ser denunciado na plataforma.
                        </p>
                    </li>
                </ul>
                <hr class="mt-6 h-px bg-black border-2 border-black">
                <p class="font-bold mt-12 text-lg text-center text-black">
                    Os Termos de Uso dessa plataforma são regidos pela legislação da República Federativa do Brasil.
                </p>
                <p class="mt-12 text-base text-center text-graytt">
                    Infância com sustentabilidade e reusabilidade
                </p>
                <p class="mb-12 text-base text-center text-graytt">&copy; TrocaTeca {{ date('Y') }}</p>
            </div>
        </div>
</body>

</html>