<x-layout>
    <main class="py-10">
        <h1 class="font-bold text-4xl text-center">
            Dashboard
        </h1>
        <a href="{{ route ('habit.create') }}" class="p-2 border-2 bg-white font-bold block">
            Cadastrar hábito</a>


        @session('success')
        <div class="flex">
            <p class="bg-green-100 block border-2 border-green-400 text-green-700 p-3 mb-4">
                {{ session('success') }}
            </p>
            </div>
            @endsession

            <h2 class="text-xl mt-4">
                Listagem de Hábitos 
            </h2>
            <ul class="flex flex-col gap-2">

                @forelse($habits as $item)

                <li class="pl-4">

                    <div class="flex gap-2 items-center">

                        <p class="font-bold text-xl">
                            - {{ $item->name }}
                        </p>

                        <p>
                            [{{ $item->habitLogs->count() }}]
                        </p>
                    </div>
                   

                </li>
                @empty
                <p>
                    Ainda não tem hábitos cadastrados.
                </p>
                <a href="{{ route('habit.create') }}" class="bg-white p-2 border-2">
                    Cadastre um novo hábito agora
                </a>
                @endforelse
            </ul>
        </div>
    </main>
</x-layout>
