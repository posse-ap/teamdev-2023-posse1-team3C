"use strict"
const fileLimit = 1024 * 1024 * 2;
const fileUploads = document.querySelectorAll('.upload-limit');
fileUploads.forEach(fileUpload => {
  fileUpload.addEventListener('change', () => {
    const files = fileUpload.files;
    for (const file of files) {
      if (file.size > fileLimit) {
        alert('ファイルサイズが2MBを超えています');
        fileUpload.value = "";
        return;
      }
    }
  })
});