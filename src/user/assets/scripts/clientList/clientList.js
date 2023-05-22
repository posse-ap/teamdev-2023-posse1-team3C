"use strict";
// クエリパラメータを取得
const queryString = window.location.search;


// クエリパラメータを解析してオブジェクトに変換
const params = new URLSearchParams(queryString);
console.log(params)
// クエリーパラメータの値が存在する場合に限り、値を取得
if(queryString !== "") {
  console.log(queryString)
// graduateの値を取得
const graduateValues = params.getAll('graduate');
const changeGraduateCheckbox = document.querySelector(`input[name="graduate"][value="${graduateValues}"]`).parentNode.parentNode;
changeGraduateCheckbox.style.backgroundColor = "#E7F5FD";
const changeGraduateSpan = document.querySelector(`.checkbox-fontas-${graduateValues}`)
changeGraduateCheckbox.checked = true;
changeGraduateSpan.style.color = "#1E90FF";
// supportの値を取得
const supportValues = params.getAll('support');
console.log(supportValues)
const changeSupportCheckbox = document.querySelector(`input[name="support"][value="${supportValues}"]`).parentNode.parentNode;
changeSupportCheckbox.style.backgroundColor = "#E7F5FD";
// your-areaの値を取得
const yourAreaValues = params.getAll('your-area');
const changeYourAreaCheckbox = document.querySelector(`input[name="your-area"][value="${yourAreaValues}"]`).parentNode.parentNode;
changeYourAreaCheckbox.style.backgroundColor = "#E7F5FD";
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
  console.log(checkbox)
  if (checkbox !== null && checkbox !== undefined) {
    checkbox.checked = true;
    checkbox[0].classList.toggle("check-active")
  }
});
}


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






