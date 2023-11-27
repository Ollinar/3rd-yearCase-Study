<?php if (isset($postList) && !empty($postList)): ?>

    <!-- News Feed -->
    <div class="container px-6 mb-6 grid grid-rows-2 grid-cols-2 ">
        <div style="width: 80%;"
            class="grid mx-auto grid-rows-1 h-auto md:grid-cols-2 xl:grid-cols-5 px-6 hover:cursor-pointer">
            <!--Start of Cards-->
            <?php foreach ($postList as $post): ?>
                <div class="grid col-span-3 col-start-2 ">
                    <div class="flex items-center h-auto shadow-xl p-6 bg-gray-100  dark:bg-gray-800">

                        <div class="px-3 py-3 descCont ">
                            <div width="100%" class="">
                                <div class="flex justify-between">
                                    <h1 class="font-bold dark:text-white">
                                        <?= 'Item: ' . $post['itemName'] ?? '' ?>
                                    </h1>

                                    <?Php if ($_SESSION['userRole'] === 'admin' && $_GET['type'] === 'lost'): ?>
                                        <button class="rounded-full text-white text-sm p-2 flex items-center "
                                            hx-post="/updateStatus" hx-vals='{"id":"<?= $post['itemID'] ?>","from":"lost"}'
                                            style="background-color: rgb(75, 145, 114);"><img width="20" height="20"
                                                src="assets/img/svg-loaders/ball-triangle.svg" alt=""> Mark as Found</button>

                                    <?Php elseif ($_SESSION['userRole'] === 'admin' && $_GET['type'] === 'found'): ?>
                                        <button class="rounded-full text-white text-sm p-2 flex items-center "
                                            onclick="showUpdatePopUp(<?= $post['itemID'] ?>)"
                                            style="background-color: rgb(75, 145, 114);"><img width="20" height="20"
                                                src="assets/img/svg-loaders/ball-triangle.svg" alt=""> Mark as
                                            Claimed</button>
                                    <?Php elseif ($_SESSION['userRole'] === 'admin' && $_GET['type'] === 'unclaimed'): ?>

                                        <button class="rounded-full text-white text-sm p-2 flex items-center "
                                            onclick="showUpdatePopUp(<?= $post['itemID'] ?>)"
                                            style="background-color: rgb(75, 145, 114);"><img width="20" height="20"
                                                src="assets/img/svg-loaders/ball-triangle.svg" alt=""> Mark as
                                            Claimed</button>
                                    <?php elseif ($_SESSION['userRole'] === 'admin' && $_GET['type'] === 'claimed'): ?>

                                        <button class="rounded-full text-white text-sm p-2 flex items-center "
                                            hx-post="/updateStatus" hx-vals='{"id":"<?= $post['itemID'] ?>","from":"claimed"}'
                                            style="background-color: rgb(75, 145, 114);"><img width="20" height="20"
                                                src="assets/img/svg-loaders/ball-triangle.svg" alt=""> Mark as Unclaimed</button>

                                    <?php endif ?>
                                </div>
                                <div class="flex justify-between ">
                                    <p class="textDesc text-sm font-medium text-gray-600 dark:text-gray-400 ">
                                        <?= empty($post['itemDescription']) ? 'No Description' : $post['itemDescription'] ?>
                                    </p>
                                    <p class="dark:text-white">
                                        <?= $post['date'] ?? '' ?>
                                    </p>
                                </div>
                            </div>
                            <p class="textDesc text-sm font-semibold text-gray-700 dark:text-gray-200">
                                <?= $post['userEmail'] ?? '' ?>
                            </p>
                            <p class="textDesc text-sm font-light py-2 text-gray-700 dark:text-gray-200 ">
                                <?= $post['username'] ?? '' ?>
                            </p>
                        </div>


                        <?php $postUsr = $post['username'] ?? '' ?>
                        <?php $type = $_GET['type'] ?? 'lost' ?>
                        <?php if ($_SESSION['userRole'] === 'admin' || ($postUsr === $_SESSION['username'])): ?>
                            <div hx-post="/deletePost" hx-vals='{"id":"<?= $post['itemID'] ?>", "type":"<?= $type ?>"}'
                                hx-confirm="Delete the post permanently." hx-target="#cardCont"
                                class="p-3 mr-4 text-teal-500 bg-red-100 border rounded-full  dark:text-teal-100 dark:bg-teal-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6 text-black">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                </svg>

                            </div>
                        <?php endif ?>

                    </div>
                    <div style="width: 100%;" class="  h-auto md:grid-cols-2 xl:grid-cols-2 hover:cursor-pointer shadow-2xl">
                        <div class="w-full shadow-xl bg-white h-auto grid col-span-2 py-3 dark:bg-gray-800">
                            <?php if (isset($post['postPic'])): ?>
                                <?php foreach ($post['postPic'] as $pic): ?>
                                    <img class="mx-auto mb-2 border" width="650" height="600" src="<?= $pic ?>" alt="">
                                <?php endforeach ?>
                            <?php endif ?>

                        </div>
                    </div>

                    <div>
                        <button onclick="showCommentForm(<?= $post['itemID'] ?>)"
                        class="btn border border-white  p-1 px-4 font-semibold text-white rounded-full ml-2 bg-purple-600 p-1 hover:bg-purple-600 hover:text-white ">
                            Comment
                        </button>
                    </div>
                    <div style="width: 100%;" class="  h-auto md:grid-cols-2 xl:grid-cols-2 hover:cursor-pointer shadow-2xl">
                        <?php if (isset($post['comments'])): ?>
                            <?php foreach ($post['comments'] as $cmt): ?>
                                <p>
                                    <?= $cmt['comment'] ?>
                                </p>

                                <?php if ($_SESSION['userRole'] === 'admin' || ($cmt['username'] === $_SESSION['username'])): ?>
                                    <div hx-post="/deleteComment" hx-vals='{"commentID":"<?= $cmt['commentID'] ?>"}'
                                        class="p-3 mr-4 text-teal-500 bg-red-100 border rounded-full  dark:text-teal-100 dark:bg-teal-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor" class="w-6 h-6 text-black">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>

                                    </div>
                                <?php endif ?>
                            <?php endforeach ?>



                        <?php endif ?>


                    </div>


                </div>
            <?php endforeach ?>
        </div>

    </div>


    <!-- News Feed -->



<?php else: ?>
    <div class="lg:w-full  flex justify-center items-center">
        <div class="pb-16">
            <img class=" lg:max-w-2xl max-h-xl dark:opacity-50" src="./assets/img/dash.svg" alt="Research">
        </div>
    </div>
<?php endif ?>