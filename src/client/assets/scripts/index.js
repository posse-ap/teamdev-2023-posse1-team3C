document
  .getElementById("download-btn")
  .addEventListener("click", function (event) {
    event.preventDefault(); // イベントをキャンセルする
    // Ajaxを始める
  });
document
  .getElementById("month-btn")
  .addEventListener("click", function (event) {
    event.preventDefault(); // イベントをキャンセルする
    // Ajaxを始める
  });

document.getElementById("download-btn").addEventListener("click", function () {
  let input = document.getElementById("input");
  let id = input.value;

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "assets/php/download.php", true);
  xhr.responseType = "blob";
  xhr.onload = function () {
    if (this.status === 200) {
      var blob = new Blob([this.response], { type: "text/csv" });
      var link = document.createElement("a");
      link.href = window.URL.createObjectURL(blob);
      link.download = "data.csv";
      document.body.appendChild(link);
      link.click();
      document.body.removeChild(link);
    }
  };
  let formData = new FormData();
  formData.append("company_id", id);
  xhr.send(formData);
});

document.getElementById("month-btn").addEventListener("click", function () {
  let select = document.getElementById("month");
  let tbody = document.getElementById("tbody");
  let month = select.value;

  // Let's start Ajax
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "assets/php/monthchanges.php", true);
  // xhr.openでどんな方法で？どのサーバーに？を決める
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        tbody.innerHTML = data;
      }
    }
  };
  console.log(month);
  let formData = new FormData();
  formData.append("month", month);
  console.log(formData.get("month"));
  xhr.send(formData);
});

// ログアウトボタンがクリックされた時の処理
document.getElementById("logoutButton").addEventListener("click", function () {
  // ログアウト後のリダイレクト先URL
  var redirectUrl = "assets/php/auth/signout.php";
  // リダイレクトする
  window.location.href = redirectUrl;
});
