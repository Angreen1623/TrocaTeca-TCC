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
        <a href="/meusartigos"><ul class="w-full border-b border-graytt-dark flex flex-row py-5 items-center hover:bg-gray-200"><svg class="h-8 w-8 mr-3" version="1.0" xmlns="http://www.w3.org/2000/svg" width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none"> <path d="M4240 4867 c-49 -16 -133 -102 -148 -153 -8 -27 -12 -123 -12 -280 l-1 -239 -170 -135 c-225 -178 -223 -174 -227 -383 l-4 -157 -73 67 c-113 105 -255 182 -412 225 -112 31 -353 31 -464 0 -279 -76 -511 -264 -630 -508 l-21 -45 -87 83 c-47 46 -117 105 -154 132 -51 36 -66 53 -62 65 63 152 76 276 49 456 -5 39 -4 41 36 63 42 24 90 82 117 142 11 22 16 66 17 120 1 100 -22 159 -89 225 -65 66 -125 89 -225 90 -74 0 -92 -4 -138 -28 -29 -15 -70 -45 -92 -67 l-38 -38 -79 26 c-68 22 -95 26 -213 26 -121 0 -143 -3 -212 -27 l-78 -27 -42 43 c-67 67 -127 91 -228 91 -74 1 -92 -3 -138 -27 -67 -35 -121 -90 -152 -152 -19 -41 -24 -66 -24 -135 -1 -79 2 -89 35 -150 31 -57 92 -119 129 -132 9 -3 9 -25 0 -87 -24 -164 8 -335 90 -475 l40 -68 -67 -107 c-89 -142 -193 -344 -236 -461 -50 -135 -70 -243 -65 -355 3 -79 8 -101 36 -158 37 -76 91 -127 172 -166 47 -22 68 -26 145 -26 79 0 97 4 149 29 75 37 169 129 235 230 l51 79 0 -1092 0 -1092 25 -24 24 -25 1871 0 1871 0 24 25 25 24 0 1311 0 1311 -25 24 c-13 14 -31 25 -40 25 -13 0 -15 38 -15 324 l0 325 53 24 c69 31 123 86 156 156 21 46 26 70 26 136 -1 71 -4 87 -34 143 -39 72 -74 105 -148 139 l-53 24 0 221 c0 142 -4 235 -12 260 -17 59 -88 133 -145 152 -55 19 -267 21 -323 3z m295 -172 l25 -24 0 -219 0 -218 -52 -24 c-241 -109 -250 -446 -16 -569 l68 -36 0 -322 0 -323 -160 0 -160 0 0 855 0 856 25 24 c23 24 31 25 135 25 104 0 112 -1 135 -25z m-3918 -226 c15 -6 38 -19 49 -30 l21 -20 -63 -61 c-35 -33 -81 -87 -101 -119 -21 -32 -41 -59 -44 -59 -4 0 -21 16 -37 35 -110 124 21 313 175 254z m1129 -5 c101 -48 125 -175 48 -252 l-35 -35 -43 64 c-24 35 -70 90 -103 121 l-60 57 21 20 c45 42 114 52 172 25z m-445 -96 c177 -65 293 -185 355 -368 26 -77 26 -244 0 -320 -23 -67 -57 -137 -83 -169 l-19 -24 -26 44 c-35 59 -123 141 -186 173 -145 73 -299 73 -444 0 -63 -32 -151 -114 -186 -173 l-26 -44 -19 24 c-26 32 -60 102 -83 169 -26 76 -26 243 0 320 59 176 175 300 339 362 81 31 125 37 222 33 63 -2 110 -11 156 -27z m3402 -302 c104 -43 129 -180 46 -258 -67 -64 -156 -64 -220 1 -124 123 13 325 174 257z m-623 -391 l0 -315 -120 0 -120 0 0 214 c0 209 1 216 23 240 19 22 207 176 215 176 1 0 2 -142 2 -315z m-980 -9 c98 -18 215 -64 295 -116 36 -23 65 -45 65 -49 0 -3 -112 -119 -250 -256 l-250 -250 -250 250 c-137 137 -250 253 -250 256 0 14 134 93 207 121 141 55 287 70 433 44z m-2005 -142 c39 -10 74 4 93 36 l18 29 51 -23 c62 -29 115 -82 148 -146 l25 -50 -47 -23 c-97 -49 -152 -62 -263 -62 -111 0 -166 13 -263 62 l-47 23 25 50 c33 64 86 117 148 146 l51 23 18 -29 c9 -16 29 -32 43 -36z m664 -191 c36 -26 110 -91 164 -145 l98 -99 -7 -52 c-3 -29 -7 -58 -9 -64 -4 -10 -112 -13 -497 -13 -419 0 -497 -2 -515 -15 -12 -9 -31 -47 -48 -96 -111 -336 -278 -559 -418 -559 -45 0 -103 23 -136 53 -128 118 -50 445 201 848 l61 97 61 -41 c115 -78 271 -127 406 -127 182 0 379 82 505 210 27 27 53 50 58 50 5 0 39 -21 76 -47z m796 -163 l210 -210 -301 0 -302 0 14 68 c14 74 42 161 69 213 25 48 87 139 94 139 3 0 101 -94 216 -210z m1079 137 c53 -85 93 -185 111 -279 l13 -68 -302 0 -301 0 210 210 c115 116 213 210 217 210 3 0 27 -33 52 -73z m446 -227 l0 -121 -82 3 -83 3 -7 60 c-4 32 -15 83 -23 111 -8 29 -15 55 -15 58 0 3 47 6 105 6 l105 0 0 -120z m560 -520 l0 -240 -1760 0 -1760 0 0 240 0 240 1760 0 1760 0 0 -240z m-2400 -456 c0 -31 5 -75 12 -98 16 -55 99 -138 154 -154 30 -9 164 -12 476 -12 501 0 499 0 571 80 49 55 67 103 67 184 l0 56 560 0 560 0 0 -240 0 -240 -1760 0 -1760 0 0 240 0 240 560 0 560 0 0 -56z m1120 1 c0 -46 -4 -60 -25 -80 l-24 -25 -431 0 -431 0 -24 25 c-21 20 -25 34 -25 80 l0 55 480 0 480 0 0 -55z m1280 -825 l0 -240 -1760 0 -1760 0 0 240 0 240 1760 0 1760 0 0 -240z m0 -640 l0 -240 -1760 0 -1760 0 0 240 0 240 1760 0 1760 0 0 -240z"/><path d="M825 3975 c-50 -49 -15 -135 55 -135 41 0 80 39 80 80 0 41 -39 80 -80 80 -19 0 -40 -9 -55 -25z"/><path d="M1305 3975 c-50 -49 -15 -135 55 -135 41 0 80 39 80 80 0 41 -39 80-80 80 -19 0 -40 -9 -55 -25z"/></g></svg>
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