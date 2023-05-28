document.getElementById('month-btn').addEventListener('click', function (event) {
  event.preventDefault(); // イベントをキャンセルする
  // Ajaxを始める
});
// 変更ボタンを押す
document.getElementById('month-btn').addEventListener('click', function () {
  let select = document.getElementById('month');
  let input = document.getElementById('input');
  let tbody = document.getElementById('tbody');
  let month = select.value;
  let id = input.value;

  // Let's start Ajax
  let xhr = new XMLHttpRequest();
  xhr.open("POST","assets/php/clientList/changeMonth.php", true);
  // xhr.openでどんな方法で？どのサーバーに？を決める
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
      if(xhr.status === 200){
        let data = xhr.response;
        tbody.innerHTML = data;
      }
    }
  }
  console.log(month);
  let formData = new FormData();
  formData.append('month', month);
  formData.append('company_id', id);
  console.log(formData.get('month'));
  xhr.send(formData);
})
