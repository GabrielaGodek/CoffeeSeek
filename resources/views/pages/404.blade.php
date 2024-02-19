<x-layout>
    <div class="bg-white py-6 sm:py-0 h-full">
        <div class="mx-auto max-w-screen-xl px-4 md:px-8">
            <div class="grid gap-8 sm:grid-cols-2 sm:gap-12">

                <div
                    class="h-80 overflow-hidden rounded-lg bg-gray-100 shadow-lg sm:rounded-none sm:shadow-none md:h-auto">
                    <img src="https://images.unsplash.com/photo-1452022449339-59005948ec5b?auto=format&q=75&fit=crop&w=600"
                        loading="lazy" alt="Photo by Jeremy Cai" class="h-full w-full object-cover object-center" />
                </div>

                <div class="flex flex-col items-center justify-center sm:items-start md:py-24 lg:py-32 xl:py-64">
                    <p class="mb-4 text-sm font-semibold uppercase text-indigo-500 md:text-base">Error 404</p>
                    <h1 class="mb-2 text-center text-2xl font-bold text-gray-800 sm:text-left md:text-3xl">Page not
                        found</h1>

                    <p class="mb-8 text-center text-gray-500 sm:text-left md:text-lg">The page you’re looking for
                        doesn’t exist.</p>

                    <a href="/"
                        class="inline-block rounded-lg bg-gray-200 px-8 py-3 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-300 focus-visible:ring active:text-gray-700 md:text-base">Go
                        home</a>
                </div>

            </div>
        </div>
    </div>
</x-layout>
