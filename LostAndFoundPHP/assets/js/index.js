
// ----- Open Upload Form
document.getElementById('openForm').addEventListener('click', function () {
  document.getElementById('popUpload').classList.remove('hidden');
});

document.getElementById('closeFormButton').addEventListener('click', function (e) {
  document.getElementById('popUpload').classList.add('hidden');
  e.preventDefault();
});
// ----- end  Open Upload Form


// ------- Open edit status  modal
document.addEventListener('click', function (event) {
  const target = event.target;
  if (target.classList.contains('open-button')) {
    const modal = target.closest('tr').querySelector('.modal');
    modal.classList.remove('hidden');
  } else if (target.classList.contains('close-button')) {
    const modal = target.closest('.modal');
    modal.classList.add('hidden');
  }
});
// ------- end Open edit status  modal

// ------- Open Image Preview
var modal = document.getElementById('modal');
var modalImg = document.getElementById('modal-img');

// this function is called when a small image is clicked
function showModal(src) {
  modal.classList.remove('hidden');
  modalImg.src = src;
}

// this function is called when the close button is clicked
function closeModal() {
  modal.classList.add('hidden');
}

//---- Counter of fields in Upload
const inputFields = document.querySelectorAll('input[data-te-input-showcounter="true"]');
const textarea = document.querySelectorAll('textarea[data-te-input-showcounter="true"]');


inputFields.forEach(inputField => {
  const charCount = inputField.nextElementSibling.querySelector('div');

  inputField.addEventListener('input', () => {
    charCount.textContent = `${inputField.value.length} / ${inputField.maxLength}`;
  });
});

textarea.forEach(textarea => {
  const charCount = textarea.nextElementSibling.querySelector('div');

  textarea.addEventListener('input', () => {
    charCount.textContent = `${textarea.value.length} / ${textarea.maxLength}`;
  });
});



// check the limit of file upload




document.querySelector('form').addEventListener('htmx:beforeRequest', (e) => {


  const input = document.querySelector('input[type="file"]');
  const files = input.files;

  const hiddenTxt = document.getElementById('hiddenTxt');

  const limit = 10000;
  // const size = file.size/1024;
  let size = 0;
  for (item of input.files) {
    size += item.size / 1024;
  }

  if (files.length > 5) {
    hiddenTxt.textContent = "Too many file selected";
    e.preventDefault();
  } else if (size > limit) {
    hiddenTxt.textContent = `File too big :${(size / 1024).toFixed(2)} MB`;
    e.preventDefault();
  } else {
    hiddenTxt.textContent = "✅";
  }

});
//check  size
function validateSize() {
  // const file =  input.files[0];

  if (file.length > 5) {
    const err = new Error("Too mnay file selected");
    hiddenTxt.textContent = err.message;
    return err;
  }

  const limit = 10000;
  // const size = file.size/1024;
  let size = 0;
  for (item of input.files) {
    size += item.size / 1024;
  }
  if (size > limit) {
    const err = new Error(`File too big :${(size / 1024).toFixed(2)} MB`);
    hiddenTxt.textContent = err.message;
    return err;
  } else {
    hiddenTxt.textContent = "✅";
    return false;
  }
}

// --------------re add text counter
function reAddTextConuter() {
  const inputFields = document.querySelectorAll('input[data-te-input-showcounter="true"]');
  const textarea = document.querySelectorAll('textarea[data-te-input-showcounter="true"]');

  document.getElementById('closeFormButton').addEventListener('click', function (e) {
    document.getElementById('popUpload').classList.add('hidden');
    e.preventDefault();
  });

  inputFields.forEach(inputField => {
    const charCount = inputField.nextElementSibling.querySelector('div');

    inputField.addEventListener('input', () => {
      charCount.textContent = `${inputField.value.length} / ${inputField.maxLength}`;
    });
  });

  textarea.forEach(textarea => {
    const charCount = textarea.nextElementSibling.querySelector('div');

    textarea.addEventListener('input', () => {
      charCount.textContent = `${textarea.value.length} / ${textarea.maxLength}`;
    });
  });

}


function showUpdatePopUp(postIDToChange) {
  console.log('test')
  document.getElementById('updateForm').classList.remove('hidden');
  document.getElementById('postToClaim').value=postIDToChange;
}
function closeUpdatePopUp() {
  document.getElementById('updateForm').classList.add('hidden');
}

function reAddUpdateBtnListener() {
  // ----- Open modal mark claimed
  document.getElementById('markC').addEventListener('click', function () {
    document.getElementById('updateForm').classList.remove('hidden');
  });
}

//comment functions
function showCommentForm(itmID) {
  document.getElementById('commentFormModal').classList.remove('hidden');
  document.getElementById('itemToComment').value=itmID;
}
function closeCommentForm() {
  document.getElementById('commentFormModal').classList.add('hidden');
  document.getElementById('itemToComment').value=0;
}




//add COnfirm Dialog to delete

reqPath = ['/deletePost']
document.addEventListener('htmx:confirm',e=>{
  if (reqPath.includes(e.detail.path)) {
    e.preventDefault();
    Swal.fire({
      title:"Are You Sure?",
      text:`This will ${e.detail.question}`,
      showCancelButton: true,
      confirmButtonText: "Proceed",
    }).then(res =>{
      if (res.isConfirmed) {
        e.detail.issueRequest(true);
      }
    })
  }
});


htmx.on("htmx:beforeSwap",e=>{
  const req = e.detail.xhr;
  if (e.detail.xhr.status >=400 && e.detail.xhr.status < 500 ) {
    Swal.fire({
      title:"Error",
      text:req.statusText,
      icon:"error"
    });
    e.detail.shouldSwap = true;
  }
});

const elemIdWithAlert = new Map([
  ["popUpload",["Upload Success!","popUpload"]],
  ["commentFormModal", ["Comment Posted!","commentFormModal"]]
]);
htmx.on("htmx:afterRequest",e=>{
  if(elemIdWithAlert.has(e.detail.elt.id) && e.detail.successful){

    const inf = elemIdWithAlert.get(e.detail.elt.id);
    Swal.fire({
      title:inf[0],
      icon:"success"
    }).then(res=>{
      htmx.ajax('GET',window.location.href,'#cardCont');
      document.getElementById(inf[1]).classList.add('hidden');
    });
  }
  
});

