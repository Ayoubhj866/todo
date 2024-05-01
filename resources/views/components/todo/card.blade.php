@props(['taskType' => 'Tasks', 'count' => 0, 'tasks' => []])

<div
    class="w-full bg-white border border-gray-200 rounded-lg shadow min-h-80 sm:max-w-sm sm:p-2 dark:bg-gray-800 dark:border-gray-700">
    <div class="flex items-center justify-between p-2 mb-4">
        <h5 class="text-base font-semibold text-gray-700 md:text-xl dark:text-gray-200">
            {{ $taskType }}
        </h5>

        <span
            class="bg-gray-100 text-gray-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded me-2 dark:bg-gray-700 dark:text-gray-400 border border-gray-500 ">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-3 h-3 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122" />
            </svg>
            {{ $count > 0 ? $count . ' Tasks' : $count . ' Task' }}
        </span>
    </div>

    <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">

    <ul class="my-4 space-y-3">
        @foreach ($tasks as $task)
            <x-todo.task-card :id='$task->id' :title="$task->title" :status="$task->status"
                :date="$task->created_at"></x-todo.task-card>
        @endforeach
    </ul>

</div>
