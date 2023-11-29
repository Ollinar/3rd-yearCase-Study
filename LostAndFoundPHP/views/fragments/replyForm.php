<div class="editor bg-white text-gray-800 mx-auto w-full flex flex-col 
            text-white p-4 border-2 shadow-lg max-w-2xl  p-1 rounded-lg shadow-xl dark:bg-slate-800">

    <form hx-post="/addReply" hx-target="#replyFormModal">
        <input type="hidden" name="id" id="commentToReply" value="<?=$_POST['id']??''?>">
        <h2 class=" text-center font-bold text-2xl text-gray-800 p-4">Enter Reply</h2>
        <?php require_once('views/fragments/errors.php'); ?>
        <textarea data-te-input-showcounter="true" id="text"
            class="w-full description bg-gray-100 p-3 h-60 border border-green-900  rounded-md" spellcheck="false"
            maxlength="255" placeholder="Enter Your Reply" name="reply"></textarea>
        <div class="buttons flex ml-auto py-2">
            <button onclick="closeReplyForm()" type="button"
                class="text-gray-800 btn border-2 border-green-300 rounded-full p-1 px-4 font-semibold text-white ml-auto bg-white  p-1 ">Cancel</button>
            <button
                class="btn border border-white  p-1 px-4 font-semibold text-white rounded-full ml-2 bg-purple-600 p-1 hover:bg-purple-600 hover:text-white ">Save</button>
        </div>
    </form>
</div>