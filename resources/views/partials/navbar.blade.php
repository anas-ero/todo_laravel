<nav class="bg-white shadow p-4 flex justify-between items-center">
    <h1 class="font-bold text-lg">Todo App</h1>

    <div class="flex items-center gap-4">
        @auth
            <span class="text-gray-600">
                Hi, {{ auth()->user()->name }}
            </span>

            <form method="get" action="/logout">
                @csrf
                <button class="text-red-500 hover:underline">
                    Logout
                </button>
            </form>
        @endauth

        @guest
            <a href="/login" class="text-blue-500 hover:underline">
                Login
            </a>

            <a href="/register" class="text-green-500 hover:underline">
                Register
            </a>
        @endguest
    </div>
</nav>
