<x-layout>
    <main class="py-10">
        <section class="mt-4 bg-white max-w-[600px] mx-auto p-10 pb-6 border-2">
            <h1 class="font-bold text-xl">Faça login</h1>
            <p>Insira seus dados para acessar</p>


            <form action= {{ route ('auth.login') }} method="POST" class="flex flex-col">
                @csrf


            <div class="flex flex-col gap-2 mb-2">
                <label for="email">Email</label>

            <input
            type="email"
            name="email"
            placeholder="your@email.com"
            class="bg-white border-2 p-2 @error('email')border-red-500
            @enderror" >

            @error('email')
            <p class="text-red-500 text-sm">
                {{ $message }}
            </p>

            @enderror

            </div>

              <div class="flex flex-col gap-2 mb-4">
                    <label for="password">Senha</label>

            <input
            type="password"
            name="password"
            placeholder="********"
            class="bg-white border-2 p-2 @error('password') border-red-500 @enderror">

            @error('password')
            <p class="text-red-500 text-sm">
                {{ $message }}
            </p>
            @enderror
            </div>
            <button
            type="submit"
            class="bg-white border-2 p-2 hover:opacity-75 transition">
            Entrar
            </button>
            </form>

            <p class="text-center mt-2">
                Ainda não tem uma conta?

            <a href =
            "{{ route('site.register')}}" class="underline hover:opacity-50 transition">
                Registre-se
            </a>
        </p>
        </section>
    </main>
</x-layout>
