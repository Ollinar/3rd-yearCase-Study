<?php require_once('views/fragments/nav.php'); ?>
<main class="h-full overflow-y-auto">
    <div class="container grid mb-6 py-4 ">
        <?php require_once('views/fragments/feedCard.php'); ?>
    </div>


    
    <div id="commentFormModal" class="hidden z-50 fixed inset-0 shadow-2xl  flex items-center justify-center">

    <?php require_once('views/fragments/commentForm.php'); ?>

    </div>
    <div id="replyFormModal" class="hidden z-50 fixed inset-0 shadow-2xl  flex items-center justify-center">

    <?php require_once('views/fragments/replyForm.php'); ?>

    </div>
</main>

        <?php require_once('views/fragments/footer.php'); ?>