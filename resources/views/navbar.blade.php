@include('sidebar')

<div id="sandwich" class="drop-shadow-2xl fixed w-96 h-screen bg-white top-0 left-0 z-[54] translate-x-[-150%] duration-300 max-w-96 w-full rounded-lg">
    <div class="bg-bluett border-b border-black w-full h-20 flex place-content-center items-center">
       <p class="h-fit text-white font-fredokatt drop-shadow-tt text-3xl">Menu</p> 
        <span onclick="sandwich()" class="absolute cursor-pointer right-5">
            <img src="{{ asset('image/mais.svg') }}" alt="" width="30" class="rotate-45">
        </span>
    </div>
    <div class="flex flex-col ml-6 mt-3 max-w-80">
        <button class="group focus:outline-none border-b border-graytt-dark">
            <div class="flex flex-row w-fit items-center mt-5 mb-3"><svg class="w-8 h-8 mr-3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M21 6H19M21 12H16M21 18H16M7 20V13.5612C7 13.3532 7 13.2492 6.97958 13.1497C6.96147 13.0615 6.93151 12.9761 6.89052 12.8958C6.84431 12.8054 6.77934 12.7242 6.64939 12.5617L3.35061 8.43826C3.22066 8.27583 3.15569 8.19461 3.10948 8.10417C3.06849 8.02393 3.03853 7.93852 3.02042 7.85026C3 7.75078 3 7.64677 3 7.43875V5.6C3 5.03995 3 4.75992 3.10899 4.54601C3.20487 4.35785 3.35785 4.20487 3.54601 4.10899C3.75992 4 4.03995 4 4.6 4H13.4C13.9601 4 14.2401 4 14.454 4.10899C14.6422 4.20487 14.7951 4.35785 14.891 4.54601C15 4.75992 15 5.03995 15 5.6V7.43875C15 7.64677 15 7.75078 14.9796 7.85026C14.9615 7.93852 14.9315 8.02393 14.8905 8.10417C14.8443 8.19461 14.7793 8.27583 14.6494 8.43826L11.3506 12.5617C11.2207 12.7242 11.1557 12.8054 11.1095 12.8958C11.0685 12.9761 11.0385 13.0615 11.0204 13.1497C11 13.2492 11 13.3532 11 13.5612V17L7 20Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
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
        <a href="/meusartigos"><ul class="w-full border-b border-graytt-dark flex flex-row py-5 items-center hover:bg-gray-200">
        <p class="underline-animation">Meus Artigos</p></ul></a>
        <a href="/meusacordos"><ul class="w-full border-b border-graytt-dark flex flex-row py-5 items-center hover:bg-gray-200"><svg class="w-8 h-8 mr-3" fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 31.424 31.423" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M29.415,16.271l1.911-4.874c0.198-0.505,0.09-1.063-0.275-1.428l-9.495-9.494c-0.256-0.257-0.602-0.383-0.955-0.373 c-0.26,0.008-0.523,0.09-0.759,0.248l-4.129,2.796l-4.13-2.796c-0.235-0.158-0.5-0.239-0.759-0.248 c-0.354-0.01-0.699,0.116-0.955,0.373L0.373,9.969c-0.365,0.366-0.473,0.923-0.275,1.428l1.911,4.874l-0.768,0.768 c-1.497,1.497-1.663,3.767-0.37,5.059c0.59,0.59,1.404,0.9,2.295,0.873c-0.024,0.859,0.261,1.685,0.869,2.292 c0.59,0.59,1.406,0.899,2.296,0.873c0.182-0.004,0.363-0.023,0.543-0.057c0.073,0.686,0.355,1.328,0.852,1.824 c0.589,0.589,1.405,0.898,2.295,0.873c0.216-0.006,0.433-0.033,0.647-0.078c0.085,0.658,0.364,1.271,0.843,1.75 c0.589,0.588,1.405,0.897,2.297,0.873c0.656-0.021,1.31-0.237,1.901-0.592c0.592,0.354,1.248,0.572,1.904,0.592 c0.891,0.025,1.707-0.284,2.296-0.873c0.479-0.479,0.757-1.092,0.843-1.75c0.214,0.045,0.431,0.072,0.647,0.078 c0.891,0.025,1.705-0.284,2.295-0.873c0.497-0.497,0.777-1.14,0.852-1.824c0.181,0.033,0.361,0.053,0.543,0.057 c0.891,0.026,1.707-0.282,2.296-0.873c0.608-0.608,0.895-1.433,0.869-2.292c0.891,0.027,1.705-0.283,2.295-0.873 c1.293-1.292,1.127-3.562-0.37-5.059L29.415,16.271z M29.558,21.103c-0.353,0.353-0.833,0.516-1.343,0.501 c-0.613-0.019-1.264-0.294-1.783-0.814l-2.681-2.679c-0.092-0.092-0.244-0.089-0.341,0.008c-0.098,0.097-0.103,0.25-0.009,0.342 l2.68,2.681c0.95,0.949,1.089,2.35,0.312,3.126c-0.352,0.353-0.833,0.517-1.342,0.501c-0.613-0.019-1.265-0.294-1.784-0.813 l-2.68-2.68c-0.092-0.092-0.245-0.088-0.342,0.009s-0.102,0.25-0.009,0.342l2.153,2.154c0.95,0.95,1.089,2.349,0.312,3.125 c-0.353,0.353-0.833,0.516-1.342,0.502c-0.613-0.02-1.266-0.294-1.785-0.814l-2.153-2.153c-0.044-0.044-0.104-0.068-0.169-0.067 c-0.065,0.002-0.126,0.029-0.173,0.076c-0.097,0.096-0.101,0.25-0.009,0.342l1.533,1.534c0.95,0.949,1.09,2.349,0.312,3.126 c-0.353,0.352-0.833,0.517-1.342,0.501c-0.613-0.018-1.266-0.294-1.784-0.813l-1.701-1.7l-4.982-4.979l-5.319-5.319l-2.42-6.173 l9.495-9.495l5.807,3.931l5.894,5.894L26.4,15.13l2.846,2.847C30.196,18.925,30.335,20.326,29.558,21.103z"></path> </g> </g></svg>
        <p class="underline-animation">Meus Acordos</p></ul></a>
        <a href="/mep"><ul class="w-full border-b border-graytt-dark flex flex-row py-5 items-center hover:bg-gray-200"><svg class="w-8 h-8 mr-3" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="Communication / Chat_Dots"> <path id="Vector" d="M5.59961 19.9203L7.12357 18.7012L7.13478 18.6926C7.45249 18.4384 7.61281 18.3101 7.79168 18.2188C7.95216 18.1368 8.12328 18.0771 8.2998 18.0408C8.49877 18 8.70603 18 9.12207 18H17.8031C18.921 18 19.4806 18 19.908 17.7822C20.2843 17.5905 20.5905 17.2842 20.7822 16.9079C21 16.4805 21 15.9215 21 14.8036V7.19691C21 6.07899 21 5.5192 20.7822 5.0918C20.5905 4.71547 20.2837 4.40973 19.9074 4.21799C19.4796 4 18.9203 4 17.8002 4H6.2002C5.08009 4 4.51962 4 4.0918 4.21799C3.71547 4.40973 3.40973 4.71547 3.21799 5.0918C3 5.51962 3 6.08009 3 7.2002V18.6712C3 19.7369 3 20.2696 3.21846 20.5433C3.40845 20.7813 3.69644 20.9198 4.00098 20.9195C4.35115 20.9191 4.76744 20.5861 5.59961 19.9203Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g> </g></svg>
        <p class="underline-animation">Mensagens e Propostas</ul></a>
        <a href="/about"><ul class="w-full border-b border-graytt-dark flex flex-row py-5 items-center hover:bg-gray-200">
        <p class="underline-animation">Quem Somos</p></ul></a>
        <a href="/login"><ul class="w-full border-b border-graytt-dark flex flex-row py-5 items-center hover:bg-gray-200"><svg class="w-8 h-8 mr-3" fill="#000000" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" class="icon"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M858.5 763.6a374 374 0 0 0-80.6-119.5 375.63 375.63 0 0 0-119.5-80.6c-.4-.2-.8-.3-1.2-.5C719.5 518 760 444.7 760 362c0-137-111-248-248-248S264 225 264 362c0 82.7 40.5 156 102.8 201.1-.4.2-.8.3-1.2.5-44.8 18.9-85 46-119.5 80.6a375.63 375.63 0 0 0-80.6 119.5A371.7 371.7 0 0 0 136 901.8a8 8 0 0 0 8 8.2h60c4.4 0 7.9-3.5 8-7.8 2-77.2 33-149.5 87.8-204.3 56.7-56.7 132-87.9 212.2-87.9s155.5 31.2 212.2 87.9C779 752.7 810 825 812 902.2c.1 4.4 3.6 7.8 8 7.8h60a8 8 0 0 0 8-8.2c-1-47.8-10.9-94.3-29.5-138.2zM512 534c-45.9 0-89.1-17.9-121.6-50.4S340 407.9 340 362c0-45.9 17.9-89.1 50.4-121.6S466.1 190 512 190s89.1 17.9 121.6 50.4S684 316.1 684 362c0 45.9-17.9 89.1-50.4 121.6S557.9 534 512 534z"></path> </g></svg>
        <p class="underline-animation">Logar-se ou Cadastrar-se</p></ul></a>
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