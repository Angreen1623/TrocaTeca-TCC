<x-guest-layout>
    <div class="mb-4 text-sm sm:text-xl text-black font-bold">
        {{ __('Só mais um pouquinho...') }}
    </div>

    <div class="mb-4 text-md text-black">
        {{ __('Para finalizar seu cadastro, enviamos uma verificação para o endereço de e-mail informado. Caso não tenha recebido, solicite o envio novamente:') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-greentt-dark text-bold">
            {{ __('Um novo e-mail de verificação foi enviado.') }}
        </div>
    @endif

    <div class="mt-4 flex flex-col sm:flex-row items-center justify-between space-y-4 sm:space-y-0">
        <form method="POST" action="{{ route('verification.send') }}" class="w-full sm:w-auto">
            @csrf
            <div>
                <x-primary-button class="w-full sm:w-auto">
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}" class="w-full sm:w-auto">
            @csrf
            <button type="submit" class="w-full sm:w-auto font-bold underline text-md text-black hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>
