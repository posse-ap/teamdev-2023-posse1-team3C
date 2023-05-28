const checkboxes = document.querySelectorAll(".checkbox");
const menubarSearch = document.getElementsByClassName("menubar-search");
// 検索画面で押されたタグにこのクラスがついている。
const activeCheckboxes = document.getElementsByClassName("check-active");
// activeCheckboxesはHTMLCollectionなので配列に変換する。
// チェックを一個しかつけられないようにする(卒業年度)
$(function () {
  $('input[name="graduate"]').change(function () {
    var checked = $(this).prop("checked");
    $('input[name="graduate"]').prop("checked", false);
    // 選択肢の背景色を白にする
    $('input[name="graduate"]')
      .parent()
      .parent()
      .css("background-color", "#fff");
    $(this).prop("checked", checked);
    if (checked) {
      $(this).parent().parent().css("background-color", "#E7F5FD");
    } else {
      $(this).parent().parent().css("background-color", "#fff");
    }
  });
});

// チェックを一個しかつけられないようにする(サポート形態)
$(function () {
  $('input[name="support"]').click(function () {
    var checked = $(this).prop("checked");
    $('input[name="support"]').prop("checked", false);
    // 選択肢の背景色を白にする
    $('input[name="support"]')
      .parent()
      .parent()
      .css("background-color", "#fff");
    $(this).prop("checked", checked);
    if (checked) {
      $(this).parent().parent().css("background-color", "#E7F5FD");
    } else {
      $(this).parent().parent().css("background-color", "#fff");
    }
  });
});
// チェックを一個しかつけられないようにする(お住まいの地域)
$(function () {
  $('input[name="your-area"]').click(function () {
    var checked = $(this).prop("checked");
    $('input[name="your-area"]').prop("checked", false);
    // 選択肢の背景色を白にする
    $('input[name="your-area"]')
      .parent()
      .parent()
      .css("background-color", "#fff");
    $(this).prop("checked", checked);
    if (checked) {
      $(this).parent().parent().css("background-color", "#E7F5FD");
    } else {
      $(this).parent().parent().css("background-color", "#fff");
    }
  });
});
// チェックをつけたら選択肢の背景色を#E7F5FDにする(総合型・特化型)
$(function () {
  $('input[name="agent-type[]"]').click(function () {
    var checked = $(this).prop("checked");
    if (checked) {
      $(this).parent().parent().css("background-color", "#E7F5FD");
    } else {
      $(this).parent().parent().css("background-color", "#fff");
    }
  });
});
// 詳細絞りこみを開く
let searchDetailsTitle = document.querySelector(".search-details-title");
const searchDetailsContents = document.querySelector(
  ".search-details-contents"
);
searchDetailsTitle.addEventListener("click", () => {
  searchDetailsTitle.classList.toggle("active");
  searchDetailsContents.classList.toggle("active");
});
let tag = [[], [], [], []];
// 検索画面で押されたタグが一覧画面で選択された状態にしておく。
document.addEventListener("DOMContentLoaded", function () {
  let activeCheckboxesArray = [...activeCheckboxes];
  activeCheckboxesArray.forEach((activeCheck) => {
    activeCheck.style.backgroundColor = "red";
  });
});

checkboxes.forEach((checkbox) => {
  // 現在のURLからクエリパラメータを取得
  const queryString = window.location.search;
  // クエリパラメータの文字列を解析してオブジェクトに変換
  const parameter = new URLSearchParams(queryString);
  // クエリパラメータの値を配列に格納
  const values = [
    [parameter.get("graduate")],
    [parameter.get("support")],
    [parameter.get("your-area")],
    [],
  ];
  tag = values;
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "assets/php/clientList/clientlist-search.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let list = document.getElementById("client-list");
        let data = xhr.responseText;
        list.innerHTML = data;
        let counts = document.querySelectorAll(".list-star-value");
        //星表示
        for (let j = 0; j < counts.length; j++) {
          let cnt = counts[j].getAttribute("value");
          let new_element = "";
          for (let i = 0; i < 5; i++) {
            if (i < cnt) {
              new_element += '<i class="fas fa-star"></i>';
            }
          }
          counts[j].innerHTML = new_element;
        }
        let favorite_btns = document.querySelectorAll(".favorite-btn");
        favorite_btns.forEach((favorite_btn) => {
          let id = favorite_btn.getAttribute("data-id");
          function checkIfIdExists(id) {
            // ローカルストレージからデータを取得
            const favorites =
              JSON.parse(localStorage.getItem("favorites")) || [];

            // データ内をループしてidの存在をチェック
            for (const item of favorites) {
              if (item.id === id) {
                // 指定したidが存在する場合
                return true;
              }
            }
            // 指定したidが存在しない場合
            return false;
          }
          let favoriteText = favorite_btn.querySelector(".favorite-btn-text");

          let idExists = checkIfIdExists(id);
          if (idExists) {
            favorite_btn.classList.add("active");
            favoriteText.textContent = "お気に入り済み";
            favorite_btn.value = 1;
          }
        });
        function addToFavorites(button) {
          // 企業の情報（仮のデータ）
          let companyName = button.getAttribute("data-name");
          let companyURL = button.getAttribute("data-url");
          let companyID = button.getAttribute("data-id");
          let currentTime = new Date().toLocaleString();
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
            const favorites = [
              {
                name: companyName,
                url: companyURL,
                id: companyID,
                time: currentTime,
              },
            ];
            localStorage.setItem("favorites", JSON.stringify(favorites));
          }
          // buttonを押した時、ボタンの文言、色を変える
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

        const checkboxes_list = document.querySelectorAll(
          '#clientlist-name input[type="checkbox"]'
        );
        const submitButton = document.getElementById("submit-button");
        // チェックボックスの状態が変更された時の処理
        function handleCheckboxChange() {
          // 選択されたチェックボックスの数をカウント
          const checkedCount = Array.from(checkboxes_list).filter(
            (checkbox) => checkbox.checked
          ).length;

          // ボタンの状態を変更
          if (checkedCount > 0) {
            submitButton.disabled = false; // ボタンを活性化
          } else {
            submitButton.disabled = true; // ボタンを非活性化
          }
        }

        // チェックボックスの状態変更イベントを監視
        checkboxes_list.forEach((checkbox) => {
          checkbox.addEventListener("change", handleCheckboxChange);
        });
      }
    }
  };
  let params = `tag=${tag}`;
  xhr.send(params);
  checkbox.addEventListener("click", () => {
    if (
      checkbox.value >= 1 &&
      checkbox.value <= 3 &&
      tag[0].includes(checkbox.value)
    ) {
      tag[0].splice(0, tag[0].length);
    } else if (
      checkbox.value >= 1 &&
      checkbox.value <= 3 &&
      !tag.includes(checkbox.value)
    ) {
      tag[0].splice(0, tag[0].length);
      tag[0].push(checkbox.value);
    }

    if (
      checkbox.value >= 4 &&
      checkbox.value <= 6 &&
      tag[1].includes(checkbox.value)
    ) {
      tag[1].splice(0, tag[1].length);
    } else if (
      checkbox.value >= 4 &&
      checkbox.value <= 6 &&
      !tag.includes(checkbox.value)
    ) {
      tag[1].splice(0, tag[1].length);
      tag[1].push(checkbox.value);
    }

    if (
      checkbox.value >= 7 &&
      checkbox.value <= 14 &&
      tag[2].includes(checkbox.value)
    ) {
      tag[2].splice(0, tag[2].length);
    } else if (
      checkbox.value >= 7 &&
      checkbox.value <= 14 &&
      !tag.includes(checkbox.value)
    ) {
      tag[2].splice(0, tag[2].length);
      tag[2].push(checkbox.value);
    }

    if (checkbox.value >= 15 && tag[3].includes(checkbox.value)) {
      tag[3] = tag[3].filter((item) => item !== checkbox.value);
    } else if (checkbox.value >= 15 && !tag.includes(checkbox.value)) {
      tag[3].push(checkbox.value);
    }

    // 配列の要素ごとに比較
    function areArraysEqual(arr1, arr2) {
      if (arr1.length !== arr2.length) {
        return false;
      }

      for (var i = 0; i < arr1.length; i++) {
        if (arr1[i].length !== arr2[i].length) {
          return false;
        }

        for (var j = 0; j < arr1[i].length; j++) {
          if (arr1[i][j] !== arr2[i][j]) {
            return false;
          }
        }
      }
      return true;
    }
    // tagの中身を保存
    getTag = tag;
    // クエリパラメータの値がnullでなければ、配列に格納
    if (values[0][0] != null && !areArraysEqual(values, tag)) {
      tag = values;
      values[4] = [""];
    }
    if (!values[4] == [""]) {
      tag = getTag;
    }
    // console.log(values);
    console.log(tag);
    let list = document.getElementById("client-list");
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "assets/php/clientList/clientlist-search.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = () => {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          // 絞り込んだあとのリストを表示
          let data = xhr.responseText;
          list.innerHTML = data;
          // 星評価
          let counts = document.querySelectorAll(".list-star-value");
          for (let j = 0; j < counts.length; j++) {
            let cnt = counts[j].getAttribute("value");
            let new_element = "";
            for (let i = 0; i < 5; i++) {
              if (i < cnt) {
                new_element += '<i class="fas fa-star"></i>';
              }
            }
            counts[j].innerHTML = new_element;
          }
          // お気に入りボタンを押したら色が変わり、テキストが変更される
          let favorite_btns = document.getElementsByClassName("favorite-btn");
          let favoriteTexts =
            document.getElementsByClassName("favorite-btn-text");
          Array.from(favorite_btns).forEach((favorite_btn, index) => {
            let favoriteText = favorite_btn.querySelector(".favorite-btn-text");
            let id = favorite_btn.getAttribute("data-id");
            function checkIfIdExists(id) {
              // ローカルストレージからデータを取得
              const favorites =
                JSON.parse(localStorage.getItem("favorites")) || [];
              // データ内をループしてidの存在をチェック
              for (const item of favorites) {
                if (item.id === id) {
                  // 指定したidが存在する場合
                  return true;
                }
              }
              // 指定したidが存在しない場合
              return false;
            }
            let idExists = checkIfIdExists(id);
            if (idExists) {
              favorite_btn.classList.add("active");
              favoriteText.textContent = "お気に入り済み";
              favorite_btn.value = 1;
            }
          });
          const checkboxes_list = document.querySelectorAll(
            '#clientlist-name input[type="checkbox"]'
          );
          const submitButton = document.getElementById("submit-button");
          // チェックボックスの状態が変更された時の処理
          function handleCheckboxChange() {
            // 選択されたチェックボックスの数をカウント
            const checkedCount = Array.from(checkboxes_list).filter(
              (checkbox) => checkbox.checked
            ).length;
            // ボタンの状態を変更
            if (checkedCount > 0) {
              submitButton.disabled = false; // ボタンを活性化
            } else {
              submitButton.disabled = true; // ボタンを非活性化
            }
            console.log("aaa");
          }
          // チェックボックスの状態変更イベントを監視
          checkboxes_list.forEach((checkbox) => {
            checkbox.addEventListener("change", handleCheckboxChange);
          });
        }
      }
    };
    let params = `tag=${tag}`;
    xhr.send(params);
  });
});
