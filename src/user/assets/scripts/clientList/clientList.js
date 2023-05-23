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
const changeGraduateCheckbox = document.querySelector(`input[name="graduate"][value="${graduateValues}"]`);
const changeGraduateCheckboxArea = changeGraduateCheckbox.parentNode.parentNode;
changeGraduateCheckboxArea.style.backgroundColor = "#E7F5FD";
const changeGraduateSpan = document.querySelector(`.checkbox-fontas-${graduateValues}`)
changeGraduateCheckbox.checked = true;
console.log(changeGraduateCheckbox);
// supportの値を取得
const supportValues = params.getAll('support');
console.log(supportValues)
const changeSupportCheckbox = document.querySelector(`input[name="support"][value="${supportValues}"]`);
const changeSupportCheckboxArea = document.querySelector(`input[name="support"][value="${supportValues}"]`).parentNode.parentNode;
changeSupportCheckboxArea.style.backgroundColor = "#E7F5FD";
changeSupportCheckbox.checked = true;
// your-areaの値を取得
const yourAreaValues = params.getAll('your-area');
const changeYourAreaCheckbox = document.querySelector(`input[name="your-area"][value="${yourAreaValues}"]`);
const changeYourAreaCheckboxArea = document.querySelector(`input[name="your-area"][value="${yourAreaValues}"]`).parentNode.parentNode;
changeYourAreaCheckboxArea.style.backgroundColor = "#E7F5FD";
changeYourAreaCheckbox.checked = true;
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

// service_box.innerHTML = str;



function addToFavorites(button) {
  // 企業の情報（仮のデータ）
  let companyName = button.getAttribute("data-name");
  let companyURL = button.getAttribute("data-url");
  let companyID = button.getAttribute("data-id");
  let currentTime = new Date().toLocaleString();
  // localStorageお気に入り情報があるかどうかチェック
  if (localStorage.favorites !== undefined) {
    // let favorite_btn = document.querySelector('.favorite-btn');
    // console.log(favorite_btn);
    // let companyID = favorite_btn.getAttribute('data-id');
    console.log(button);

    console.log(companyID);

    // ローカルストレージからお気に入り情報を取得
    const favorites = JSON.parse(localStorage.favorites);

    if (button.value == 0) {
      // 既に同じIDの企業がローカルストレージ内に存在するかチェック
      const existingIndex = favorites.findIndex(
        (item) => item.id === companyID
      );

      if (existingIndex !== -1) {
        // 同じIDの企業が既に登録されている場合は削除
        favorites.splice(existingIndex, 1);
      }
      // お気に入り情報を追加
      favorites.push({
        name: companyName,
        url: companyURL,
        id: companyID,
        time: currentTime,
      });

      // ローカルストレージに保存
      localStorage.setItem("favorites", JSON.stringify(favorites));
    } else {
      const existingIndex = favorites.findIndex(
        (item) => item.id === companyID
      );
      favorites.splice(existingIndex, 1);
      localStorage.setItem("favorites", JSON.stringify(favorites));
    }
  } else {
    // lcocalStorageにお気に入り情報がない場合
    const favorites = [{
      name: companyName,
      url: companyURL,
      id: companyID,
      time: currentTime,
    }];
    localStorage.setItem("favorites", JSON.stringify((favorites)));
  }
}