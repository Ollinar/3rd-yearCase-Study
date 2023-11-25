<?php require_once('views/fragments/nav.php'); ?>
<main class="h-full overflow-y-auto">
                <div class="container px-4 grid mb-6 place-items-center">
                    <!-- New Table -->
                    <div class="w-full overflow-hidden rounded-lg shadow-xs mb-6">
                        <div class="w-full overflow-x-auto">
                            <h4 class="text-l text-white text-teal-500 uppercase font-bold p-3">Users</h4>
                            <?php if(isset($users)):?>
                            <table class="w-full whitespace-no-wrap">
                                <thead>
                                    <tr
                                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <th class="px-4 py-3">Username</th>
                                    <th class="px-4 py-3">Email</th>
                                    <th class="px-4 py-3">Role</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                    <?php foreach($users as $usr):?>
                                    <tr class="text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3">
                                            <div class="flex items-center text-sm">
                                                <!-- Avatar with inset shadow -->
                                                <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-6 h-6">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    </svg>

                                                    <div class="absolute inset-0 rounded-full shadow-inner"
                                                        aria-hidden="true"></div>
                                                </div>
                                                <div>

                                                    <p class="text-xs text-gray-600 dark:text-gray-400">
                                                        <?=$usr['username']?>
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            <p class="font-semibold"><?=$usr['email']?></p>
                                        </td>
                                        <td class="px-4 py-3 text-xs">
                                            <p class="font-semibold"><?=$usr['role']?></p>
                                        </td>
                                    </tr>
                                    <?php endforeach?>
                                </tbody>
                            </table>
                            <?php endif?>
                        </div>
                    </div>
                </div>
            </main>
            <?php require_once('views/fragments/footer.php'); ?>