<x-layout>
    <x-slot:heading>Log In</x-slot:heading>
    <form method="POST" action="/login" class="flex flex-col w-1/3 gap-5 mt-3">
        @csrf

        <x-form-field>
            <x-form-label for="email">Email</x-form-label>
            <x-form-input :value="old('email')" name="email" id="email" type="email" placeholder="example@gmail.com" />
            <x-form-error name="email" />
        </x-form-field>

        <x-form-field>
            <x-form-label for="password">Password</x-form-label>
            <x-form-input name="password" id="password" type="password" />
            <x-form-error name="password" />
        </x-form-field>

        <div class="flex items-center gap-2">
            <x-secondary-button href="/">Cancel</x-secondary-button>
            <x-primary-button class="bg-slate-500 hover:bg-slate-500/80 text-gray-200">Login</x-primary-button>
        </div>
    </form>
</x-layout>
