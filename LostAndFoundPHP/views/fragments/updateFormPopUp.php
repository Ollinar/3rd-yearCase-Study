<div id="updateOOB" hx-swap-oob="innerHTML"
    class="editor bg-white text-gray-800 mx-auto w-full flex flex-col text-white p-4 border-2 shadow-lg max-w-2xl  p-1 rounded-lg shadow-xl dark:bg-slate-800">
    
    
    <?php if (isset($_GET['type']) && ($_GET['type']==='unclaimed' || $_GET['type']==='found')):?>

    <form hx-post="/updateStatus" hx-vals='{"from":"<?=$_GET['type']?>"}'>
        <input type="hidden" name="id" id="postToClaim">
        <h2 class=" text-center font-bold text-2xl text-gray-800 p-4">Enter Username</h2>
        <input class="w-full text-gray-800  title bg-gray-100 border border-green-900 p-2 outline-none rounded-md"
            required placeholder="username required to mark as claimed" type="text" name="claimant">
        <div class="buttons flex ml-auto py-2">
            <button id="closeVer" onclick="closeUpdatePopUp()"
                class="text-gray-800 btn border-2 border-green-300 rounded-full p-1 px-4 font-semibold text-white ml-auto bg-white  p-1 ">Cancel</button>
            <button id="btnVer"
                class="btn border border-white  p-1 px-4 font-semibold text-white rounded-full ml-2 bg-purple-600 p-1 hover:bg-purple-600 hover:text-white ">Save</button>
        </div>
    </form>

        
    
    <?php endif?>
</div>

