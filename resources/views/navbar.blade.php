@include('sidebar')

<div id="sandwich" class="drop-shadow-2xl fixed w-96 h-screen bg-white top-0 left-0 z-[54] translate-x-[-150%] duration-300 max-w-96 w-full rounded-lg">
    <div class="bg-bluett border-b border-black w-full h-20 flex place-content-center items-center">
       <p class="h-fit text-white font-fredokatt drop-shadow-tt text-3xl">Menu</p> 
        <span onclick="sandwich()" class="absolute cursor-pointer right-5">
            <img src="{{ asset('image/mais.svg') }}" alt="" width="30" class="rotate-45">
        </span>
    </div>
    <div class="flex flex-col ml-2 mt-3 max-w-48">
        <button class="group focus:outline-none border-b border-graytt-dark">
            <div class="flex flex-row w-fit items-center mt-5 mb-3">
                <span class="truncate underline-animation">Filtros</span>
                <svg class="flex h-4 w-4 flex flex-row" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </div>
            <div class="max-h-0 overflow-hidden duration-300 group-focus:max-h-40">
                <a class="flex items-center h-8 px-4 text-sm hover:bg-gray-200" href="#">
                    <p class="underline-animation">Item A</p>
                </a>
                <a class="flex items-center h-8 px-4 text-sm hover:bg-gray-200" href="#">
                    <p class="underline-animation">Item B</p>
                </a>
                <a class="flex items-center h-8 px-4 text-sm hover:bg-gray-200" href="#">
                    <p class="underline-animation">Item C</p>
                </a>
            </div>
        </button>
        <ul class="w-full border-b border-graytt-dark"><a class="underline-animation my-5" href="/meusartigos">Meus Artigos</a></ul>
        <ul class="w-full border-b border-graytt-dark"><a class="underline-animation my-5" href="/meusacordos">Meus Acordos</a></ul>
        <ul class="w-full border-b border-graytt-dark"><a class="underline-animation my-5" href="">Mensagens e Propostas</a></ul>
        <ul class="w-full border-b border-graytt-dark"><a class="underline-animation my-5" href="/about">Quem Somos</a></ul>
        <ul class="w-full border-b border-graytt-dark"><a class="underline-animation my-5" href="">Cadastrar</a></ul>
        <ul class="w-full border-b border-graytt-dark"><a class="underline-animation my-5" href="/login">Logar</a></ul>
    </div>
</div>

<nav id="navbar" class="w-full fixed z-40">

    <div class="flex w-full py-2.5 px-7 md:ps-20 md:pe-7 bg-bluett align-item-center place-content-normal md:place-content-evenly items-center">

        <svg xmlns="http://www.w3.org/2000/svg" width="45" fill="currentColor" class="md:hidden block cursor-pointer" viewBox="0 0 16 16" onclick="sandwich()">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
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
        <div class="sm:ml-6">
            <p class="hidden md:block"> <a href="/login" class="underline-animation font-bold">Logar</a> ou <a href="" class="underline-animation font-bold">Cadastrar-se</a></p>
        </div>

    </div>
    <div class="flex place-content-evenly w-full p-2 border-b h-10 items-center border-black bg-white">

        <ul class="md:underline-animation hidden md:block cursor-pointer" onclick="sidebartt()">Filtros</ul>
        <ul class="md:underline-animation hidden md:block"><a href="/meusartigos">Meus Artigos</a></ul>
        <ul class="md:underline-animation hidden md:block"><a href="/meusacordos">Meus Acordos</a></ul>
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

    pt_navbar.style.paddingTop = navbar.offsetHeight + "px";

    window.addEventListener('resize', screenResize);

    function sidebartt() {
        var sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('translate-x-[-150%]');
    }

    function sandwich() {
        var sandwich = document.getElementById('sandwich');
        sandwich.classList.toggle('translate-x-[-150%]');
    }

    function screenResize() {
        pt_navbar.style.paddingTop = navbar.offsetHeight + "px";
    }
</script>