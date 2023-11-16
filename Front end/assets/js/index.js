document.getElementById('openForm').addEventListener('click', function() {
    document.getElementById('popUpload').classList.remove('hidden');
  });

  document.getElementById('closeFormButton').addEventListener('click', function() {
    document.getElementById('popUpload').classList.add('hidden');
  });

  document.getElementById('text').addEventListener('input', function() {
    var text = this.value;
    var words = text.split(/\s+/).filter(function(word) {
        return word.length > 0;
    });
 
    document.getElementById('counter').textContent = words.length ;
});

document.getElementById('fileInput').addEventListener('change', function() {
  var fileList = document.getElementById('fileList');
  fileList.innerHTML = ''; // Clear the list
  for (var i = 0; i < this.files.length; i++) {
      var fileItem = document.createElement('div');
      fileItem.textContent = this.files[i].name;
      fileItem.className = 'fileItem';
      fileList.appendChild(fileItem);
  }
});