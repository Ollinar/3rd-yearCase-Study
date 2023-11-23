<div class="grid gap-6 h-auto md:grid-cols-2 xl:grid-cols-3  hover:cursor-pointer" id="tabCard" hx-swap-oob="innerHTML">

<a href="/?type=found" hx-get="/?type=lost" hx-param="*" hx-target="#cardCont" hx-push-url="true">
    <div class="flex items-center h-32 border  p-4 <?php if (isset($_GET['type'])) {
        $type = $_GET['type'];
        echo $type === 'lost' ? 'bg-blue-100' : 'bg-white';
    } ?> rounded-lg shadow-xl dark:bg-gray-800">
        <div
            class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
            </svg>
        </div>

        <div>   
            <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                Lost
            </p>
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                <?=$lostCount?>
            </p>
        </div>
    </div>
</a>
<!-- Card -->
<a href="/?type=found" hx-get="/?type=found" hx-param="*" hx-target="#cardCont" hx-push-url="true">
    <div class="flex items-center h-32 border p-4 <?php if (isset($_GET['type'])) {
        $type = $_GET['type'];
        echo $type === 'found' ? 'bg-blue-100' : 'bg-white';
    } ?> rounded-lg shadow-xl dark:bg-gray-800">
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
                <?=$foundCount?>
            </p>
        </div>
    </div>
</a>
<a href="/?type=found" hx-get="/?type=claimed" hx-param="*" hx-target="#cardCont" hx-push-url="true">
    <div class="flex items-center h-32 border p-4 <?php if (isset($_GET['type'])) {
        $type = $_GET['type'];
        echo $type === 'claimed' ? 'bg-blue-100' : 'bg-white';
    } ?> rounded-lg shadow-xl dark:bg-gray-800">
        <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
            </svg>

        </div>
        <div>
            <p class="mb-2 text-md font-medium text-gray-600 dark:text-gray-400">
                Claimed
            </p>
            <p class="text-2xl font-bold text-gray-700 dark:text-gray-200">
                <?=$claimedCount?>
            </p>
        </div>
    </div>
</a>
<!--End of Dashboard-->

</div>