"use strict";
// チェックを一個しかつけられないようにする(卒業年度)
$(function(){
  $('input[name="graduate[]"]').click(function(){
    var checked = $(this).prop('checked');
    $('input[name="graduate[]"]').prop('checked', false);
    // 選択肢の背景色を白にする
    $('input[name="graduate[]"]').parent().parent().css('background-color', '#fff');
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
  $('input[name="support[]"]').click(function(){
    var checked = $(this).prop('checked');
    $('input[name="support[]"]').prop('checked', false);
    // 選択肢の背景色を白にする
    $('input[name="support[]"]').parent().parent().css('background-color', '#fff');
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
  $('input[name="your-area[]"]').click(function(){
    var checked = $(this).prop('checked');
    $('input[name="your-area[]"]').prop('checked', false);
    // 選択肢の背景色を白にする
    $('input[name="your-area[]"]').parent().parent().css('background-color', '#fff');
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
// 詳細絞りこみを開く
let searchDetailsTitle = document.querySelector('.search-details-title');
const searchDetailsContents = document.querySelector('.search-details-contents');
searchDetailsTitle.addEventListener('click', () => {
  searchDetailsTitle.classList.toggle('active');
  searchDetailsContents.classList.toggle('active');
});
// 星をvalueの値に応じて出力
let counts = document.querySelectorAll('.list-star-value')
counts.forEach(count => {
  let cnt = count.getAttribute("value");
  console.log(cnt);
  let new_element = '';
  for (let i = 0; i < 5; i++) {
      if (i < cnt) {
        new_element += '<i class="fas fa-star"></i>'; // 実装に合わせて、適切なクラス名やアイコンを指定する
      }
  }
  console.log(new_element)
  count.innerHTML = new_element;
});

