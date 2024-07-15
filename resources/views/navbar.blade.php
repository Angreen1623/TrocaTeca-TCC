

@include('sidebar')

<div id="sandwich" class="fixed w-96 h-96 bg-bluett top-0 left-0 z-50 translate-x-[-100%] duration-300 max-w-96 w-full rounded-lg">
    <span onclick="sandwich()" class="absolute cursor-pointer right-0">
        <img src="{{ asset('image/mais.svg') }}" alt="" width="30" class="rotate-45">
    </span>
    <div class="flex flex-col ml-2 mt-3">
        <ul class="w-fit underline-animation cursor-pointer" onclick="sidebartt()">Filtros</ul>
        <ul class="w-fit underline-animation"><a href="">Meus Artigos</a></ul>
        <ul class="w-fit underline-animation"><a href="">Meus Acordos</a></ul>
        <ul class="w-fit underline-animation"><a href="">Mensagens e Propostas</a></ul>
        <ul class="w-fit underline-animation"><a href="/about">Quem Somos</a></ul>
        <ul class="w-fit underline-animation"><a href="">Cadastrar</a></ul>
        <ul class="w-fit underline-animation"><a href="/login">Logar</a></ul>
    </div>
</div>

<nav id="navbar" class="w-full fixed z-40">

    <div class="flex w-full py-2.5 px-7 md:ps-20 md:pe-7 bg-bluett align-item-center place-content-normal md:place-content-evenly items-center">

        <svg xmlns="http://www.w3.org/2000/svg" width="45" fill="currentColor" class="md:hidden block cursor-pointer" viewBox="0 0 16 16" onclick="sandwich()">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
        </svg>

        <a href="/" class="m-auto md:m-0">
            <img src="{{ asset('image/logo.png') }}" alt="Logo do TrocaTeca" width="120" class="hidden md:block">
            <img src="{{ asset('image/logo-full.png') }}" alt="Logo do TrocaTeca" width="120" class="md:hidden block">
        </a>
        <div class="w-96 rounded-full bg-white items-center ps-5 hidden md:flex">
            <input type="text" id="pesquisa" class="h-10 w-full outline-0">
            <span class="flex items-center p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </span>
        </div>
        <div>
            <p class="hidden md:block"> <a href="/login" class="font-bold">Logar</a> ou <a href="" class="font-bold">cadastrar-se</a></p>
        </div>

    </div>
    <div class="flex place-content-evenly w-full p-2 border-b h-10 items-center border-black bg-white">

        <ul class="md:underline-animation hidden md:block cursor-pointer" onclick="sidebartt()">Filtros</ul>
        <ul class="md:underline-animation hidden md:block"><a href="">Meus Artigos</a></ul>
        <ul class="md:underline-animation hidden md:block"><a href="">Meus Acordos</a></ul>
        <ul class="md:underline-animation hidden md:block"><a href="">Mensagens e Propostas</a></ul>
        <ul class="md:underline-animation hidden md:block"><a href="/about">Quem Somos</a></ul>

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

    pt_navbar.style.paddingTop = navbar.offsetHeight+"px";

    window.addEventListener('resize', screenResize);
    
    function sidebartt() {
        var sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('translate-x-[-100%]');
    }

    function sandwich(){
        var sandwich = document.getElementById('sandwich');
        sandwich.classList.toggle('translate-x-[-100%]');
    }

    function screenResize(){
        pt_navbar.style.paddingTop = navbar.offsetHeight+"px";
    }

</script>