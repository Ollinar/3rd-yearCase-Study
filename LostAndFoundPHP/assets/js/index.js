
// ----- Open Upload Form
document.getElementById('openForm').addEventListener('click', function() {
  document.getElementById('popUpload').classList.remove('hidden');
});

document.getElementById('closeFormButton').addEventListener('click', function() {
  document.getElementById('popUpload').classList.add('hidden');
});

// document.getElementById('open').addEventListener('click', function() {
//     document.getElementById('modal').classList.remove('hidden');
//   });

//   document.getElementById('close').addEventListener('click', function() {
//     document.getElementById('modal').classList.add('hidden');
//   });


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


// --------------re add text counter
function reAddTextConuter() {
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

}

// check the limit of file upload

document.getElementById("btnPost").addEventListener('click',function(e){
  if(document.getElementById('file_input').files.length > 5){
    alert("5 files only .|.")
    e.preventDefault();
  }
});

//Delete alert poup

// const delBtn = document.querySelectorAll('.delBtn');

// delBtn.forEach((button) =>{
//   button.addEventListener('click',()=>{
//     print('Button clicked');
//   });
// });

function displayDel(){
  swal("Are you sure?", {
    dangerMode: true,
    buttons: true,
  });
};

//check the file size limit

const uploadField = document.getElementById("file");
const textMsg = document.getElementById('hiddenTxt');
const maxSize = 20; // 2MB
uploadField.onchange = function() {
    if (this.files[0].size > maxSize) {
       textMsg.classList.remove('hidden');
    }
}

