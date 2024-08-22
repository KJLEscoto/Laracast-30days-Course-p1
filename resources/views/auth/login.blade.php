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
            <a href="/" class="py-2 px-5 text-sm bg-slate-300 hover:bg-slate-400 rounded text-gray-700 font-medium">
                Cancel
            </a>
            <button type="submit"
                class="py-2 px-5 text-sm bg-slate-500 hover:bg-slate-600 rounded text-gray-200 font-medium">
                Login
            </button>
        </div>
    </form>
</x-layout>
