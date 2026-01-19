 
<x-layout>
    <main class="max-w-5xl mx-auto py-10 min-h-[calc(100vh-160px)] px-4 ">

        <x-navbar />

        {{-- HISTÓRICO --}}
        @session('success')
            <div class="flex">
                <p class="bg-green-100 block border-2 border-green-400 text-green-700 p-3 mb-4">
                    {{ session('success') }}
                </p>
            </div>
        @endsession
        <h2 class="text-lg mt-9 mb-2">
            {{ date('d/m/Y') }}
        </h2>
        <ul class="flex flex-col gap-2">
            @forelse($habits as $item)
                <li class="habit-shadow-lg p-2 bg-[#FFDAAC]">

                    <form method="POST" action="{{ route('habits.toggle', $item->id) }}" class="flex gap-2 items-center"
                        id="form-{{ $item->id }}">

                        @csrf

                        <input type="checkbox" class="w-5 h-5" {{ $item->is_completed ? 'checked' : '' }}
                            {{ $item->wasCompletedToday() ? 'checked' : '' }}
                            onchange="document.getElementById('form-{{ $item->id }}').submit()" />
                        <p class="font-bold text-lg">
                            {{ $item->name }}
                        </p>


                    </form>
                </li>
            @empty
                <p>
                    Ainda não tem hábitos cadastrados.
                </p>
                <a href="{{ route('habits.create') }}" class="bg-white p-2 border-2">
                    Cadastre um novo hábito agora
                </a>
            @endforelse
        </ul>
    </main>
</x-layout>
