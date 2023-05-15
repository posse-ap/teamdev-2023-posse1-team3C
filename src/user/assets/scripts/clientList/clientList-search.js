// const { check } = require("prettier");

const checkboxes = document.querySelectorAll('.checkbox');
let tag = [[], [], [], []];
let s_graduated = [];
let s_support = [];
let s_area = [];


checkboxes.forEach((checkbox) => {
  checkbox.addEventListener('click', () => {
     // チェックボックスのクリックごとに `tag` をリセットする
    // if(!tag.includes(checkbox.value)){
    // tag.push(checkbox.value);
    // } else {
    //   tag = tag.filter(item => item !== checkbox.value);
    // }
    if (checkbox.value >= 1 && checkbox.value <= 3 && tag[0].includes(checkbox.value)) {
      tag[0].splice(0, tag[0].length)
    } else if (checkbox.value >= 1 && checkbox.value <= 3 && !tag.includes(checkbox.value)) {
      tag[0].splice(0, tag[0].length)
      tag[0].push(checkbox.value);
    }

    if (checkbox.value >= 4 && checkbox.value <= 6 && tag[1].includes(checkbox.value)) {
      tag[1].splice(0, tag[1].length)
    } else if (checkbox.value >= 4 && checkbox.value <= 6 && !tag.includes(checkbox.value)) {
      tag[1].splice(0, tag[1].length)
      tag[1].push(checkbox.value);
    }

    if (checkbox.value >= 7 && checkbox.value <= 14 && tag[2].includes(checkbox.value)) {
      tag[2].splice(0, tag[2].length)
    } else if (checkbox.value >= 7 && checkbox.value <= 14 && !tag.includes(checkbox.value)) {
      tag[2].splice(0, tag[2].length)
      tag[2].push(checkbox.value);
    }

    if(checkbox.value >= 15 && tag[3].includes(checkbox.value)) {
      tag[3] = tag[3].filter(item => item !== checkbox.value);
    } else if (checkbox.value >= 15 && !tag.includes(checkbox.value)) {
      tag[3].push(checkbox.value)
    }
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

    console.log(tag)
    let list = document.getElementById('client-list');
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "assets/php/clientList/clientlist-search.php", true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = () => {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          let data = xhr.responseText;
          list.innerHTML = data;
        }
      }
    };
    let params = `tag=${tag}`;
    xhr.send(params);

  });
  });
