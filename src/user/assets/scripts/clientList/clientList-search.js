const checkboxes = document.querySelectorAll(".checkbox");
const checkbox = document.querySelector(".checkbox");
let tag = [[], [], [], []];

document.addEventListener("DOMContentLoaded", function () {
  checkbox.click();
});

checkboxes.forEach((checkbox) => {
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

    // 現在のURLからクエリパラメータを取得
    const queryString = window.location.search;
    // クエリパラメータの文字列を解析してオブジェクトに変換
    const paramator = new URLSearchParams(queryString);
    // クエリパラメータの値を配列に格納
    const values = [
      [paramator.get("graduate")],
      [paramator.get("support")],
      [paramator.get("your-area")],
      [],
    ];
    console.log(values[0][0] !== null);

    // クエリパラメータの値がnullでなければ、配列に格納
    if (values[0][0] !== null)  {
      tag = values;
      console.log("nullじゃなくて");
    }
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
