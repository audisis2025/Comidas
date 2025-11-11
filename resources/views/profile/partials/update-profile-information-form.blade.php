<section>
    <header>
        <h2 class="text-lg font-medium text-[#000000]">
            {{ __('Información del perfil') }}
        </h2>

        <p class="mt-1 text-sm text-[#000000]">
            {{ __("Actualiza tu información del perfil y del correo electrónico.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Correo Electronico')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-[#000000] flex items-center gap-1">
                        <x-heroicon-o-envelope class="h-4 w-4" />
                        {{ __('Tu correo electrónico no está verificado.') }}

                        <button form="send-verification" class="underline text-sm text-[#241178] hover:text-[#1a0d5a] rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#241178] flex items-center gap-1 ml-1">
                            <x-heroicon-o-paper-airplane class="h-3 w-3" />
                            {{ __('Clic aquí para volver a enviar la verificación.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-[#4CAF50] flex items-center gap-1">
                            <x-heroicon-o-check-circle class="h-4 w-4" />
                            {{ __('Un nuevo link de verificación ha sido enviado a su correo electrónico.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button class="bg-[#DC6601] hover:bg-[#c45a01] text-[#FFFFFF] flex items-center gap-2">
                <x-heroicon-o-check-circle class="h-4 w-4" />
                {{ __('Guardar') }}
            </x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-[#4CAF50] flex items-center gap-1"
                >
                    <x-heroicon-o-check-circle class="h-4 w-4" />
                    {{ __('Guardado.') }}
                </p>
            @endif
        </div>
    </form>
</section>