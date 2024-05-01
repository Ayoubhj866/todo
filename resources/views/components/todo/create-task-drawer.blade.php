@props(['editTask' => []])

@php
    $visible = $errors->any() || !empty($editTask) ? true : false;
@endphp


<!-- Le Drawer -->
<div id="create-task-drawer"
    class="fixed top-0 left-0 right-0 w-full p-4 transition-transform @if (!$visible) -translate-y-full @endif z-50 bg-white dark:bg-gray-800"
    tabindex="-1">
    <!-- Votre contenu de drawer -->


    <!-- Le Backdrop -->


    <form class="max-w-lg mx-auto" method="POST"
        action="{{ route(!empty($editTask) ? 'tasks.task.update' : 'tasks.task.store', $editTask['id'] ?? null) }}">
        @csrf
        @if ($editTask)
            @method('PATCH')
        @endif

        <h5 id="drawer-top-label"
            class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400">

            @if ($editTask)
                Edit Task
            @else
                Create new task
            @endif
        </h5>

        {{-- close button --}}
        @if (!$visible)
            <x-todo.close-drawer data-drawer-hide="create-task-drawer"
                aria-controls="create-task-drawer"></x-todo.close-drawer>
        @endif

        <div class="mb-5">
            <!-- Title -->
            <div>
                <x-input-label for="title" :value="__('Title')" />
                <x-text-input id="title" placeholder="task title" class="block w-full mt-1" type="text"
                    name="title" :value="old('title', $editTask['title'] ?? null)" required autofocus autocomplete="title" />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>
        </div>


        {{-- status --}}
        @if (!empty($editTask))
            <x-todo.status-buttons-groupe :taskStatus="$editTask['status']?? null"></x-todo.status-buttons-groupe>
        @endif



        {{-- buttons --}}
        <x-primary-button>
            @if ($editTask)
                Edit
            @else
                Create
            @endif
        </x-primary-button>
        <x-secondary-link href="{{ url('/') }}">Cancel</x-secondary-link>
    </form>

</div>

@if ($visible)
    <div drawer-backdrop class="fixed inset-0 z-30 bg-gray-900/50 dark:bg-gray-900/80"></div>
@endif
