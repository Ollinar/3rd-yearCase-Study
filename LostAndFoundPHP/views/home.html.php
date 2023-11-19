<?php require_once('views/fragments/nav.php'); ?>
<main class="h-full overflow-y-auto">
    <div class="container px-6 mx-auto mb-6 grid">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Welcome!! Lost
        </h2>
        <!-- CTA -->
        <!-- Cards -->
        <div class="grid gap-6 h-auto md:grid-cols-2 xl:grid-cols-4  hover:cursor-pointer">
            <a href="/?type=lost">
                <div class="flex items-center h-32 border  p-4 bg-white rounded-lg shadow-xl dark:bg-gray-800">
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
                            100
                        </p>
                    </div>
                </div>
            </a>
            <!-- Card -->
            <a href="/?type=found">
                <div class="flex items-center h-32 border p-4 bg-white rounded-lg shadow-xl dark:bg-gray-800">
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
            </a>
            <!-- Card -->
            <a href="Requests.html">
                <div class="flex items-center h-32 border p-4 bg-white rounded-lg shadow-xl dark:bg-gray-800">
                    <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>

                    </div>
                    <div>
                        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
                            Requests
                        </p>
                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
                            35
                        </p>
                    </div>
                </div>
            </a>
            <a href="Claimed.html">
                <div class="flex items-center h-32 border p-4 bg-white rounded-lg shadow-xl dark:bg-gray-800">
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
                            35
                        </p>
                    </div>
                </div>
            </a>
            <!--End of Dashboard-->

        </div>
    </div>
    <!-- New Table -->
    <?php if (isset($postList)): ?>
        <?php //var_dump($postList);die()?>

        <div class="w-full overflow-hidden rounded-lg shadow-xs mb-6">
            <div class="w-full overflow-x-auto">
                <h4 class="text-l text-white text-teal-500 uppercase font-bold p-3">--- All Items ---</h4>
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Username</th>
                            <th class="px-4 py-3">ItemName</th>
                            <th class="px-4 py-3 text-center">Description</th>
                            <th class="px-4 py-3">Contact/Email</th>
                            <th class="px-4 py-3">Images</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3"></th>
                            <th class="px-4 py-3">Date</tsh>
                            <th class="px-4 py-3"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <?php foreach ($postList as $post): ?>
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                    <p class="font-semibold">Muscle 1</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">
                                        Mason
                                    </p>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <span class=" text-gray-200">
                                        <?= $post['itemName'] ?>
                                    </span>
                                </td>
                                <td class="px-4 py-3 text-sm break-words -backdrop-hue-rotate-15 desc">
                                    <div class="break-all text-gray-200 ">
                                        <?= $post['itemDescription'] ?>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <span class="underline text-blue-500">example@gmail.com</span>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <button>
                                        <?php foreach ($post['postPic'] as $pic): ?>
                                            <img onclick="showModal('<?= $pic ?>')" class=" cursor-pointer" width="50" height="40"
                                                src="<?= $pic ?>" />
                                        <?php endforeach ?>

                                    </button>
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
                                    <?= $post['date'] ?>
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-4 text-sm">


                                        <button type="button" onclick="displayDel()"
                                            class=" flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
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
                        <?php endforeach ?>
                    <?php endif ?>
                </tbody>
            </table>
        </div>
                                        <!--Hidden modal-->
                                        <div id="modal"
                                            class="hidden h-full fixed inset-0 top-0 left-0 mx-auto flex flex-col justify-center items-center ">
                                            <div class=" flex flex-col items-center rounded-lg p-10 imgcont border-2"
                                                style="height: 500px; width:600px;">
                                                <!-- The close button -->
                                                <div class=" relative">
                                                    <a class="bg-blue-100 absolute m-6 right-0 sticky ml-28 w-auto px-4 text-red-100 rounded-full text-9xl font-bold"
                                                        style="font-size: 30px;" href="javascript:void(0)"
                                                        onclick="closeModal()">&times;</a>
                                                    <!-- A big image will be displayed here -->
                                                    <img id="modal-img" width="700" height="300" class="rounded-lg p-4"/>
                                                    <img id="modal-img" width="700" height="300" class="rounded-lg p-4"/>
                                                    <img id="modal-img" width="700" height="300" class="rounded-lg p-4"/>
                                                    <img id="modal-img" width="700" height="300" class="rounded-lg p-4"/>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Hidden modal-->



</main>
<?php require_once('views/fragments/footer.php'); ?>