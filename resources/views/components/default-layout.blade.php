@props(['title', 'section_title' => 'Menu'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Scripts & Styles --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@1.4.1/css/phosphor.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/css/style.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>{{ $title }}</title>
</head>

<body class="bg-zinc-100">
    <main>
        <header x-data="{ open: false }">
            <div class="flex items-center justify-between sm:justify-start gap-8 bg-white border-b border-zinc-300 sticky top-0 px-3 sm:px-8 py-4">
                <h2 class="text-lg sm:text-xl font-bold">Student Management</h2>

                {{-- Desktop Navigation --}}
                <nav class="hidden sm:flex">
                    <ul class="flex items-center gap-6 text-sm">
                        <li>
                            <a href="{{ route('dashboard') }}"
                                class="{{ request()->is('dashboard') ? 'text-black' : 'text-zinc-500' }}
                                block px-2 py-1 rounded font-semibold hover:text-black text-sm">
                                <i class="ph ph-house"></i> Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="{{ request()->is('students') ? '#' : route('students.index') }}"
                                class="{{ request()->is('students') ? 'text-black' : 'text-zinc-500' }}
                                block px-2 py-1 rounded font-semibold hover:text-black text-sm">
                                <i class="ph ph-student"></i> Students
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('majors.index') }}"
                                class="{{ request()->is('majors') ? 'text-black' : 'text-zinc-500' }}
                                block px-2 py-1 rounded font-semibold hover:text-black text-sm">
                                <i class="ph ph-book"></i> Majors
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('profile.index') }}"
                                class="{{ request()->is('profile') ? 'text-black' : 'text-zinc-500' }}
                                block px-2 py-1 rounded font-semibold hover:text-black text-sm">
                                <i class="ph ph-user"></i> Profile
                            </a>
                        </li>
                    </ul>
                </nav>

                {{-- Hamburger Button --}}
                <button @click="open = !open" class="block sm:hidden bg-white border border-black-600 p-3">
                    <i class="ph ph-list text-xl text-slate-600"></i>
                </button>
            </div>

            {{-- Mobile Navigation --}}
            <div x-show="open" class="bg-white border border-zinc-300 shadow-lg sm:hidden absolute top-12 right-3">
                <ul class="flex flex-col space-y-1 p-2 text-sm">
                    <li>
                        <a href="{{ route('dashboard') }}"
                            class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('students.index') }}"
                            class="block px-4 py-2 hover:bg-gray-100">Students</a>
                    </li>
                    <li>
                        <a href="{{ route('majors.index') }}"
                            class="block px-4 py-2 hover:bg-gray-100">Majors</a>
                    </li>
                    <li>
                        <a href="{{ route('profile.index') }}"
                            class="block px-4 py-2 hover:bg-gray-100">Profile</a>
                    </li>
                </ul>
            </div>
        </header>

        {{-- Page Section --}}
        <section class="px-3 sm:px-8 py-4 flex flex-col gap-6">
            <h1 class="text-3xl font-bold">{{ $section_title }}</h1>
            {{ $slot }}
        </section>
    </main>
</body>

</html>
