const checkboxes = document.querySelectorAll('.checkbox');
let tag = [];


checkboxes.forEach((checkbox) => {
  checkbox.addEventListener('click', () => {
    tag = []; // チェックボックスのクリックごとに `tag` をリセットする
    checkboxes.forEach((checkbox) => {
      if (checkbox.checked) {
        tag.push(checkbox.value);
      }
    });

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
