const checkboxes = document.querySelectorAll(".checkbox");
const checkbox = document.querySelector(".checkbox");
let tag = [[], [], [], []];

document.addEventListener("DOMContentLoaded", function () {
  checkbox.click();
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

    console.log(tag);
    console.log(values);
    console.log(areArraysEqual(values, tag));

    // クエリパラメータの値がnullでなければ、配列に格納
    if (areArraysEqual(values, tag) && values[0][0] != null) {
      tag = values;
      console.log("nullじゃなくて");
    } else {
      tag = tag;
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
          let data = xhr.responseText;
          list.innerHTML = data;
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
        }
      }
    };
    let params = `tag=${tag}`;
    xhr.send(params);
    console.log(params);
  });
});
