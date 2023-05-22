"use strict"
// fileのサイズを制限
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

// 詳細絞りこみを開く
let searchDetailsTitle = document.querySelector('.search-details-title');
const searchDetailsContents = document.querySelector('.search-details-contents');
searchDetailsTitle.addEventListener('click', () => {
  searchDetailsTitle.classList.toggle('active');
  searchDetailsContents.classList.toggle('active');
});
// チェックを一個しかつけられないようにする(卒業年度)
$(function(){
  $('input[name="graduate"]').change(function(){
    var checked = $(this).prop('checked');
    $('input[name="graduate"]').prop('checked', false);
    // 選択肢の背景色を白にする
    $('input[name="graduate"]').parent().parent().css('background-color', '#fff');
    $(this).prop('checked', checked);
    if (checked) {
      $(this).parent().parent().css('background-color', '#E7F5FD');
    } else {
      $(this).parent().parent().css('background-color', '#fff');
    }
  });
});
// チェックを一個しかつけられないようにする(サポート形態)
$(function(){
  $('input[name="support"]').click(function(){
    var checked = $(this).prop('checked');
    $('input[name="support"]').prop('checked', false);
    // 選択肢の背景色を白にする
    $('input[name="support"]').parent().parent().css('background-color', '#fff');
    $(this).prop('checked', checked);
    if (checked) {
      $(this).parent().parent().css('background-color', '#E7F5FD');
    } else {
      $(this).parent().parent().css('background-color', '#fff');
    }
  });
});
// チェックを一個しかつけられないようにする(お住まいの地域)
$(function(){
  $('input[name="your-area"]').click(function(){
    var checked = $(this).prop('checked');
    $('input[name="your-area"]').prop('checked', false);
    // 選択肢の背景色を白にする
    $('input[name="your-area"]').parent().parent().css('background-color', '#fff');
    $(this).prop('checked', checked);
    if (checked) {
      $(this).parent().parent().css('background-color', '#E7F5FD');
    } else {
      $(this).parent().parent().css('background-color', '#fff');
    }
  });
});
// チェックをつけたら選択肢の背景色を#E7F5FDにする(総合型・特化型)
$(function(){
  $('input[name="agent-type[]"]').click(function(){
    var checked = $(this).prop('checked');
    if (checked) {
      $(this).parent().parent().css('background-color', '#E7F5FD');
    } else {
      $(this).parent().parent().css('background-color', '#fff');
    }
  });
});