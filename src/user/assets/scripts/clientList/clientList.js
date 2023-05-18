"use strict";
// クエリパラメータを取得
const queryString = window.location.search;

// クエリパラメータを解析してオブジェクトに変換
const params = new URLSearchParams(queryString);
// graduateの値を取得
const graduateValues = params.getAll('graduate');
console.log(graduateValues);
// supportの値を取得
const supportValues = params.getAll('support');
console.log(supportValues);
// your-areaの値を取得
const yourAreaValues = params.getAll('your-area');
console.log(yourAreaValues);
// チェックボックスにチェックを付ける
graduateValues.forEach(value => {
  const checkbox = document.querySelectorAll(`input[name="graduate"][value="${value}"]`);
  console.log(checkbox)
  if (checkbox !== null && checkbox !== undefined) {
    checkbox.checked = true;
    checkbox[0].classList.toggle("check-active")
  }
});

supportValues.forEach(value => {
  const checkbox = document.querySelectorAll(`input[name="support"][value="${value}"]`);
  console.log(checkbox)
  if (checkbox !== null && checkbox !== undefined) {
    checkbox.checked = true;
    checkbox[0].classList.toggle("check-active")
  }
});

yourAreaValues.forEach(value => {
  const checkbox = document.querySelectorAll(`input[name="your-area"][value="${value}"]`);
  if (checkbox !== null && checkbox !== undefined) {
    checkbox.checked = true;
    checkbox[0].classList.toggle("check-active")
  }
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
// 詳細絞りこみを開く
let searchDetailsTitle = document.querySelector('.search-details-title');
const searchDetailsContents = document.querySelector('.search-details-contents');
searchDetailsTitle.addEventListener('click', () => {
  searchDetailsTitle.classList.toggle('active');
  searchDetailsContents.classList.toggle('active');
});

// 星をvalueの値に応じて出力
// let counts = document.getElementsByClassName('list-star-value');
// let new_element = '';

// for (let j = 0; j < counts.length; j++) {
//     let cnt = counts[j].getAttribute("value");
//     let new_element = '';
//     for (let i = 0; i < 5; i++) {
//         if (i < cnt) {
//             new_element += '<i class="fas fa-star"></i>';
//         }
//     }
//     counts[j].innerHTML = new_element;
// }
//   counts.innerHTML = new_element;

let counts = document.querySelectorAll('.list-star-value');
let new_element = '';

for (let j = 0; j < counts.length; j++) {
    let cnt = counts[j].getAttribute("value");
    let new_element = '';
    for (let i = 0; i < 5; i++) {
        if (i < cnt) {
            new_element += '<i class="fas fa-star"></i>';
        }
    }
    counts[j].innerHTML = new_element;
}






