const checkboxes = document.querySelectorAll('.checkbox');
let tag = [[], [], []];
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
