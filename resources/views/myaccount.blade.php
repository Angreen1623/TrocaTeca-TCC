<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrocaTeca</title>
    <link rel="shortcut icon" href="{{ asset('image/t.png') }}">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="bg-backgtt">
    <div class="h-full min-h-screen relative">
        @include('navbar')

        <!--Parte superior do minha conta-->
        <div class="bg-yellowtt-light">
            <div class="max-w-screen-xl py-20 px-6 mx-auto overflow-hidden sm:px-8 md:px-10 items-center flex flex-col md:flex-row place-content-between">
                <h2 class="text-3xl drop-shadow-tt text-center md:text-left text-white sm:text-6xl mb-3 md:hidden" style="font-family: 'Fredoka';">
                    Minha Conta
                </h2>
                <div class="mb-5 order-2 md:order-1">
                    <div class="mb-16 flex flex-col items-center md:items-start max-w-3xl md:mt-0">
                        <h2 class="text-3xl drop-shadow-tt text-center md:text-left text-white sm:text-6xl mb-3 hidden md:block" style="font-family: 'Fredoka';">
                            Minha Conta
                        </h2>
                        <form id="upprofile" method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <label for="info_sobremim" class="block text-lg font-medium text-black">Descrição de interesses:</label>
                            <input type="text" id="info_sobremim" name="info_sobremim" value="{{ old('info_sobremim', auth()->user()->info_sobremim) }}" placeholder="Informe seus interesses"
                                class="bg-transparent border-none text-black placeholder-graytt-dark focus:outline-none w-full mt-3 mb-5 py-2 px-4 rounded-md">
                    </div>
                    <div class="flex flex-col justify-center items-center md:items-start max-w-3xl md:mt-0">
                        <p>Trocando desde: {{ auth()->user()->created_at->format('Y') }}</p>
                        <p>Nº de trocas bem-sucedidas: **</p>
                    </div>
                </div>

                <div class="order-1 md:order-2 flex place-content-center h-fit mb-6 md:mb-0">
                    <label for="imagem_usuario" class="bg-white w-60 h-60 rounded-full justify-center items-center flex border border-black overflow-hidden">
                        <div class="add-img h-full flex justify-center items-center">
                            <img src="" class="hidden h-full object-cover">
                            <div class="placeholder-img mt-2 mb-2 flex flex-col justify-center items-center transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-[1.05] duration-300 h-full">
                                @if(is_Null(auth()->user()->imagem_usuario))
                                <img src="{{ asset('image/mais.svg') }}" width="120" alt="">
                                @else
                                <img src="{{ asset(auth()->user()->imagem_usuario) }}" class="h-full object-cover">
                                @endif
                            </div>
                        </div>
                    </label>
                    <input name="imagem_usuario" id="imagem_usuario" type="file" accept="image/*" class="hidden">
                </div>
            </div>
        </div>
        <div class="bg-repeat bg-[url('/public/image/triangulo-amarelo.svg')] w-full h-8 -mt-px bg-backgtt mb-10"></div>

        <!--Parte que corresponde ao formulário-->
        <div>
            <h3 class="text-3xl text-center lg:text-left sm:text-6xl mb-10 sm:ml-8" style="font-family: 'Fredoka';">Informações da conta</h3>

            <div class="flex w-full content-evenly flex-wrap sm:mb-14">
                <div class="sm:border-r-4 border-black px-24 sm:w-1/2 w-full">
                    <!--Primeiro trecho do fromu-->

                    <label for="name">Nome:</label>
                    <input type="text" name="name" id="name" value="{{ old('name', auth()->user()->name) }}" class="shadow-tt mt-3 block w-full rounded-xl border-0 px-3.5 py-2 shadow-sm ring-1 border-2 border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 mb-5">

                    <label for="sobrenome">Sobrenome:</label>
                    <input type="text" name="sobrenome" id="sobrenome" value="{{ old('sobrenome', auth()->user()->sobrenome) }}" class="shadow-tt mt-3 block w-full rounded-xl border-0 px-3.5 py-2 shadow-sm ring-1 border-2 border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 mb-5">

                    <label for="email">Email:</label>
                    <input type="email" readonly name="email" id="email" value="{{ old('email', auth()->user()->email) }}" class="shadow-tt mt-3 block w-full rounded-xl border-0 px-3.5 py-2 shadow-sm ring-1 border-2 border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 mb-5">

                    <label for="datan" class="">Data de nascimento:</label>
                    <input type="date" readonly name="datan" id="datan" value="{{ old('datan', auth()->user()->datan) }}" class="shadow-tt mt-3 text-graytt-dark block w-full max-w-40 rounded-xl border-0 px-3.5 py-2 shadow-sm ring-1 border-2 border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 mb-5">
                    <label for="estado">Estado:</label>
                    <select id="estado" name="estado" class="custom-select text-graytt-dark shadow-tt mt-3 block w-36 rounded-xl border-0 px-3.5 py-2 shadow-sm ring-1 border-2 border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 mb-5">
                        <option value="" disabled selected>Selecionar</option>
                        <option value="AC" {{ old('estado', auth()->user()->estado) == 'AC' ? 'selected' : '' }}>AC</option>
                        <option value="AL" {{ old('estado', auth()->user()->estado) == 'AL' ? 'selected' : '' }}>AL</option>
                        <option value="AP" {{ old('estado', auth()->user()->estado) == 'AP' ? 'selected' : '' }}>AP</option>
                        <option value="AM" {{ old('estado', auth()->user()->estado) == 'AM' ? 'selected' : '' }}>AM</option>
                        <option value="BA" {{ old('estado', auth()->user()->estado) == 'BA' ? 'selected' : '' }}>BA</option>
                        <option value="CE" {{ old('estado', auth()->user()->estado) == 'CE' ? 'selected' : '' }}>CE</option>
                        <option value="DF" {{ old('estado', auth()->user()->estado) == 'DF' ? 'selected' : '' }}>DF</option>
                        <option value="ES" {{ old('estado', auth()->user()->estado) == 'ES' ? 'selected' : '' }}>ES</option>
                        <option value="GO" {{ old('estado', auth()->user()->estado) == 'GO' ? 'selected' : '' }}>GO</option>
                        <option value="MA" {{ old('estado', auth()->user()->estado) == 'MA' ? 'selected' : '' }}>MA</option>
                        <option value="MT" {{ old('estado', auth()->user()->estado) == 'MT' ? 'selected' : '' }}>MT</option>
                        <option value="MS" {{ old('estado', auth()->user()->estado) == 'MS' ? 'selected' : '' }}>MS</option>
                        <option value="MG" {{ old('estado', auth()->user()->estado) == 'MG' ? 'selected' : '' }}>MG</option>
                        <option value="PA" {{ old('estado', auth()->user()->estado) == 'PA' ? 'selected' : '' }}>PA</option>
                        <option value="PB" {{ old('estado', auth()->user()->estado) == 'PB' ? 'selected' : '' }}>PB</option>
                        <option value="PR" {{ old('estado', auth()->user()->estado) == 'PR' ? 'selected' : '' }}>PR</option>
                        <option value="PE" {{ old('estado', auth()->user()->estado) == 'PE' ? 'selected' : '' }}>PE</option>
                        <option value="PI" {{ old('estado', auth()->user()->estado) == 'PI' ? 'selected' : '' }}>PI</option>
                        <option value="RJ" {{ old('estado', auth()->user()->estado) == 'RJ' ? 'selected' : '' }}>RJ</option>
                        <option value="RN" {{ old('estado', auth()->user()->estado) == 'RN' ? 'selected' : '' }}>RN</option>
                        <option value="RS" {{ old('estado', auth()->user()->estado) == 'RS' ? 'selected' : '' }}>RS</option>
                        <option value="RO" {{ old('estado', auth()->user()->estado) == 'RO' ? 'selected' : '' }}>RO</option>
                        <option value="RR" {{ old('estado', auth()->user()->estado) == 'RR' ? 'selected' : '' }}>RR</option>
                        <option value="SC" {{ old('estado', auth()->user()->estado) == 'SC' ? 'selected' : '' }}>SC</option>
                        <option value="SP" {{ old('estado', auth()->user()->estado) == 'SP' ? 'selected' : '' }}>SP</option>
                        <option value="SE" {{ old('estado', auth()->user()->estado) == 'SE' ? 'selected' : '' }}>SE</option>
                        <option value="TO" {{ old('estado', auth()->user()->estado) == 'TO' ? 'selected' : '' }}>TO</option>
                    </select>


                </div>
                <!--segundo trecho do formulário-->
                <div class="px-24 sm:w-1/2 w-full">
                    <label for="cidade">Cidade:</label>
                    <input type="text" name="cidade" id="cidade" value="{{ old('cidade', auth()->user()->cidade) }}" class="shadow-tt mt-3 block w-full rounded-xl border-0 px-3.5 py-2 shadow-sm ring-1 border-2 border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 mb-5">
                    </form>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        @method('PUT')

                        <label for="current_password">Senha Atual:</label>
                        <input id="current_password" name="current_password" type="password" class="shadow-tt mt-3 block w-full rounded-xl border-0 px-3.5 py-2 shadow-sm ring-1 border-2 border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 mb-5" autocomplete="current-password">

                        <label for="password">Nova Senha:</label>
                        <input id="password" name="password" type="password" class="shadow-tt mt-3 block w-full rounded-xl border-0 px-3.5 py-2 shadow-sm ring-1 border-2 border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 mb-5" autocomplete="new-password">

                        <label for="password_confirmation">Confirmar Nova Senha:</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" class="shadow-tt mt-3 block w-full rounded-xl border-0 px-3.5 py-2 shadow-sm ring-1 border-2 border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 mb-5" autocomplete="new-password">

                        <button type="submit" class="mb-8 sm:mb-0 inline-flex items-center px-4 py-3 justify-center w-full sm:w-auto bg-pinktt shadow-tt hover:bg-pinktt-dark text-white text-md font-medium rounded-2xl transition ease-in-out delay-100 hover:-translate-y-1 hover:scale-110 duration-300">
                            Salvar nova senha
                        </button>
                    </form>
                </div>
            </div>
            <!--Botões de Confirmação-->
            <div class="flex w-full flex-wrap mb-24 px-24 justify-between">
                <button id="openwarningButton" class="my-4 sm:my-0 inline-flex items-center px-4 py-3 justify-center w-full sm:w-auto bg-redtt shadow-tt hover:bg-redtt-dark text-white text-md font-medium rounded-2xl transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-110 duration-300">
                    <svg class="h-8 w-8 mr-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="44" zoomAndPan="magnify" viewBox="0 0 33 32.999998" height="44" preserveAspectRatio="xMidYMid meet" version="1.0">
                        <defs>
                            <clipPath id="5f64fcf4cc">
                                <path d="M 14.535156 15.070312 L 16.035156 15.070312 L 16.035156 16.570312 L 14.535156 16.570312 Z M 14.535156 15.070312 " clip-rule="nonzero" />
                            </clipPath>
                            <clipPath id="42420438bd">
                                <path d="M 0 15 L 29 15 L 29 32.25 L 0 32.25 Z M 0 15 " clip-rule="nonzero" />
                            </clipPath>
                        </defs>
                        <g clip-path="url(#5f64fcf4cc)">
                            <path fill="#000000" d="M 15.285156 15.070312 C 15.699219 15.070312 16.035156 15.40625 16.035156 15.820312 C 16.035156 16.234375 15.699219 16.570312 15.285156 16.570312 C 14.871094 16.570312 14.535156 16.234375 14.535156 15.820312 C 14.535156 15.40625 14.871094 15.070312 15.285156 15.070312 Z M 15.285156 15.070312 " fill-opacity="1" fill-rule="evenodd" />
                        </g>
                        <path fill="#ffffff" d="M 23.703125 26.152344 C 23.535156 26.152344 23.363281 26.082031 23.242188 25.949219 C 23.003906 25.695312 23.015625 25.296875 23.269531 25.058594 L 28.214844 20.4375 C 28.46875 20.199219 28.867188 20.214844 29.105469 20.46875 C 29.34375 20.722656 29.332031 21.121094 29.074219 21.359375 L 24.132812 25.980469 C 24.011719 26.09375 23.855469 26.152344 23.703125 26.152344 Z M 23.703125 26.152344 " fill-opacity="1" fill-rule="nonzero" />
                        <path fill="#ffffff" d="M 28.644531 26.152344 C 28.492188 26.152344 28.335938 26.09375 28.214844 25.980469 L 23.269531 21.359375 C 23.015625 21.121094 23.003906 20.722656 23.242188 20.46875 C 23.480469 20.214844 23.878906 20.199219 24.132812 20.4375 L 29.074219 25.058594 C 29.332031 25.296875 29.34375 25.695312 29.105469 25.949219 C 28.980469 26.082031 28.8125 26.152344 28.644531 26.152344 Z M 28.644531 26.152344 " fill-opacity="1" fill-rule="nonzero" />
                        <path fill="#ffffff" d="M 26.171875 29.921875 C 22.472656 29.921875 19.460938 26.910156 19.460938 23.210938 C 19.460938 19.507812 22.472656 16.496094 26.171875 16.496094 C 29.875 16.496094 32.886719 19.507812 32.886719 23.210938 C 32.886719 26.910156 29.875 29.921875 26.171875 29.921875 Z M 26.171875 17.757812 C 23.167969 17.757812 20.722656 20.203125 20.722656 23.210938 C 20.722656 26.214844 23.167969 28.660156 26.171875 28.660156 C 29.179688 28.660156 31.625 26.214844 31.625 23.210938 C 31.625 20.203125 29.179688 17.757812 26.171875 17.757812 Z M 26.171875 17.757812 " fill-opacity="1" fill-rule="nonzero" />
                        <path fill="#ffffff" d="M 14.90625 16.460938 C 10.371094 16.460938 6.679688 12.765625 6.679688 8.230469 C 6.679688 3.691406 10.371094 0 14.90625 0 C 19.445312 0 23.136719 3.691406 23.136719 8.230469 C 23.136719 12.765625 19.445312 16.460938 14.90625 16.460938 Z M 14.90625 1.261719 C 11.066406 1.261719 7.941406 4.386719 7.941406 8.230469 C 7.941406 12.070312 11.066406 15.195312 14.90625 15.195312 C 18.75 15.195312 21.875 12.070312 21.875 8.230469 C 21.875 4.386719 18.75 1.261719 14.90625 1.261719 Z M 14.90625 1.261719 " fill-opacity="1" fill-rule="nonzero" />
                        <g clip-path="url(#42420438bd)">
                            <path fill="#ffffff" d="M 28.355469 32.320312 L 0.917969 32.320312 L 0.835938 31.78125 C 0.0078125 26.246094 1.949219 22.0625 3.722656 19.53125 C 5.640625 16.792969 7.734375 15.371094 7.824219 15.3125 L 7.984375 15.203125 L 9.632812 15.203125 L 9.816406 15.382812 C 11.269531 16.792969 13.125 17.601562 14.90625 17.601562 C 16.691406 17.601562 18.542969 16.792969 19.996094 15.382812 L 20.179688 15.203125 L 21.640625 15.203125 C 21.988281 15.203125 22.269531 15.488281 22.269531 15.835938 C 22.269531 16.183594 21.988281 16.46875 21.640625 16.46875 L 20.6875 16.46875 C 19.03125 17.992188 16.9375 18.863281 14.90625 18.863281 C 12.878906 18.863281 10.785156 17.992188 9.128906 16.46875 L 8.378906 16.46875 C 7.320312 17.253906 0.996094 22.355469 2.011719 31.058594 L 28.355469 31.058594 C 28.703125 31.058594 28.984375 31.339844 28.984375 31.6875 C 28.984375 32.039062 28.703125 32.320312 28.355469 32.320312 Z M 28.355469 32.320312 " fill-opacity="1" fill-rule="nonzero" />
                        </g>
                    </svg>
                    Inativar conta
                </button>

                <button type="submit" form="upprofile" class="inline-flex items-center px-4 py-3 justify-center w-full sm:w-auto bg-greentt shadow-tt hover:bg-greentt-dark text-white text-md font-medium rounded-2xl transition ease-in-out delay-100  hover:-translate-y-1 hover:scale-110 duration-300">
                    Salvar alterações
                </button>
            </div>

        </div>

        @include('footer')
    </div>
    @include('warningm')

    <script>
        let paiimg = '.add-img';
        let img = document.querySelector(paiimg + ' img');
        let placeholder = document.querySelector(paiimg + ' .placeholder-img');
        let inputArquivo = document.querySelector("#imagem_usuario");

        inputArquivo.onchange = function() { //Função para atualizar a interface do usuário quando um arquivo é selecionado.

            if (inputArquivo.files.length > 0) { //Verifica se há um arquivo selecionado.
                img.src = URL.createObjectURL(inputArquivo.files[0]); // Cria uma URL temporária para o arquivo selecionado e atualiza a imagem.
                img.classList.remove('hidden');

                placeholder.classList.add('hidden');
            }

        };
    </script>
</body>

</html>