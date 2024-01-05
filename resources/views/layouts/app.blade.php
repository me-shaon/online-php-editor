<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/code-editor.svg') }}">
    <title>Online PHP Editor - Execute PHP Code online and generate output.</title>
    <meta name="title" content="Online PHP Editor - Execute PHP Code online and generate output." />
    <meta name="description" content="Execute simple PHP Code online and generate output. Built with Laravel." />

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=fira-code:500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-mono min-h-screen flex flex-col bg-slate-800 text-white">
    <header class="max-w-7xl mx-auto px-6 md:px-8 py-8 flex items-center justify-between w-full">
        <a href="{{ route('home') }}" class="flex items-center gap-x-4">
            <h1 class="text-lg font-medium">
                Online PHP Editor
            </h1>
        </a>

        <nav class="flex items-center gap-x-8">
            <a href="https://github.com/me-shaon/online-php-editor" target="_blank" title="GitHub">
                <img class="w-8 h-8" src="{{ asset('images/github-mark-white.png') }}" alt="GitHub">
            </a>
        </nav>
    </header>

    <main class="max-w-7xl mx-auto px-6 md:px-8 flex-1 w-full flex flex-col">
        @yield('content')
    </main>

    <footer class="py-4 px-6 md:px-8 text-xs">
        <p class="text-center">
            Developed and maintained by <a href="https://twitter.com/me_shaon" class="underline" target="_blank">Ahmed Shamim Hassan</a>. Copyright &copy; {{ date('Y') }}.
        </p>
    </footer>
</body>

</html>
