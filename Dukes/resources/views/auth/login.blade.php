<x-guest-layout>
    <x-auth-card>
        <span class="login100-form-title p-b-34 p-t-27 fw-bold fst-italic">
            Login
        </span>

        <br>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="wrap-input100 validate-input" data-validate="Username Required">
                {{-- <x-label for="email" :value="__('Username/Email')" /> --}}

                <x-input id="email" class="input100" type="email" name="email" placeholder="Username/Email..." :value="old('email')" required autofocus />
                <span class="focus-input100" data-placeholder="&#xf2c2;"></span>
            </div>

            <!-- Password -->
            <div class="wrap-input100 validate-input" data-validate="Password Required">
                {{-- <x-label for="password" :value="__('Password')" /> --}}
                <x-input id="password" type="password"
                                name="password"
                                placeholder="Password..."
                                required autocomplete="current-password" />
                <span class="focus-input100" data-placeholder="&#xf09c;"></span>
            </div>

            <!-- Remember Me -->
            <div class="py-2">
                <input id="remember_me" type="checkbox" class="input-checkbox100" name="remember">
                <label for="remember_me" class="label-checkbox100">
                    Remember me
                </label>
            </div>

            <div class="text-center my-2">
                @if (Route::has('password.request'))
                    <a class="txt1" href="{{ route('password.request') }}">
                        Forgot Password?
                    </a>
                @endif
            </div>

            <div class="container-login100-form-btn">
                <x-button>
                    Login
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
