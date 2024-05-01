<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App | Laravel 11</title>

    {{-- assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- toastr --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css"
        integrity="sha512-6S2HWzVFxruDlZxI3sXOZZ4/eJ8AcxkQH1+JjSe/ONCEqR9L4Ysq5JdT5ipqtzU7WHalNwzwBv+iE51gNHJNqQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- dark mode --}}
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>


</head>

<body class="bg-gray-100 dark:bg-gray-900">

    {{-- Navbare --}}
    <x-todo.navbare></x-todo.navbare>

    {{-- cards --}}
    <section
        class="container px-4 py-10 mx-auto mt-4 text-gray-600 bg-white rounded-lg min-h-96 dark:bg-gray-800 body-font">

        {{-- header --}}
        <div class="flex flex-wrap items-center justify-between gap-4 pb-6 ">

            {{-- search input --}}
            <form action="{{ route('welcome') }}" method="GET" class="inline-flex gap-2">
                {{-- @csrf --}}
                <x-todo.search-input placeholder='Search for task'></x-todo.search-input>
            </form>

            {{-- button to open create task drawer --}}
            <x-todo.lime-button data-drawer-target="create-task-drawer" data-drawer-show="create-task-drawer"
                data-drawer-placement="top" aria-controls="create-task-drawer">New Task</x-todo.lime-button>

            {{-- create task drawer --}}
            <x-todo.create-task-drawer class="mt-4 sm:mt-0" :editTask="$editTask"></x-todo.create-task-drawer>

            {{-- button dark mode toggle --}}
            <div class="absolute right-2 top-3">
                <x-todo.dark-mode-toggle-button></x-todo.dark-mode-toggle-button>
            </div>

        </div>

        @php
            $taskTypes = ['Pending', 'In Progress', 'Under Review', 'Completed'];
        @endphp

        <div class="grid h-full grid-cols-1 gap-4 sm:grid-cols-3 md:grid-cols-4">
            <x-todo.card taskType="Pending" :count="count($pending)" :tasks="$pending"></x-todo.card>
            <x-todo.card taskType="In Progress" :count="count($inProgress)" :tasks="$inProgress"></x-todo.card>
            <x-todo.card taskType="Under Review" :count="count($underReview)" :tasks="$underReview"></x-todo.card>
            <x-todo.card taskType="Completed" :count="count($completed)" :tasks="$completed"></x-todo.card>
        </div>

    </section>


    {{-- sweet alert --}}
    @include('sweetalert::alert')


    {{-- CDNs --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"
        integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        // config
        toastr.options = {
            "positionClass": "toast-bottom-right", // Affiche Toastr en bas à droite
            "timeOut": "3000", // Durée d'affichage des notifications en millisecondes
            "showMethod": "slideDown", // Animation pour l'apparition
            "hideMethod": "fadeOut", // Animation pour la disparition
            "extendedTimeOut": "1000", // Durée additionnelle après que la souris s'éloigne
        };

        @if (session('success'))
            toastr.success('{{ session('success') }}');
        @endif

        @if (session('error'))
            toastr.error('{{ session('error') }}');
        @endif

        @if (session('info'))
            toastr.info('{{ session('info') }}');
        @endif

        @if (session('warning'))
            toastr.warning('{{ session('warning') }}');
        @endif
    </script>

</body>

</html>
