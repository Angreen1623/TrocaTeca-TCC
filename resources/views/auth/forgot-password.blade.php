<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('E-mail')" />
            <input id="email" type="email" name="email" :value="old('email')" required class="shadow-tt max-w-96 block w-full rounded-xl border border-graytt-light px-3.5 py-2 shadow-sm ring-1 border border-graytt ring-inset ring-graytt placeholder:text-graytt-dark focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6 mb-5">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
