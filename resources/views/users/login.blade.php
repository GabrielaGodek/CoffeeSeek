<x-layout>
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-8 lg:text-3xl">Login</h2>

            <form method="POST" action="/users/authenticate" class="mx-auto max-w-lg rounded-lg border">
                @csrf
                <div class="flex flex-col gap-4 p-4 md:p-8">
                    
                    <div>
                        <label for="email" class="mb-2 inline-block text-sm text-gray-800 sm:text-base">Email</label>
                        <input name="email"
                            class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring"
                            value="{{ old('email') }}" />
                        @error('email')
                            <p class="text-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password"
                            class="mb-2 inline-block text-sm text-gray-800 sm:text-base">Password</label>
                        <input name="password" type="password"
                            class="w-full rounded border bg-gray-50 px-3 py-2 text-gray-800 outline-none ring-indigo-300 transition duration-100 focus:ring"
                            value="{{ old('password') }}" />
                        @error('password')
                            <p class="text-error">{{ $message }}</p>
                        @enderror
                    </div>

                    

                    <button
                        class="block rounded-lg bg-gray-800 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-gray-300 transition duration-100 hover:bg-gray-700 focus-visible:ring active:bg-gray-600 md:text-base">Log
                        in</button>


                    <div class="flex items-center justify-center bg-gray-100 p-4">
                        <p class="text-center text-sm text-gray-500">Dont't have an account? <a href="register"
                                class="text-indigo-500 transition duration-100 hover:text-indigo-600 active:text-indigo-700">Register</a>
                        </p>
                    </div>
            </form>
        </div>
    </div>
</x-layout>
