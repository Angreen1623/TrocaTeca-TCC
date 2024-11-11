<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-se</title>
    <link rel="shortcut icon" href="{{ asset('image/t.png') }}">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <!--Modal de cadastrar de conta-->
    <div id="notloading" class="w-full min-h-screen z-[45] bg-backgtt bg-repeat bg-[length:870px_654px] bg-[url('/public/image/bg-icons.png')] bg-auto flex justify-center items-center px-10 py-5">
        <div class="relative z-50 inset-0 flex items-center justify-center w-full max-w-5xl">
            <div class="w-full max-w-5xl rounded-3xl bg-bluett py-6 sm:py-8 px-16 shadow-2xl items-center justify-center drop-shadow-tt border-2 border-graytt-light">
                <form id="registrationForm" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="flex flex-col md:flex-row">
                        <div class="w-full md:w-1/2 md:pr-10 flex flex-col justify-between h-96">
                            <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white font-fredokatt drop-shadow-tt h-16 flex items-center" style="font-family: 'Fredoka';">Cadastrar</h1> <!--Título-->

                            <div>
                                <label for="name" class="text-white">Nome:</label>
                                <input id="name" type="text" name="name" class="shadow-tt md:max-w-96 block w-full rounded-xl border border-graytt-light px-3.5 py-2 shadow-sm ring-1 border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6">
                                @error('name')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label for="sobrenome" class="text-white">Sobrenome:</label>
                                <input id="sobrenome" type="text" name="sobrenome" class="shadow-tt md:max-w-96 block w-full rounded-xl border border-graytt-light px-3.5 py-2 shadow-sm ring-1 border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6">
                                @error('sobrenome')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label for="email" class="text-white">E-mail:</label>
                                <input id="email" type="text" name="email" class="shadow-tt md:max-w-96 block w-full rounded-xl border border-graytt-light px-3.5 py-2 shadow-sm ring-1 border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6">
                                @error('email')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label for="datan" class="text-white">Data de nascimento:</label>
                                <input id="datan" type="date" name="datan" class="shadow-tt max-w-44 block w-full rounded-xl border border-graytt-light px-3.5 py-2 shadow-sm ring-1 border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6">
                                <span id="datan-error" class="text-red-500 text-sm mt-1 hidden">Você deve ter pelo menos 18 anos para se registrar.</span>
                                @error('datan')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="w-full md:w-1/2 md:pl-5 md:border-l-2 border-white mt-3 md:mt-0 flex flex-col justify-between h-96">
                            <div>
                                <label for="estado" class="text-white">Estado:</label>
                                <select id="estado" name="estado" class="custom-select shadow-tt max-w-36 block w-full rounded-xl border border-graytt-light px-3.5 py-2 shadow-sm ring-1 border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6">
                                    <option value="" disabled selected>Selecionar</option>
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AP">AP</option>
                                    <option value="AM">AM</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MT">MT</option>
                                    <option value="MS">MS</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SP">SP</option>
                                    <option value="SE">SE</option>
                                    <option value="TO">TO</option>
                                </select>
                                @error('estado')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label for="cidade" class="text-white">Cidade:</label>
                                <input id="cidade" type="text" name="cidade" class="shadow-tt md:max-w-96 block w-full rounded-xl border border-graytt-light px-3.5 py-2 shadow-sm ring-1 border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6">
                                @error('cidade')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label for="password" class="text-white">Senha:</label>
                                <input id="password" type="password" name="password" class="shadow-tt md:max-w-96 block w-full rounded-xl border border-graytt-light px-3.5 py-2 shadow-sm ring-1 border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6">
                                @error('password')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label for="password_confirmation" class="text-white">Confirmar senha:</label>
                                <input id="password_confirmation" type="password" name="password_confirmation" class="shadow-tt md:max-w-96 block w-full rounded-xl border border-graytt-light px-3.5 py-2 shadow-sm ring-1 border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6">
                                @error('password_confirmation')
                                <span class="text-red-500 text-sm mt-1">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-4 flex items-center gap-2">
                                <input type="checkbox" id="confirm" name="confirm" class="mr-2 peer">
                                <label for="confirm" class="text-sm text-black"> Li e concordo com os
                                <a class="underline-animation text-base font-bold text-black hover:text-graytt-900 focus:outline-none focus:ring-0 visited:text-black" href="/termos" target="_blank" rel="noopener noreferrer"> Termos de Uso.</a>
                            </div>
                            <div class="invisible">
                                <label>.</label>
                                <input class="shadow-tt max-w-44 block py-2 shadow-sm ring-1 border border-graytt ring-inset">
                            </div>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="w-full md:w-1/2 flex items-center">
                            <a class="underline-animation text-sm text-graytt-dark hover:text-graytt-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
                        </div>
                        <div class="w-full md:w-1/2 md:pl-5 md:border-l-2 border-white">
                            <div class="flex w-full justify-end items-end">
                                <button type="submit" id="cadastrar" disabled class="inline-flex items-center justify-center w-full sm:w-auto px-4 py-2 bg-pinktt shadow-tt text-white text-lg font-medium rounded-2xl opacity-50 cursor-not-allowed" onclick='startLoading()'>
                                    Cadastrar
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('loading')

    <script>
        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            const datanInput = document.getElementById('datan');
            const errorSpan = document.getElementById('datan-error');
            const today = new Date();
            const dob = new Date(datanInput.value);
            const age = today.getFullYear() - dob.getFullYear();
            const m = today.getMonth() - dob.getMonth();

            console.log('Data de nascimento:', dob);
            console.log('Idade:', age);

            if (m < 0 || (m === 0 && today.getDate() < dob.getDate())) {
                age--;
            }

            if (age < 18) {
                errorSpan.textContent = 'Você deve ser maior de idade para se registrar.';
                event.preventDefault();
            } else {
                errorSpan.textContent = '';
            }
        });

        //checar se termos de uso foi pressionado ou não
        const checkbox = document.getElementById('confirm');
        const cadButton = document.getElementById('cadastrar');


        checkbox.addEventListener('change', function() {
            if (checkbox.checked) {
                cadButton.disabled = false;
                cadButton.classList.remove('opacity-50', 'cursor-not-allowed');
                cadButton.classList.add('hover:bg-pinktt-dark', 'transition', 'ease-in-out', 'delay-100', 'hover:-translate-y-1', 'hover:scale-110', 'duration-300');
            } else {
                cadButton.disabled = true;
                cadButton.classList.add('opacity-50', 'cursor-not-allowed');
                cadButton.classList.remove('hover:bg-pinktt-dark', 'transition', 'ease-in-out', 'delay-100', 'hover:-translate-y-1', 'hover:scale-110', 'duration-300');
            }
        });

    </script>
</body>

</html>