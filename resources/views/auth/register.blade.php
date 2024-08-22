<x-layout>
    <x-slot:heading>Register</x-slot:heading>
    <form method="POST" action="/register" class="flex flex-col w-1/3 gap-5 mt-3">
        @csrf

        <div class="flex items-center justify-between">
            <x-form-field>
                <x-form-label for="first_name">First Name</x-form-label>
                <x-form-input name="first_name" id="first_name" placeholder="John" />
                <x-form-error name="first_name" />
            </x-form-field>

            <x-form-field>
                <x-form-label for="last_name">Last Name</x-form-label>
                <x-form-input name="last_name" id="last_name" placeholder="Doe" />
                <x-form-error name="last_name" />
            </x-form-field>
        </div>

        <x-form-field>
            <x-form-label for="email">Email</x-form-label>
            <x-form-input name="email" id="email" type="email" placeholder="example@gmail.com" />
            <x-form-error name="email" />
        </x-form-field>

        <x-form-field>
            <x-form-label for="password">Password</x-form-label>
            <x-form-input name="password" id="password" type="password" />
            <x-form-error name="password" />
        </x-form-field>

        <x-form-field>
            <x-form-label for="password_confirmation">Confirm Password</x-form-label>
            <x-form-input name="password_confirmation" id="password_confirmation" type="password" />
            <x-form-error name="password_confirmation" />
        </x-form-field>

        <div class="flex items-center gap-2">
            <a href="/" class="py-2 px-5 text-sm bg-slate-300 hover:bg-slate-400 rounded text-gray-700 font-medium">
                Cancel
            </a>
            <button type="submit"
                class="py-2 px-5 text-sm bg-slate-500 hover:bg-slate-600 rounded text-gray-200 font-medium">
                Register
            </button>
        </div>
    </form>
</x-layout>