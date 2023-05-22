"use strict"
const fileLimit = 1024 * 1024 * 3;
const fileUploads = document.querySelectorAll('.upload-limit');
fileUploads.forEach(fileUpload => {
  fileUpload.addEventListener('change', () => {
    const files = fileUpload.files;
    for (const file of files) {
      if (file.size > fileLimit) {
        alert('ファイルサイズが3MBを超えています');
        fileUpload.value = "";
        return;
      }
    }
  })
});