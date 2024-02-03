<x-layout>
    <h1 class="my-16 text-4xl font-medium text-center text-slate-600">Sing in to your account</h1>
    <x-card class="px-16 py-8">
        <form action="{{ route('auth.store') }}" method="POST">
            @csrf

            <div class="mb-8">
                <x-label for="email" :required="true">E-Mail</x-label>
                <x-text-input name="email" />
            </div>

            <div class="mb-8">
                <x-label for="passowrd" :required="true">Password</x-label>
                <x-text-input name="password" type="password" />
            </div>

            <div class="flex justify-between mb-8">
                <div>
                    <div class="flex items-center space-x-2">
                        <input type="checkbox" name="remember" class="border rounded-sm border-slate-400">
                        <label for="">Remember me</label>
                    </div>
                </div>
                <div class="">
                    <a href="#" class="text-indigo-500 hover:underline">Forget Password?</a>
                </div>
            </div>

            <x-button class="w-full bg-green-50">Login</x-button>
        </form>
    </x-card>
</x-layout>
