<?php require_once('views/fragments/nav.php'); ?>

<main class="h-full overflow-y-auto">

    <div class="w-full overflow-hidden rounded-lg shadow-xs mb-6">
        <div class="w-full overflow-x-auto">
            <h4 class="text-l text-white text-teal-500 uppercase font-bold p-3">--- All Items ---</h4>
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">User</th>
                        <th class="px-4 py-3">Contact/Email</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3"> </th>
                        <th class="px-4 py-3">Date</th>
                        <th class="px-4 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">


                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">
                            <div class="flex items-center text-sm">
                                <!-- Avatar with inset shadow -->
                                <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>

                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                </div>
                                <div>
                                    <p class="font-semibold">Muscle 1</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">
                                        Mason
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            098765432<br>
                            <span class="underline text-blue-500">example@gmail.com</span>
                        </td>
                        <td class="px-4 py-3 text-xs">
                            <span
                                class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600">
                                Lost
                            </span>
                        </td>
                        <td>
                            <div>
                                <button
                                    class="flex open-button items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                    aria-label="Edit">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                        </path>
                                    </svg>
                                    edit
                                </button>
                                <!--Hidden modal-->
                                <div
                                    class="modal border-2 border-blue-900 hidden fixed inset-0  flex items-center justify-center ">
                                    <div
                                        class="editor gb-color text-gray-800 mx-auto w-64 h-40 flex flex-col text-white px-4 border-2 border-indigo-900  shadow-lg max-w-2xl  p-1 rounded-lg shadow-xl dark:bg-slate-800">
                                        <h2 class="text-center text-2xl font-bold p-1 ">Status</h2>
                                        <div class="mb-2 flex justify-start ">
                                            <form class=" w-full h-40 mt-2 " action="">
                                                <div class=" w-full p-1 mb-2 border-b items-center">
                                                    <input class="w-4 h-4 cursor-pointer checked:bg-black" type="radio"
                                                        name="status" id="Claimed">
                                                    <label for="Claimed" class="w-full justify-center text-sm "
                                                        for="">Claimed</label><br>
                                                </div>
                                                <div class="cursor-pointer w-full p-1 mb-2 border-b">
                                                    <input class="w-4 h-4" type="radio" name="status" id="Lost">
                                                    <label for="Lost" class="justify-center  text-sm "
                                                        for="">Lost</label><br>
                                                </div>
                                                <div class=" w-full p-1 mb-2 border-b">
                                                    <input class="w-4 h-4" type="radio" name="status" id="Found">
                                                    <label for="Found" class="justify-center text-sm"
                                                        for="">Found</label>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="buttons flex ml-auto py-2 justify-between ">
                                            <button id=""
                                                class="w-52 close-button text-gray-800 btn border-2 bg-red-100 border-green-300 rounded-full p-1 px-4 font-semibold text-white ml-auto p-1 ">Cancel</button>
                                            <button id="save"
                                                class="w-52 text-gray-800 btn border-2 bg-blue-100 border-green-300 rounded-full p-1 px-4 font-semibold text-white ml-auto p-1 ">Save</button>

                                        </div>
                                    </div>
                                </div>
                                <!--Hidden modal-->
                            </div>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            6/10/2020
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex items-center space-x-4 text-sm">


                                <button
                                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                    aria-label="Delete">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">
                            <div class="flex items-center text-sm">
                                <!-- Avatar with inset shadow -->
                                <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>

                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                </div>
                                <div>
                                    <p class="font-semibold">Muscle 1</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">
                                        Mason
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            098765432<br>
                            <span class="underline text-blue-500">example@gmail.com</span>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            <image class="rounded" alt="img" width="50" height="40"
                                src="./assets/img/create-account-office.jpeg" />
                        </td>
                        <td class="px-4 py-3 text-xs">
                            <span
                                class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600">
                                Lost
                            </span>
                        </td>
                        <td>
                            <div>
                                <button
                                    class="flex open-button justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                    aria-label="Edit">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                        </path>
                                    </svg>
                                    edit
                                </button>
                                <!--Hidden modal-->
                                <div
                                    class="modal border-2 border-blue-900 hidden fixed inset-0  flex items-center justify-center ">
                                    <div
                                        class="editor gb-color text-gray-800 mx-auto w-64 h-40 flex flex-col text-white px-4 border-2 border-indigo-900  shadow-lg max-w-2xl  p-1 rounded-lg shadow-xl dark:bg-slate-800">
                                        <h2 class="text-center text-2xl font-bold p-1 ">Status</h2>
                                        <div class="mb-2 flex justify-start ">
                                            <form class=" w-full h-40 mt-2 " action="">
                                                <div class=" w-full p-1 mb-2 border-b items-center">
                                                    <input class="w-4 h-4 cursor-pointer checked:bg-black" type="radio"
                                                        name="status" id="Claimed">
                                                    <label for="Claimed" class="w-full justify-center text-sm "
                                                        for="">Claimed</label><br>
                                                </div>
                                                <div class="cursor-pointer w-full p-1 mb-2 border-b">
                                                    <input class="w-4 h-4" type="radio" name="status" id="Lost">
                                                    <label for="Lost" class="justify-center  text-sm "
                                                        for="">Lost</label><br>
                                                </div>
                                                <div class=" w-full p-1 mb-2 border-b">
                                                    <input class="w-4 h-4" type="radio" name="status" id="Found">
                                                    <label for="Found" class="justify-center text-sm"
                                                        for="">Found</label>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="buttons flex ml-auto py-2 justify-between ">
                                            <button
                                                class="close-button w-52 text-gray-800 btn border-2 bg-red-100 border-green-300 rounded-full p-1 px-4 font-semibold text-white ml-auto p-1 ">Cancel</button>
                                            <button id="save"
                                                class="w-52 text-gray-800 btn border-2 bg-blue-100 border-green-300 rounded-full p-1 px-4 font-semibold text-white ml-auto p-1 ">Save</button>

                                        </div>
                                    </div>
                                </div>
                                <!--Hidden modal-->
                            </div>
                        </td>
                        <td class="px-4 py-3 text-sm">
                            6/10/2020
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex items-center space-x-4 text-sm">


                                <button
                                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                    aria-label="Delete">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
<?php require_once('views/fragments/footer.php'); ?>