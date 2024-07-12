@vite('resources/css/app.css')

<nav class="w-full">
    <div class="flex w-full py-2.5 bg-sky-200 ">

        <div>
            <img src="{{ asset('image/logo.png') }}" alt="Logo do TrocaTeca" width="120" class="w-50">
        </div>
        <div>
            <label for="pesquisa"></label>
            <input type="text" id="pesquisa">
        </div>
        <div>
            <p> <p class="">logar</p> ou <p class="">cadastrar-se</p></p>
        </div>

    </div>
    <div class="flex place-content-between w-full p-2 border-b border-black">

        <div class="flex">
            <svg viewBox="0 0 24 24" fill="none" class="mr-1" width="20" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 6H20M4 12H20M4 18H20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            <ul><a href="">Filtros</a></ul>
        </div>
        <ul><a href="">Meus Artigos</a></ul>
        <ul><a href="">Meus Acordos</a></ul>
        <ul><a href="">Mensagens e Propostas</a></ul>
        <ul><a href="">Quem Somos</a></ul>

    </div>
</nav>