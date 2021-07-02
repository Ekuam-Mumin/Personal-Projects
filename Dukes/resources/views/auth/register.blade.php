<x-guest-layout>
    <x-auth-card>
        <span class="login100-form-title p-b-34 p-t-27 fw-bold fst-italic">
            Sign-up
        </span>

        <br>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="wrap-input100 validate-input" data-validate="Fullname Required">
                <x-input id="name" type="text" name="name" placeholder="Fullname..." :value="old('name')" required autofocus />
                <span class="focus-input100" data-placeholder="&#xf2c2;"></span>
            </div>

            <!-- Email Address -->
            <div class="wrap-input100 validate-input" data-validate="E-mail Required">
                <x-input id="email" type="email" name="email" placeholder="E-mail..." :value="old('email')" required />
                <span class="focus-input100" data-placeholder="&#xf0e0;"></span>
            </div>

            {{-- Phone number --}}
            <div class="wrap-input100 validate-input" data-validate="Phone-number Required">
                <x-input id="phone" type="text" name="phone" placeholder="Phone-number..." :value="old('phone')" required />
                <span class="focus-input100" data-placeholder="&#xf10b;"></span>
            </div>

            <!-- Password -->
            <div class="wrap-input100 validate-input" data-validate="Password Required">
                <x-input id="password" placeholder="Password..."
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
                <span class="focus-input100" data-placeholder="&#xf13e;"></span>
            </div>

            <!-- Confirm Password -->
            <div class="wrap-input100 validate-input" data-validate="Password Confirmation Required">
                <x-input id="password_confirmation" placeholder="Confirm Password..."
                                type="password"
                                name="password_confirmation" required />
                <span class="focus-input100" data-placeholder="&#xf13e;"></span>
            </div>

            <div class="text-center my-2">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    Already have an account? Login
                </a>
            </div>

            <div class="container-login100-form-btn">
                <x-button>
                    Sign-Up
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
