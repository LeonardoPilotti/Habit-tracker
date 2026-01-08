<x-layout>
    <main class="py-10">
        <h1>
            Faça login
        </h1>

        <section class="mt-4">
            <form action="/login" method="POST">
                @csrf

            @error('email')
                <p class="text-red-500 text-xl mt-1">
                    {{ $message }}
                </p>
            @enderror

             <!--Email input-->
            <input
            type="email"
            name="email"
            placeholder="your@email.com"
            class="bg-white border-2 p-2">

            <input
            type="password"
            name="password"
            placeholder="********"
            class="bg-white border-2 p-2">

            <button
            type="submit"
            class="bg-whit border-2 p-2">
            Entrar
            </button>
            </form>

        </section>
    </main>
</x-layout>
