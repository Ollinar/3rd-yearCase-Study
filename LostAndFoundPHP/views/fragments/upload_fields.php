<!--Hidden Upload Form-->

    <form id="uploadForm" class="w-full" action="/uploadPost" enctype="multipart/form-data" method="post"
        hx-post="/uploadPost" hx-encoding="multipart/form-data" id="uploadFields" 
        hx-on::after-request="reAddTextConuter()">
        <div
            class="editor bg-white text-gray-800 mx-auto w-full flex flex-col text-white p-4 border-2 shadow-lg max-w-2xl  p-1 rounded-lg shadow-xl dark:bg-slate-800">
            <h2 class=" text-center font-bold text-2xl text-gray-800 p-4">Upload Item</h2>


            <?php include('views/fragments/errors.php'); ?>
            <input data-te-input-showcounter="true"
                class=" text-gray-800  title bg-gray-100 w-full border border-green-900 p-2 outline-none rounded-md"
                maxlength="50" spellcheck="false" placeholder="Lost item name" type="text" name="postTitle"
                id="postTitle">
            <!-- icons -->
            <div class=" flex text-gray-500 m-2 p-3">
                <div id="char-count" class="count ml-auto text-black text-xs font-semibold">0</div>
            </div>
            <textarea data-te-input-showcounter="true" id="text"
                class="w-full description bg-gray-100 p-3 h-60 border border-green-900  rounded-md" spellcheck="false"
                maxlength="255" placeholder="Describe lost item" name="postDesc"></textarea>

            <!-- icons -->
            <div class=" flex text-gray-500 m-2 p-3">
                <div id="char-count" class="count ml-auto text-black text-xs font-semibold">0</div>
            </div>
            <!-- buttons -->

            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file
                limit (10 MB per file)<span id="hiddenTxt" style="color: red;" class="ml-4"></span></label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                id="file_input" type="file" name="postFiles[]" multiple accept=".png,.jpg,.jpeg,.bmp">


            <div class="buttons flex ml-auto py-2">
                <button id="closeFormButton" type="button"
                    class="text-gray-800 btn border-2 border-green-300 rounded-full p-1 px-4 font-semibold text-white ml-auto bg-white  p-1 ">Cancel</button>
                <button id="btnPost" type="submit"
                    class="btn border border-white  p-1 px-4 font-semibold text-white rounded-full ml-2 bg-purple-600 p-1 hover:bg-purple-600 hover:text-white ">Post</button>
            </div>
        </div>
    </form>