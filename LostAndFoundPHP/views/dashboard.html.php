<?php require_once('views/fragments/header.php'); ?>
    <main class="h-full lg main md:m-auto">
    <div class="container px-6 mx-auto grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        Welcome!!
        </h2>
        <!-- CTA -->
        <!-- Cards -->
        <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4 hover:cursor-pointer">
        <!-- Card -->
        <div class=" flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-100 dark:text-green-700 ">
            <a href="All_items.html">
            <div
                class="p-3 mr-4  bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
                <svg href="All_items.html" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3" />
                </svg>
            </div>
            </a>
        <div>
            <p class=" mb-2 text-sm font-medium text-gray-600 dark:text-gray-800">
                All Items
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-orange-700">
                511
            </p>
            </div>
        </div>
        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <a href="tables.html">
            <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                </svg>
            </div>
            </a>
            <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                Lost
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                100
            </p>
            </div>
        </div>
        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                d="M15.75 15.75l-2.489-2.489m0 0a3.375 3.375 0 10-4.773-4.773 3.375 3.375 0 004.774 4.774zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>

            </div>
            <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                Found
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                376
            </p>
            </div>
        </div>
        <!-- Card -->
        <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
            </svg>

            </div>
            <div>
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                Trash
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                35
            </p>
            </div>
        </div>
        </div>
        </div>

        <div class="lg:w-full shadow-xl flex justify-center items-center">
            <div class="pb-16">
                <img class=" lg:max-w-2xl max-h-xl " src="./assets/img/dash.svg" alt="Research">
            </div>
        </div>
    </main>
    <?php require_once('views/fragments/footer.php'); ?>