"use strict";
// クエリパラメータを取得
const queryString = window.location.search;


// クエリパラメータを解析してオブジェクトに変換
const params = new URLSearchParams(queryString);
// クエリーパラメータの値が存在する場合に限り、値を取得
if(queryString !== "") {
// graduateの値を取得
const graduateValues = params.getAll('graduate');
const changeGraduateCheckbox = document.querySelector(`input[name="graduate"][value="${graduateValues}"]`);
if(changeGraduateCheckbox !== null) {
const changeGraduateCheckboxArea = changeGraduateCheckbox.parentNode.parentNode;
changeGraduateCheckboxArea.style.backgroundColor = "#E7F5FD";
const changeGraduateSpan = document.querySelector(`.checkbox-fontas-${graduateValues}`)
changeGraduateCheckbox.checked = true;
}
// supportの値を取得
const supportValues = params.getAll('support');
const changeSupportCheckbox = document.querySelector(`input[name="support"][value="${supportValues}"]`);
if(changeSupportCheckbox !== null) {
const changeSupportCheckboxArea = changeSupportCheckbox.parentNode.parentNode;
changeSupportCheckboxArea.style.backgroundColor = "#E7F5FD";
changeSupportCheckbox.checked = true;
}
// your-areaの値を取得
const yourAreaValues = params.getAll('your-area');
const changeYourAreaCheckbox = document.querySelector(`input[name="your-area"][value="${yourAreaValues}"]`);
if(changeYourAreaCheckbox !== null) {
const changeYourAreaCheckboxArea = changeYourAreaCheckbox.parentNode.parentNode;
changeYourAreaCheckboxArea.style.backgroundColor = "#E7F5FD";
changeYourAreaCheckbox.checked = true;
}
// チェックボックスにチェックを付ける
graduateValues.forEach(value => {
  const checkbox = document.querySelectorAll(`input[name="graduate"][value="${value}"]`);
  if (checkbox !== null && checkbox !== undefined) {
    checkbox.checked = true;
    checkbox[0].classList.toggle("check-active")
  }
});

supportValues.forEach(value => {
  const checkbox = document.querySelectorAll(`input[name="support"][value="${value}"]`);
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
}

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


function addToFavorites(button) {
  // 企業の情報（仮のデータ）
  let companyName = button.getAttribute("data-name");
  let companyURL = button.getAttribute("data-url");
  let companyID = button.getAttribute("data-id");
  let currentTime = new Date().toLocaleString();
  let checkText = button.childNodes
  // localStorageお気に入り情報があるかどうかチェック
  if (localStorage.favorites !== undefined) {
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

  // 絞り込みがされてない時にbuttonを押したらボタンの文言、色を変える
  if (button.classList.contains("active")) {
    button.classList.remove("active");
    checkText[1].innerText = "お気に入りに追加";
    button.value = 0;
  } else {
    button.classList.add("active");
    checkText[1].innerText = "お気に入り済み";
    button.value = 1;
  }
}