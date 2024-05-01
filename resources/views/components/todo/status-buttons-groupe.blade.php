<div class="mb-5">
    <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Status</h3>
    <ul
        class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
            <div class="flex items-center ps-3">
                <input id="vue-checkbox-list" type="radio" value="Pending" name="status" @checked($taskStatus === 'Pending')
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="vue-checkbox-list"
                    class="w-full py-3 text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">Pending</label>
            </div>
        </li>
        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
            <div class="flex items-center ps-3">
                <input id="react-checkbox-list" type="radio" value="In Progress" name="status"
                    @checked($taskStatus === 'In Progress')
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="react-checkbox-list"
                    class="w-full py-3 text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">In
                    Progress</label>
            </div>
        </li>
        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
            <div class="flex items-center ps-3">
                <input id="angular-checkbox-list" type="radio" value="Under Review" name="status"
                    @checked($taskStatus === 'Under Review')
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="angular-checkbox-list"
                    class="w-full py-3 text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">Under
                    Review</label>
            </div>
        </li>
        <li class="w-full dark:border-gray-600">
            <div class="flex items-center ps-3">
                <input id="laravel-checkbox-list" type="radio" value="Completed" name="status"
                    @checked($taskStatus === 'Completed')
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="laravel-checkbox-list"
                    class="w-full py-3 text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">Completed</label>
            </div>
        </li>
    </ul>

</div>
