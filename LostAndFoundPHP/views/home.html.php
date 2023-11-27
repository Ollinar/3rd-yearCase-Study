<?php require_once('views/fragments/nav.php'); ?>
<main class="h-full overflow-y-auto">
    <div class="container px-4 grid mb-6 place-items-center">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Welcome!!
        </h2>
        <!-- CTA -->
        <?php require('views/fragments/tabCard.php') ?>

    </div>

    <div id="cardCont">

        <?php require('views/fragments/feedCard.php') ?>
    </div>



    <div id="updateForm" class="hidden z-50 fixed inset-0 shadow-2xl  flex items-center justify-center">
        <?php require('views/fragments/updateFormPopUp.php') ?>
    </div>





    <div id="commentFormModal" class="hidden z-50 fixed inset-0 shadow-2xl  flex items-center justify-center">

    <?php require_once('views/fragments/commentForm.php'); ?>

    </div>






    <!--Hidden modal-->
    <div id="modal" class="hidden h-full fixed inset-0 top-0 left-0 mx-auto flex flex-col justify-center items-center ">
        <div class=" flex flex-col items-center rounded-lg p-10 imgcont border-2" style="height: 500px; width:600px;">
            <!-- The close button -->
            <div class=" relative">
                <a class="bg-blue-100 absolute m-6 right-0 sticky ml-28 w-auto px-4 text-red-100 rounded-full text-9xl font-bold"
                    style="font-size: 30px;" href="javascript:void(0)" onclick="closeModal()">&times;</a>
                <!-- A big image will be displayed here -->
                <img id="modal-img" width="700" height="300" class="rounded-lg p-4" />
                <img id="modal-img" width="700" height="300" class="rounded-lg p-4" />
                <img id="modal-img" width="700" height="300" class="rounded-lg p-4" />
                <img id="modal-img" width="700" height="300" class="rounded-lg p-4" />
            </div>
        </div>
    </div>
    <!--Hidden modal-->
</main>
<?php require_once('views/fragments/footer.php'); ?>