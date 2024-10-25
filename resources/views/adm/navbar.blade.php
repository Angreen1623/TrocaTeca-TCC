@include('sidebar')
<!--sidebar (apenas no celular)-->
<div id="sandwich" class="fixed z-[60] w-screen h-screen left-0 top-0 translate-x-[-150%] bg-shadowtt">
    <div class=" drop-shadow-2xl absolute w-96 h-screen bg-white top-0 left-0 z-[70] duration-300 max-w-96 w-full rounded-lg">
        <div class="bg-bluett border-b border-black w-full h-20 flex place-content-center items-center">
            <p class="h-fit text-white font-fredokatt drop-shadow-tt text-3xl">Menu</p>
            <span onclick="sandwich()" class="absolute cursor-pointer right-5">
                <img src="{{ asset('image/mais.svg') }}" alt="" width="30" class="rotate-45">
            </span>
        </div>
        <div class="flex flex-col ml-6 mt-3 max-w-80">
            <a href="{{ route('adm.announces.view') }}">
                <ul class="w-full border-b border-graytt-dark flex flex-row py-5 items-center hover:bg-gray-200">
                    <p class="underline-animation">Visualizar Anúncios da Plataforma</p>
                </ul>
            </a>
            <a href="{{ route('adm')  }}">
                <ul class="w-full border-b border-graytt-dark flex flex-row py-5 items-center hover:bg-gray-200">
                    <p class="underline-animation">Visualizar Denúncias de Anúncios</p>
                </ul>
            </a>
            <a href="{{ route('adm.chat.view') }}">
                <ul class="w-full border-b border-graytt-dark flex flex-row py-5 items-center hover:bg-gray-200">   
                    <p class="underline-animation">Visualizar Denúncias de Chat</p>
                </ul>
            </a>
            <!-- Exibir somente para usuários autenticados -->
            @auth
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <ul class="w-full border-b border-graytt-dark flex flex-row py-5 items-center hover:bg-gray-200">
                    <svg class="h-8 w-8 mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4M10 17l5-5-5-5M15 12H3" />
                    </svg>
                    <p class="underline-animation">Sair da Conta</p>
                </ul>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>
            @endauth
        </div>
    </div>
</div>

<!--navbar (todo o site em geral
)-->
<nav id="navbar" class="w-full fixed z-40">
    <div class="flex w-full py-2.5 px-7 md:ps-20 md:pe-7 bg-bluett align-item-center place-content-normal md:place-content-evenly items-center">

        <svg xmlns="http://www.w3.org/2000/svg" width="45" fill="currentColor" class="md:hidden block cursor-pointer" viewBox="0 0 16 16" onclick="sandwich()">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
        </svg>

        <a href="{{ route('index') }}" class="m-auto md:m-0">
            <img src="{{ asset('image/logo.png') }}" alt="Logo do TrocaTeca" width="120" class="hidden md:block">
            <img src="{{ asset('image/logo-full.png') }}" alt="Logo do TrocaTeca" width="120" class="md:hidden block">
        </a>
        <form action="{{ route('search') }}" method="get" class="w-96 rounded-full bg-white items-center ps-5 hidden md:flex">
            <input type="text" name="search" id="pesquisa" class="h-10 w-full outline-0 border-0 ring-0">
            <button type="submit" class="flex items-center p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>
        </form>
        <div class="sm:ml-6 hidden md:block relative">
            <!-- Exibir apenas para usuários não autenticados -->
            @guest
            <p class="">
                <a href="{{ route('login') }}" class="underline-animation font-bold">Logar</a> ou
                <a href="{{ route('register') }}" class="underline-animation font-bold">Cadastrar-se</a>
            </p>
            @endguest

            <!-- Exibir somente para usuários autenticados -->
            @auth
            <p class="relative">
            <div class="w-16 h-16 cursor-pointer" onclick="menupopup()">
                <svg fill="#FFFFFF" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M 27.9999 51.9063 C 41.0546 51.9063 51.9063 41.0781 51.9063 28 C 51.9063 14.9453 41.0312 4.0937 27.9765 4.0937 C 14.8983 4.0937 4.0937 14.9453 4.0937 28 C 4.0937 41.0781 14.9218 51.9063 27.9999 51.9063 Z M 27.9999 35.9922 C 20.9452 35.9922 15.5077 38.5 13.1405 41.3125 C 9.9999 37.7968 8.1014 33.1328 8.1014 28 C 8.1014 16.9609 16.9140 8.0781 27.9765 8.0781 C 39.0155 8.0781 47.8983 16.9609 47.9219 28 C 47.9219 33.1563 46.0234 37.8203 42.8593 41.3359 C 40.4921 38.5234 35.0546 35.9922 27.9999 35.9922 Z M 27.9999 32.0078 C 32.4999 32.0547 36.0390 28.2109 36.0390 23.1719 C 36.0390 18.4375 32.4765 14.5 27.9999 14.5 C 23.4999 14.5 19.9140 18.4375 19.9609 23.1719 C 19.9843 28.2109 23.4765 31.9609 27.9999 32.0078 Z"></path>
                    </g>
                </svg>
                <!-- Menu Pop-up -->
                <div id="menupop" class="flex flex-col absolute hidden justify-center bg-bluett w-56 px-3 py-2 z-50 bottom-[-75px] left-[-190px] border-black border rounded-b-lg rounded-l-lg">
                    <button id="openLogoutButton" type="button" class="bg-white p-3 border-black border rounded-xl hover:bg-graytt-light text-black text-md font-medium rounded-2xl">
                        Sair da conta
                    </button>
                </div>

                <!-- Logout Form -->
                <form id="logout-form" method="POST" action="{{ route('logout') }}" class="hidden">
                    @csrf
                </form>
            </div>
            <!-- Ou qualquer outra informação que você deseja mostrar para usuários autenticados -->
            </p>
            @endauth
        </div>

    </div>
    <div class="flex place-content-evenly w-full p-2 border-b h-10 items-center border-black bg-white">

        <ul class="md:underline-animation hidden md:block"><a href="{{ route('adm.announces.view') }}">Visualizar Anúncios da Plataforma</a></ul>
        <ul class="md:underline-animation hidden md:block"><a href="{{ route('adm') }}">Visualizar Denúncias de Anúncios </a></ul>
        <ul class="md:underline-animation hidden md:block"><a href="{{ route('adm.chat.view') }}">Visualizar Denúncias de Chat</a></ul>

        <div class="w-96 rounded-full flex bg-white items-center ps-5 md:hidden border-2 h-8">
            <input type="text" id="pesquisa" class="h-7 w-full outline-0">
            <span class="flex items-center p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </span>
        </div>

    </div>
</nav>

<div id="pt-navbar"></div>

<script>
    var pt_navbar = document.getElementById("pt-navbar");
    var navbar = document.getElementById('navbar');

    pt_navbar.style.paddingTop = navbar.offsetHeight + "px";

    window.addEventListener('resize', screenResize);

    window.onload = function() {
        screenResize()
    }

    function sidebartt() {
        document.body.classList.toggle('overflow-hidden');
        var sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('translate-x-[-150%]');
    }

    function sandwich() {
        document.body.classList.toggle('overflow-hidden');
        var sandwich = document.getElementById('sandwich');
        sandwich.classList.toggle('translate-x-[-150%]');
    }

    function screenResize() {
        pt_navbar.style.paddingTop = navbar.offsetHeight + "px";
    }

    //menu flutuante
    function menupopup() {
        var menupop = document.getElementById("menupop");
        menupop.classList.toggle('hidden');
    }

    //menupop
    document.getElementById('openProfileButton').addEventListener('click', function() {
        window.location.href = '{{ url("/myaccount") }}';
    });

    document.getElementById('openLogoutButton').addEventListener('click', function() {
        if (confirm('Você tem certeza que deseja sair?')) {
            document.getElementById('logout-form').submit();
        }
    });
</script>