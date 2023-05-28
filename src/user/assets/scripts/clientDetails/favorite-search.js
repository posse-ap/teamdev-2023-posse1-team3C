// ローカルストレージの中にidが存在しているのかチェックしてお気に入りボタンを変更する。

const urlParams = new URLSearchParams(window.location.search);
const id = urlParams.get("id");
function checkIfIdExists(id) {
  // ローカルストレージからデータを取得
  const favorites = JSON.parse(localStorage.getItem("favorites")) || [];

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
const idExists = checkIfIdExists(id);
if (idExists) {
  favorite.classList.add("active");
  favoriteText.textContent = "お気に入り済み";
  favorite.value = 1;
}
