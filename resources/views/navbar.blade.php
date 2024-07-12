@vite('resources/css/app.css')

<nav class="w-full fixed">
    <div class="flex w-full py-2.5 ps-16 pe-7 bg-bluett align-item-center place-content-between items-center">

        <div>
            <img src="{{ asset('image/logo.png') }}" alt="Logo do TrocaTeca" width="120" class="w-50">
        </div>
        <div class="w-96 rounded-full flex bg-white items-center ps-5">
            <input type="text" id="pesquisa" class="h-10 w-full outline-0">
            <span class="flex items-center p-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </span>
        </div>
        <div>
            <p class=""> <a href="" class="font-bold">Logar</a> ou <a href="" class="font-bold">cadastrar-se</a></p>
        </div>

    </div>
    <div class="flex place-content-evenly w-full p-2 border-b border-black bg-white">

        <ul><a href="">Filtros</a></ul>
        <ul><a href="" class="underline-animation">Meus Artigos</a></ul>
        <ul><a href="" class="underline-animation">Meus Acordos</a></ul>
        <ul><a href="" class="underline-animation">Mensagens e Propostas</a></ul>
        <ul><a href="" class="underline-animation">Quem Somos</a></ul>

    </div>
</nav>