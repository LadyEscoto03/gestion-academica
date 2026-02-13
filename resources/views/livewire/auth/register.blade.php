<x-layouts::auth>
    <div class="flex flex-col gap-6">
        <x-auth-header :title="__('Create an account')" :description="__('Enter your details below to create your account')" />

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('register.store') }}" class="flex flex-col gap-6">
            @csrf

             <!-- identification -->
            <flux:input
                name="identification"
                :label="__('Número de cédula')"
                :value="old('identification')"
                type="text"
                required
                autofocus
                autocomplete="identification"
                :placeholder="__('Número de cédula')"
            />
            <!-- Name -->
            <flux:input
                name="name"
                :label="__('Nombre')"
                :value="old('name')"
                type="text"
                required
                autofocus
                autocomplete="name"
                :placeholder="__('Full name')"
            />
             <!-- surname -->
            <flux:input
                name="surname"
                :label="__('Primer apellido')"
                :value="old('surname')"
                type="text"
                required
                autofocus
                autocomplete="surname"
                :placeholder="__('Primer apellido')"
            />

            <!-- second surname -->
            <flux:input
                name="secondSurname"
                :label="__('Segundo apellido')"
                :value="old('secondSurname')"
                type="text"
                required
                autofocus
                autocomplete="secondSurname"
                :placeholder="__('Segundo apellido')"
            />
              <!-- phone number -->
            <flux:input
                name="phoneNumber"
                :label="__('Número de teléfono')"
                :value="old('phoneNumber')"
                type="phone"
                required
                autofocus
                autocomplete="phoneNumber"
                :placeholder="__('Número telefónico de contacto')"
            />

            <!-- Email Address -->
            <flux:input
                name="email"
                :label="__('Correo electrónico')"
                :value="old('email')"
                type="email"
                required
                autocomplete="email"
                placeholder="email@example.com"
            />

            <!-- Password -->
            <flux:input
                name="password"
                :label="__('Contraseña')"
                type="password"
                required
                autocomplete="new-password"
                :placeholder="__('Password')"
                viewable
            />

            <!-- Confirm Password -->
            <flux:input
                name="password_confirmation"
                :label="__('Confirmar contraseña')"
                type="password"
                required
                autocomplete="new-password"
                :placeholder="__('Confirm password')"
                viewable
            />

            <div class="flex items-center justify-end">
                <flux:button type="submit" variant="primary" class="w-full" data-test="register-user-button">
                    {{ __('Create account') }}
                </flux:button>
            </div>
        </form>

        <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
            <span>{{ __('Already have an account?') }}</span>
            <flux:link :href="route('login')" wire:navigate>{{ __('Log in') }}</flux:link>
        </div>
    </div>
</x-layouts::auth>
