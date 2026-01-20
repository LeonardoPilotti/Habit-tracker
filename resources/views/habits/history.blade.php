<x-layout>
    <main class="max-w-5xl mx-auto py-10 min-h-[calc(100vh-160px)] px-4 w-full">
        <x-navbar />
        <x-title>
            Histórico
        </x-title>
        {{-- Year selection --}}
        <div class="my-4">
            @foreach ($avaibleYears as $y)
                <a href="{{ route('habits.history', $y) }}"
                    class="habit-btn habit-shadow-lg p-2 inline-block {{ $selectedYear === $y ? 'bg-habit-orange' : 'bg-white' }}">
                    {{ $y }}
                </a>
            @endforeach
        </div>
        @forelse($habits as $habit)
            <x-contribution :habit="$habit" :year="$selectedYear" />
        @empty
            <div>
                <p class="text-black">
                    Nenhum hábito para exibir histórico.
                </p>
                <a href="{{ route('habits.create') }}" class="underline ">
                    Crie um novo hábito
                </a>
            </div>
        @endforelse
    </main>
</x-layout>
