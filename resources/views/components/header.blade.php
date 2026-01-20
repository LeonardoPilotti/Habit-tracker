<header class="bg-white border-b-2">
    <div class="w-full flex flex-col md:flex-row md:justify-between md:items-center
                py-3 px-4 md:px-12 gap-4">

        <!-- Logo -->
        <div class="flex items-center gap-2 font-bold justify-center md:justify-start">
            @auth
                <a href="{{ route('habits.index') }}" class="habit-btn habit-shadow-lg px-2 py-1 bg-habit-orange">HT</a>
            @endauth

            @guest
                <a href="{{ route('site.index') }}" class="habit-btn habit-shadow-lg px-2 py-1 bg-habit-orange">HT</a>
            @endguest

            <p>Habit Tracker</p>
        </div>

        <!-- Ações -->
        <div class="flex items-center gap-4 justify-center md:justify-end flex-wrap">
            @auth
                <form action="{{ route('auth.logout') }}" method="POST">
                    @csrf
                    <button class="habit-shadow-lg habit-btn p-2 border-2">
                        Sair
                    </button>
                </form>
            @endauth

            @guest
                <a href="{{ route('site.register') }}" class="p-2 habit-shadow-lg habit-btn">Cadastrar</a>
                <a href="{{ route('site.login') }}" class="p-2 habit-shadow-lg bg-habit-orange habit-btn">Logar</a>
            @endguest

            <a href="https://github.com/LeonardoPilotti/habit-tracker" class="habit-shadow-lg habit-btn p-2">
                <x-icons.github />
            </a>
        </div>

    </div>
</header>
